<x-guest-layout>
    <!-- Page Title -->
    <section class="page-title bg-dark-overlay text-center" style="background-image: url(img/edit/construction/construction.jpg);">
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
                        <h2 class="mb-32">Our Capacity</h2>
                        <p class="lead pb-16">Consists of top of the range equipment and machinery, including heavy and Light weight Machinery. Below is a list of equipment available for hire.</p>
                        <span class="notice">Note: All prices are VAT Exclusive</span>
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- end intro -->

    <section class="section-wrap pt-0 pb-0">
        <div class="container">
            <div class="row projects">
                <div class="col-md-6 project-1">
                    <div class="project-1__container">
                        <div class="project__img-holder hover-scale">
                             <img src="{{asset('img/edit/construction/tipper.jpeg')}}" alt="" class="project__img">
                        </div>
                    </div>

                    <div class="project-1__description-holder ">
                        <div class="project-1__description">
                            <h3 class="project-1__title">26 Tonne Tipper</h3>
                             <span class="price">K150,000/day</span>
                        </div>
                    </div>
                </div> <!-- end project -->

                <div class="col-md-6 project-1">
                    <div class="project-1__container">
                        <div class="project__img-holder hover-scale">
                            <img src="{{asset('img/edit/construction/lorry.jpg')}}" alt="" class="project__img">
                        </div>
                    </div>

                    <div class="project-1__description-holder">
                        <div class="project-1__description">
                            <h3 class="project-1__title">2 Tonne Lorry</h3>
                             <span class="price">K50,000/day</span>
                        </div>
                    </div>
                </div> <!-- end project -->
                <div class="col-md-6 project-1">
                    <div class="project-1__container">
                        <div class="project__img-holder hover-scale">
                             <img src="{{asset('img/edit/construction/backhoe.jpg')}}" alt="" class="project__img">
                        </div>
                    </div>

                    <div class="project-1__description-holder ">
                        <div class="project-1__description">
                            <h3 class="project-1__title">Backhoe Loader</h3>
                             <span class="price">K200,000/day</span>
                        </div>
                    </div>
                </div> <!-- end project -->

                <div class="col-md-6 project-1">
                    <div class="project-1__container">
                        <div class="project__img-holder hover-scale">
                            <img src="{{asset('img/edit/construction/genset.jpg')}}" alt="" class="project__img">
                        </div>
                    </div>

                    <div class="project-1__description-holder">
                        <div class="project-1__description">
                            <h3 class="project-1__title">7.5kV Genset</h3>
                             <span class="price">K25,000/day</span>
                        </div>
                    </div>
                </div> <!-- end project -->
                <div class="col-md-6 project-1">
                    <div class="project-1__container">
                        <div class="project__img-holder hover-scale">
                             <img src="{{asset('img/edit/construction/vibrator.jpg')}}" alt="" class="project__img">
                        </div>
                    </div>

                    <div class="project-1__description-holder ">
                        <div class="project-1__description">
                            <h3 class="project-1__title">Poker Vibrator</h3>
                             <span class="price">K25,000/day</span>
                        </div>
                    </div>
                </div> <!-- end project -->

                <div class="col-md-6 project-1">
                    <div class="project-1__container">
                        <div class="project__img-holder hover-scale">
                            <img src="{{asset('img/edit/construction/compactor.jpg')}}" alt="" class="project__img">
                        </div>
                    </div>

                    <div class="project-1__description-holder">
                        <div class="project-1__description">
                            <h3 class="project-1__title">Plate Compactor</h3>
                             <span class="price">K45,000/day</span>
                        </div>
                    </div>
                </div> <!-- end project -->
                <div class="col-md-6 project-1">
                    <div class="project-1__container">
                        <div class="project__img-holder hover-scale">
                             <img src="{{asset('img/edit/construction/mixer.jpg')}}" alt="" class="project__img">
                        </div>
                    </div>

                    <div class="project-1__description-holder ">
                        <div class="project-1__description">
                            <h3 class="project-1__title">Concrete Mixers</h3>
                             <span class="price">K25,000/day</span>
                        </div>
                    </div>
                </div> <!-- end project -->

                <div class="col-md-6 project-1">
                    <div class="project-1__container">
                        <div class="project__img-holder hover-scale">
                            <img src="{{asset('img/edit/construction/other.jpg')}}" alt="" class="project__img">
                        </div>
                    </div>

                    <div class="project-1__description-holder">
                        <div class="project-1__description">
                            <p class="project-1__text">Welding Machines, Grinders and Drilling Machines</p>
{{--                             <span class="enquire">Enquire</span>--}}
                        </div>
                    </div>
                </div> <!-- end project -->
            </div>
        </div>
    </section>

</x-guest-layout>
