<x-guest-layout>
    <!-- Portfolio Single -->
    <!-- Page Title -->
    <section class="page-title bg-dark-overlay text-center" style="background-image: url({{asset($project->cover_photo)}});">

    </section> <!-- end page title -->


    <section class="section-wrap pt-72 pb-32">
        <div class="container">
            <div class="row">

                <div class="col-xl-8 project__info mb-md-40">
                    <h1>{{$project->title}}</h1>
                    <div>
                        {!! $project->body !!}
                    </div>
                </div> <!-- project info -->

                <div class="col-xl-4 project__details">
                    <ul class="project__meta">
                        <li class="project__meta-item">
                            <span class="project__meta-label">Client:</span>
                            <span class="project__meta-value">{{$project->client}}</span>
                        </li>
                        {{--<li class="project__meta-item">
                            <span class="project__meta-label">Category:</span>
                            <span class="project__meta-value">Residential</span>
                        </li>--}}
                        <li class="project__meta-item">
                            <span class="project__meta-label">Location:</span>
                            <span class="project__meta-value">{{$project->location}}</span>
                        </li>
                        <li class="project__meta-item">
                            <span class="project__meta-label">Completed Date:</span>
                            <span class="project__meta-value">{{date('jS F, Y',$project->completed_date)}}</span>
                        </li>
                    </ul>
                    {{--<h6 class="share-label">Share:</h6>
                    <div class="socials">
                        <a href="#" class="social social-twitter" aria-label="twitter" title="twitter" target="_blank"><i class="ui-twitter"></i></a>
                        <a href="#" class="social social-facebook" aria-label="facebook" title="facebook" target="_blank"><i class="ui-facebook"></i></a>
                        --}}{{--<a href="#" class="social social-youtube" aria-label="youtube" title="google plus" target="_blank"><i class="ui-youtube"></i></a>
                        <a href="#" class="social social-instagram" aria-label="instagram" title="instagram" target="_blank"><i class="ui-instagram"></i></a>--}}{{--
                    </div>--}}
                </div>

            </div>
        </div>
    </section> <!-- end portfolio single -->


    {{--<!-- Related Projects -->
    <section class="section-wrap pt-32">
        <div class="container">
            <div class="title-row mb-48">
                <h2 class="section-title">Related Projects</h2>
            </div>
            <div class="row">
                <div class="masonry-item col-lg-4 project hover-trigger commercial">
                    <div class="project__container">
                        <div class="project__img-holder">
                            <a href="{{route('projects.show',['id'=>1])}}">
                                <img src="{{asset('img/portfolio/2.jpg')}}" alt="" class="project__img">
                                <div class="hover-overlay">
                                    <div class="project__description">
                                        <h3 class="project__title">Keangnam Grand Hall</h3>
                                        <span class="project__date">2018</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div> <!-- end project -->

                <div class="masonry-item col-lg-4 project hover-trigger interior">
                    <div class="project__container">
                        <div class="project__img-holder">
                            <a href="{{route('projects.show',['id'=>1])}}">
                                <img src="{{asset('img/portfolio/3.jpg')}}" alt="" class="project__img">
                                <div class="hover-overlay">
                                    <div class="project__description">
                                        <h3 class="project__title">Keangnam Grand Hall</h3>
                                        <span class="project__date">2018</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div> <!-- end project -->

                <div class="masonry-item col-lg-4 project hover-trigger landscape">
                    <div class="project__container">
                        <div class="project__img-holder">
                            <a href="{{route('projects.show',['id'=>1])}}">
                                <img src="{{asset('img/portfolio/4.jpg')}}" alt="" class="project__img">
                                <div class="hover-overlay">
                                    <div class="project__description">
                                        <h3 class="project__title">Keangnam Grand Hall</h3>
                                        <span class="project__date">2018</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div> <!-- end project -->
            </div>
        </div>
    </section> <!-- end related projects -->--}}
</x-guest-layout>
