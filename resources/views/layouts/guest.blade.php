<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net" />
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
  </head>

  <body class="font-sans antialiased bg-gray-100">
    <div class="min-h-screen lg:container mx-auto grid grid-cols-1 lg:grid-cols-2">
      
      <!-- Left column: image -->
      <div class="order-1 lg:order-none flex items-center justify-center bg-gray-200">
        <img src="/images/duck.jpg" alt="Illustration" class="w-full h-64 md:h-full object-cover" />
      </div>

      <!-- Right column: form section -->
      <main class="flex flex-col justify-center bg-white p-6 md:p-12 lg:p-16">
        <div class="w-full max-w-md mx-auto space-y-8 px-4 sm:px-6 lg:px-8">
          {{ $slot }}
        </div>
      </main>

    </div>
  </body>
</html>
