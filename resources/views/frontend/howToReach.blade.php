@extends('frontend.layouts.layout')
@section('content')
    <section class="page-title" style="background-image: url({{asset('assets/front/images/main-slider/aboutiiserBanner.png')}}); background-repeat: no-repeat; background-position: center; background-size: cover">
        <div class="anim-icons full-width">
            <span class="icon icon-bull-eye"></span>
            <span class="icon icon-dotted-circle"></span>
        </div>
        <div class="auto-container">
            <div class="title-outer">
                <h1>How To Reach</h1>
                <ul class="page-breadcrumb">
                    <li><a href="{{route('index')}}">Home</a></li>
                    <li>How to reach</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <section class="about-section-two" style="padding-top: 50px; padding-bottom: 0px">
        <div class="auto-container">
            <div class="row">

                <div class="content-column col-lg-12 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="sec-title">
{{--                            <span class="sub-title">Whether</span>--}}
                            <h2>How to reach IISER Mohali</h2>
                            <span class="divider"></span>
                            <div class="text">IISER Mohali is located in Sector 81, Knowledge City, SAS Nagar (Mohali), Punjab, near Chandigarh. The institute is well-connected by air, rail, and road, making it easily accessible from major cities in North India.</div>


                            <h3 style="margin-top: 20px">By Air</h3>
                            <div class="text" style="margin-top: 10px">The nearest airport is Chandigarh International Airport (IXC), approximately 09 km (15-20 minutes) away from the campus.</div>
                            <div class="text" style="margin-top: 5px"><strong>From the Airport:</strong></div>
                            <div class="text" style="margin-top: 5px; padding-left: 20px"><strong>Taxi/Cab:</strong> Prepaid taxis and app-based cabs (Uber/Ola) are available.</div>
                            <div class="text" style="margin-top: 5px; padding-left: 20px"><strong>Bus:</strong> CTU buses run frequently towards Mohali/Sector 70.</div>


                            <h3 style="margin-top: 20px">By Train</h3>
                            <div class="text" style="margin-top: 10px">The closest major railway station is Chandigarh Railway Station (CDG), about 15 km (25-30 minutes) from IISER Mohali.</div>

                            <div class="text" style="margin-top: 5px"><strong>From Chandigarh Station:</strong></div>
                            <div class="text" style="margin-top: 5px; padding-left: 20px"><strong>Auto-rickshaw/Taxi:</strong> Directly available outside the station.</div>
                            <div class="text" style="margin-top: 5px; padding-left: 20px"><strong>Bus:</strong> Take a CTU bus to Phase-8, Mohali, and then a short auto ride</div>

                            <div class="text" style="margin-top: 5px"><strong>Other Nearby Stations:</strong></div>
                            <div class="text" style="margin-top: 5px; padding-left: 20px"><strong>Mohali Railway Station (5 km away):</strong>  Limited trains but closer.</div>
                            <div class="text" style="margin-top: 5px; padding-left: 20px"><strong>Ambala Cantt (60 km away):</strong> Connects to major cities like Delhi.</div>



                            <h3 style="margin-top: 20px">By Road</h3>

                            <div class="text" style="margin-top: 5px"><strong>From Chandigarh (10-15 km)</strong></div>
                            <div class="text" style="margin-top: 5px; padding-left: 20px"><strong>Local Buses: </strong> Punjab Roadways & CTU buses (Route numbers: 33, 34, 35) run towards Mohali.</div>
                            <div class="text" style="margin-top: 5px; padding-left: 20px"><strong>Private Taxis/Autos:</strong> Easily available across Chandigarh.</div>

                            <div class="text" style="margin-top: 5px"><strong>From Other Cities</strong></div>
                            <div class="text" style="margin-top: 5px; padding-left: 20px"><strong>From Amritsar (~230 km):</strong> Direct buses/trains to Chandigarh, then local transport.</div>
                            <div class="text" style="margin-top: 5px; padding-left: 20px"><strong>From Shimla (~110 km):</strong> HRTC buses or taxi via NH5.</div>



                            <h3 style="margin-top: 20px">Local Transport Near IISER Mohali</h3>

                            <div class="text" style="margin-top: 5px; padding-left: 20px"><strong>Auto-rickshaws & E-rickshaws: </strong> Available for short distances.</div>
                            <div class="text" style="margin-top: 5px; padding-left: 20px"><strong>Cab Services: </strong> Uber, Ola, and local taxis operate in Mohali.</div>
                            <div class="text" style="margin-top: 5px; padding-left: 20px"><strong>Public Buses: </strong>  Punjab & Chandigarh Transport buses stop near Knowledge City.</div>


                            <div style="margin-top: 20px">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2807.67197539167!2d76.7285105312368!3d30.664583339732328!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390fe955afa88bcf%3A0xab6356114a6f197f!2sIISER%20Mohali!5e1!3m2!1sen!2sin!4v1755770159813!5m2!1sen!2sin"  height="300" style="border:0; width: 100%" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
