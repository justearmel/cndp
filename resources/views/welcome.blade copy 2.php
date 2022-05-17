<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" value="{{ csrf_token() }}" />
    <title>CNDP</title>

    <link rel="stylesheet" href="{{asset('assets/css/vendors_css.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/skin_color.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/fontawesome.css')}}">

    {{-- <link rel="stylesheet" href="{{asset('assets3/plugins/bootstrap/css/bootstrap.min.css')}}"> --}}
    <link rel="stylesheet" href="{{asset('assets/css/sweetalert2.min.css')}}"/>
    {{-- <link rel="stylesheet" href="{{asset('assets3/css/main.css')}}"> --}}
    <link rel="stylesheet" href="{{asset('assets3/css/authentication.css')}}">
    <link rel="stylesheet" href="{{asset('assets3/css/color_skins.css')}}">

    {{-- <link href="{{ mix('css/app.css') }}" type="text/css" rel="stylesheet" /> --}}

</head>
<body>
    <div id="app">
        <router-view></router-view>
    </div>
    <script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
    <script src="{{asset('assets/js/vendors.min.js')}}"></script>
    <script src="{{asset('assets2/plugins/jquery/jquery.min.js')}}" ></script>
	<script src="{{asset('assets/js/pages/chat-popup.js')}}"></script>
    <script src="{{asset('assets//icons/feather-icons/feather.min.js')}}"></script>

	<script src="{{asset('assets/vendor_components/apexcharts-bundle/dist/apexcharts.js')}}"></script>
	<script src="{{asset('assets/vendor_components/moment/min/moment.min.js')}}"></script>
	<script src="{{asset('assets/vendor_components/fullcalendar/fullcalendar.js')}}"></script>
	
	<!-- EduAdmin App -->
	<script src="{{asset('assets/js/template.js')}}"></script>
	<script src="{{asset('assets/js/pages/dashboard.js')}}"></script>
	<script src="{{asset('assets/js/pages/calendar.js')}}"></script>


    <script src="{{asset('assets3/bundles/libscripts.bundle.js')}}"></script>
    <script src="{{asset('assets3/bundles/vendorscripts.bundle.js')}}"></script>


</body>
</html>