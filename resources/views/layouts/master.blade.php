<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Vendor styles -->
    <link rel="stylesheet" href="{{ asset('public/assets/vendors/material-design-iconic-font/css/material-design-iconic-font.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/vendors/animate.css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/vendors/jquery-scrollbar/jquery.scrollbar.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/vendors/fullcalendar/fullcalendar.min.css')}}">

    <!-- App styles -->
    <link rel="stylesheet" href="{{asset('public/assets/css/app.min.css')}}">
     <link rel="stylesheet" href="{{asset('public/assets/css/custom.css')}}">
</head>
<body data-ma-theme="blue-grey">
    <div id="app">

        <main class="main">
              <div class="page-loader">
                <div class="page-loader__spinner">
                    <svg viewBox="25 25 50 50">
                        <circle cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
                    </svg>
                </div>
            </div>

            @include('partials._topbar')


             @include('partials._sidebar')

              @yield('content')

        </main>



    </div>

     <!-- Vendors -->
    <script src="{{asset('public/assets/vendors/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('public/assets/vendors/popper.js/popper.min.js')}}"></script>
    <script src="{{asset('public/assets/vendors/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('public/assets/vendors/jquery-scrollbar/jquery.scrollbar.min.js')}}"></script>
    <script src="{{asset('public/assets/vendors/jquery-scrollLock/jquery-scrollLock.min.js')}}"></script>

    <script src="{{asset('public/assets/vendors/moment/moment.min.js')}}"></script>

    <!-- App functions and actions -->
    <script src="{{asset('public/assets/js/app.min.js')}}"></script>
    <script src="{{asset('public/assets/js/custom.js')}}"></script>
</body>
</html>
