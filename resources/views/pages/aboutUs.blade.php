<x-guest-layout>
    <!-- Page Title -->
    <section class="page-title bg-dark-overlay text-center" style="background-image: url({{asset($page->cover_photo)}});">
        <div class="container">
            <div class="page-title__holder">
                <h1 class="page-title__title">About Us</h1>
                <ul class="breadcrumbs">
                    <li class="breadcrumbs__item">
                        <a href="{{route('home')}}" class="breadcrumbs__url">Home</a>
                    </li>
                    <li class="breadcrumbs__item breadcrumbs__item--current">
                        About Us
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

    <!-- Statistic -->
    <div class="container">
        <div class="statistic-wrap">
            <div class="row">
                <div class="col-xl-4">
                    <div class="mt-16 mb-16">
                        <span class="statistic__title">Mission</span>
                        <p class="statistic__body">
                            {{$page->contents->info->mission}}
                        </p>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="mt-16 mb-16">
                        <span class="statistic__title">Vision</span>
                        <p class="statistic__body">
                            {{$page->contents->info->vision}}
                        </p>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="mt-16 mb-16">
                        <span class="statistic__title">Values</span>
                        <ul class="service-1__features statistic__body">
                            @foreach($page->contents->info->values as $value)
                                <li >
                                    <i class="ui-check service-1__feature-icon"></i>
                                    <span class="service-1__feature-text">{{$value}}</span>
                                <li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end statistic -->

    <!-- Team -->
    <section class="section-wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="blog-grid__title-col d-flex flex-column mb-lg-48">
                        <div class="title-row">
                            <p class="subtitle">team</p>
                            <h2 class="section-title">Managing Partners</h2>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8 offset-lg-1">
                    <div class="row">
                        @foreach($page->contents->partners as $partner)
                            <div class="col-md-6">
                                <div class="team ">
                                    <div class="team__img-holder">
                                        <img src="{{asset($partner->image)}}" alt="" class="team__img">
                                    </div>
                                    <h5 class="team__name">{{$partner->name}}</h5>
                                    <div class="team__occupation">{!! $partner->body !!}</div>
                                </div>
                            </div>
                        @endforeach

                    </div> <!-- end slider -->
                </div>

            </div>
        </div>
    </section> <!-- end team -->

</x-guest-layout>
