<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>{{ $title }} - {{ config('app.name', 'Laravel') }}</title>

  {{-- Font  --}}
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Source+Sans+3:ital,wght@0,200..900;1,200..900&family=Spectral:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
    rel="stylesheet">

  {{-- preload img  --}}
  @if (request()->routeIs('home'))
    <link rel="preload" href="{{ asset('img/hero.webp') }}" as="image">
  @endif

  <link rel="icon" type="image/png" href="{{ asset('logo.png') }}" />
  <link rel="shortcut icon" href="{{ asset('logo.png') }}" />
  <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('logo.png') }}" />
  <meta name="apple-mobile-web-app-title" content="SBK Sasirangan" />
  <link rel="manifest" href="{{ asset('favicon/site.webmanifest') }}" />

  <meta name="description"
    content="SBK Sasirangan Banjar oleh Reni Andrina Rahmawati menyediakan kain tradisional Sasirangan khas Kalimantan Selatan dengan pewarna alami ramah lingkungan dan pemberdayaan komunitas.">
  <meta name="keywords"
    content="Sasirangan, SBK Sasirangan, Sasirangan Banjar, kain tradisional, pewarna alami, Kalimantan Selatan, Reni Andrina Rahmawati, fashion berkelanjutan">
  <meta name="author" content="Reni Andrina Rahmawati">
  <meta name="robots" content="index, follow">
  <link rel="canonical" href="{{ url()->current() }}">

  <meta property="og:type" content="website">
  <meta property="og:url" content="https://sasiranganbanjar.com/">
  <meta property="og:title" content="SBK Sasirangan Banjar - Warisan Budaya Kalimantan Selatan">
  <meta property="og:description"
    content="Temukan keindahan kain Sasirangan dengan pewarna alami dan dukung pemberdayaan perajin lokal di Banjarbaru.">
  <meta property="og:image" content="{{ asset('logo.png') }}">

  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:url" content="https://sasiranganbanjar.com/">
  <meta name="twitter:title" content="SBK Sasirangan Banjar">
  <meta name="twitter:description" content="Kain Sasirangan tradisional dengan pendekatan etis dan ramah lingkungan.">
  <meta name="twitter:image" content="{{ asset('logo.png') }}">

  <!-- Styles / Scripts -->
  @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
    @vite(['resources/css/app.css', 'resources/js/app.js'])
  @endif

</head>

<body class="antialiased">

  <x-navbar />

  <main>
    {{ $slot }}
  </main>

  <x-footer />
</body>

</html>
