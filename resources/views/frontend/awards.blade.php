@extends('frontend.layouts.layout')
@section('content')
    <section class="page-title" style="background-image: url({{asset('assets/front/images/main-slider/awards.png')}}); background-repeat: no-repeat; background-position: center; background-size: cover">
        <div class="anim-icons full-width">
            <span class="icon icon-bull-eye"></span>
            <span class="icon icon-dotted-circle"></span>
        </div>
        <div class="auto-container">
            <div class="title-outer">
                <h1>Awards</h1>
                <ul class="page-breadcrumb">
                    <li><a href="{{route('index')}}">Home</a></li>
                    <li>Awards</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->
    <section class="map-section" style="padding-top: 50px">
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Form Column -->
                <div class="map-column col-lg-12 col-md-12 col-sm-12">
                    <!--Map Outer-->
                    <div class="map-outer" style="position: relative">

                        <img src="{{asset('assets/front/images/background/comming-soon.png')}}" alt="" style="width: 100%; height: 100%">
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
