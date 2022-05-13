<x-guest-layout>

            <div class="rev-offset"></div>

            <!-- Revolution Slider -->
            <div class="rev_slider_wrapper">

                <div class="rev_slider" id="slider-1" data-version="5.0">
                    <ul>
                        @foreach($projects as $project)

                            <!-- SLIDE -->
                            <li data-fstransition="fade"
                                data-transition="fade"
                                data-easein="default"
                                data-easeout="default"
                                data-slotamount="1"
                                data-masterspeed="1200"
                                data-delay="8000"
                                data-title="{{$project->title}}"
                            >

                                <!-- MAIN IMAGE -->
                                <img src="{{asset($project->cover_photo)}}"
                                     alt=""
                                     data-bgrepeat="no-repeat"
                                     data-bgfit="cover"
                                     data-bgparallax="7"
                                     class="rev-slidebg hover-trigger dark"
                                >


                                <!-- HERO TITLE -->
                                <div class="tp-caption hero-text"
                                     data-x="30"
                                     data-y="center"
                                     data-voffset="[-140,-120,-100,-180]"
                                     data-fontsize="[72,62,52,46]"
                                     data-lineheight="[72,62,52,46]"
                                     data-width="[none, none, none, 300]"
                                     data-whitespace="[nowrap, nowrap, nowrap, normal]"
                                     data-frames='[{
                                        "delay":1000,
                                        "speed":900,
                                        "frame":"0",
                                        "from":"y:150px;opacity:0;",
                                        "ease":"Power3.easeOut",
                                        "to":"o:1;"
                                        },{
                                        "delay":"wait",
                                        "speed":1000,
                                        "frame":"999",
                                        "to":"opacity:0;","ease":"Power3.easeOut"
                                    }]'
                                     data-splitout="none">{{$project->title}}<span class="hero-dot">.</span>
                                </div>

                                <!-- HERO SUBTITLE -->
                                <div class="tp-caption small-text"
                                     data-x="30"
                                     data-y="center"
                                     data-voffset="[-40,-30,-20,0]"
                                     data-fontsize="[21,21,21,21]"
                                     data-lineheight="34"
                                     data-width="[none, none, none, 300]"
                                     data-whitespace="[nowrap, nowrap, nowrap, normal]"
                                     data-frames='[{
                                        "delay":1100,
                                        "speed":900,
                                        "frame":"0",
                                        "from":"y:150px;opacity:0;",
                                        "ease":"Power3.easeOut",
                                        "to":"o:1;"
                                        },{
                                        "delay":"wait",
                                        "speed":1000,
                                        "frame":"999",
                                        "to":"opacity:0;","ease":"Power3.easeOut"
                                    }]'
                                >
                                    <p>Client: {{$project->client}}</p>
                                    <p>It's located in {{$project->location}}</p>
                                </div>

                                <!-- BUTTON -->
                                <div class="tp-caption"
                                     data-x="30"
                                     data-y="center"
                                     data-voffset="[60,60,60,100]"
                                     data-lineheight="55"
                                     data-hoffset="0"
                                     data-frames='[{
                                            "delay":1200,
                                            "speed":900,
                                            "frame":"0",
                                            "from":"y:150px;opacity:0;",
                                            "ease":"Power3.easeOut",
                                            "to":"o:1;"
                                            },{
                                            "delay":"wait",
                                            "speed":1000,
                                            "frame":"999",
                                            "to":"opacity:0;","ease":"Power3.easeOut"
                                        }]'
                                ><a href='{{route('projects.show',['slug'=>$project->slug])}}' class='btn btn--lg btn--color'>View Project</a>
                                </div>
                                <div style="position: absolute; height: 100%; width: 100%; background: rgba(0,0,0, 0.5);  background-blend-mode: overlay" class=""></div>

                            </li> <!-- end slide -->
                        @endforeach

                    </ul>
                </div>
            </div>

            <!-- Intro -->
            <section class="section-wrap intro">
                <div class="container">
                    <div class="">
                        <div class="">
                            <h2 class="intro__title">{{$page->title}}</h2>
                            <div class="lead">
                                {!! $page->body !!}
                            </div>
                            <div class="row mb-lg-48">
                                <div class="col-4">
                                    <div class="feature">
                                        <i class="icon-Trowel-and-Wall feature__icon"></i>
                                        <h4 class="feature__title">Building</h4>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="feature">
                                        <i class="icon-Drilling-Machine-2 feature__icon"></i>
                                        <h4 class="feature__title">Installation</h4>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="feature">
                                        <i class="icon-Paint-Roller feature__icon"></i>
                                        <h4 class="feature__title">Finishing</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> <!-- end intro -->

            <!-- Testimonials -->
            <section class="section-wrap bg-dark-overlay" style="background-image: url({{asset($page->cover_photo)}});">
                <div class="container">
                    <div class="title-row text-center">
                        <p class="subtitle">{{$page->contents->construction->caption}}</p>
                        <!-- <p class="subtitle">Our Capacity</p> -->
                        <h2 class="section-title">{{$page->contents->construction->title}}</h2>
                        <i class="quote">“</i>
                        <p class="section-caption">{{$page->contents->construction->body}}</p>
                    </div>
                </div>
            </section> <!-- end testimonials -->

            <!-- From Blog -->
            <section class="section-wrap blog-grid p-8">
                <div class="container ">
                    <div class="blog-grid__title-col d-flex flex-column">
                        <div class="title-row">
                            <p class="subtitle">From Blog</p>
                            <h2 class="section-title">Latest News & Updates</h2>
{{--                            <h2 class="section-title">Our Latest News</h2>--}}
                            <!-- <p>Keep in touch with us through our blogs posts. </p> -->
                        </div>
                    </div>
                    <div class="from-blog">
                        <div class="row">

                            @foreach($blogs as $blog)
                                <div class="col-md-12 col-lg-4">
                                    <a href="{{route('blogs.show',['slug'=>$blog->slug])}}">
                                    <article class="entry">
                                        <div class="entry__img-holder">
                                            <div class="entry__img" style="background-image: url({{asset($blog->cover_photo)}})"></div>
                                        </div>
                                        <div class="entry__body">
                                            <h4 class="entry__title">
                                                {{$blog->title}}
                                            </h4>
                                            <ul class="entry__meta">
                                                <li class="entry__meta-date">
                                                    <span>{{date('jS F, Y',$blog->created_at->getTimestamp())}}</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                    </a>
                                </div>
                            @endforeach

                        </div>
                        <a href="{{route('blogs')}}" class="btn btn--md btn--color">
                            <span>View All</span>
                        </a>

                    </div>
                </div>
            </section> <!-- end from blogs -->



</x-guest-layout>
