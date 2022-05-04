<header class="nav">
    <div class="nav__holder nav--sticky">
        <div class="container-fluid nav__container nav__container--side-padding">
            <div class="flex-parent">

                <div class="nav__header">
                    <!-- Logo -->
                    <a href="{{route('home')}}" class="logo-container flex-child">
                        <img class="logo" src="{{asset('img/logo.png')}}" alt="logo">
                    </a>

                    <!-- Mobile toggle -->
                    <button type="button" class="nav__icon-toggle" id="nav__icon-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="nav__icon-toggle-bar"></span>
                        <span class="nav__icon-toggle-bar"></span>
                        <span class="nav__icon-toggle-bar"></span>
                    </button>
                </div>

                <!-- Navbar -->
                <nav id="navbar-collapse" class="nav__wrap collapse navbar-collapse">
                    <ul style="min-width: 615px" class="nav__menu">
                        <li class="">
                            <a href="{{route('home')}}" aria-haspopup="true">Home</a>
                        </li>
                        <li>
                            <a href="{{route('services')}}" aria-haspopup="true">Services</a>
                        </li>
                        <li class="">
                            <a href="{{route('projects')}}" aria-haspopup="true">Projects</a>
                        </li>
                        <li class="">
                            <a href="{{route('construction-plant')}}" aria-haspopup="true">Construction Plant</a>
                        </li>
                        <li class="">
                            <a href="{{route('blog')}}" aria-haspopup="true">Blog</a>
                        </li>
                        <li class="">
                            <a href="{{route('about-us')}}" aria-haspopup="true">About Us</a>
                        </li>
                        {{--<li class="nav__dropdown">
                            <a href="blog.html" aria-haspopup="true">Blog</a>
                            <i class="ui-arrow-down nav__dropdown-trigger" role="button" aria-haspopup="true" aria-expanded="false"></i>
                            <ul class="nav__dropdown-menu">
                                <li><a href="blog-masonry.html">Blog Masonry</a></li>
                                <li><a href="blog.html">Blog Standard</a></li>
                                <li><a href="single-post.html">Single Post</a></li>
                            </ul>
                        </li>
                       --}}

                      {{--  <li class="nav__dropdown">
                            <a href="#" aria-haspopup="true">Features</a>
                            <i class="ui-arrow-down nav__dropdown-trigger" role="button" aria-haspopup="true" aria-expanded="false"></i>
                            <ul class="nav__dropdown-menu">
                                <li><a href="icons.html">Icons</a></li>
                                <li><a href="elements.html">Elements</a></li>
                            </ul>
                        </li>--}}

                    </ul> <!-- end menu -->
                    {{--<div class="nav__phone nav__phone--mobile d-lg-none">
                        <span class="nav__phone-text">Call us:</span>
                        <a href="tel:1-800-995-3959" class="nav__phone-number">1-800-995-3959</a>
                    </div>--}}

                    <div class="nav__location nav__socials--mobile d-lg-none">
                        {{--<div class="socials">
                            <a href="#" class="social social-twitter" aria-label="twitter" title="twitter" target="_blank"><i class="ui-twitter"></i></a>
                            <a href="#" class="social social-facebook" aria-label="facebook" title="facebook" target="_blank"><i class="ui-facebook"></i></a>
                            <a href="#" class="social social-youtube" aria-label="youtube" title="google plus" target="_blank"><i class="ui-youtube"></i></a>
                            <a href="#" class="social social-instagram" aria-label="instagram" title="instagram" target="_blank"><i class="ui-instagram"></i></a>
                        </div>--}}
                        <img src="{{asset('img/edit/location.svg')}}" alt="">
                        <span>
                        Tikha House, Opposite Simama Hotel.
                        First floor, Second Door to the left (Lilongwe)
                    </span>
                    </div>
                </nav> <!-- end nav-wrap -->

{{--                <div class="nav__phone nav--align-right d-none d-lg-block">--}}
{{--                    <span class="nav__phone-text">Call us:</span>--}}
{{--                    <a href="tel:1-800-995-3959" class="nav__phone-number">1-800-995-3959</a>--}}
{{--                </div>--}}

                <div class="nav__location d-none d-lg-block nav--align-right">
                   {{-- <div class="socials">
                        <a href="#" class="social social-twitter" aria-label="twitter" title="twitter" target="_blank"><i class="ui-twitter"></i></a>
                        <a href="#" class="social social-facebook" aria-label="facebook" title="facebook" target="_blank"><i class="ui-facebook"></i></a>
                        <a href="#" class="social social-youtube" aria-label="youtube" title="google plus" target="_blank"><i class="ui-youtube"></i></a>
                        <a href="#" class="social social-instagram" aria-label="instagram" title="instagram" target="_blank"><i class="ui-instagram"></i></a>
                    </div>--}}
                    <img src="{{asset('img/edit/location.svg')}}" alt="">
                    <span>
                        Tikha House, Opposite Simama Hotel.
                        First floor, Second Door to the left (Lilongwe)
                    </span>
                </div>

            </div> <!-- end flex-parent -->
        </div> <!-- end container -->

    </div>
</header> <!-- end navigation -->
