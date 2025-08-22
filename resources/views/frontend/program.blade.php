@extends('frontend.layouts.layout')
@section('content')
    <section class="page-title" style="background-image: url({{asset('assets/front/images/main-slider/program.png')}}); background-repeat: no-repeat; background-size: cover; background-position: center">
        <div class="anim-icons full-width">
            <span class="icon icon-bull-eye"></span>
            <span class="icon icon-dotted-circle"></span>
        </div>
        <div class="auto-container">
            <div class="title-outer">
                <h1>Daily Program</h1>
                <ul class="page-breadcrumb">
                    <li><a href="{{route('index')}}">Home</a></li>
                    <li>Daily Program</li>
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


    {{--    <section class="schedule-section-two">--}}
{{--        <div class="anim-icons full-width">--}}
{{--            <span class="icon icon-circle-2"></span>--}}
{{--        </div>--}}

{{--        <div class="auto-container">--}}
{{--            <div class="schedule-tabs tabs-box">--}}

{{--                <div class="sec-title-outer">--}}

{{--                    <div class="sec-title">--}}
{{--                        <span class="sub-title">Thought leadership</span>--}}
{{--                        <h2>Join the world's leading companies at Technology Conference</h2>--}}
{{--                        <span class="divider"></span>--}}
{{--                    </div>--}}

{{--                    <div class="btns-box">--}}
{{--                        <!--Tabs Box-->--}}
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
{{--                    </div>--}}

{{--                </div>--}}

{{--                <div class="tabs-content">--}}
{{--                    <!--Tab-->--}}
{{--                    <div class="tab active-tab" id="tab-1">--}}
{{--                        <div class="schedule-timeline">--}}
{{--                            <!-- schedule Block -->--}}
{{--                            <div class="schedule-block-two">--}}
{{--                                <div class="inner-box">--}}
{{--                                    <div class="date-box">--}}
{{--                                        <span class="count">01</span>--}}
{{--                                        <h4>1 December 2025</h4>--}}
{{--                                        <span class="time">08:00 am - 10:00 am</span>--}}
{{--                                    </div>--}}
{{--                                    <h3><a href="javascript:void(0)">Social Profit from Venture (SROI) Gathering</a></h3>--}}
{{--                                    <div class="speaker-info">--}}
{{--                                        <figure class="thumb">--}}
{{--                                            <img src="{{asset('assets/front/images/resource/thumb-1.jpg')}}" alt="">--}}
{{--                                        </figure>--}}
{{--                                        <span class="icon fa fa-microphone"></span>--}}
{{--                                        <h5 class="name">Tripp Mckay</h5>--}}
{{--                                        <span class="designation">Historian</span>--}}
{{--                                    </div>--}}
{{--                                    <div class="btn-box">--}}
{{--                                        <a href="javascript:void(0)" class="theme-btn btn-style-one"><span class="btn-title">Book Ticket</span></a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <!-- schedule Block -->--}}
{{--                            <div class="schedule-block-two">--}}
{{--                                <div class="inner-box">--}}
{{--                                    <div class="date-box">--}}
{{--                                        <span class="count">02</span>--}}
{{--                                        <h4>1 December 2025</h4>--}}
{{--                                        <span class="time">10:00 am - 11:00 am</span>--}}
{{--                                    </div>--}}
{{--                                    <h3><a href="javascript:void(0)">Marine and Oceanic Government Workers</a></h3>--}}
{{--                                    <div class="speaker-info">--}}
{{--                                        <figure class="thumb">--}}
{{--                                            <img src="{{asset('assets/front/images/resource/thumb-2.jpg')}}" alt="">--}}
{{--                                        </figure>--}}
{{--                                        <span class="icon fa fa-microphone"></span>--}}
{{--                                        <h5 class="name">Milana Myles</h5>--}}
{{--                                        <span class="designation">Art Critic</span>--}}
{{--                                    </div>--}}
{{--                                    <div class="btn-box">--}}
{{--                                        <a href="javascript:void(0)" class="theme-btn btn-style-one"><span class="btn-title">Book Ticket</span></a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <!-- schedule Block -->--}}
{{--                            <div class="schedule-block-two">--}}
{{--                                <div class="inner-box">--}}
{{--                                    <div class="date-box">--}}
{{--                                        <span class="count">03</span>--}}
{{--                                        <h4>1 December 2025</h4>--}}
{{--                                        <span class="time">11:00 am - 12:00 am</span>--}}
{{--                                    </div>--}}
{{--                                    <h3><a href="javascript:void(0)">Home Life Open Entryway Open Occasion of 21</a></h3>--}}
{{--                                    <div class="speaker-info">--}}
{{--                                        <figure class="thumb">--}}
{{--                                            <img src="{{asset('assets/front/images/resource/thumb-3.jpg')}}" alt="">--}}
{{--                                        </figure>--}}
{{--                                        <span class="icon fa fa-microphone"></span>--}}
{{--                                        <h5 class="name">Gabrielle Winn</h5>--}}
{{--                                        <span class="designation">Insurance consultant</span>--}}
{{--                                    </div>--}}
{{--                                    <div class="btn-box">--}}
{{--                                        <a href="javascript:void(0)" class="theme-btn btn-style-one"><span class="btn-title">Book Ticket</span></a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <!-- schedule Block -->--}}
{{--                            <div class="schedule-block-two">--}}
{{--                                <div class="inner-box">--}}
{{--                                    <div class="date-box">--}}
{{--                                        <span class="count">04</span>--}}
{{--                                        <h4>1 December 2025</h4>--}}
{{--                                        <span class="time">12:00 am - 01:00 am</span>--}}
{{--                                    </div>--}}
{{--                                    <h3><a href="javascript:void(0)">Developing Force Legislative issues of Arctics Motivation</a></h3>--}}
{{--                                    <div class="speaker-info">--}}
{{--                                        <figure class="thumb">--}}
{{--                                            <img src="{{asset('assets/front/images/resource/thumb-4.jpg')}}" alt="">--}}
{{--                                        </figure>--}}
{{--                                        <span class="icon fa fa-microphone"></span>--}}
{{--                                        <h5 class="name">Rene Wells</h5>--}}
{{--                                        <span class="designation">Rene Wells</span>--}}
{{--                                    </div>--}}
{{--                                    <div class="btn-box">--}}
{{--                                        <a href="javascript:void(0)" class="theme-btn btn-style-one"><span class="btn-title">Book Ticket</span></a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <!--Tab-->--}}
{{--                    <div class="tab" id="tab-2">--}}
{{--                        <div class="schedule-timeline">--}}
{{--                            <!-- schedule Block -->--}}
{{--                            <div class="schedule-block-two">--}}
{{--                                <div class="inner-box">--}}
{{--                                    <div class="date-box">--}}
{{--                                        <span class="count">01</span>--}}
{{--                                        <h4>2 December 2025</h4>--}}
{{--                                        <span class="time">08:00 am - 10:00 am</span>--}}
{{--                                    </div>--}}
{{--                                    <h3><a href="javascript:void(0)">Social Profit from Venture (SROI) Gathering</a></h3>--}}
{{--                                    <div class="speaker-info">--}}
{{--                                        <figure class="thumb">--}}
{{--                                            <img src="{{asset('assets/front/images/resource/thumb-1.jpg')}}" alt="">--}}
{{--                                        </figure>--}}
{{--                                        <span class="icon fa fa-microphone"></span>--}}
{{--                                        <h5 class="name">Tripp Mckay</h5>--}}
{{--                                        <span class="designation">Historian</span>--}}
{{--                                    </div>--}}
{{--                                    <div class="btn-box">--}}
{{--                                        <a href="javascript:void(0)" class="theme-btn btn-style-one"><span class="btn-title">Book Ticket</span></a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <!-- schedule Block -->--}}
{{--                            <div class="schedule-block-two">--}}
{{--                                <div class="inner-box">--}}
{{--                                    <div class="date-box">--}}
{{--                                        <span class="count">02</span>--}}
{{--                                        <h4>2 December 2025</h4>--}}
{{--                                        <span class="time">10:00 am - 11:00 am</span>--}}
{{--                                    </div>--}}
{{--                                    <h3><a href="javascript:void(0)">Marine and Oceanic Government Workers</a></h3>--}}
{{--                                    <div class="speaker-info">--}}
{{--                                        <figure class="thumb">--}}
{{--                                            <img src="{{asset('assets/front/images/resource/thumb-2.jpg')}}" alt="">--}}
{{--                                        </figure>--}}
{{--                                        <span class="icon fa fa-microphone"></span>--}}
{{--                                        <h5 class="name">Milana Myles</h5>--}}
{{--                                        <span class="designation">Art Critic</span>--}}
{{--                                    </div>--}}
{{--                                    <div class="btn-box">--}}
{{--                                        <a href="javascript:void(0)" class="theme-btn btn-style-one"><span class="btn-title">Book Ticket</span></a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <!-- schedule Block -->--}}
{{--                            <div class="schedule-block-two">--}}
{{--                                <div class="inner-box">--}}
{{--                                    <div class="date-box">--}}
{{--                                        <span class="count">03</span>--}}
{{--                                        <h4>2 December 2025</h4>--}}
{{--                                        <span class="time">11:00 am - 12:00 am</span>--}}
{{--                                    </div>--}}
{{--                                    <h3><a href="javascript:void(0)">Home Life Open Entryway Open Occasion of 21</a></h3>--}}
{{--                                    <div class="speaker-info">--}}
{{--                                        <figure class="thumb">--}}
{{--                                            <img src="{{asset('assets/front/images/resource/thumb-3.jpg')}}" alt="">--}}
{{--                                        </figure>--}}
{{--                                        <span class="icon fa fa-microphone"></span>--}}
{{--                                        <h5 class="name">Gabrielle Winn</h5>--}}
{{--                                        <span class="designation">Insurance consultant</span>--}}
{{--                                    </div>--}}
{{--                                    <div class="btn-box">--}}
{{--                                        <a href="javascript:void(0)" class="theme-btn btn-style-one"><span class="btn-title">Book Ticket</span></a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <!-- schedule Block -->--}}
{{--                            <div class="schedule-block-two">--}}
{{--                                <div class="inner-box">--}}
{{--                                    <div class="date-box">--}}
{{--                                        <span class="count">04</span>--}}
{{--                                        <h4>2 December 2025</h4>--}}
{{--                                        <span class="time">12:00 am - 01:00 am</span>--}}
{{--                                    </div>--}}
{{--                                    <h3><a href="javascript:void(0)">Developing Force Legislative issues of Arctics Motivation</a></h3>--}}
{{--                                    <div class="speaker-info">--}}
{{--                                        <figure class="thumb">--}}
{{--                                            <img src="{{asset('assets/front/images/resource/thumb-4.jpg')}}" alt="">--}}
{{--                                        </figure>--}}
{{--                                        <span class="icon fa fa-microphone"></span>--}}
{{--                                        <h5 class="name">Rene Wells</h5>--}}
{{--                                        <span class="designation">Rene Wells</span>--}}
{{--                                    </div>--}}
{{--                                    <div class="btn-box">--}}
{{--                                        <a href="javascript:void(0)" class="theme-btn btn-style-one"><span class="btn-title">Book Ticket</span></a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <!--Tab-->--}}
{{--                    <div class="tab" id="tab-3">--}}
{{--                        <div class="schedule-timeline">--}}
{{--                            <!-- schedule Block -->--}}
{{--                            <div class="schedule-block-two">--}}
{{--                                <div class="inner-box">--}}
{{--                                    <div class="date-box">--}}
{{--                                        <span class="count">01</span>--}}
{{--                                        <h4>3 December 2025</h4>--}}
{{--                                        <span class="time">08:00 am - 10:00 am</span>--}}
{{--                                    </div>--}}
{{--                                    <h3><a href="javascript:void(0)">Social Profit from Venture (SROI) Gathering</a></h3>--}}
{{--                                    <div class="speaker-info">--}}
{{--                                        <figure class="thumb">--}}
{{--                                            <img src="{{asset('assets/front/images/resource/thumb-1.jpg')}}" alt="">--}}
{{--                                        </figure>--}}
{{--                                        <span class="icon fa fa-microphone"></span>--}}
{{--                                        <h5 class="name">Tripp Mckay</h5>--}}
{{--                                        <span class="designation">Historian</span>--}}
{{--                                    </div>--}}
{{--                                    <div class="btn-box">--}}
{{--                                        <a href="javascript:void(0)" class="theme-btn btn-style-one"><span class="btn-title">Book Ticket</span></a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <!-- schedule Block -->--}}
{{--                            <div class="schedule-block-two">--}}
{{--                                <div class="inner-box">--}}
{{--                                    <div class="date-box">--}}
{{--                                        <span class="count">02</span>--}}
{{--                                        <h4>3 December 2025</h4>--}}
{{--                                        <span class="time">10:00 am - 11:00 am</span>--}}
{{--                                    </div>--}}
{{--                                    <h3><a href="javascript:void(0)">Marine and Oceanic Government Workers</a></h3>--}}
{{--                                    <div class="speaker-info">--}}
{{--                                        <figure class="thumb">--}}
{{--                                            <img src="{{asset('assets/front/images/resource/thumb-2.jpg')}}" alt="">--}}
{{--                                        </figure>--}}
{{--                                        <span class="icon fa fa-microphone"></span>--}}
{{--                                        <h5 class="name">Milana Myles</h5>--}}
{{--                                        <span class="designation">Art Critic</span>--}}
{{--                                    </div>--}}
{{--                                    <div class="btn-box">--}}
{{--                                        <a href="javascript:void(0)" class="theme-btn btn-style-one"><span class="btn-title">Book Ticket</span></a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <!-- schedule Block -->--}}
{{--                            <div class="schedule-block-two">--}}
{{--                                <div class="inner-box">--}}
{{--                                    <div class="date-box">--}}
{{--                                        <span class="count">03</span>--}}
{{--                                        <h4>3 December 2025</h4>--}}
{{--                                        <span class="time">11:00 am - 12:00 am</span>--}}
{{--                                    </div>--}}
{{--                                    <h3><a href="javascript:void(0)">Home Life Open Entryway Open Occasion of 21</a></h3>--}}
{{--                                    <div class="speaker-info">--}}
{{--                                        <figure class="thumb">--}}
{{--                                            <img src="{{asset('assets/front/images/resource/thumb-3.jpg')}}" alt="">--}}
{{--                                        </figure>--}}
{{--                                        <span class="icon fa fa-microphone"></span>--}}
{{--                                        <h5 class="name">Gabrielle Winn</h5>--}}
{{--                                        <span class="designation">Insurance consultant</span>--}}
{{--                                    </div>--}}
{{--                                    <div class="btn-box">--}}
{{--                                        <a href="javascript:void(0)" class="theme-btn btn-style-one"><span class="btn-title">Book Ticket</span></a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <!-- schedule Block -->--}}
{{--                            <div class="schedule-block-two">--}}
{{--                                <div class="inner-box">--}}
{{--                                    <div class="date-box">--}}
{{--                                        <span class="count">04</span>--}}
{{--                                        <h4>3 December 2025</h4>--}}
{{--                                        <span class="time">12:00 am - 01:00 am</span>--}}
{{--                                    </div>--}}
{{--                                    <h3><a href="javascript:void(0)">Developing Force Legislative issues of Arctics Motivation</a></h3>--}}
{{--                                    <div class="speaker-info">--}}
{{--                                        <figure class="thumb">--}}
{{--                                            <img src="{{asset('assets/front/images/resource/thumb-4.jpg')}}" alt="">--}}
{{--                                        </figure>--}}
{{--                                        <span class="icon fa fa-microphone"></span>--}}
{{--                                        <h5 class="name">Rene Wells</h5>--}}
{{--                                        <span class="designation">Rene Wells</span>--}}
{{--                                    </div>--}}
{{--                                    <div class="btn-box">--}}
{{--                                        <a href="javascript:void(0)" class="theme-btn btn-style-one"><span class="btn-title">Book Ticket</span></a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}


@endsection
