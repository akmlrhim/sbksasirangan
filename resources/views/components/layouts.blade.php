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
  <link rel="preload" as="image" href="{{ asset('img/hero.webp') }}" as="image">

  <link rel="icon" type="image/png" href="{{ asset('logo.png') }}" />
  <link rel="shortcut icon" href="{{ asset('logo.png') }}" />
  <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('logo.png') }}" />
  <meta name="apple-mobile-web-app-title" content="SBK Sasirangan" />
  <link rel="manifest" href="{{ asset('favicon/site.webmanifest') }}" />

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
