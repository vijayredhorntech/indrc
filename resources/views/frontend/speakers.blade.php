@extends('frontend.layouts.layout')
@section('content')
    <section class="page-title" style="background-image: url({{asset('assets/front/images/main-slider/aboutiiserBanner.png')}}); background-repeat: no-repeat; background-position: center; background-size: cover">
        <div class="anim-icons full-width">
            <span class="icon icon-bull-eye"></span>
            <span class="icon icon-dotted-circle"></span>
        </div>
        <div class="auto-container">
            <div class="title-outer">
                <h1>Speakers</h1>
                <ul class="page-breadcrumb">
                    <li><a href="{{route('index')}}">Home</a></li>
                    <li>Speakers</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->


    <section class="speakers-section">
        <div class="anim-icons full-width">
            <span class="icon icon-dotted-circle"></span>
        </div>

        <div class="auto-container">
            <div class="sec-title text-center">
                <span class="sub-title">Our SPEAKERS</span>
                <h2>Invited Speakers</h2>
                <span class="divider"></span>
            </div>

            <div class="row">
                <div class="speaker-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;" >
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="javascript:void(0)"><img src="{{asset('assets/front/images/Speakers/adam.png')}}" alt=""></a></figure>
                        </div>
                        <div class="info-box">
                            <h4 class="name" style="text-align: center"><a href="javascript:void(0)">Dr. Adam Chippindale</a></h4>
                            <p class="designation" style="text-align: center; line-height: 20px; margin-top: 10px">Evolutionary Genetics</p>
                            <p class="designation" style="text-align: center">Queen's University, Canada</p>
                        </div>
                    </div>
                </div>
                <div class="speaker-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp animated" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="javascript:void(0)"><img src="{{asset('assets/front/images/Speakers/adrian.png')}}" alt=""></a></figure>
                        </div>
                        <div class="info-box">
                            <h4 class="name" style="text-align: center"><a href="javascript:void(0)">Dr. Adrian Moore</a></h4>
                            <p class="designation" style="text-align: center; line-height: 20px; margin-top: 10px">Neurodiversity</p>
                            <p class="designation" style="text-align: center">Riken Center for Brain Science</p>
                        </div>
                    </div>
                </div>
                <div class="speaker-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp animated" data-wow-delay="600ms" style="visibility: visible; animation-delay: 600ms; animation-name: fadeInUp;" >
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="javascript:void(0)"><img src="{{asset('assets/front/images/Speakers/erick.png')}}" alt=""></a></figure>
                        </div>
                        <div class="info-box">
                            <h4 class="name" style="text-align: center"><a href="javascript:void(0)">Dr. Erika Bach</a></h4>
                            <p class="designation" style="text-align: center; line-height: 20px; margin-top: 10px">Department of Biochemistry and Molecular Pharmacology</p>
                            <p class="designation" style="text-align: center">NYU Langone Health</p>
                        </div>
                    </div>
                </div>
                <div class="speaker-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp animated" data-wow-delay="1200ms" style="visibility: visible; animation-delay: 1200ms; animation-name: fadeInUp;">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="javascript:void(0)"><img src="{{asset('assets/front/images/Speakers/marco.png')}}" alt=""></a></figure>
                        </div>
                        <div class="info-box">
                            <h4 class="name" style="text-align: center"><a href="javascript:void(0)">Dr. Marco Milan</a></h4>
                            <p class="designation" style="text-align: center; line-height: 20px; margin-top: 10px">Development and Growth Control Laboratory</p>
                            <p class="designation" style="text-align: center">IRB Barcelona</p>
                        </div>
                    </div>
                </div>
                <div class="speaker-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp animated" data-wow-delay="1500ms" style="visibility: visible; animation-delay: 1500ms; animation-name: fadeInUp;">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="javascript:void(0)"><img src="{{asset('assets/front/images/Speakers/teena.png')}}" alt=""></a></figure>
                        </div>
                        <div class="info-box">
                            <h4 class="name" style="text-align: center"><a href="javascript:void(0)">Dr. Tina Mukherjee</a></h4>
                            <p class="designation" style="text-align: center; line-height: 20px; margin-top: 10px">Metabolism And Development Lab</p>
                            <p class="designation" style="text-align: center">inStem, Bangalore, India</p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>

@endsection
