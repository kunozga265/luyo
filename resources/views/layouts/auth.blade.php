{{--<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
   --}}{{-- <div>
        {{ $logo }}
    </div>--}}{{--

    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
        {{ $slot }}
    </div>
</div>--}}

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'LUYO Construction') }}</title>

    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Barlow:400,600%7COpen+Sans:400,400i,700' rel='stylesheet'>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Css -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/font-icons.css')}}" />
    <link rel="stylesheet" href="{{asset('revolution/css/settings.css')}}" />
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
<!-- Preloader -->
<div class="loader-mask">
    <div class="loader">
        "Loading..."
    </div>
</div>
<main class="main-wrapper">

    <!-- Navigation -->
    @include('layouts.navigation')

    <div class="content-wrapper content-wrapper--boxed oh ">

        {{ $slot }}

        <!-- Footer -->
        @include('layouts.footer')

    </div> <!-- end content wrapper -->

</main> <!-- end main wrapper -->

<!-- jQuery Scripts -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/plugins.js')}}"></script>
<script src="{{asset('revolution/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
<script src="{{asset('js/rev-slider.js')}}"></script>
<script src="{{asset('js/scripts.js')}}"></script>

</body>
</html>

