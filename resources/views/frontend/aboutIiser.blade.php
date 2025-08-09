@extends('frontend.layouts.layout')
@section('content')
    <section class="page-title" style="background-image: url({{asset('assets/front/images/main-slider/aboutiiserBanner.png')}}); background-repeat: no-repeat; background-position: center; background-size: cover">
        <div class="anim-icons full-width">
            <span class="icon icon-bull-eye"></span>
            <span class="icon icon-dotted-circle"></span>
        </div>
        <div class="auto-container">
            <div class="title-outer">
                <h1>About IISER Mohali</h1>
                <ul class="page-breadcrumb">
                    <li><a href="{{route('index')}}">Home</a></li>
                    <li>About IISER</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <section class="about-section-two">
        <div class="anim-icons">
            <span class="icon icon-circle-3"></span>
            <span class="icon icon-circle-4"></span>
        </div>

        <div class="auto-container">
            <div class="row">
                <!-- Content Column -->
                <div class="content-column col-lg-8 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="sec-title">
                            <span class="sub-title">About</span>
                            <h2>About IISER Mohali</h2>
                            <span class="divider"></span>
                            <div class="text">The Indian Institute of Science Education and Research Mohali (IISER Mohali), established in 2007 by the Ministry of Education, Government of India, is a premier institution dedicated to high-quality science education and advanced research. Located on a 125-acre fully residential campus in Punjab, the institute offers integrated BS-MS, PhD, and postgraduate programs that combine strong academic foundations with hands-on research training.
                            </div>
                            <div class="text">IISER Mohali aims to cultivate a new generation of scientists who are intellectually curious, research-oriented, and capable of contributing to emerging areas of basic sciences. The institute fosters a vibrant academic culture that encourages interdisciplinary learning and collaboration across diverse scientific fields such as physics, chemistry, biology, mathematics, and earth sciences.
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Date Column -->
                <div class="date-column col-lg-4 col-md-12 col-sm-12">
                    <div class="date-box-outer">
                        <!-- Date Box Two / Yellow  -->
                        <div class="date-box-one bg_yellow order-2">
                            <span class="day">19</span>
                            <span class="month">Years</span>
                            <span class="title">Since Established</span>
                        </div>

                        <!-- Date Box One / Blue  -->
                        <div class="date-box-one">
                            <span class="day">27</span>
                            <span class="month">September</span>
                            <span class="title">Foundation Day</span>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Fact Counter Two -->

            <!-- Video Box Outer -->
            <div class="video-box-outer">
                <!-- Video Box -->
                <div class="video-box-one order-2">
                    <figure class="image"><img src="{{asset('assets/front/images/organisers/aboutiiser.png')}}" alt=""></figure>
{{--                    <a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-image play-btn wow fadeIn animated" data-wow-delay="500ms" style="visibility: visible; animation-delay: 500ms; animation-name: fadeIn;"><i class="icon flaticon-play-button-1"></i></a>--}}
                </div>

                <!-- Info Box -->
                <div class="info-box-one">
                    <div class="inner-box">
                        <p>With state-of-the-art laboratories, cutting-edge research facilities, and a dynamic faculty engaged in nationally and internationally recognized research, IISER Mohali provides an ideal environment for innovation and discovery. The institute values academic freedom and promotes a broader understanding of the societal relevance of science. As it continues to grow, IISER Mohali is steadily establishing itself as a leading centre for scientific education, research, and interdisciplinary excellence at both the national and global level
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
