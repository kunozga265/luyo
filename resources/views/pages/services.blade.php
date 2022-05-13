<x-guest-layout>
    <!-- Page Title -->
    <section class="page-title bg-dark-overlay text-center" style="background-image: url({{asset($page->cover_photo)}});">
        <div class="container">
            <div class="page-title__holder">
                <h1 class="page-title__title">Services</h1>
{{--                <p class="page-title__subtitle">LUYO Construction provides services in the following areas</p>--}}
                <ul class="breadcrumbs">
                    <li class="breadcrumbs__item">
                        <a href="{{route('home')}}" class="breadcrumbs__url">Home</a>
                    </li>
                    <li class="breadcrumbs__item breadcrumbs__item--current">
                       Services
                    </li>
                </ul>
            </div>
        </div>
    </section> <!-- end page title -->

    <!-- Intro -->
    <section class="section-wrap">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="intro text-center">
                        <h2 class="mb-32">{{$page->title}}</h2>
                        <div class="lead">
                            {!! $page->body !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- end intro -->


    <!-- Services -->
    <section class="section-wrap pt-0 pb-0">
        <div class="container">
            <div class="row">
                @foreach($page->contents->services as $service)
                <div class="col-lg-4 col-md-6">
                    <div class="service-1">
                        <a href="#" class="service-1__url hover-scale">
                            <img src="{{asset($service->image)}}" class="service-1__img" alt="">
                        </a>
                        <div class="service-1__info">
                            <h3 class="service-1__title">{{$service->title}}</h3>
                            <p>{{$service->body}}</p>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section> <!-- end services -->


</x-guest-layout>
