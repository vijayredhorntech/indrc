@extends('frontend.layouts.layout')
@section('content')
    <section class="page-title" style="background-image: url({{asset('assets/front/images/main-slider/aboutiiserBanner.png')}}); background-repeat: no-repeat; background-position: center; background-size: cover">
        <div class="anim-icons full-width">
            <span class="icon icon-bull-eye"></span>
            <span class="icon icon-dotted-circle"></span>
        </div>
        <div class="auto-container">
            <div class="title-outer">
{{--                <h1>Accommodations</h1>--}}
{{--                <ul class="page-breadcrumb">--}}
{{--                    <li><a href="{{route('index')}}">Home</a></li>--}}
{{--                    <li>Accommodations</li>--}}
{{--                </ul>--}}
            </div>
        </div>
    </section>
    <!--End Page Title-->
    <section class="gallery-section style-two" style="padding-top: 50px; padding-bottom: 0px">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h2>Accommodations</h2>
                <span class="divider"></span>
            </div>
            <div class="row">
                <!-- Gallery Block -->
                <div class="gallery-block col-lg-6 col-md-6 col-sm-12">
                    <div class="image-box">
                        <figure class="image" >
                            <img src="{{asset('assets/front/images/acommodations/1.jpg')}}" alt="" style="height: 500px">
                        </figure>

                    </div>
                </div>
                <div class="gallery-block col-lg-6 col-md-6 col-sm-12">
                    <div class="image-box">
                        <figure class="image"><img src="{{asset('assets/front/images/acommodations/2.jpeg')}}" alt="" style="height: 500px"></figure>
                        {{--                        <div class="overlay-box">--}}
                        {{--                            <div class="icon"><img src="images/icons/logo.png" alt=""></div>--}}
                        {{--                            <h3><a href="schedule-detail.html">Conference Hall</a></h3>--}}
                        {{--                            <span class="text">Event # 15</span>--}}
                        {{--                        </div>--}}
                    </div>
                </div>



            </div>

        </div>
    </section>


@endsection
