<x-guest-layout>
    <!-- Page Title -->
    <section class="page-title bg-dark-overlay text-center" style="background-image: url(img/edit/projects/project_1.jpg);">
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
                <a href="#" class="filter active" data-filter="*">All</a>
                <a href="#" class="filter" data-filter=".2022">2022</a>
                <a href="#" class="filter" data-filter=".2021">2021</a>
                <a href="#" class="filter" data-filter=".2020">2020</a>
                <a href="#" class="filter" data-filter=".2019">2019</a>
            </div> <!-- end filter -->

            <div class="row masonry-grid">

                <div class="masonry-item col-md-6 col-lg-4 project hover-trigger 2022">
                    <div class="project__container">
                        <div class="project__img-holder">
                            <a href="{{route('projects.show',['id'=>1])}}">
                                <img src="{{asset('img/edit/projects/nkhoma.jpg')}}" alt="" class="project__img">
                                <div class="hover-overlay">
                                    <div class="project__description">
                                        <h3 class="project__title">Nkhoma Hospital</h3>
                                        <span class="project__date">2022</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div> <!-- end project -->

                <div class="masonry-item col-md-6 col-lg-4 project hover-trigger 2021">
                    <div class="project__container">
                        <div class="project__img-holder">
                            <a href="{{route('projects.show',['id'=>1])}}">
                                <img src="{{asset('img/edit/projects/coc.jpeg')}}" alt="" class="project__img">
                                <div class="hover-overlay">
                                    <div class="project__description">
                                        <h3 class="project__title">Church of Christ</h3>
                                        <span class="project__date">2021</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div> <!-- end project -->

                <div class="masonry-item col-md-6 col-lg-4 project hover-trigger 2020">
                    <div class="project__container">
                        <div class="project__img-holder">
                            <a href="{{route('projects.show',['id'=>1])}}">
                                <img src="{{asset('img/edit/projects/dzingwi.jpg')}}" alt="" class="project__img">
                                <div class="hover-overlay">
                                    <div class="project__description">
                                        <h3 class="project__title">Dzingwi Classroom Block</h3>
                                        <span class="project__date">2020</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div> <!-- end project -->

                <div class="masonry-item col-md-6 col-lg-4 project hover-trigger 2019">
                    <div class="project__container">
                        <div class="project__img-holder">
                            <a href="{{route('projects.show',['id'=>1])}}">
                                <img src="{{asset('img/edit/projects/cear.jpg')}}" alt="" class="project__img">
                                <div class="hover-overlay">
                                    <div class="project__description">
                                        <h3 class="project__title">CEAR</h3>
                                        <span class="project__date">2019</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div> <!-- end project -->



                <div class="masonry-item col-md-6 col-lg-4 project hover-trigger 2021">
                    <div class="project__container">
                        <div class="project__img-holder">
                            <a href="{{route('projects.show',['id'=>1])}}">
                                <img src="{{asset('img/edit/projects/coc.jpeg')}}" alt="" class="project__img">
                                <div class="hover-overlay">
                                    <div class="project__description">
                                        <h3 class="project__title">Church of Christ</h3>
                                        <span class="project__date">2021</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div> <!-- end project -->

                <div class="masonry-item col-md-6 col-lg-4 project hover-trigger 2020">
                    <div class="project__container">
                        <div class="project__img-holder">
                            <a href="{{route('projects.show',['id'=>1])}}">
                                <img src="{{asset('img/edit/projects/dzingwi.jpg')}}" alt="" class="project__img">
                                <div class="hover-overlay">
                                    <div class="project__description">
                                        <h3 class="project__title">Dzingwi Classroom Block</h3>
                                        <span class="project__date">2020</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div> <!-- end project -->

                <div class="masonry-item col-md-6 col-lg-4 project hover-trigger 2019">
                    <div class="project__container">
                        <div class="project__img-holder">
                            <a href="{{route('projects.show',['id'=>1])}}">
                                <img src="{{asset('img/edit/projects/cear.jpg')}}" alt="" class="project__img">
                                <div class="hover-overlay">
                                    <div class="project__description">
                                        <h3 class="project__title">CEAR</h3>
                                        <span class="project__date">2019</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div> <!-- end project -->

            </div>
        </div>
    </section> <!-- end portfolio -->
</x-guest-layout>
