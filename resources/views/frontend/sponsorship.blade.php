@extends('frontend.layouts.layout')
@section('content')
    <section class="page-title" style="background-image: url({{asset('assets/front/images/main-slider/aboutiiserBanner.png')}}); background-repeat: no-repeat; background-position: center; background-size: cover">
        <div class="anim-icons full-width">
            <span class="icon icon-bull-eye"></span>
            <span class="icon icon-dotted-circle"></span>
        </div>
        <div class="auto-container">
            <div class="title-outer">
{{--                <h1>Sponsorship</h1>--}}
{{--                <ul class="page-breadcrumb">--}}
{{--                    <li><a href="{{route('index')}}">Home</a></li>--}}
{{--                    <li>Sponsorship</li>--}}
{{--                </ul>--}}
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <section class="gallery-section style-two" style="padding-top: 30px; padding-bottom: 0px">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h2>Sponsorship</h2>
                <span class="divider"></span>
            </div>
            <div class="row">
                <!-- Gallery Block -->
                <div class="gallery-block col-lg-12 col-md-12 col-sm-12">
                    <div class="image-box">
                        <figure class="image"><img src="{{asset('assets/front/images/sponsorship/sponsorship.jpg')}}" alt=""></figure>
                    </div>
                </div>

            </div>

        </div>
    </section>



@endsection
