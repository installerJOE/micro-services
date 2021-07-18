<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    {{-- <link  href="/path/to/cropper.css" rel="stylesheet"> --}}
    <link rel="stylesheet" href="{{asset('croppie/croppie.css')}}" />
    
    {{-- For Google sign-up --}}
    <meta name="google-signin-scope" content="profile email">
    <meta name="google-signin-client_id" content="YOUR_CLIENT_ID.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js" async defer></script>

    <!-- Styles -->
    {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{asset("css/style.css")}}">
    <link rel="stylesheet" href="{{asset("css/sidebar.css")}}"> --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/sidebar.css')}}">

    {{-- Additional meta data such as title and other stylesheets --}}
    @yield('meta-content')

    <style>
      .card{
        margin-bottom:2em;
      }
      .form-auth > div{
        margin-bottom: 1.5em !important;
      }
      nav{
        margin:0px !important;
      }
      /* Ensure the size of the image fit the container perfectly */
      img {
        display: block;

        /* This rule is very important, please don't ignore this */
        max-width: 100%;
      }
      #app{
        padding-top:3em;
      }
    </style>
  </head>
  <body>

    <div>
      @yield('content')
    </div>
    
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{asset('croppie/croppie.js')}}"></script>
    <script src="{{asset('js/bootstrap.js')}}"></script>
    <script src="{{asset('js/script.js')}}"></script>
    
  </body>
</html>


