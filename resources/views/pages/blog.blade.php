<x-guest-layout>
    <!-- Page Title -->
    <section class="page-title bg-dark-overlay text-center" style="background-image: url({{asset($page->cover_photo)}});">
        <div class="container">
            <div class="page-title__holder">
                <h1 class="page-title__title">Blog Posts</h1>
                <ul class="breadcrumbs">
                    <li class="breadcrumbs__item">
                        <a href="{{route('home')}}" class="breadcrumbs__url">Home</a>
                    </li>
                    <li class="breadcrumbs__item breadcrumbs__item--current">
                        Blog
                    </li>
                </ul>
            </div>
        </div>
    </section> <!-- end page title -->

    <!-- Blog -->
    <section class="section-wrap">
        <div class="container">
            <div class="row">

                @foreach($blogs as $blog)
                    <div class="col-md-12 col-lg-4" style="margin-bottom: 56px;">
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
            </div> <!-- end row -->

            {{$blogs->links()}}

        </div>
    </section> <!-- end blogs -->
</x-guest-layout>
