<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" value="{{ csrf_token() }}" />
    <title>CNDP</title>
    <link rel="shortcut icon" href="{{asset('assets/img/logo/logo1.png')}}" />

    
    <link rel="stylesheet" href="{{asset('assets/css/dashlite.css?ver=3.0.0')}}">
    <link id="skin-default" rel="stylesheet" href="{{asset('assets/css/theme.css?ver=3.0.0')}}">
    {{-- <link href="{{ mix('css/app.css') }}" type="text/css" rel="stylesheet" /> --}}

</head>
<body class="hold-transition light-skin sidebar-mini theme-primary fixed">
    <div id="app">
        <router-view></router-view>
    </div>
    <script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
   
    <script src="{{asset('assets/js/bundle.js?ver=3.0.0')}}"></script>
    <script src="{{asset('assets/js/scripts.js?ver=3.0.0')}}"></script>

</body>
</html>