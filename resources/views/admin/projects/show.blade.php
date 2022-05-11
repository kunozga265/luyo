<x-app-layout>
    <x-slot name="heading">
        Project View
        <a href="{{route('admin-projects-edit',['slug'=>$project->slug])}}" class="btn btn--md btn--color">
            <span>Edit</span>
        </a>
    </x-slot>

    <x-slot name="breadcrumbs">
        <li class="breadcrumbs__item">
            <a href="{{route('admin-projects')}}" class="breadcrumbs__url">Projects</a>
        </li>
        <li class="breadcrumbs__item breadcrumbs__item--current">
           {{$project->title}}
        </li>
    </x-slot>

    <!-- Portfolio Single -->
    <div>
        <img src="{{asset($project->cover_photo)}}" class="project__featured-img" alt="">
    </div>

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
</x-app-layout>
