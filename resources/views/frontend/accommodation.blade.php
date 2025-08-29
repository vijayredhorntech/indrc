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
            <div class="row">
                <div class=" col-lg-6 col-md-6 col-sm-12">
                    <div class="inner-column">
                        <div class="sec-title" style="text-align: justify">
                            <h2 style="margin-top: 20px">Accommodation</h2>
                            <span class="divider"></span>

                            <div class="text" style="margin-top: 10px; padding-left: 20px"><strong>• Faculty/Scientists:</strong> Will be accommodated at the IISER Mohali Guest House (Visitor Hostel).</div>
                            <div class="text" style="margin-top: 5px; padding-left: 20px"><strong>• Students/Postdocs:</strong> Will be accommodated in the IISER Mohali hostels.</div>
                            <span class="divider"></span>

                            <h3 style="margin-top: 20px">Accommodation Charges</h3>
                            <div class="text" style="margin-top: 10px">Please indicate your need for accommodation and the number of nights required during registration. Payment for accommodation must be made along with the registration fee.</div>
                            <div class="text" style="margin-top: 10px; padding-left: 20px"><strong>• Students/Postdocs:</strong> Rs. 500 per night (GST included)</div>
                            <div class="text" style="margin-top: 5px; padding-left: 20px"><strong>• Faculty/Scientists:</strong> Rs. 900 per night (GST included)</div>

                            <span class="divider"></span>

                            <h3 style="margin-top: 20px">Information for Accompanying Persons</h3>
                            <div class="text" style="margin-top: 10px">Accompanying persons (family members or friends) must register if they wish to attend social events, meals, and the conference dinner. For details on registration and accommodation charges for accompanying persons, please email the organizers at <strong>indrciiserm2025@gmail.com</strong> with the subject line: “Query about accompanying person.”</div>
                            <span class="divider"></span>
                            <h3 style="margin-top: 20px"><a href="{{route('registration')}}#registrationHeading">Click here</a> for registration page</h3>

                        </div>
                    </div>

                </div>
                <div class=" col-lg-6 col-md-6 col-sm-12">
                    <div class="gallery-block col-lg-12 col-md-12 col-sm-12">
                        <div class="image-box" style="margin-top: 20px; display: flex; justify-content: center">
                            <figure class="image" >
                                <img src="{{asset('assets/front/images/acommodations/1.jpg')}}" alt="" style="height: 400px; width: 400px; object-fit: cover">
                            </figure>

                        </div>
                    </div>
                    <div class="gallery-block col-lg-12 col-md-12 col-sm-12">
                        <div class="image-box" style=" display: flex; justify-content: center">
                            <figure class="image"><img src="{{asset('assets/front/images/acommodations/2.jpeg')}}" alt="" style="height: 400px; width: 400px; object-fit: cover"></figure>
                            {{--                        <div class="overlay-box">--}}
                            {{--                            <div class="icon"><img src="images/icons/logo.png" alt=""></div>--}}
                            {{--                            <h3><a href="schedule-detail.html">Conference Hall</a></h3>--}}
                            {{--                            <span class="text">Event # 15</span>--}}
                            {{--                        </div>--}}
                        </div>
                    </div>
                </div>









            </div>

        </div>
    </section>





@endsection
