<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="description" content="">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'LUYO Construction') }}</title>

        <!-- Favicon -->
        <link rel="icon" type="image/x-icon" href="{{asset('/favicon.png')}}">

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
      {{--  <div class="loader-mask">
            <div class="loader">
                "Loading..."
            </div>
        </div>--}}
        <main class="main-wrapper">

            <!-- Navigation -->
            @include('layouts.navigation')

            <div class="content-wrapper content-wrapper--boxed oh">
                <div class="row">
                    @if($message=Session::get('success'))
                        <div style="width:100%" class="alert alert-success alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <strong>Success!</strong> {{$message}}
                        </div>
                    @endif
                    @if($message=Session::get('info'))
                        <div style="width:100%" class="alert alert-info alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <strong>Information!</strong> {{$message}}
                        </div>
                    @endif
                    @if($message=Session::get('error'))
                        <div style="width:100%" class="alert alert-danger alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <strong>Error!</strong> {{$message}}
                        </div>
                    @endif
                    @if($message=Session::get('notice'))
                        <div style="width:100%" class="alert alert-warning alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <strong>Notice box!</strong> {{$message}}
                        </div>
                    @endif

                </div>

                {{ $slot }}

                <x-contact-form>
                </x-contact-form>

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


        <!-- Rev Slider Offline Scripts -->
        <script src="{{asset('revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
        <script src="{{asset('revolution/js/extensions/revolution.extension.carousel.min.js')}}"></script>
        <script src="{{asset('revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
        <script src="{{asset('revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
        <script src="{{asset('revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
        <script src="{{asset('revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
        <script src="{{asset('revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
        <script src="{{asset('revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
        <script src="{{asset('revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>

    </body>
</html>
