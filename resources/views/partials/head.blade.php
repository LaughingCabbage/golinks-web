<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>GoVice @yield('title')</title>

	<script src="https://use.fontawesome.com/97b1a9e470.js"></script>

	<link rel="stylesheet" href="{{asset('css/app.css')}}" crossorigin="anonymous">
	<link rel="stylesheet" href="{{asset('css/fontawesome.min.css')}}"> 
	<meta name="csrf-token" content="{{ csrf_token() }}">
	@yield('stylesheets') @stack('stylesheets')

</head>