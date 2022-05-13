<x-guest-layout>
    <!-- Page Title -->
    <section class="page-title bg-dark-overlay text-center" style="background-image: url({{asset($page->cover_photo)}});">
        <div class="container">
            <div class="page-title__holder">
                <h1 class="page-title__title">Construction Plant</h1>
                <ul class="breadcrumbs">
                    <li class="breadcrumbs__item">
                        <a href="{{route('home')}}" class="breadcrumbs__url">Home</a>
                    </li>
                    <li class="breadcrumbs__item breadcrumbs__item--current">
                        Construction Plant
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
                        <p class="notice">Note: All prices are VAT Exclusive</p>
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- end intro -->

    <section class="section-wrap pt-0 pb-0">
        <div class="container">
            <div class="row projects">
                @foreach($page->contents->plants as $plant)
                    @if ($loop->last)

                        <div class="col-md-6 project-1">
                            <div class="project-1__container">
                                <div class="project__img-holder hover-scale">
                                    <img src="{{asset($plant->image)}}" alt="" class="project__img">
                                </div>
                            </div>
                            <div class="project-1__description-holder">
                                <div class="project-1__description">
                                    <p class="project-1__text">{{$plant->name}}</p>
                                    {{--                             <span class="enquire">Enquire</span>--}}
                                </div>
                            </div>

                        </div> <!-- end project -->

                    @else

                        @if ($loop->odd)
                            <div class="col-md-6 project-1">

                                <div class="project-1__container">
                                    <div class="project__img-holder hover-scale">
                                        <img src="{{asset($plant->image)}}" alt="" class="project__img">
                                    </div>
                                </div>

                                <div class="project-1__description-holder ">
                                    <div class="project-1__description">
                                        <h3 class="project-1__title">{{$plant->name}}</h3>
                                        <span class="price">{{$plant->price}}</span>
                                    </div>
                                </div>
                            </div> <!-- end project -->
                        @else

                            <div class="col-md-6 project-1">
                                <div class="project-1__container">
                                    <div class="project__img-holder hover-scale">
                                        <img src="{{asset($plant->image)}}" alt="" class="project__img">
                                    </div>
                                </div>

                                <div class="project-1__description-holder ">
                                    <div class="project-1__description">
                                        <h3 class="project-1__title">{{$plant->name}}</h3>
                                        <span class="price">{{$plant->price}}</span>
                                    </div>
                                </div>
                            </div> <!-- end project -->

                        @endif

                    @endif

                @endforeach

            </div>
        </div>
    </section>

</x-guest-layout>
