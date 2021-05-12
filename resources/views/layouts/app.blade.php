<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Comics</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    @include('partials.header')
    <main>
      @yield('main')
    </main>
    @include('partials.footer')
  </body>
</html>
