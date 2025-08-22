@extends('frontend.layouts.layout')
@section('content')
    <section class="page-title" style="background-image: url({{asset('assets/front/images/main-slider/aboutiiserBanner.png')}}); background-repeat: no-repeat; background-position: center; background-size: cover">
        <div class="anim-icons full-width">
            <span class="icon icon-bull-eye"></span>
            <span class="icon icon-dotted-circle"></span>
        </div>
        <div class="auto-container">
            <div class="title-outer">
                <h1>Contact Us</h1>
                <ul class="page-breadcrumb">
                    <li><a href="{{route('index')}}">Home</a></li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->
    <section class="map-section" style="padding-top: 50px">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="contact-column col-lg-5 col-md-12 col-sm-12 order-2">
                    <div class="inner-column">
                        <div class="sec-title">
                            <h2>Need Help? Contact Us</h2>
                            <span class="divider"></span>
                            <div class="text">Get in touch with us. </div>
                        </div>
                        <ul class="contact-info">
                            <li>
                                <span class="icon fa fa-map-marker-alt"></span>
                                <h4>Our Location:</h4>
                                <p>{{config('app.website_address')}}</p>
                            </li>

{{--                            <li>--}}
{{--                                <span class="icon fa fa-phone-volume"></span>--}}
{{--                                <h4>Phone</h4>--}}
{{--                                <p><a href="tel:{{config('app.website_phone')}}">{{config('app.website_phone')}}</a></p>--}}

{{--                            </li>--}}

                            <li>
                                <span class="icon fa fa-envelope"></span>
                                <h4>Email:</h4>
                                <p><a href="mailto:{{config('app.website_email')}}">{{config('app.website_email')}}</a></p>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Form Column -->
                <div class="map-column col-lg-7 col-md-12 col-sm-12">
                    <!--Map Outer-->
                    <div class="map-outer">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2829.643359313102!2d76.72820389449163!3d30.664925280523125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390fe955afa88bcf%3A0xab6356114a6f197f!2sIISER%20Mohali!5e1!3m2!1sen!2sin!4v1754730795796!5m2!1sen!2sin" allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
