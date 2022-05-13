<x-guest-layout>
     <!-- Page Title -->
    <section class="page-title page-title--tall blog-featured-img bg-dark-overlay text-center" style="background-image: url({{asset($blog->cover_photo)}});">
        <div class="container">
            <div class="page-title__holder">
                <h1 class="page-title__title">{{$blog->title}}</h1>
                <ul class="entry__meta">
                    <li class="entry__meta-date">
                        <span>{{date('jS F, Y',$blog->created_at->getTimestamp())}}</span>
                    </li>
                </ul>
            </div>
        </div>
    </section> <!-- end page title -->

    <!-- Single Post -->
    <section class="section-wrap pt-40 pb-48">

        <div class="box-offset-container">
            <div class="blog__content">
                <div class="container">
                    <div class="row">
                        <div class="col">

                            <!-- Article -->
                            <article class="mb-0">
                                <div class="entry__article-wrap">

                                    <!-- Share -->
                                    <div class="entry__share">
                                        <div class="sticky-col">
                                            <div class="socials socials--rounded socials--base">
                                                <a class="social social-facebook" href="#" title="facebook" target="_blank" aria-label="facebook">
                                                    <i class="ui-facebook"></i>
                                                </a>
                                                <a class="social social-twitter" href="#" title="twitter" target="_blank" aria-label="twitter">
                                                    <i class="ui-twitter"></i>
                                                </a>
                                                 <a class="social social-google-plus" href="#" title="google" target="_blank" aria-label="google">
                                                     <i class="ui-google"></i>
                                                 </a>
                                            </div>
                                        </div>
                                    </div> <!-- end share -->

                                    <div class="entry__article">

                                        {!! $blog->body !!}

                                    </div>
                                    <!-- end entry article -->
                                </div>
                                <!-- end entry article wrap -->
                            </article>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- end single post -->
</x-guest-layout>
