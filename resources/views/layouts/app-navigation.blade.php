<header class="nav nav--side nav--side-sticky-left">
    <div class="nav__holder">
        <div class="nav__container container">

            <div class="flex-parent">

                <div class="nav__header">
                    <!-- Logo -->
                    <a href="{{route('dashboard')}}" class="logo-container flex-child">
                        <img class="logo" src="{{asset('images/logo.png')}}" alt="logo">
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
                    <form id="logout" method="post" action="{{route('logout')}}" >
                        @csrf
                    <ul class="nav__menu nav___menu ">
                        <li class="">
                            <a href="{{route('dashboard')}}" aria-haspopup="true">Dashboard</a>
                        </li>
                        <li class="">
                            <a href="{{route('admin-projects')}}" aria-haspopup="true">Projects</a>
                        </li>
                        <li class="">
                            <a href="{{route('admin-blogs')}}" aria-haspopup="true">Blog Posts</a>
                        </li>
                        <li class="">

{{--                                <button type="submit" >Logout</button>--}}
                                <a href="javascript:{}" onclick="document.getElementById('logout').submit();">Logout</a>



                        </li>
                    </ul> <!-- end menu -->
                    </form>

                    <div class="profile">
                        <a href="{{route('change-password-view')}}" >
{{--                            <p>{{Auth::user()->name}}</p>--}}
                            <p>Change Password</p>
                            <span>{{Auth::user()->email}}</span>
                        </a>
                    </div>
                </nav> <!-- end nav-wrap -->

            </div> <!-- end flex-parent -->
        </div> <!-- end container -->

    </div>
</header> <!-- end navigation -->
