<header class="main-header header-style-two">

    <!-- Header top -->
    <div class="header-top">
        <div class="auto-container">
            <div class="inner-container">
                <div class="top-left">
                    <ul class="contact-list-two">
                        <li><strong>Phone</strong> {{config('app.website_phone')}} </li>
                        <li><strong>Email</strong> {{config('app.website_email')}} </li>
                    </ul>
                </div>

                <div class="top-right">
                    <ul class="social-icon-three">
{{--                        @php--}}
{{--                            $socials = App\Models\SocialLink::all();--}}
{{--                            @endphp--}}
{{--                        @foreach($socials as $social)--}}
{{--                            <li><a href="{{$social->link}}"><span class="fab fa-{{$social->icon}}"></span></a></li>--}}
{{--                        @endforeach--}}
                        <li><a href="https://x.com/IiserMohali?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" target="_blank"><span class="fab fa-twitter"></span></a></li>
                        <li><a href="https://www.youtube.com/c/IISERMohaliOfficialChannel" target="_blank"><span class="fab fa-youtube"></span></a></li>
                        <li><a href="https://www.facebook.com/iisermohaliofficialpage" target="_blank"><span class="fab fa-facebook"></span></a></li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top -->

    <!-- Header Lower -->
    <div class="header-lower">
        <div class="auto-container">
            <!-- Main box -->
            <div class="main-box">
                <div class="logo"><a href="{{route('index')}}"><img src="{{config('app.logo')}}" alt="" title=""></a></div>
                <div class="nav-outer">

                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-md">
                        <div class="navbar-header">
                            <!-- Toggle Button -->
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <li><a href="{{route('index')}}">Home</a></li>
                                <li class="dropdown"><a href="#">About</a>
                                    <ul>
                                        <li><a href="{{route('about_iiser')}}">About IISER</a></li>
                                        <li><a href="{{route('weather')}}">Weather </a></li>
                                        <li><a href="{{route('how_to_reach')}}">How to reach</a></li>
                                        <li><a href="{{route('local_attractions')}}">Local Attractions</a></li>
                                        <li><a href="{{route('gallery')}}">Gallery</a></li>
                                    </ul>
                                </li>

{{--                                <li class="dropdown"><a href="#">Registration</a>--}}
{{--                                    <ul>--}}
{{--                                        <li><a href="#">Registration Guideline</a></li>--}}
{{--                                        <li><a href="#">Registration</a></li>--}}
{{--                                    </ul>--}}
{{--                                </li>--}}
                                <li><a href="{{route('registration')}}">Registration</a></li>
                                <li><a href="{{route('awards')}}">Awards</a></li>


                                <li class="dropdown"><a href="#">Program</a>
                                    <ul>
                                        <li><a href="{{route('program')}}">Daily Program</a></li>
                                        <li><a href="{{route('speakers')}}">Invited Speaker</a></li>
                                        <li><a href="{{route('poster_presentation')}}">Poster Presentation</a></li>
{{--                                        <li class="dropdown"><a href="about.html#">Header Styles</a>--}}
{{--                                            <ul>--}}
{{--                                                <li><a href="index.html">Header Style 01</a></li>--}}
{{--                                                <li><a href="index-2.html">Header Style 02</a></li>--}}
{{--                                                <li><a href="index-3.html">Header Style 03</a></li>--}}
{{--                                            </ul>--}}
{{--                                        </li>--}}
                                    </ul>
                                </li>
                                <li><a href="{{route('accommodation')}}">Accommodation</a></li>
                                <li class="dropdown"><a href="#">Contact</a>
                                    <ul>
                                        <li><a href="{{route('contact-us')}}">Contact Us</a></li>
                                        <li><a href="{{route('help-desk')}}">Help Desk</a></li>
                                    </ul>
                                </li>

                            </ul>
                        </div>
                    </nav>

                    <!-- Main Menu End-->
                    <div class="outer-box clearfix">
                        <!-- Quote Btn -->
                        <div class="btn-box">
                            <a href="#" class="theme-btn btn-style-one"><span class="btn-title"><i class="flaticon-chair"></i> Book Ticket</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Sticky Header  -->
    <div class="sticky-header">
        <div class="auto-container">

            <div class="main-box">
                <div class="logo-box">
                    <div class="logo"><a href="{{route('index')}}"><img src="{{config('app.logo')}}" alt="" title=""></a></div>
                    <div class="upper-right">
                        <a href="javascript:void(0)" class="mobile-nav-toggler navbar-trigger"><i class="flaticon-menu"></i></a>
                    </div>
                </div>

                <!--Keep This Empty / Menu will come through Javascript-->
            </div>
        </div>
    </div><!-- End Sticky Menu -->

    <!-- Mobile Header -->
    <div class="mobile-header">
        <div class="logo"><a href="{{route('login')}}"><img src="{{config('app.logo')}}" alt="" title=""></a></div>

        <!--Nav Box-->
        <div class="nav-outer clearfix">
            <div class="outer-box">
                <a href="javascript:void(0)" class="mobile-nav-toggler navbar-trigger"><i class="flaticon-menu"></i></a>
            </div>
        </div>
    </div>

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>

        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
        <nav class="menu-box">
            <div class="upper-box">
                <div class="nav-logo"><a href="{{route('index')}}"><img src="{{config('app.logo')}}" alt="" title=""></a></div>
                <div class="close-btn"><i class="icon flaticon-close"></i></div>
            </div>

            <ul class="navigation clearfix"><!--Keep This Empty / Menu will come through Javascript--></ul>

            <ul class="contact-list-one">
                <li><i class="flaticon-location"></i> {{config('app.website_address')}}<strong>Address</strong></li>
                <li><i class="flaticon-alarm-clock-1"></i>{{config('app.website_phone')}} <strong>Phone</strong></li>
                <li><i class="flaticon-email-1"></i> <a href="mailto:{{config('app.website_email')}}">{{config('app.website_email')}}</a> <strong>Mail to us</strong></li>
            </ul>

            <ul class="social-links">
                @php
                    $socials = App\Models\SocialLink::all();
                @endphp
                @foreach($socials as $social)
                    <li><a href="{{$social->link}}"><span class="fab fa-{{$social->icon}}"></span></a></li>
                @endforeach
            </ul>
        </nav>
    </div><!-- End Mobile Menu -->
</header>

{{--<header id="site-header" class="header">--}}
{{--    <div class="header-top">--}}
{{--        <div class="container-fluid">--}}
{{--            <div class="row align-items-center">--}}
{{--                <div class="col-lg-4 col-md-6 d-flex align-items-center">--}}
{{--                    <div class="header-number ms-4">--}}
{{--                        <a href="{{route('index')}}" style="white-space: nowrap">IITR Home </a>--}}
{{--                    </div>--}}
{{--                    <div class="header-number ms-4" style="white-space: nowrap">--}}
{{--                        <a href="tel:+91-1332-285311">+91-1332-285311</a>--}}
{{--                    </div>--}}
{{--                    <div class="header-number ms-4">--}}
{{--                        <a href="mailto:registrar@iitr.ac.in" style="white-space: nowrap">registrar@iitr.ac.in</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-8 col-md-6 d-flex align-items-center justify-content-end">--}}
{{--                    <div class="topbar-link">--}}
{{--                        <ul class="list-inline">--}}
{{--                            <li>--}}
{{--                                <span>Hindi</span>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="{{route('login')}}">Login/ Signup</a>--}}
{{--                            </li>--}}

{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <div style="display: flex; background-size: cover; background-position: center; background-repeat: no-repeat; background-image: url({{asset('assets/images/navBannerImg.jpg')}})" class="largeHeaderDiv">--}}
{{--        <div class="container-fluid" style="background: none">--}}
{{--            <div style="display: flex;  gap: 20px">--}}
{{--                <img class="largeScreenLogo" src="{{asset('assets/front/images/logo.png')}}" alt="" >--}}
{{--                <div style="display: flex; flex-direction: column; width: 100%; justify-content: center;">--}}
{{--                     <span class="headerTitle" >Biosciences & Bioengineering Department</span>--}}
{{--                     <span class="headerDesc" >Indian Institute of Technology Roorkee</span>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}




{{--    <div id="header-wrap" style="padding: 5px 0px">--}}
{{--        <div class="container-fluid">--}}
{{--            <div class="row">--}}
{{--                <div class="col">--}}
{{--                    <!-- Navbar -->--}}
{{--                    <nav class="navbar navbar-expand-xl">--}}
{{--                         <div style="display: flex; ">--}}
{{--                             <a class="navbar-brand logo" href="{{route('index')}}">--}}
{{--                                 <img class="img-fluid" src="{{asset('assets/front/images/logo.png')}}" alt="">--}}
{{--                             </a>--}}

{{--                         </div>--}}
{{--                        <button class="navbar-toggler ht-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-expanded="false" aria-label="Toggle navigation">--}}
{{--                            <svg width="100" height="100" viewBox="0 0 100 100">--}}
{{--                                <path class="line line1" d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058"></path>--}}
{{--                                <path class="line line2" d="M 20,50 H 80"></path>--}}
{{--                                <path class="line line3" d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942"></path>--}}
{{--                            </svg>--}}
{{--                        </button>--}}

{{--                        <div class="collapse navbar-collapse" id="navbarNav" style="padding: 10px 0px">--}}
{{--                            <ul class="nav navbar-nav">--}}
{{--                                <!-- Home -->--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a class="nav-link {{Route::currentRouteName()==='index'?'active':''}}" href="{{route('index')}}">Home</a>--}}
{{--                                </li>--}}

{{--                                @php--}}
{{--                                    function formatMenuItems($menus)--}}
{{--                                    {--}}
{{--                                        $formatted = [];--}}

{{--                                        foreach ($menus as $menu) {--}}
{{--                                            $item = [--}}
{{--                                                'id' => $menu->id,--}}
{{--                                                'title' => $menu->title,--}}
{{--                                                'link' => $menu->link,--}}
{{--                                                'is_link' => $menu->is_link,--}}
{{--                                                'is_file' => $menu->is_file,--}}
{{--                                                'submenu' => formatMenuItems($menu->children ?? []),--}}
{{--                                            ];--}}

{{--                                            if (empty($item['submenu'])) {--}}
{{--                                                unset($item['submenu']);--}}
{{--                                            }--}}

{{--                                            $formatted[] = $item;--}}
{{--                                        }--}}

{{--                                        return $formatted;--}}
{{--                                    }--}}

{{--                                    $menus = \App\Models\Menu::whereNull('parent_id')->with('children.allChildren')->get();--}}
{{--                                    $items = formatMenuItems($menus);--}}
{{--                                @endphp--}}



{{--                                @foreach($items as $item)--}}
{{--                                    @php--}}
{{--                                        $isActive = \Illuminate\Support\Str::contains(request()->url(), $item['link']);--}}
{{--                                    @endphp--}}
{{--                                    <li class="nav-item {{ isset($item['submenu']) ? 'dropdown' : '' }} {{ $isActive ? 'active' : '' }}">--}}
{{--                                        <a class="nav-link {{ isset($item['submenu']) ? 'dropdown-toggle' : '' }}"--}}
{{--                                           href="{{ $item['link'] ? route('page', ['id' => $item['id']]) : '#' }}"--}}
{{--                                            {{ isset($item['submenu']) ? 'data-bs-toggle=dropdown' : '' }}>--}}
{{--                                            {{ $item['title'] }}--}}
{{--                                        </a>--}}

{{--                                        @if(isset($item['submenu']))--}}
{{--                                            <ul class="dropdown-menu">--}}
{{--                                                @foreach($item['submenu'] as $subitem)--}}
{{--                                                    @php--}}
{{--                                                        $isSubActive = Str::contains(request()->url(), $subitem['link']);--}}
{{--                                                    @endphp--}}
{{--                                                    <li class="{{ isset($subitem['submenu']) ? 'dropdown-submenu' : '' }} {{ $isSubActive ? 'active' : '' }}">--}}
{{--                                                        <a href="{{ $subitem['link'] ? route('page', ['id' => $subitem['id']]) : '#' }}"--}}
{{--                                                           class="dropdown-item {{ isset($subitem['submenu']) ? 'dropdown-toggle' : '' }}"--}}
{{--                                                            {{ isset($subitem['submenu']) ? 'data-bs-toggle=dropdown' : '' }}>--}}
{{--                                                            {{ $subitem['title'] }}--}}
{{--                                                        </a>--}}

{{--                                                        @if(isset($subitem['submenu']))--}}
{{--                                                            <ul class="dropdown-menu">--}}
{{--                                                                @foreach($subitem['submenu'] as $subsubitem)--}}
{{--                                                                    @php--}}
{{--                                                                        $isSubSubActive = Str::contains(request()->url(), $subsubitem['link']);--}}
{{--                                                                    @endphp--}}
{{--                                                                    <li class="{{ $isSubSubActive ? 'active' : '' }}">--}}
{{--                                                                        <a class="dropdown-item"--}}
{{--                                                                           href="{{ $subsubitem['link'] ? route('page', ['id' => $subsubitem['id']]) : '#' }}">--}}
{{--                                                                            {{ $subsubitem['title'] }}--}}
{{--                                                                        </a>--}}
{{--                                                                    </li>--}}
{{--                                                                @endforeach--}}
{{--                                                            </ul>--}}
{{--                                                        @endif--}}
{{--                                                    </li>--}}
{{--                                                @endforeach--}}
{{--                                            </ul>--}}
{{--                                        @endif--}}
{{--                                    </li>--}}
{{--                                @endforeach--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a class="nav-link {{Route::currentRouteName()==='contact-us'?'active':''}}" href="{{route('contact-us')}}">Contact</a>--}}
{{--                                </li>--}}

{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </nav>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</header>--}}

{{--<style>--}}
{{--.headerTitle--}}
{{--{--}}
{{--    font-weight: 600;--}}
{{--    font-size: 25px;--}}
{{--}--}}
{{--.headerDesc--}}
{{--{--}}
{{--    font-size: 20px;--}}
{{--}--}}
{{--    .largeHeaderDiv--}}
{{--    {--}}
{{--        padding: 10px 0px;--}}
{{--        border-bottom: 1px solid rgba(206, 206, 206, 0.52);--}}
{{--    }--}}
{{--    .largeScreenLogo--}}
{{--    {--}}
{{--        height: 100px;--}}
{{--        width: 100px;--}}
{{--    }--}}


{{--    .navbar-brand{--}}
{{--        margin-right: 50px;--}}
{{--        display: none;--}}
{{--    }--}}

{{--@media (max-width: 992px) {--}}
{{--    .navbar-brand{--}}
{{--        display: none;--}}
{{--    }--}}

{{--}--}}

{{--@media (max-width: 768px) {--}}
{{--    .navbar-brand{--}}
{{--        display: block;--}}
{{--        margin-right: 20px !important;--}}
{{--    }--}}
{{--}--}}

{{--@media (max-width: 576px) {--}}
{{--    .largeScreenLogo--}}
{{--    {--}}
{{--        height: 60px;--}}
{{--        width: 60px;--}}
{{--    }--}}

{{--    .headerTitle--}}
{{--    {--}}
{{--        font-weight: 600;--}}
{{--        font-size: 15px;--}}
{{--        color: black;--}}
{{--    }--}}
{{--    .headerDesc--}}
{{--    {--}}
{{--        font-size: 11px;--}}
{{--        color: black;--}}
{{--    }--}}
{{--    .navbar-nav .nav-item--}}
{{--    {--}}
{{--        padding: 0px 10px;--}}
{{--    }--}}
{{--}--}}

{{--</style>--}}

