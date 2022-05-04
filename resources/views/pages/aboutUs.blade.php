<x-guest-layout>
    <!-- Page Title -->
    <section class="page-title bg-dark-overlay text-center" style="background-image: url(img/edit/about/about.jpg);">
        <div class="container">
            <div class="page-title__holder">
                <h1 class="page-title__title">About Us</h1>
                <ul class="breadcrumbs">
                    <li class="breadcrumbs__item">
                        <a href="{{route('home')}}" class="breadcrumbs__url">Home</a>
                    </li>
                    <li class="breadcrumbs__item breadcrumbs__item--current">
                        About Us
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
                        <h2 class="mb-32">We build your dreams!</h2>
                        <p class="lead">We are a government registered and recognized organization.
                            We offer quality and Excellent service to the public and private
                            sectors. From concept to reality, sharing your vision, and
                            addressing your key objectives.</p>
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- end intro -->


    <!-- Services -->
   {{-- <section class="section-wrap pt-0 pb-0">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-6">
                    <div class="service-1">
                        <a href="#" class="service-1__url hover-scale">
                            <img src="img/services/v-2/1.jpg" class="service-1__img" alt="">
                        </a>
                        <div class="service-1__info">
                            <h3 class="service-1__title">Interior design</h3>
                            <ul class="service-1__features">
                                <li class="service-1__feature">
                                    <i class="ui-check service-1__feature-icon"></i>
                                    <span class="service-1__feature-text">Modern Design</span>
                                </li>
                                <li class="service-1__feature">
                                    <i class="ui-check service-1__feature-icon"></i>
                                    <span class="service-1__feature-text">Unique Foundation</span>
                                </li>
                                <li class="service-1__feature">
                                    <i class="ui-check service-1__feature-icon"></i>
                                    <span class="service-1__feature-text">Smart Headting System</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="service-1">
                        <a href="#" class="service-1__url hover-scale">
                            <img src="img/services/v-2/2.jpg" class="service-1__img" alt="">
                        </a>
                        <div class="service-1__info">
                            <h3 class="service-1__title">Exterior design</h3>
                            <ul class="service-1__features">
                                <li class="service-1__feature">
                                    <i class="ui-check service-1__feature-icon"></i>
                                    <span class="service-1__feature-text">Modern Design</span>
                                </li>
                                <li class="service-1__feature">
                                    <i class="ui-check service-1__feature-icon"></i>
                                    <span class="service-1__feature-text">Unique Foundation</span>
                                </li>
                                <li class="service-1__feature">
                                    <i class="ui-check service-1__feature-icon"></i>
                                    <span class="service-1__feature-text">Smart Headting System</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="service-1">
                        <a href="#" class="service-1__url hover-scale">
                            <img src="img/services/v-2/3.jpg" class="service-1__img" alt="">
                        </a>
                        <div class="service-1__info">
                            <h3 class="service-1__title">Industrial premises</h3>
                            <ul class="service-1__features">
                                <li class="service-1__feature">
                                    <i class="ui-check service-1__feature-icon"></i>
                                    <span class="service-1__feature-text">Modern Design</span>
                                </li>
                                <li class="service-1__feature">
                                    <i class="ui-check service-1__feature-icon"></i>
                                    <span class="service-1__feature-text">Unique Foundation</span>
                                </li>
                                <li class="service-1__feature">
                                    <i class="ui-check service-1__feature-icon"></i>
                                    <span class="service-1__feature-text">Smart Headting System</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- end services -->--}}


    <!-- Statistic -->
    <div class="container">
        <div class="statistic-wrap">
            <div class="row">
                <div class="col-xl-4">
                    <div class="mt-16 mb-16">
                        <span class="statistic__title">Mission</span>
                        <p class="statistic__body">Provide superior civil engineering and
                            building construction services by
                            providing quality, on time and on budget
                            construction and technical services to
                            our customers. We will strive to
                            implement a long term relationship with
                            our clients, based on safety, quality,
                            timely service and an anticipation of
                            their needs. To help fulfil this mission,
                            we will involve all our employees in the
                            quality improvement process to insure
                            responsiveness and cost</p>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="mt-16 mb-16">
                        <span class="statistic__title">Vision</span>
                        <p class="statistic__body">To become a preeminent
                            Engineering Company in
                            the Construction
                            industry in Malawi and
                            be recognized as a top
                            Professional and quality
                            Service Provider in
                            Engineering.</p>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="mt-16 mb-16">
                        <span class="statistic__title">Values</span>
                        <ul class="service-1__features statistic__body">
                            <li >
                                <i class="ui-check service-1__feature-icon"></i>
                                <span class="service-1__feature-text">Reliable</span></li>
                            <li>
                                <i class="ui-check service-1__feature-icon"></i>
                                <span class="service-1__feature-text">Quality</span></li>
                            </li>
                            <li>
                                <i class="ui-check service-1__feature-icon"></i>
                                <span class="service-1__feature-text">Efficiency</span></li>
                            </li>
                            <li>
                                <i class="ui-check service-1__feature-icon"></i>
                                <span class="service-1__feature-text">Honesty and trustworthiness</span></li>
                            </li>
                            <li>
                                <i class="ui-check service-1__feature-icon"></i>
                                <span class="service-1__feature-text">Availability</span></li>
                            </li>
                            <li>
                                <i class="ui-check service-1__feature-icon"></i>
                                <span class="service-1__feature-text">Empowerment</span></li>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end statistic -->

    <!-- Team -->
    <section class="section-wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="blog-grid__title-col d-flex flex-column mb-lg-48">
                        <div class="title-row">
                            <p class="subtitle">team</p>
                            <h2 class="section-title">Managing Partners</h2>
{{--                            <p>A brief description of LUYO construction founding partners</p>--}}
                        </div>
                    </div>
                </div>

                <div class="col-lg-8 offset-lg-1">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="team ">
                                <div class="team__img-holder">
                                    <img src="img/edit/partners/atupele.jpg" alt="" class="team__img">
                                  {{--  <div class="hover-overlay">
                                        <div class="team__details text-center">
                                            --}}{{--<div class="socials socials--white">
                                                <a href="#" class="social social-twitter" aria-label="twitter" title="twitter" target="_blank"><i class="ui-twitter"></i></a>
                                                <a href="#" class="social social-facebook" aria-label="facebook" title="facebook" target="_blank"><i class="ui-facebook"></i></a>
                                                <a href="#" class="social social-youtube" aria-label="youtube" title="google plus" target="_blank"><i class="ui-youtube"></i></a>
                                                <a href="#" class="social social-instagram" aria-label="instagram" title="instagram" target="_blank"><i class="ui-instagram"></i></a>
                                            </div>--}}{{--

                                        </div>
                                    </div>--}}
                                </div>
                                <h5 class="team__name">Atupele Lusinje</h5>
{{--                                <span class="team__occupation">Interior Designer</span>--}}
                                <div class="team__occupation">
                                    <p>
                                        Atupele is a hardworking and driven Electrical Engineer with over 5 years’ experience in Solar Power is a hardworking and driven
                                        Technology, SCADA, Electrical System
                                        Protection, Switchgear, Transmission and
                                        Distribution Lines, Electrical Installations and
                                        Maintenance.
                                    </p>
                                    <p>
                                        He started his career as a
                                        student Electrical Engineer with Arkay
                                        Plastics Limited and Toleza Farm. After
                                        completing his Bachelor’s Degree in
                                        Electrical Engineering, he joined SunPower
                                        Solar Technologies Limited and then
                                        Siemens Mobility on the Nacala Railway
                                        Signalling Project.
                                    </p>
                                    <p>
                                        He is a Senior Authorised
                                        Person with ESCOM Limited, authorised to
                                        carry out operation of Low, Medium and High
                                        Voltage Apparatus.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="team ">
                                <div class="team__img-holder">
                                    <img src="img/edit/partners/francis.jpg" alt="" class="team__img">
                                  {{--  <div class="hover-overlay">
                                        <div class="team__details text-center">
                                            --}}{{--<div class="socials socials--white">
                                                <a href="#" class="social social-twitter" aria-label="twitter" title="twitter" target="_blank"><i class="ui-twitter"></i></a>
                                                <a href="#" class="social social-facebook" aria-label="facebook" title="facebook" target="_blank"><i class="ui-facebook"></i></a>
                                                <a href="#" class="social social-youtube" aria-label="youtube" title="google plus" target="_blank"><i class="ui-youtube"></i></a>
                                                <a href="#" class="social social-instagram" aria-label="instagram" title="instagram" target="_blank"><i class="ui-instagram"></i></a>
                                            </div>--}}{{--

                                        </div>
                                    </div>--}}
                                </div>
                                <h5 class="team__name">Francis Yotamu</h5>
{{--                                <span class="team__occupation">Interior Designer</span>--}}
                                <div class="team__occupation">
                                    <p>
                                        Francis who possess a comprehensive understanding of the technical is a highly capable individual
                                        elements of civil engineering. My passion has
                                        always been to become a civil engineer as
                                        this makes me a professional who has the
                                        opportunity to work on projects that not only
                                        change our physical surroundings but also at
                                        the same time improve the lives of literally
                                        millions of people through various good
                                        infrastructure built by civil engineers.
                                    </p>
                                    <p>
                                        He is a holder of Bachelor of science in civil
                                        Engineering from University of Malawi and
                                        currently pursuing towards Master of science
                                        infrastructure development management.
                                        Professionally he is a Prince 2 practitioner in
                                        Project management.
                                    </p>
                                    <p>
                                        Currently he is a Civil Engineer for the Malawi
                                        Housing Cooperation.
                                    </p>
                                </div>
                            </div>
                        </div>


                       {{-- <div class="team-col">
                            <div class="team hover-trigger">
                                <div class="team__img-holder">
                                    <img src="img/team/3.jpg" alt="" class="team__img">
                                    <div class="hover-overlay">
                                        <div class="team__details text-center">
                                            <div class="socials socials--white">
                                                <a href="#" class="social social-twitter" aria-label="twitter" title="twitter" target="_blank"><i class="ui-twitter"></i></a>
                                                <a href="#" class="social social-facebook" aria-label="facebook" title="facebook" target="_blank"><i class="ui-facebook"></i></a>
                                                <a href="#" class="social social-youtube" aria-label="youtube" title="google plus" target="_blank"><i class="ui-youtube"></i></a>
                                                <a href="#" class="social social-instagram" aria-label="instagram" title="instagram" target="_blank"><i class="ui-instagram"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h5 class="team__name">Melissa Shredinger</h5>
                                <span class="team__occupation">Sedona White</span>
                            </div>
                        </div>
--}}
                    </div> <!-- end slider -->
                </div>

            </div>
        </div>
    </section> <!-- end team -->


   {{-- <!-- Partners -->
    <div class="partners bg-light text-center">
        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                    <a href="#">
                        <img src="img/partners/1.png" alt="">
                    </a>
                </div>
                <div class="col-sm-2">
                    <a href="#">
                        <img src="img/partners/2.png" alt="">
                    </a>
                </div>
                <div class="col-sm-2">
                    <a href="#">
                        <img src="img/partners/3.png" alt="">
                    </a>
                </div>
                <div class="col-sm-2">
                    <a href="#">
                        <img src="img/partners/4.png" alt="">
                    </a>
                </div>
                <div class="col-sm-2">
                    <a href="#">
                        <img src="img/partners/5.png" alt="">
                    </a>
                </div>
                <div class="col-sm-2">
                    <a href="#">
                        <img src="img/partners/6.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>--}}
</x-guest-layout>
