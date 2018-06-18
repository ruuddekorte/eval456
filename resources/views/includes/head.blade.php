
  	<!-- Page basic CSS and info -->
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('views.name', 'Hotel California') }}</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <!-- Font Awesome 5.0.13 -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

    <!-- CSS favicon -->
    <link rel="shortcut icon" href="/img/logo_simplon_simple_red1-150x150.png" />
    
    <!-- CSS Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- CSS Bootstrap 4.0 -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <!-- CSS Custom Styles -->
    <link rel="stylesheet" href="{{asset('css/hotel.css')}}">
