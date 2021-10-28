<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=0, maximum-scale=1.0">
    <title>Niagahoster</title>

    @include('layouts/parts/head')
  </head>
  <body>

    @include('layouts/parts/navbar')
    @yield('content')

    @include('layouts/parts/bottom')
  </body>
</html>