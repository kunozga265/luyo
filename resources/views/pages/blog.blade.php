<x-guest-layout>
    <!-- Page Title -->
    <section class="page-title bg-dark-overlay text-center" style="background-image: url(img/edit/blog/blog.jpg);">
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

                <div class="col-lg-4 col-md-6">
                    <article class="entry">
                        <div class="entry__img-holder">
                            <a href="{{route('blogs.show',['id'=>1])}}">
                                <img src="img/blog/post_1.jpg" class="entry__img" alt="">
                            </a>
                        </div>
                        <div class="entry__body">
                            <ul class="entry__meta">
                                <li class="entry__meta-date">
                                    <span>13 June 2018</span>
                                </li>
                            </ul>
                            <h2 class="entry__title">
                                <a href="{{route('blogs.show',['id'=>1])}}">Glass House is big on efficiency, not so big on privacy.</a>
                            </h2>
                            <a href="{{route('blogs.show',['id'=>1])}}" class="read-more">
                                <span class="read-more__text">Read More</span>
                                <i class="ui-arrow-right read-more__icon"></i>
                            </a>
                        </div>
                    </article>
                </div>

                <div class="col-lg-4 col-md-6">
                    <article class="entry">
                        <div class="entry__img-holder">
                            <a href="{{route('blogs.show',['id'=>1])}}">
                                <img src="img/blog/post_2.jpg" class="entry__img" alt="">
                            </a>
                        </div>
                        <div class="entry__body">
                            <ul class="entry__meta">
                                <li class="entry__meta-date">
                                    <span>13 June 2018</span>
                                </li>
                            </ul>
                            <h2 class="entry__title">
                                <a href="{{route('blogs.show',['id'=>1])}}">Rome may not have been built in a day, but this shipping container media lab was.</a>
                            </h2>
                            <a href="{{route('blogs.show',['id'=>1])}}" class="read-more">
                                <span class="read-more__text">Read More</span>
                                <i class="ui-arrow-right read-more__icon"></i>
                            </a>
                        </div>
                    </article>
                </div>

                <div class="col-lg-4 col-md-6">
                    <article class="entry">
                        <div class="entry__img-holder">
                            <a href="{{route('blogs.show',['id'=>1])}}">
                                <img src="img/blog/post_3.jpg" class="entry__img" alt="">
                            </a>
                        </div>
                        <div class="entry__body">
                            <ul class="entry__meta">
                                <li class="entry__meta-date">
                                    <span>13 June 2018</span>
                                </li>
                            </ul>
                            <h2 class="entry__title">
                                <a href="{{route('blogs.show',['id'=>1])}}">Timber screens shield glass house from summer sun.</a>
                            </h2>
                            <a href="{{route('blogs.show',['id'=>1])}}" class="read-more">
                                <span class="read-more__text">Read More</span>
                                <i class="ui-arrow-right read-more__icon"></i>
                            </a>
                        </div>
                    </article>
                </div>

                <div class="col-lg-4 col-md-6">
                    <article class="entry">
                        <div class="entry__img-holder">
                            <a href="{{route('blogs.show',['id'=>1])}}">
                                <img src="img/blog/post_4.jpg" class="entry__img" alt="">
                            </a>
                        </div>
                        <div class="entry__body">
                            <ul class="entry__meta">
                                <li class="entry__meta-date">
                                    <span>13 June 2018</span>
                                </li>
                            </ul>
                            <h2 class="entry__title">
                                <a href="{{route('blogs.show',['id'=>1])}}">BIG's bow tie-shaped theater offers a glimpse behind the scenes.</a>
                            </h2>
                            <a href="{{route('blogs.show',['id'=>1])}}" class="read-more">
                                <span class="read-more__text">Read More</span>
                                <i class="ui-arrow-right read-more__icon"></i>
                            </a>
                        </div>
                    </article>
                </div>

                <div class="col-lg-4 col-md-6">
                    <article class="entry">
                        <div class="entry__img-holder">
                            <a href="{{route('blogs.show',['id'=>1])}}">
                                <img src="img/blog/post_5.jpg" class="entry__img" alt="">
                            </a>
                        </div>
                        <div class="entry__body">
                            <ul class="entry__meta">
                                <li class="entry__meta-date">
                                    <span>13 June 2018</span>
                                </li>
                            </ul>
                            <h2 class="entry__title">
                                <a href="{{route('blogs.show',['id'=>1])}}">Aston Martin's luxury condo revs up for 2021 completion.</a>
                            </h2>
                            <a href="{{route('blogs.show',['id'=>1])}}" class="read-more">
                                <span class="read-more__text">Read More</span>
                                <i class="ui-arrow-right read-more__icon"></i>
                            </a>
                        </div>
                    </article>
                </div>

                <div class="col-lg-4 col-md-6">
                    <article class="entry">
                        <div class="entry__img-holder">
                            <a href="{{route('blogs.show',['id'=>1])}}">
                                <img src="img/blog/post_6.jpg" class="entry__img" alt="">
                            </a>
                        </div>
                        <div class="entry__body">
                            <ul class="entry__meta">
                                <li class="entry__meta-date">
                                    <span>13 June 2018</span>
                                </li>
                            </ul>
                            <h2 class="entry__title">
                                <a href="{{route('blogs.show',['id'=>1])}}">Perkins+Will goes back to school with sustainable university building.</a>
                            </h2>
                            <a href="{{route('blogs.show',['id'=>1])}}" class="read-more">
                                <span class="read-more__text">Read More</span>
                                <i class="ui-arrow-right read-more__icon"></i>
                            </a>
                        </div>
                    </article>
                </div>

                <div class="col-lg-4 col-md-6">
                    <article class="entry">
                        <div class="entry__img-holder">
                            <a href="{{route('blogs.show',['id'=>1])}}">
                                <img src="img/blog/post_7.jpg" class="entry__img" alt="">
                            </a>
                        </div>
                        <div class="entry__body">
                            <ul class="entry__meta">
                                <li class="entry__meta-date">
                                    <span>13 June 2018</span>
                                </li>
                            </ul>
                            <h2 class="entry__title">
                                <a href="{{route('blogs.show',['id'=>1])}}">"Haarlem Shuffle" floating home provides an energy-neutral haven.</a>
                            </h2>
                            <a href="{{route('blogs.show',['id'=>1])}}" class="read-more">
                                <span class="read-more__text">Read More</span>
                                <i class="ui-arrow-right read-more__icon"></i>
                            </a>
                        </div>
                    </article>
                </div>

                <div class="col-lg-4 col-md-6">
                    <article class="entry">
                        <div class="entry__img-holder">
                            <a href="{{route('blogs.show',['id'=>1])}}">
                                <img src="img/blog/post_8.jpg" class="entry__img" alt="">
                            </a>
                        </div>
                        <div class="entry__body">
                            <ul class="entry__meta">
                                <li class="entry__meta-date">
                                    <span>13 June 2018</span>
                                </li>
                            </ul>
                            <h2 class="entry__title">
                                <a href="{{route('blogs.show',['id'=>1])}}">Tech-packed luxury apartment complex planned for Melbourne.</a>
                            </h2>
                            <a href="{{route('blogs.show',['id'=>1])}}" class="read-more">
                                <span class="read-more__text">Read More</span>
                                <i class="ui-arrow-right read-more__icon"></i>
                            </a>
                        </div>
                    </article>
                </div>

                <div class="col-lg-4 col-md-6">
                    <article class="entry">
                        <div class="entry__img-holder">
                            <a href="{{route('blogs.show',['id'=>1])}}">
                                <img src="img/blog/post_9.jpg" class="entry__img" alt="">
                            </a>
                        </div>
                        <div class="entry__body">
                            <ul class="entry__meta">
                                <li class="entry__meta-date">
                                    <span>13 June 2018</span>
                                </li>
                            </ul>
                            <h2 class="entry__title">
                                <a href="{{route('blogs.show',['id'=>1])}}">The Frame Design Awards crown the world’s best interiors.</a>
                            </h2>
                            <a href="{{route('blogs.show',['id'=>1])}}" class="read-more">
                                <span class="read-more__text">Read More</span>
                                <i class="ui-arrow-right read-more__icon"></i>
                            </a>
                        </div>
                    </article>
                </div>

            </div> <!-- end row -->

            <!-- Pagination -->
            <nav class="pagination">
                <span aria-current="page" class="page-numbers current">1</span>
                <a href="#" class="page-numbers">2</a>
                <a href="#" class="page-numbers">3</a>
                <a href="#" class="page-numbers">4</a>
                <a href="#" class="next page-numbers"><i class="ui-arrow-right"></i></a>
            </nav>

        </div>
    </section> <!-- end blogs -->
</x-guest-layout>
