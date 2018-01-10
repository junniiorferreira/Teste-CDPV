<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">          
        <link rel="stylesheet" href="{{ asset('css/swiper.min.css') }}">        
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap-formhelpers.min.css') }}">
        <title>@yield('page_title')</title>        
    </head>
    <body>
      @include('layouts.menu')
      @yield('content')
      @include('layouts.footer')
      <script src="{{ asset('js/jquery-1.11.1.js') }}"></script>
      <script src="{{ asset('js/bootstrap.min.js') }}"></script>
      <script src="{{ asset('js/bootstrap-formhelpers.min.js') }}"></script>
      <script src="{{ asset('js/main.js') }}"></script>      
    </body>
</html>