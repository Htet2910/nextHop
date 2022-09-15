<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'NextHop') }}</title>
      <link rel="icon" href="{{ asset('/img/icon.png')}}">
   
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style type="text/css">
        .btn-login{background-color: #fe6614;color: #fff;}
    </style>
</head>
<body>
    <div id="app">
        <main class="py-4">
             <center><h1 style="font-weight: bold;">Admin Panel For Next Hop Company Limited !</h1></center><br>
            @yield('content')
        </main>
    </div>
</body>
</html>
