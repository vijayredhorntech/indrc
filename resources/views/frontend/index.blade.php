@extends('frontend.layouts.layout')
@section('content')


    <div class="form-back-drop"></div>



    <div class="swiffy-slider slider-nav-autoplay slider-nav-animation slider-nav-animation-fadein">
        <ul class="slider-container" style="width: 100%">
            <li style="display: flex; justify-content: center; background-color: black"><img src="{{asset('assets/front/images/main-slider/main-banner.jpg')}}" class="MainBannerImages"></li>
        </ul>

{{--        <button type="button" class="slider-nav"></button>--}}
{{--        <button type="button" class="slider-nav slider-nav-next"></button>--}}
    </div>

    <!-- About Section -->
    <section class="about-section">

        <div class="auto-container">

            <div class="row">
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="about-image-wrapper">
                        <figure class="image-3 wow zoomIn" data-wow-delay="900ms"><img src="{{asset('assets/front/images/home/1.png')}}" alt=""/></figure>
                        <figure class="image-2 wow zoomIn" data-wow-delay="600ms"><img src="{{asset('assets/front/images/home/2.png')}}" alt=""/></figure>
                        <figure class="image-1 wow zoomIn" data-wow-delay="300ms"><img src="{{asset('assets/front/images/resource/vector.png')}}" alt=""/></figure>
                        <a href="#" class="lightbox-image play-btn wow zoomIn" data-wow-delay="1200ms"><span class="icon fa fa-play"></span></a>
                    </div>
                </div>
                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="sec-title">
                            <span class="sub-title">“Knowledge shared is knowledge multiplied.”</span>
                            <h2>About the Conference</h2>
                            <span class="divider"></span>
                        </div>
                        <p style="text-align: justify">The Indian Institute of Science Education and Research (IISER) Mohali is excited to
                            announce the 7th edition of the Indian Drosophila Research Conference (InDRC
                            2025), set to take place from December 11 to 13, 2025. This conference is a crucial
                            and unmissable event for the Indian Drosophila Research Community, providing an
                            unparalleled opportunity to share knowledge, foster innovation, and build essential
                            collaborations.</p>
                        <p style="text-align: justify">Participants will delve into a wide array of scientific themes, such as Genetics,
                            Neurobiology, Developmental Biology, Ecology and Evolution, and Cell Biology and
                            Immunity. Over the course of three dynamic days, attendees will hear from top
                            experts within the Indian and International Drosophila Research communities. Young
                            scholars will showcase their talent through oral and poster presentations, making these
                            sessions vital for exchanging innovative ideas and highlighting exceptional research
                            across various disciplines.</p>
                    </div>
                </div>
                <div class="content-column col-lg-12 col-md-12 col-sm-12">
                    <p style="text-align: justify">This event is not just a conference; it is a celebration of scientific progress and a
                        chance to solidify community bonds. Seize this opportunity to reconnect with
                        colleagues and forge new professional relationships. The refreshing winter weather in
                        Punjab will enhance your experience, creating an ideal backdrop for meaningful
                        scientific dialogue and collaboration.</p>
                    <p style="text-align: justify">Additionally, a vibrant cultural evening will celebrate Punjab&#39;s rich heritage, featuring
                        local music, dance, and cuisine. This will be a perfect moment to relax and immerse
                        yourself in the region's cultural nuances. Our committed organizing team guarantees a
                        welcoming and enriching experience for every attendee.</p>
                    <p style="text-align: justify">We eagerly anticipate your presence in Mohali this December!</p>
                </div>

            </div>

        </div>

    </section>
    <!-- End About Section -->


    <!-- Fun Fact Section -->
    <section class="fun-fact-section">

        <div class="auto-container">

            <div class="fact-counter">

                <div class="row clearfix">

                    <!--Column-->

                    <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow zoomIn">

                        <div class="inner-box">

                            <div class="count-box">

                                <span class="icon bg-1"></span>

                                <span class="count-text" data-speed="3000" data-stop="0">0</span>

                            </div>

                            <span class="counter-title">Speakers</span>

                        </div>

                    </div>



                    <!--Column-->

                    <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow zoomIn" data-wow-delay="300ms">

                        <div class="inner-box">

                            <div class="count-box">

                                <span class="icon bg-2"></span>

                                <span class="count-text" data-speed="3000" data-stop="0">0</span>

                            </div>

                            <span class="counter-title">Faculty</span>

                        </div>

                    </div>



                    <!--Column-->

                    <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow zoomIn" data-wow-delay="600ms">

                        <div class="inner-box">

                            <div class="count-box">

                                <span class="icon bg-3"></span>

                                <span class="count-text" data-speed="3000" data-stop="0">0</span>

                            </div>

                            <span class="counter-title">Students</span>

                        </div>

                    </div>



                    <!--Column-->

                    <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow zoomIn" data-wow-delay="900ms">

                        <div class="inner-box">

                            <div class="count-box">

                                <span class="icon bg-4"></span>

                                <span class="count-text" data-speed="3000" data-stop="0">0</span>

                            </div>

                            <span class="counter-title">Industry</span>

                        </div>

                    </div>



                </div>

            </div>

        </div>
    </section>


    <!-- News Section -->
    <section class="news-section">

        <div class="auto-container">

            <div class="sec-title">

                <span class="sub-title">News</span>

                <h2>Latest From Newsroom</h2>

                <span class="divider"></span>

            </div>



            <div class="row">

                <!-- News Block -->

                <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInRight">

                    <div class="inner-box">

                        <div class="image-box">

                            <span class="tag">News</span>

                            <figure class="image"><a href="#"><img src="{{asset('assets/front/images/resource/news-1.jpg')}}" alt=""></a></figure>

                        </div>

                        <div class="lower-content">
                            <h4><a href="#">Chances are Good That There’s a Cloud Software as </a></h4>

                            <div class="text">Single stroke at the present moment and yet I feel that lorem quis bibendum auctor.</div>

                            <ul class="post-info">

                                <li><span class="far fa-calendar"></span> 21/08/2021</li>

                                <li><span class="far fa-comments"></span> INDRC</li>

                            </ul>

                        </div>

                    </div>

                </div>



                <!-- News Block Three -->

                <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInRight" data-wow-delay="400ms">

                    <div class="inner-box">

                        <div class="image-box">

                            <span class="tag">News</span>

                            <figure class="image"><a href="#"><img src="{{asset('assets/front/images/resource/news-2.jpg')}}" alt=""></a></figure>

                        </div>

                        <div class="lower-content">

                            <h4><a href="#">Chances are Good That There’s a Cloud Software as </a></h4>

                            <div class="text">Single stroke at the present moment and yet I feel that lorem quis bibendum auctor.</div>

                            <ul class="post-info">

                                <li><span class="far fa-calendar"></span> 21/08/2021</li>

                                <li><span class="far fa-comments"></span> INDRC</li>

                            </ul>

                        </div>

                    </div>

                </div>



                <!-- News Block Three -->

                <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInRight" data-wow-delay="800ms">

                    <div class="inner-box">

                        <div class="image-box">

                            <span class="tag">News</span>

                            <figure class="image"><a href="#"><img src="{{asset('assets/front/images/resource/news-3.jpg')}}" alt=""></a></figure>

                        </div>

                        <div class="lower-content">
                            <h4><a href="#">We Have Top Executive and Start Up Here Event 2021</a></h4>

                            <div class="text">Single stroke at the present moment and yet I feel that lorem quis bibendum auctor.</div>

                            <ul class="post-info">

                                <li><span class="far fa-calendar"></span> 21/08/2021</li>

                                <li><span class="far fa-comments"></span> INDRC</li>

                            </ul>

                        </div>

                    </div>

                </div>

            </div>



{{--            <div class="sec-bottom-text"><div class="text"> <a href="javascript:void(0)">Click here</a> to know more</div></div>--}}

        </div>

    </section>
    <!--End News Section -->



    <section class="speakers-section-three" style="background-image: url({{asset('assets/front/images/background/3.jpg')}});">

        <div class="auto-container">

            <div class="sec-title light text-center">

{{--                <span class="sub-title">Our Organisers</span>--}}

                <h2>Organisers</h2>

                <span class="divider"></span>

            </div>



            <div class="row">
                <div class="speaker-block-three col-lg-4 col-md-6 col-sm-12 wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">

                    <div class="inner-box">

                        <div class="image-box">

                            <figure class="image"><a href="javascript:void(0)"><img src="{{asset('assets/front/images/organisers/lolitika.png')}}" alt=""></a></figure>



                            <div class="info-box">

                                <h4 class="name"><a href="javascript:void(0)">Prof. Lolitika Mandal</a></h4>

                                <span class="designation" style="margin-bottom: 0px">Developmental Genetics Lab</span>
                                <span class="designation">IISER Mohali</span>

                                <div class="social-links">
                                    <a href="https://x.com/LolitikaMandal" target="_blank"><i class="fab fa-twitter"></i></a>
                                    <a href="mailto:lolitika@iisermohali.ac.in" target="_blank"><i class="fa fa-envelope"></i></a>
                                </div>

{{--                                <div class="text">consectetur elit sed do eiusmod tempor incd idunt labore et dolore magna aliqua enim minim veniam </div>--}}

                            </div>

                        </div>

                    </div>

                </div>
                <div class="speaker-block-three col-lg-4 col-md-6 col-sm-12 wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">

                    <div class="inner-box">

                        <div class="image-box">

                            <figure class="image"><a href="javascript:void(0)"><img src="{{asset('assets/front/images/organisers/ngprasad.png')}}" alt=""></a></figure>



                            <div class="info-box">

                                <h4 class="name"><a href="javascript:void(0)">Prof. N.G. Prasad</a></h4>

                                <span class="designation" style="margin-bottom: 0px">Evolutionary Biology Lab</span>
                                <span class="designation">IISER Mohali</span>

                                <div class="social-links">
                                    <a href="https://x.com/NGPrasadevo" target="_blank"><i class="fab fa-twitter"></i></a>
                                    <a href="mailto:prasad@iisermohali.ac.in" target="_blank"><i class="fa fa-envelope"></i></a>

                                </div>

{{--                                <div class="text">consectetur elit sed do eiusmod tempor incd idunt labore et dolore magna aliqua enim minim veniam </div>--}}

                            </div>

                        </div>

                    </div>

                </div>
                <div class="speaker-block-three col-lg-4 col-md-6 col-sm-12 wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">

                    <div class="inner-box">

                        <div class="image-box">

                            <figure class="image"><a href="javascript:void(0)"><img src="{{asset('assets/front/images/organisers/profSudip.png')}}" alt=""></a></figure>



                            <div class="info-box">

                                <h4 class="name"><a href="javascript:void(0)">Prof. Sudip Mandal</a></h4>

                                <span class="designation" style="margin-bottom: 0px">Molecular Cell & Developmental Biology</span>
                                <span class="designation">IISER Mohali</span>

                                <div class="social-links">
{{--                                    <a href= target="_blank"><i class="fab fa-twitter"></i></a>--}}
                                    <a href="mailto:sudip@iisermohali.ac.in" target="_blank"><i class="fa fa-envelope"></i></a>

                                </div>

{{--                                <div class="text">consectetur elit sed do eiusmod tempor incd idunt labore et dolore magna aliqua enim minim veniam </div>--}}

                            </div>

                        </div>

                    </div>

                </div>
            </div>

        </div>

    </section>


    <!--Clients Section-->
    <section class="clients-section">

        <div class="auto-container">

            <div class="row">

                <!-- Title Column -->

                <div class="title-column col-xl-3 col-lg-4 col-md-12">

                    <div class="sec-title">

                        <span class="sub-title">Sponsors</span>

                        <h2>Our Official <br>Sponsors</h2>

                        <div class="divider"></div>

{{--                        <div class="text">We have dedicated tracks for every industry Whether you want to hire tech’s top talent.</div>--}}

{{--                        <a href="javascript:void(0)" class="theme-btn btn-style-one mt-4"><span class="btn-title">Buy Ticket</span></a>--}}

                    </div>

                </div>



                <!-- Title Column -->

                <div class="title-column col-xl-9 col-lg-8 col-md-12">

                    <div class="sponsors-outer">

                        <div class="row">

                            <!-- Client Block -->

                            <div class="client-block col-lg-4 col-md-6 col-sm-12 wow fadeInRight">

                                <figure class="image-box"><a href="javascript:void(0)"><img src="{{asset('assets/front/images/clients/iiser.png')}}" alt=""></a></figure>

                            </div>



                            <!-- Client Block -->


                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>
    <!--End Clients Section-->


    {{--    @push('styles')--}}
{{--        <style>--}}
{{--            /* First Section Styles */--}}
{{--            .first-section {--}}
{{--                margin-bottom: 10px;--}}
{{--            }--}}

{{--            .image-slider {--}}
{{--                height: 100%;--}}
{{--                position: relative;--}}
{{--            }--}}

{{--            .image-slider .slider-img {--}}
{{--                height: 500px;--}}
{{--                width: 100%;--}}
{{--                background-size: cover;--}}
{{--                background-position: center;--}}
{{--            }--}}

{{--            .news-events-column {--}}
{{--                background-color: var(--themeht-bg-light-color);--}}
{{--                padding: 20px;--}}
{{--                display: flex;--}}
{{--                flex-direction: column;--}}
{{--            }--}}

{{--            .news-events-wrapper {--}}
{{--                display: flex;--}}
{{--                flex-direction: column;--}}
{{--            }--}}

{{--            .section-header {--}}
{{--                margin-bottom: 10px;--}}
{{--            }--}}

{{--            .section-title {--}}
{{--                font-family: var(--themeht-typography-secondary-font-family);--}}
{{--                font-size: 28px;--}}
{{--                color: var(--themeht-primary-color);--}}
{{--                margin-bottom: 15px;--}}
{{--                position: relative;--}}
{{--            }--}}

{{--            .divider {--}}
{{--                height: 3px;--}}
{{--                width: 80px;--}}
{{--                background-color: var(--themeht-primary-color);--}}
{{--                margin-bottom: 20px;--}}
{{--            }--}}

{{--            .news-marquee {--}}
{{--                flex-grow: 1;--}}
{{--                overflow: hidden;--}}
{{--                position: relative;--}}
{{--                height: 100%;--}}
{{--            }--}}

{{--            .marquee-vertical {--}}
{{--                position: absolute;--}}
{{--                animation: scrollUp 20s linear infinite;--}}
{{--            }--}}

{{--            .marquee-item {--}}
{{--                padding: 20px 0;--}}
{{--                border-bottom: 1px solid var(--themeht-border-light-color);--}}
{{--            }--}}

{{--            .news-date {--}}
{{--                font-size: 14px;--}}
{{--                color: var(--themeht-primary-color);--}}
{{--                font-weight: 600;--}}
{{--                display: block;--}}
{{--                margin-bottom: 5px;--}}
{{--            }--}}

{{--            .news-title {--}}
{{--                font-family: var(--themeht-typography-secondary-font-family);--}}
{{--                font-size: 18px;--}}
{{--                color: var(--themeht-text-color);--}}
{{--                margin-bottom: 8px;--}}
{{--            }--}}

{{--            .news-excerpt {--}}
{{--                font-size: 14px;--}}
{{--                color: var(--themeht-body-color);--}}
{{--                margin-bottom: 0;--}}
{{--            }--}}

{{--            /* Second Section Styles */--}}
{{--            .second-section {--}}
{{--                padding: 0px 50px;--}}
{{--                padding-bottom: 20px;--}}
{{--                background-color: var(--themeht-white-color);--}}
{{--            }--}}

{{--            .hod-message-wrapper {--}}
{{--                background-color: var(--themeht-white-color);--}}
{{--                padding: 20px;--}}
{{--                border-radius: 8px;--}}
{{--                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);--}}
{{--                height: 100%;--}}
{{--            }--}}

{{--            .hod-name {--}}
{{--                font-family: var(--themeht-typography-secondary-font-family);--}}
{{--                color: var(--themeht-text-color);--}}
{{--                font-size: 20px;--}}
{{--                margin-bottom: 5px;--}}
{{--            }--}}

{{--            .hod-designation {--}}
{{--                font-size: 14px;--}}
{{--                color: var(--themeht-body-color);--}}
{{--                margin-bottom: 15px;--}}
{{--            }--}}

{{--            .hod-message p {--}}
{{--                margin-bottom: 15px;--}}
{{--                font-size: 15px;--}}
{{--                line-height: 1.7;--}}
{{--            }--}}

{{--            .opportunities-wrapper {--}}
{{--                background-color: var(--themeht-bg-light-color);--}}
{{--                padding: 20px;--}}
{{--                border-radius: 8px;--}}
{{--            }--}}

{{--            .opportunities-marquee {--}}
{{--                height: 100%;--}}
{{--                overflow: hidden;--}}
{{--                position: relative;--}}
{{--            }--}}

{{--            .opportunity-item {--}}
{{--                padding: 20px 0;--}}
{{--                border-bottom: 1px solid var(--themeht-border-light-color);--}}
{{--            }--}}

{{--            .opportunity-title {--}}
{{--                font-family: var(--themeht-typography-secondary-font-family);--}}
{{--                font-size: 18px;--}}
{{--                color: var(--themeht-primary-color);--}}
{{--                margin-bottom: 8px;--}}
{{--            }--}}

{{--            .opportunity-desc {--}}
{{--                font-size: 14px;--}}
{{--                color: var(--themeht-body-color);--}}
{{--                margin-bottom: 0;--}}
{{--            }--}}

{{--            /* Animations */--}}
{{--            @keyframes scrollUp {--}}
{{--                0% {--}}
{{--                    transform: translateY(0);--}}
{{--                }--}}
{{--                100% {--}}
{{--                    transform: translateY(-100%);--}}
{{--                }--}}
{{--            }--}}

{{--            /* Responsive Styles */--}}
{{--            @media (max-width: 992px) {--}}
{{--                .image-slider {--}}
{{--                    height: 400px;--}}
{{--                }--}}

{{--                .news-events-column, .opportunities-wrapper {--}}
{{--                    padding: 25px;--}}
{{--                }--}}

{{--                .hod-message-wrapper {--}}
{{--                    margin-bottom: 20px;--}}
{{--                }--}}

{{--                .news-marquee {--}}
{{--                    height: 250px;--}}
{{--                }--}}

{{--                .second-section {--}}
{{--                    padding: 0px 20px;--}}
{{--                }--}}
{{--            }--}}

{{--            @media (max-width: 768px) {--}}
{{--                .image-slider {--}}
{{--                    height: 400px;--}}
{{--                }--}}

{{--                .image-slider .slider-img {--}}
{{--                    height: 400px;--}}
{{--                }--}}

{{--                .news-marquee, .opportunities-marquee {--}}
{{--                    height: 300px;--}}
{{--                }--}}

{{--                .section-title {--}}
{{--                    font-size: 24px;--}}
{{--                }--}}

{{--                .hod-image {--}}
{{--                    width: 80px;--}}
{{--                }--}}
{{--            }--}}

{{--            @media (max-width: 576px) {--}}
{{--                .image-slider {--}}
{{--                    height: 300px;--}}
{{--                }--}}

{{--                .image-slider .slider-img {--}}
{{--                    height: 300px;--}}
{{--                }--}}

{{--                .news-events-column, .opportunities-wrapper {--}}
{{--                    padding: 20px;--}}
{{--                }--}}

{{--                .news-marquee, .opportunities-marquee {--}}
{{--                    height: 250px;--}}
{{--                }--}}

{{--                .hod-message-wrapper {--}}
{{--                    padding: 20px;--}}
{{--                }--}}
{{--            }--}}
{{--        </style>--}}
{{--    @endpush--}}

{{--    <div class="page-content">--}}
{{--        <!-- First Section - 60% Slider + 40% News & Events -->--}}
{{--        <section class="first-section mb-5" style="padding: 0px">--}}
{{--            <div class="container-fluid px-0">--}}
{{--                <div class="row g-0">--}}
{{--                    <!-- 60% Slider Column -->--}}
{{--                    <div class="col-lg-12 ">--}}
{{--                        <div class="swiper image-slider">--}}
{{--                            <div class="swiper-wrapper">--}}
{{--                                @php--}}
{{--                                    $images = \App\Models\BannerStats::where('status', 1)->get();--}}
{{--                                @endphp--}}
{{--                                @forelse($bannerStats as $key => $stat)--}}
{{--                                    <div class="swiper-slide">--}}
{{--                                        <div class="slider-img" data-bg-img="{{ asset( $stat->image) }}"--}}
{{--                                             loading="lazy"></div>--}}
{{--                                    </div>--}}
{{--                                @empty--}}
{{--                                    <div class="swiper-slide">--}}
{{--                                        <div class="slider-img"--}}
{{--                                             data-bg-img="{{asset('assets/front/images/banner/banner3.png')}}"--}}
{{--                                             loading="lazy"></div>--}}
{{--                                    </div>--}}
{{--                                @endforelse--}}
{{--                            </div>--}}
{{--                            <div class="swiper-button-next"></div>--}}
{{--                            <div class="swiper-button-prev"></div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <!-- 40% News & Events Column -->--}}

{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}

{{--        <!-- Second Section - 50% HOD Message + 50% Opportunities -->--}}
{{--        <section class="second-section">--}}
{{--            <div class="row">--}}
{{--                <!-- 50% HOD Message Column -->--}}
{{--                <div class="col-lg-4 col-md-12 pe-lg-5">--}}
{{--                    <div class="hod-message-wrapper">--}}
{{--                        <div class="d-flex align-items-start mb-4">--}}
{{--                            <div class="hod-image me-4">--}}
{{--                                <img src="{{asset('assets/front/images/sanjoy.jpg')}}" alt="Head of Department"--}}
{{--                                     class="img-fluid rounded-circle" width="120">--}}
{{--                            </div>--}}
{{--                            <div>--}}
{{--                                <h3 class="section-title mb-2">Message from HOD</h3>--}}
{{--                                <h5 class="hod-name">Prof. John Smith</h5>--}}
{{--                                <p class="hod-designation" style="color: black">Head, Department of Biosciences and Bioengineering</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="hod-message">--}}
{{--                            <p style="color: black">A Centre of Biosciences was started in 1980 and upgraded to a full-fledged academic--}}
{{--                                Department of Biosciences and Biotechnology in 1986. It was renamed as the Department of--}}
{{--                                Biotechnology in the year 2002. The department has teaching and research programmes--}}
{{--                                which encompass various basic and applied aspects of modern biotechnology.</p>--}}
{{--                            <p style="color: black">The main objective of the Department is to provide academic training and conduct research--}}
{{--                                in the interdisciplinary areas of biotechnology with .... </p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 col-md-6 news-events-column">--}}
{{--                    <div class="opportunities-wrapper h-100">--}}
{{--                        <div class="section-header">--}}
{{--                            <div style="display: flex; justify-content: space-between">--}}
{{--                                <h3 class="section-title">News & Events  </h3>--}}
{{--                                <a style="font-size: 13px" href="{{route('news')}}">View All</a>--}}
{{--                            </div>--}}
{{--                            </h3>--}}

{{--                            <div class="divider"></div>--}}

{{--                        </div>--}}
{{--                        <div class="opportunities-marquee">--}}
{{--                            <div class="marquee-vertical">--}}
{{--                                @php--}}
{{--                                    $today = \Carbon\Carbon::today();--}}
{{--                                    $notifications = \App\Models\Notification::where(function($query) use ($today) {--}}
{{--                                        $query->whereNull('publication_date')--}}
{{--                                              ->orWhere('publication_date', '<=', $today);--}}
{{--                                    })--}}
{{--                                    ->where(function($query) use ($today) {--}}
{{--                                        $query->whereNull('notification_end_date')--}}
{{--                                              ->orWhere('notification_end_date', '>=', $today);--}}
{{--                                    })--}}
{{--                                    ->orderBy('notification_date', 'desc')--}}
{{--                                    ->take(10)--}}
{{--                                    ->get();--}}
{{--                                @endphp--}}
{{--                                @forelse($notifications as $key => $notification)--}}
{{--                                    <div class="marquee-item">--}}
{{--                                        <span--}}
{{--                                            class="news-date">{{\Carbon\Carbon::parse($notification->notification_date)->format('d/m/Y')}}</span>--}}
{{--                                        <a target="_blank" href="{{asset('storage/'.$notification->notification_file)}}"--}}
{{--                                           class="news-title">{{$notification->notification_title}}</a>--}}
{{--                                        <p class="news-excerpt" style="color: black"> {{ \Illuminate\Support\Str::words($notification->notification_description, 50, '...') }}</p>--}}
{{--                                    </div>--}}
{{--                                @empty--}}
{{--                                    <div class="marquee-item">--}}
{{--                                        <h5 class="news-title">No events found</h5>--}}
{{--                                    </div>--}}
{{--                                @endforelse--}}


{{--                            </div>--}}

{{--                        </div>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 col-md-6 ps-lg-5">--}}
{{--                    <div class="opportunities-wrapper h-100" style="background-color:#001a6e">--}}
{{--                        <div class="section-header">--}}
{{--                            <div style="display: flex; justify-content: space-between">--}}
{{--                                <h3 class="section-title" style="color:white">Opportunities</h3>--}}
{{--                                <a style="font-size: 13px; color: white;" href="{{route('opportunities')}}">View All</a>--}}
{{--                            </div>--}}
{{--                            <div class="divider" style="background-color:whitesmoke"></div>--}}
{{--                        </div>--}}
{{--                        <div class="opportunities-marquee">--}}
{{--                            <div class="marquee-vertical">--}}
{{--                                @php--}}
{{--                                    $today = \Carbon\Carbon::today();--}}
{{--                                    $opportunities = \App\Models\StudentAchievements::where(function($query) use ($today) {--}}
{{--                                        $query->whereNull('publication_date')--}}
{{--                                              ->orWhere('publication_date', '<=', $today);--}}
{{--                                    })--}}
{{--                                    ->where(function($query) use ($today) {--}}
{{--                                        $query->whereNull('end_date')--}}
{{--                                              ->orWhere('end_date', '>=', $today);--}}
{{--                                    })--}}
{{--                                    ->orderBy('created_at', 'desc')--}}
{{--                                    ->take(10)--}}
{{--                                    ->get();--}}
{{--                                @endphp--}}
{{--                                @forelse($opportunities as $key => $notification)--}}

{{--                                    <div class="opportunity-item">--}}
{{--                                        <a target="_blank" href="{{asset('storage/'.$notification->image)}}"--}}
{{--                                           class="opportunity-title" style="color:white; font-size:22px"><i--}}
{{--                                                class="fa fa-award"--}}
{{--                                                style="margin-right:5px"></i> {{$notification->title}}</a>--}}
{{--                                        <p class="opportunity-desc"--}}
{{--                                           style="color:whitesmoke; font-size:12px; font-weight:300"> {{ \Illuminate\Support\Str::words($notification->description, 50, '...') }}</p>--}}
{{--                                    </div>--}}
{{--                                @empty--}}

{{--                                    <div class="opportunity-item">--}}
{{--                                        <h5 class="news-title" style="color:white">No data found</h5>--}}
{{--                                    </div>--}}
{{--                                @endforelse--}}

{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="text-center mt-3">--}}
{{--                            <a href="{{ route('opportunities') }}" class="btn btn-light btn-sm">View All Opportunities</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--            </div>--}}
{{--        </section>--}}
{{--    </div>--}}



{{--    <section class="z-index-1 primary-bg position-relative" data-bg-img="images/bg/04.png">--}}
{{--        <div class="container">--}}
{{--            <div class="row justify-content-center text-center">--}}
{{--                <div class="col-xl-6 col-lg-8 col-md-12">--}}
{{--                    <div class="theme-title text-white">--}}
{{--                        <h6>Facilities</h6>--}}
{{--                        <h2>Departmental <span>Facilities</span></h2>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="container-fluid px-lg-8">--}}
{{--            <div class="row">--}}
{{--                <div class="col">--}}
{{--                    <div class="swiper service-swiper swiper-initialized swiper-horizontal swiper-backface-hidden">--}}
{{--                        <div class="swiper-wrapper" id="swiper-wrapper-af172ab5e1b22ae6" aria-live="off"--}}
{{--                             style="transition-duration: 0ms; transform: translate3d(-534.25px, 0px, 0px); transition-delay: 0ms;">--}}
{{--                            <div class="swiper-slide swiper-slide-prev" role="group" aria-label="1 / 6"--}}
{{--                                 style="width: 534.25px;" data-swiper-slide-index="0">--}}
{{--                                <div class="service-item style-2">--}}
{{--                                    <div class="service-img">--}}
{{--                                        <img class="img-fluid" src="images/service/01.jpg" alt="">--}}
{{--                                        <div class="service-icon">--}}
{{--                                            <i class="flaticon flaticon-biochemistry"></i>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="service-desc">--}}
{{--                                        <div class="service-title">--}}
{{--                                            <h4>BSL3 virus containment facility</h4>--}}
{{--                                        </div>--}}
{{--                                        <p>The primary aim of a BSL-3 (Biosafety Level 3) virus containment facility is to provide a highly secure and controlled environment for the safe handling and study of infectious agents that can cause serious or potentially lethal diseases through inhalation. </p>--}}
{{--                                        <a class="ht-link-btn" href="services-single.html">--}}
{{--                                            <svg xmlns="http://www.w3.org/2000/svg" class="arr-2" viewBox="0 0 24 24">--}}
{{--                                                <path--}}
{{--                                                    d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z"></path>--}}
{{--                                            </svg>--}}
{{--                                            <span>Read More</span>--}}
{{--                                            <svg xmlns="http://www.w3.org/2000/svg" class="arr-1" viewBox="0 0 24 24">--}}
{{--                                                <path--}}
{{--                                                    d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z"></path>--}}
{{--                                            </svg>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="swiper-slide swiper-slide-active" role="group" aria-label="2 / 6"--}}
{{--                                 style="width: 534.25px;" data-swiper-slide-index="1">--}}
{{--                                <div class="service-item style-2">--}}
{{--                                    <div class="service-img">--}}
{{--                                        <img class="img-fluid" src="images/service/02.jpg" alt="">--}}
{{--                                        <div class="service-icon">--}}
{{--                                            <i class="flaticon flaticon-chemistry-4"></i>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="service-desc">--}}
{{--                                        <div class="service-title">--}}
{{--                                            <h4>Structural Biology and Computational Facility</h4>--}}
{{--                                        </div>--}}
{{--                                        <p>Structure determination of proteins and other biological small/macro-molecule for drug development. Computational biology facility to address diverse biologically pertinent issues by developing novel algorithms/resources.</p>--}}
{{--                                        <a class="ht-link-btn" href="services-single.html">--}}
{{--                                            <svg xmlns="http://www.w3.org/2000/svg" class="arr-2" viewBox="0 0 24 24">--}}
{{--                                                <path--}}
{{--                                                    d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z"></path>--}}
{{--                                            </svg>--}}
{{--                                            <span>Read More</span>--}}
{{--                                            <svg xmlns="http://www.w3.org/2000/svg" class="arr-1" viewBox="0 0 24 24">--}}
{{--                                                <path--}}
{{--                                                    d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z"></path>--}}
{{--                                            </svg>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="swiper-slide swiper-slide-next" role="group" aria-label="3 / 6"--}}
{{--                                 style="width: 534.25px;" data-swiper-slide-index="2">--}}
{{--                                <div class="service-item style-2">--}}
{{--                                    <div class="service-img">--}}
{{--                                        <img class="img-fluid" src="images/service/03.jpg" alt="">--}}
{{--                                        <div class="service-icon">--}}
{{--                                            <i class="flaticon flaticon-test"></i>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="service-desc">--}}
{{--                                        <div class="service-title">--}}
{{--                                            <h4>Analytical, Metabolomics and Proteomics Facility</h4>--}}
{{--                                        </div>--}}
{{--                                        <p>Separation, isolation, and identification of small bio-molecules and value-added natural product. Proteomics analyses.</p>--}}
{{--                                        <a class="ht-link-btn" href="services-single.html">--}}
{{--                                            <svg xmlns="http://www.w3.org/2000/svg" class="arr-2" viewBox="0 0 24 24">--}}
{{--                                                <path--}}
{{--                                                    d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z"></path>--}}
{{--                                            </svg>--}}
{{--                                            <span>Read More</span>--}}
{{--                                            <svg xmlns="http://www.w3.org/2000/svg" class="arr-1" viewBox="0 0 24 24">--}}
{{--                                                <path--}}
{{--                                                    d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z"></path>--}}
{{--                                            </svg>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="swiper-slide" role="group" aria-label="4 / 6" style="width: 534.25px;"--}}
{{--                                 data-swiper-slide-index="3">--}}
{{--                                <div class="service-item style-2">--}}
{{--                                    <div class="service-img">--}}
{{--                                        <img class="img-fluid" src="images/service/04.jpg" alt="">--}}
{{--                                        <div class="service-icon">--}}
{{--                                            <i class="flaticon flaticon-biochemistry-1"></i>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="service-desc">--}}
{{--                                        <div class="service-title">--}}
{{--                                            <h4>Drug development and Imaging Facility</h4>--}}
{{--                                        </div>--}}
{{--                                        <p>Drug development using natural and synthetic molecule. High-throughput cell based assays, anti-cancer, anti-diabetic, anti-viral and anti-bacterial drug developmnent. Imaging facility provides affordable user-friendly state of the art imaging services of biological samples to researchers at IIT Roorkee</p>--}}
{{--                                        <a class="ht-link-btn" href="services-single.html">--}}
{{--                                            <svg xmlns="http://www.w3.org/2000/svg" class="arr-2" viewBox="0 0 24 24">--}}
{{--                                                <path--}}
{{--                                                    d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z"></path>--}}
{{--                                            </svg>--}}
{{--                                            <span>Read More</span>--}}
{{--                                            <svg xmlns="http://www.w3.org/2000/svg" class="arr-1" viewBox="0 0 24 24">--}}
{{--                                                <path--}}
{{--                                                    d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z"></path>--}}
{{--                                            </svg>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="swiper-slide " role="group" aria-label="5 / 6"--}}
{{--                                 style="width: 534.25px;" data-swiper-slide-index="0">--}}
{{--                                <div class="service-item style-2">--}}
{{--                                    <div class="service-img">--}}
{{--                                        <img class="img-fluid" src="images/service/01.jpg" alt="">--}}
{{--                                        <div class="service-icon">--}}
{{--                                            <i class="flaticon flaticon-biochemistry"></i>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="service-desc">--}}
{{--                                        <div class="service-title">--}}
{{--                                            <h4>BSL3 virus containment facility</h4>--}}
{{--                                        </div>--}}
{{--                                        <p>The primary aim of a BSL-3 (Biosafety Level 3) virus containment facility is to provide a highly secure and controlled environment for the safe handling and study of infectious agents that can cause serious or potentially lethal diseases through inhalation. </p>--}}
{{--                                        --}}{{--                                        <a class="ht-link-btn" href="services-single.html">--}}
{{--                                        --}}{{--                                            <svg xmlns="http://www.w3.org/2000/svg" class="arr-2" viewBox="0 0 24 24">--}}
{{--                                        --}}{{--                                                <path--}}
{{--                                        --}}{{--                                                    d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z"></path>--}}
{{--                                        --}}{{--                                            </svg>--}}
{{--                                        --}}{{--                                            <span>Read More</span>--}}
{{--                                        --}}{{--                                            <svg xmlns="http://www.w3.org/2000/svg" class="arr-1" viewBox="0 0 24 24">--}}
{{--                                        --}}{{--                                                <path--}}
{{--                                        --}}{{--                                                    d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z"></path>--}}
{{--                                        --}}{{--                                            </svg>--}}
{{--                                        --}}{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="swiper-slide" role="group" aria-label="6 / 6"--}}
{{--                                 style="width: 534.25px;" data-swiper-slide-index="1">--}}
{{--                                <div class="service-item style-2">--}}
{{--                                    <div class="service-img">--}}
{{--                                        <img class="img-fluid" src="images/service/02.jpg" alt="">--}}
{{--                                        <div class="service-icon">--}}
{{--                                            <i class="flaticon flaticon-chemistry-4"></i>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="service-desc">--}}
{{--                                        <div class="service-title">--}}
{{--                                            <h4>Structural Biology and Computational Facility</h4>--}}
{{--                                        </div>--}}
{{--                                        <p>Structure determination of proteins and other biological small/macro-molecule for drug development. Computational biology facility to address diverse biologically pertinent issues by developing novel algorithms/resources.</p>--}}
{{--                                        --}}{{--                                        <a class="ht-link-btn" href="services-single.html">--}}
{{--                                        --}}{{--                                            <svg xmlns="http://www.w3.org/2000/svg" class="arr-2" viewBox="0 0 24 24">--}}
{{--                                        --}}{{--                                                <path--}}
{{--                                        --}}{{--                                                    d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z"></path>--}}
{{--                                        --}}{{--                                            </svg>--}}
{{--                                        --}}{{--                                            <span>Read More</span>--}}
{{--                                        --}}{{--                                            <svg xmlns="http://www.w3.org/2000/svg" class="arr-1" viewBox="0 0 24 24">--}}
{{--                                        --}}{{--                                                <path--}}
{{--                                        --}}{{--                                                    d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z"></path>--}}
{{--                                        --}}{{--                                            </svg>--}}
{{--                                        --}}{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                        </div>--}}
{{--                        <div class="swiper-dots-white">--}}
{{--                            <div id="service-pagination"--}}
{{--                                 class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal">--}}
{{--                                <span class="swiper-pagination-bullet" tabindex="0" role="button"--}}
{{--                                      aria-label="Go to slide 1"></span><span--}}
{{--                                    class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0"--}}
{{--                                    role="button" aria-label="Go to slide 2" aria-current="true"></span><span--}}
{{--                                    class="swiper-pagination-bullet" tabindex="0" role="button"--}}
{{--                                    aria-label="Go to slide 3"></span><span class="swiper-pagination-bullet"--}}
{{--                                                                            tabindex="0" role="button"--}}
{{--                                                                            aria-label="Go to slide 4"></span><span--}}
{{--                                    class="swiper-pagination-bullet" tabindex="0" role="button"--}}
{{--                                    aria-label="Go to slide 5"></span><span class="swiper-pagination-bullet"--}}
{{--                                                                            tabindex="0" role="button"--}}
{{--                                                                            aria-label="Go to slide 6"></span></div>--}}
{{--                        </div>--}}
{{--                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

{{--    @push('scripts')--}}
{{--        <script>--}}
{{--            // Initialize image slider--}}
{{--            const imageSlider = new Swiper('.image-slider', {--}}
{{--                loop: true,--}}
{{--                autoplay: {--}}
{{--                    delay: 5000,--}}
{{--                    disableOnInteraction: false,--}}
{{--                },--}}
{{--                pagination: {--}}
{{--                    el: '.swiper-pagination',--}}
{{--                    clickable: true,--}}
{{--                },--}}
{{--                navigation: {--}}
{{--                    nextEl: '.swiper-button-next',--}}
{{--                    prevEl: '.swiper-button-prev',--}}
{{--                },--}}
{{--            });--}}

{{--            // Pause marquee on hover--}}
{{--            $(document).ready(function () {--}}
{{--                $('.marquee-vertical').each(function () {--}}
{{--                    const marquee = $(this);--}}
{{--                    marquee.hover(function () {--}}
{{--                        marquee.css('animation-play-state', 'paused');--}}
{{--                    }, function () {--}}
{{--                        marquee.css('animation-play-state', 'running');--}}
{{--                    });--}}
{{--                });--}}
{{--            });--}}
{{--        </script>--}}
{{--    @endpush--}}
@endsection

