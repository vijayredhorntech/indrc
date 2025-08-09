@extends('frontend.layouts.layout')
@section('content')
    <section class="page-title" style="background-image: url({{asset('assets/front/images/main-slider/aboutiiserBanner.png')}}); background-repeat: no-repeat; background-position: center; background-size: cover">
        <div class="anim-icons full-width">
            <span class="icon icon-bull-eye"></span>
            <span class="icon icon-dotted-circle"></span>
        </div>
        <div class="auto-container">
            <div class="title-outer">
                <h1>Weather</h1>
                <ul class="page-breadcrumb">
                    <li><a href="{{route('index')}}">Home</a></li>
                    <li>Weather</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <section class="about-section-two" style="padding-top: 50px; padding-bottom: 0px">
        <div class="auto-container">
            <div class="row">
                <div class="content-column col-lg-4 col-md-5 col-sm-12">
                        <video controls height="500" style="width: 100%">
                            <source src="{{asset('assets/front/videos/Winter@iiserm.mp4')}}" type="video/mp4">
                            <source src="{{asset('assets/front/videos/Winter@iiserm.mp4')}}" type="video/ogg">
                            Your browser does not support the video tag.
                        </video>
                    <span>Video Credit : Jaseem Shan</span>
                </div>
                <div class="content-column col-lg-8 col-md-7 col-sm-12">
                    <div class="inner-column">
                        <div class="sec-title">
                            <span class="sub-title">Weather</span>
                            <h2>About Weather</h2>
                            <span class="divider"></span>
                            <div class="text">For the conference at IISER Mohali from December 11–13, 2025, expect mild winter weather with daytime highs of 20–22°C and chilly nights around 7–9°C. Skies will likely be clear to partly cloudy, with a low 4–30% chance of light showers. Pack business casual attire like long-sleeve shirts and trousers, paired with a light jacket or sweater for cooler mornings and evenings. Bring a scarf, umbrella, and comfortable shoes to stay prepared for variable conditions. Check local forecasts closer to the date for updates.</div>

                        </div>
                    </div>
                </div>


            </div>




        </div>

    </section>


@endsection
