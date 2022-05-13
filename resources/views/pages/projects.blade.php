<x-guest-layout>
    <!-- Page Title -->
    <section class="page-title bg-dark-overlay text-center" style="background-image: url({{asset($page->cover_photo)}});">
        <div class="container">
            <div class="page-title__holder">
                <h1 class="page-title__title">Projects</h1>
{{--                <p class="page-title__subtitle">We pursue each project with excellence</p>--}}
                <ul class="breadcrumbs">
                    <li class="breadcrumbs__item">
                        <a href="{{route('home')}}" class="breadcrumbs__url">Home</a>
                    </li>
                    <li class="breadcrumbs__item breadcrumbs__item--current">
                        Projects
                    </li>
                </ul>
            </div>
        </div>
    </section> <!-- end page title -->

    <!-- Portfolio -->
    <section class="section-wrap">
        <div class="container-fluid container-semi-fluid">

            <!-- Filter -->
            <div class="masonry-filter text-center">

                @foreach($years as $year)
                    @if ($loop->first)
                        <a href="#" class="filter active" data-filter="*">All</a>
                        @continue
                    @endif

                    <a href="#" class="filter" data-filter=".{{$year}}">{{$year}}</a>
                @endforeach
            </div> <!-- end filter -->

            <div class="row masonry-grid">


                @foreach($projects as $project)
                <div class="masonry-item col-md-6 col-lg-4 project hover-trigger {{date('Y',$project->completed_date)}}">
                    <div class="project__container">
                        <div class="project__img-holder">
                            <a href="{{route('projects.show',['slug'=>$project->slug])}}">
                                <img src="{{asset($project->cover_photo)}}" alt="" class="project__img">
                                <div class="hover-overlay">
                                    <div class="project__description">
                                        <h3 class="project__title">{{$project->title}}</h3>
                                        <span class="project__date">{{date('Y',$project->completed_date)}}</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div> <!-- end project -->
                @endforeach

            </div>
        </div>
    </section> <!-- end portfolio -->
</x-guest-layout>
