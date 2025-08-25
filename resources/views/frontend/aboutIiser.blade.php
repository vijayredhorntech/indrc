@extends('frontend.layouts.layout')
@section('content')
    <section class="page-title" style="background-image: url({{asset('assets/front/images/main-slider/aboutiiserBanner.png')}}); background-repeat: no-repeat; background-position: center; background-size: cover">
        <div class="anim-icons full-width">
            <span class="icon icon-bull-eye"></span>
            <span class="icon icon-dotted-circle"></span>
        </div>
        <div class="auto-container">
            <div class="title-outer">
{{--                <h1>About IISER Mohali</h1>--}}
{{--                <ul class="page-breadcrumb">--}}
{{--                    <li><a href="{{route('index')}}">Home</a></li>--}}
{{--                    <li>About IISER</li>--}}
{{--                </ul>--}}
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <section class="about-section-two">
{{--        <div class="anim-icons">--}}
{{--            <span class="icon icon-circle-3"></span>--}}
{{--            <span class="icon icon-circle-4"></span>--}}
{{--        </div>--}}

        <div class="auto-container">
            <div class="row">
                <!-- Content Column -->
                <div class="content-column col-lg-8 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="sec-title">
{{--                            <span class="sub-title">About</span>--}}
                            <h2>About IISER Mohali</h2>
                            <span class="divider"></span>
                            <div class="text" style="text-align: justify">The Indian Institute of Science Education and Research Mohali (IISER Mohali), which was
                                established in 2007 by the Ministry of Education, Government of India, stands as a premier
                                Institution that excels in both Science, Education and Research. Strategically located on a 125-
                                acre residential campus in Punjab, IISER Mohali offers a robust educational framework through
                                its integrated undergraduate (BS-MS), postgraduate, and doctoral (PhD) programs. These
                                programs combine rigorous academic training with invaluable hands-on research experience.</div>
                            <div class="text" style="text-align: justify">IISER Mohali is committed to developing the next generation of scientists who are fueled by
                                curiosity, inspired by innovation, and devoted to expanding knowledge in emerging areas of
                                basic sciences. The Institute promotes an intellectually stimulating and inclusive atmosphere
                                that encourages interdisciplinary collaborations across various fields, including physics,
                                chemistry, biology, mathematics, and earth and environmental sciences.s</div>
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
            <div class="row" style="margin-top: 30px">

                 <div class="col-lg-6 col-md-6 col-sm-12">
                     <div class="inner-box">
                         <p style="text-align: justify">  Equipped with state-of-the-art laboratories and advanced research facilities, alongside highly
                             qualified faculties, IISER Mohali is at the forefront of high-impact research focused on
                             addressing both fundamental scientific questions and pressing real-world challenges. The
                             Institute champions academic freedom, critical thinking, and societal relevance, effectively
                             preparing its students to become adept researchers and conscientious global citizens.
                             As a dynamic hub of scientific excellence, IISER Mohali is shaping the future of science
                             education and innovation both in India and on the global stage.</p>
                     </div>
                 </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                        <img src="{{asset('assets/front/images/organisers/aboutiiser.png')}}" alt="">
                </div>
            </div>




        </div>
    </section>
@endsection
