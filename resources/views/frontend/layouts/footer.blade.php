<footer class="main-footer">

    <div class="auto-container">

        <!-- Footer Content -->

        <div class="footer-content wow fadeInUp">

            <div class="text-center">

                <div class="footer-logo"><a href="{{route('index')}}"><img src="{{config('app.logo')}}" style="height: 200px" alt=""></a></div>

                <div class="text">The Indian Institute of Science Education and Research Mohali (IISER Mohali), established in 2007 by the Ministry of Education, Government of India, is a leading institution committed to excellence in science education and research.</div>

            </div>

            <ul class="social-icon-two">
                <li><a href="https://x.com/IiserMohali?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" target="_blank"><span class="fab fa-twitter"></span></a></li>
                <li><a href="https://www.youtube.com/c/IISERMohaliOfficialChannel" target="_blank"><span class="fab fa-youtube"></span></a></li>
                <li><a href="https://www.facebook.com/iisermohaliofficialpage" target="_blank"><span class="fab fa-facebook"></span></a></li>



{{--                @php--}}
{{--                    $socials = App\Models\SocialLink::all();--}}
{{--                @endphp--}}
{{--                @foreach($socials as $social)--}}
{{--                    <li><a href="{{$social->link}}"><span class="fab fa-{{$social->icon}}"></span></a></li>--}}
{{--                @endforeach--}}
            </ul>



            <ul class="contact-list-one">

                <li><i class="flaticon-location"></i> {{config('app.website_address')}} <strong>Address</strong></li>

                <li><i class="flaticon-alarm-clock-1"></i>{{config('app.website_phone')}} <strong>Phone</strong></li>

                <li><i class="flaticon-email-1"></i> <a href="mailto:{{config('app.website_email')}}">{{config('app.website_email')}}</a> <strong>Mail to us</strong></li>

            </ul>

        </div>

    </div>



    <div class="footer-bottom">

        <div class="auto-container">

            <div class="inner-container">

                <ul class="footer-nav">

                    <li><a href="javascript:void(0)">Terms of Service</a></li>

                    <li><a href="javascript:void(0)">Privacy Policy</a></li>

                </ul>



                <div class="copyright-text">

                    <p>Copyright © 2025 All Rights Reserved by <a href="{{config('app.developer_link')}}" style="white-space: nowrap">{{config('app.developed_by')}}</a></p>

                </div>

            </div>

        </div>

    </div>

</footer>

{{--<footer class="footer">--}}
{{--    <div class="primary-footer">--}}
{{--        <div class="container">--}}
{{--            <div class="footer-btm">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-lg-5 pe-lg-8">--}}
{{--                        <a class="navbar-brand logo footer-logo mb-4 d-inline-block" href="{{route('index')}}">--}}
{{--                            <img class="img-fluid" src="{{asset('assets/images/whiteLogo.png')}}" alt="">--}}
{{--                        </a>--}}
{{--                        <ul class="media-icon list-unstyled">--}}
{{--                            <li>--}}
{{--                                <i class="flaticon flaticon-location-1"></i>--}}
{{--                                <p class="mb-0">Roorkee - Haridwar Highway, Uttarakhand 247667</p>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <i class="flaticon flaticon-envelope"></i>--}}
{{--                                <a href="mailto:registrar@iitr.ac.in">registrar@iitr.ac.in</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <i class="flaticon flaticon-phone"></i>--}}
{{--                                <a href="tel:+91-1332-285311">+91-1332-285311</a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-7 mt-5 mt-lg-0">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-md-6 mt-5 mt-md-0 footer-menu"  >--}}
{{--                                <h5>QUICK ACCESS</h5>--}}
{{--                                <ul class="list-unstyled">--}}
{{--                                    <li>--}}
{{--                                        <a href="https://alumni.iitr.ac.in/donate" target="_blank">Donate</a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="https://channeli.in/auth/login?next=/feed" target="_blank">Internal Portal</a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="https://newwebmail.iitr.ac.in/?session=f9d8c490c90d969687b99fed91ea214ac20ad4d76fe97759aa27a0c99bff6710306e3a925e241cb00c9ba83784950a76c20ad4d76fe97759aa27a0c99bff6710" target="_blank">Web Mail</a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="https://ghbooking.iitr.ac.in" target="_blank">Book Guest House</a>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-6 mt-5 mt-md-0 footer-menu"  >--}}
{{--                                <h5>EXPLORE</h5>--}}
{{--                                <ul class="list-unstyled">--}}
{{--                                    <li>--}}
{{--                                        <a href="https://ghbooking.iitr.ac.in" target="_blank">Tenders and Quotations</a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="https://www.iitr.ac.in/rti/" target="_blank">RTI</a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="https://iitr.ac.in/sric/" target="_blank">Industry Consultation</a>--}}
{{--                                    </li>--}}

{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="secondary-footer">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-lg-7 copyright">Copyright 2025 IIT ROORKEE | Developed by <u>--}}
{{--                                <a href="https://himsoftsolution.com" style="color: #28a745; font-weight: bold">Him Soft Solution</a>--}}
{{--                            </u> | All Rights Reserved </div>--}}
{{--                        <div class="col-lg-5 text-lg-end mt-4 mt-lg-0">--}}
{{--                            <ul class="list-inline ps-0 ms-0 mb-0 footer-social social-icons">--}}

{{--                                @php--}}
{{--                                    $socials = App\Models\SocialLink::all();--}}
{{--                                @endphp--}}
{{--                                @foreach($socials as $social)--}}

{{--                                    <li class="list-inline-item">--}}
{{--                                        <a href="{{$social->link}}" target="_blank">--}}
{{--                                            <i class="fab fa-{{$social->icon}}"></i>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                @endforeach--}}

{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="animated-icon-shape">--}}
{{--        <img class="img-fluid small-circle-animation" src="{{asset('assets/frontEnd/images/small-icon/01.png')}}" alt="">--}}
{{--        <img class="img-fluid small-circle-animation" src="{{asset('assets/frontEnd/images/small-icon/05.png')}}" alt="">--}}
{{--        <img class="img-fluid small-circle-animation" src="{{asset('assets/frontEnd/images/small-icon/06.png')}}" alt="">--}}
{{--        <img class="img-fluid small-circle-animation" src="{{asset('assets/frontEnd/images/small-icon/04.png')}}" alt="">--}}
{{--    </div>--}}
{{--</footer>--}}
