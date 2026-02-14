<?php

if (!function_exists('auto_translate')) {
	/**
	 * Auto translate text using MyMemory Translation API
	 * FREE - No API Key needed
	 * 
	 * @param string $text Text to translate
	 * @param string $from Source language (default: 'en')
	 * @param string $to Target language (default: based on locale)
	 * @return string Translated text
	 */
	function auto_translate($text, $from = 'en', $to = null)
	{
		// Return original text if empty
		if (empty($text)) {
			return $text;
		}

		// Determine target language
		if ($to === null) {
			$to = app()->getLocale(); // Get current locale
		}

		// If target language is same as source, return original
		if ($from === $to) {
			return $text;
		}

		// Only translate if target is Indonesian
		if ($to !== 'id') {
			return $text;
		}

		try {
			// MyMemory API endpoint
			$url = "https://api.mymemory.translated.net/get";

			// Parameters
			$params = [
				'q' => $text,
				'langpair' => $from . '|' . $to
			];

			// Build URL with parameters
			$apiUrl = $url . '?' . http_build_query($params);

			// Set timeout and context
			$context = stream_context_create([
				'http' => [
					'timeout' => 5 // 5 seconds timeout
				]
			]);

			// Make API request
			$response = @file_get_contents($apiUrl, false, $context);

			// If request failed, return original text
			if ($response === false) {
				return $text;
			}

			// Decode JSON response
			$json = json_decode($response, true);

			// Check if translation exists
			if (isset($json['responseData']['translatedText'])) {
				return $json['responseData']['translatedText'];
			}

			// If translation not found, return original
			return $text;
		} catch (\Exception $e) {
			// If any error occurs, return original text
			return $text;
		}
	}
}

if (!function_exists('auto_translate_cached')) {
	/**
	 * Auto translate with caching to reduce API calls
	 * 
	 * @param string $text Text to translate
	 * @param int $minutes Cache duration in minutes (default: 1440 = 24 hours)
	 * @return string Translated text
	 */
	function auto_translate_cached($text, $minutes = 1440)
	{
		if (empty($text)) {
			return $text;
		}

		$locale = app()->getLocale();

		// Only cache for Indonesian
		if ($locale !== 'id') {
			return $text;
		}

		// Create cache key from text
		$cacheKey = 'translation_' . md5($text . '_' . $locale);

		// Try to get from cache
		if (cache()->has($cacheKey)) {
			return cache()->get($cacheKey);
		}

		// Translate
		$translated = auto_translate($text);

		// Store in cache
		cache()->put($cacheKey, $translated, now()->addMinutes($minutes));

		return $translated;
	}
}
