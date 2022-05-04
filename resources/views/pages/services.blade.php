<x-guest-layout>
    <!-- Page Title -->
    <section class="page-title bg-dark-overlay text-center" style="background-image: url(img/edit/services/cear_1.jpg);">
        <div class="container">
            <div class="page-title__holder">
                <h1 class="page-title__title">Services</h1>
{{--                <p class="page-title__subtitle">LUYO Construction provides services in the following areas</p>--}}
                <ul class="breadcrumbs">
                    <li class="breadcrumbs__item">
                        <a href="{{route('home')}}" class="breadcrumbs__url">Home</a>
                    </li>
                    <li class="breadcrumbs__item breadcrumbs__item--current">
                       Services
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
                        <h2 class="mb-32">What do we do?</h2>
                        <p class="lead">LUYO Construction provides services in the following areas;</p>
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- end intro -->


    {{--<!-- CTA -->
    <div class="call-to-action text-center">
        <div class="call-to-action__container">
            <h3 class="call-to-action__title">
                LUYO Construction provides services in the following areas
            </h3>
            <a href="#" class="btn btn--lg btn--color">
                <span>We build your dreams</span>
            </a>
        </div>
    </div>--}}


    <!-- Services -->
    <section class="section-wrap pt-0 pb-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="service-1">
                        <a href="#" class="service-1__url hover-scale">
                            <img src="img/edit/services/building.jpg" class="service-1__img" alt="">
                        </a>
                        <div class="service-1__info">
                            <h3 class="service-1__title">Building Construction Works</h3>
                            <p>Such as school blocks, warehouses, houses and office buildings.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-1">
                        <a href="#" class="service-1__url hover-scale">
                            <img src="img/edit/services/painting.jpg" class="service-1__img" alt="">
                        </a>
                        <div class="service-1__info">
                            <h3 class="service-1__title">Painting Infrastructure</h3>
                            <p>Such as buildings and steel structures.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-1">
                        <a href="#" class="service-1__url hover-scale">
                            <img src="img/edit/services/telecommunications.jpg" class="service-1__img" alt="">
                        </a>
                        <div class="service-1__info">
                            <h3 class="service-1__title">Telecommunication Cable Laying</h3>
                            <p>Trench digging, manhole construction, pipe laying etc.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-1">
                        <a href="#" class="service-1__url hover-scale">
                            <img src="img/edit/services/roads.jpg" class="service-1__img" alt="">
                        </a>
                        <div class="service-1__info">
                            <h3 class="service-1__title">Roads</h3>
                            <p>Design, construction, rehabilitation and maintenance.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-1">
                        <a href="#" class="service-1__url hover-scale">
                            <img src="img/edit/services/concrete.jpg" class="service-1__img" alt="">
                        </a>
                        <div class="service-1__info">
                            <h3 class="service-1__title">Concrete Structures</h3>
                            <p>Design and construction.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-1">
                        <a href="#" class="service-1__url hover-scale">
                            <img src="img/edit/services/steel.jpg" class="service-1__img" alt="">
                        </a>
                        <div class="service-1__info">
                            <h3 class="service-1__title">Steel Structures</h3>
                            <p>Design and construction.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-1">
                        <a href="#" class="service-1__url hover-scale">
                            <img src="img/edit/services/water.jpg" class="service-1__img" alt="">
                        </a>
                        <div class="service-1__info">
                            <h3 class="service-1__title">Water Supply Schemes</h3>
                            <p>Design, construction, rehabilitation and maintenance.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-1">
                        <a href="#" class="service-1__url hover-scale">
                            <img src="img/edit/services/irrigation.jpg" class="service-1__img" alt="">
                        </a>
                        <div class="service-1__info">
                            <h3 class="service-1__title">Irrigation Schemes</h3>
                            <p>Design, construction, rehabilitation and maintenance.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-1">
                        <a href="#" class="service-1__url hover-scale">
                            <img src="img/edit/services/bridge.jpg" class="service-1__img" alt="">
                        </a>
                        <div class="service-1__info">
                            <h3 class="service-1__title">Bridges</h3>
                            <p>Design, construction, rehabilitation and maintenance.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- end services -->

   {{-- <!-- Process -->
    <section class="section-wrap bg-dark-overlay" style="background-image: url(img/page-title/about.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="process">
                        <i class="icon-Ruler-Tool process__icon"></i>
                        <h4 class="process__title">1. Schematic Design</h4>
                        <p class="process__text">For each project we establish relationships with partners who we know will help us.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="process">
                        <i class="icon-Book-Write process__icon"></i>
                        <h4 class="process__title">2. Construction Documents</h4>
                        <p class="process__text">For each project we establish relationships with partners who we know will help us.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="process">
                        <i class="icon-Truck-1 process__icon"></i>
                        <h4 class="process__title">3. Construction</h4>
                        <p class="process__text">For each project we establish relationships with partners who we know will help us.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="process">
                        <i class="icon-House-Key-3 process__icon"></i>
                        <h4 class="process__title">4. Project Completion</h4>
                        <p class="process__text">For each project we establish relationships with partners who we know will help us.</p>
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- end process -->--}}


  {{--  <!-- CTA -->
    <div class="call-to-action text-center">
        <div class="call-to-action__container">
            <h3 class="call-to-action__title">
                We build your dreams!
            </h3>
            <a href="#" class="btn btn--lg btn--color">
                <span>Let’s Work Together</span>
            </a>
        </div>
    </div>--}}
</x-guest-layout>
