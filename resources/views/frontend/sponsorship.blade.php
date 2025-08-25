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

    <section class="clients-section">

        <div class="auto-container">

            <div class="row">

                <!-- Title Column -->

                <div class="title-column col-xl-12 col-lg-12 col-md-12">

                    <div class="sec-title">


                        <h2>Our Official Sponsors</h2>

                        <div class="divider"></div>

                        {{--                        <div class="text">We have dedicated tracks for every industry Whether you want to hire tech’s top talent.</div>--}}

                        {{--                        <a href="javascript:void(0)" class="theme-btn btn-style-one mt-4"><span class="btn-title">Buy Ticket</span></a>--}}

                    </div>

                </div>



                <!-- Title Column -->

                <div class="title-column col-xl-12 col-lg-12 col-md-12">
                    <div class="sponsors-outer">
                        <div class="row">
                            <div class="client-block col-lg-4 col-md-6 col-sm-12 wow fadeInRight">
                                <figure class="image-box"><a href="javascript:void(0)"><img src="{{asset('assets/front/images/clients/iiser.png')}}" alt=""></a></figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>


@endsection
