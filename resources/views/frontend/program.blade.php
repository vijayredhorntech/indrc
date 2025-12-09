@extends('frontend.layouts.layout')
@section('content')
    <section class="page-title" style="background-image: url({{asset('assets/front/images/main-slider/program.png')}}); background-repeat: no-repeat; background-size: cover; background-position: center">
        <div class="anim-icons full-width">
            <span class="icon icon-bull-eye"></span>
            <span class="icon icon-dotted-circle"></span>
        </div>
        <div class="auto-container">
            <div class="title-outer">
{{--                <h1>Daily Program</h1>--}}
{{--                <ul class="page-breadcrumb">--}}
{{--                    <li><a href="{{route('index')}}">Home</a></li>--}}
{{--                    <li>Daily Program</li>--}}
{{--                </ul>--}}
            </div>
        </div>
    </section>
    <!--End Page Title-->

        <section class="schedule-section-two">
        <div class="anim-icons full-width">
            <span class="icon icon-circle-2"></span>
        </div>

        <div class="auto-container">
            <div class="schedule-tabs tabs-box">

                <div class="sec-title-outer">

                    <div class="sec-title">
                        <h2>Upcoming Programs</h2>
                        <span class="divider"></span>
                    </div>

                    <div class="btns-box">
                        <!--Tabs Box-->
{{--                        <ul class="tab-buttons clearfix">--}}
{{--                            <li class="tab-btn active-btn" data-tab="#tab-1">--}}
{{--                                <span class="day">1st Day</span>--}}
{{--                                <div class="date-box">--}}
{{--                                    <span class="date">1</span>--}}
{{--                                    <span class="month"><span class="colored">Dec</span> 2025</span>--}}
{{--                                </div>--}}
{{--                            </li>--}}

{{--                            <li class="tab-btn" data-tab="#tab-2">--}}
{{--                                <span class="day">2nd Day</span>--}}
{{--                                <div class="date-box">--}}
{{--                                    <span class="date">2</span>--}}
{{--                                    <span class="month"><span class="colored">Dec</span> 2025</span>--}}
{{--                                </div>--}}
{{--                            </li>--}}

{{--                            <li class="tab-btn" data-tab="#tab-3">--}}
{{--                                <span class="day">3rd Day</span>--}}
{{--                                <div class="date-box">--}}
{{--                                    <span class="date">3</span>--}}
{{--                                    <span class="month"><span class="colored">Dec</span> 2025</span>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
                    </div>

                </div>

                <div class="tabs-content">
                    <!--Tab-->
                    <div class="tab active-tab" id="tab-1">
                        <div class="schedule-timeline">
                            <!-- schedule Block -->
                            <div class="schedule-block-two">
                                <div class="inner-box">
                                    <div class="date-box">
                                        <span class="count">01</span>
                                        <h4>11 -13 December 2025</h4>
{{--                                        <span class="time">08:00 am - 10:00 am</span>--}}
                                    </div>
                                    <h3><a href="{{asset('assets/pdf/programe/Abstract Book InDRC2025 Final.pdf')}}" target="_blank">7th Indian Drosophila Research COnference</a></h3>
                                    <div class="btn-box">
                                        <a href="{{asset('assets/pdf/programe/Scientific Program InDRC2025.pdf')}}" target="_blank" class="theme-btn btn-style-one"><span class="btn-title">View Details</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


@endsection
