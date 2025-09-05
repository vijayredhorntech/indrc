@extends('frontend.layouts.layout')
@section('content')
    <section class="page-title" style="background-image: url({{asset('assets/front/images/main-slider/speakers.png')}}); background-repeat: no-repeat; background-position: center; background-size: cover">
        <div class="anim-icons full-width">
            <span class="icon icon-bull-eye"></span>
            <span class="icon icon-dotted-circle"></span>
        </div>
        <div class="auto-container">
            <div class="title-outer">
{{--                <h1>Speakers</h1>--}}
{{--                <ul class="page-breadcrumb">--}}
{{--                    <li><a href="{{route('index')}}">Home</a></li>--}}
{{--                    <li>Speakers</li>--}}
{{--                </ul>--}}
            </div>
        </div>
    </section>
    <!--End Page Title-->


    <section class="speakers-section">
        <div class="anim-icons full-width">
            <span class="icon icon-dotted-circle"></span>
        </div>

        <div class="auto-container">
            <div class="sec-title text-center">
                <h2>Speakers</h2>
                <span class="divider"></span>
            </div>

            <div class="row">


                <div class="speaker-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;" >
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="javascript:void(0)"><img src="{{asset('assets/front/images/Speakers/girish.png')}}" alt=""></a></figure>
                        </div>
                        <div class="info-box">
                            <h4 class="name" style="text-align: center"><a href="javascript:void(0)">Dr. Girish Ratanaparkhi</a></h4>
                            <p class="designation" style="text-align: center; line-height: 20px; margin-top: 10px">Gene regulation, innate immunity, embryonic development</p>
                            <p class="designation" style="text-align: center">IISER Pune</p>
                        </div>
                    </div>
                </div>
                <div class="speaker-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;" >
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="javascript:void(0)"><img src="{{asset('assets/front/images/Speakers/adam.png')}}" alt=""></a></figure>
                        </div>
                        <div class="info-box">
                            <h4 class="name" style="text-align: center"><a href="javascript:void(0)">Dr. Adam Chippindale</a></h4>
                            <p class="designation" style="text-align: center; line-height: 20px; margin-top: 10px">Evolutionary Genetics</p>
                            <p class="designation" style="text-align: center">Queen's University, Canada</p>
                        </div>
                    </div>
                </div>
                <div class="speaker-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;" >
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="javascript:void(0)"><img src="{{asset('assets/front/images/Speakers/ls.png')}}" alt=""></a></figure>
                        </div>
                        <div class="info-box">
                            <h4 class="name" style="text-align: center"><a href="javascript:void(0)">Dr. L S Shashidhara</a></h4>
                            <p class="designation" style="text-align: center; line-height: 20px; margin-top: 10px">Drosophila Genetics and Developmental Biology</p>
                            <p class="designation" style="text-align: center">NCBS, Bangalore</p>
                        </div>
                    </div>
                </div>
                <div class="speaker-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;" >
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="javascript:void(0)"><img src="{{asset('assets/front/images/Speakers/surjeet.png')}}" alt=""></a></figure>
                        </div>
                        <div class="info-box">
                            <h4 class="name" style="text-align: center"><a href="javascript:void(0)">Dr. Surajit Sarkar</a></h4>
                            <p class="designation" style="text-align: center; line-height: 20px; margin-top: 10px">Neurobiology and Developmental Genetics</p>
                            <p class="designation" style="text-align: center">Delhi University, New Delhi</p>
                        </div>
                    </div>
                </div>


                <div class="speaker-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp animated" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;" >
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="javascript:void(0)"><img src="{{asset('assets/front/images/Speakers/madhu.png')}}" alt=""></a></figure>
                        </div>
                        <div class="info-box">
                            <h4 class="name" style="text-align: center"><a href="javascript:void(0)">Dr. Madhu G Tapadia</a></h4>
                            <p class="designation" style="text-align: center; line-height: 20px; margin-top: 10px">Developmental Genetics</p>
                            <p class="designation" style="text-align: center">BHU, Varanasi</p>
                        </div>
                    </div>
                </div>
                <div class="speaker-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp animated" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;" >
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="javascript:void(0)"><img src="{{asset('assets/front/images/Speakers/jishe.png')}}" alt=""></a></figure>
                        </div>
                        <div class="info-box">
                            <h4 class="name" style="text-align: center"><a href="javascript:void(0)">Dr. Jishy Varghese</a></h4>
                            <p class="designation" style="text-align: center; line-height: 20px; margin-top: 10px">Genetic Regulation of Physiology and Metabolism</p>
                            <p class="designation" style="text-align: center">IISER ,Thiruvananthapuram</p>
                        </div>
                    </div>
                </div>
                <div class="speaker-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp animated" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;" >
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="javascript:void(0)"><img src="{{asset('assets/front/images/Speakers/amitab.png')}}" alt=""></a></figure>
                        </div>
                        <div class="info-box">
                            <h4 class="name" style="text-align: center"><a href="javascript:void(0)">Dr. Amitabh Joshi</a></h4>
                            <p class="designation" style="text-align: center; line-height: 20px; margin-top: 10px">Evolutionary Biology</p>
                            <p class="designation" style="text-align: center">JNCASR, Bangalore</p>
                        </div>
                    </div>
                </div>
                <div class="speaker-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp animated" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;" >
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="javascript:void(0)"><img src="{{asset('assets/front/images/Speakers/bodhi.png')}}" alt=""></a></figure>
                        </div>
                        <div class="info-box">
                            <h4 class="name" style="text-align: center"><a href="javascript:void(0)">Dr. Bodhisatta Nandy</a></h4>
                            <p class="designation" style="text-align: center; line-height: 20px; margin-top: 10px">Evolutionary Biology</p>
                            <p class="designation" style="text-align: center">IISER Berhampur</p>
                        </div>
                    </div>
                </div>


                <div class="speaker-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp animated" data-wow-delay="600ms" style="visibility: visible; animation-delay: 600ms; animation-name: fadeInUp;" >
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="javascript:void(0)"><img src="{{asset('assets/front/images/Speakers/sidipta.png')}}" alt=""></a></figure>
                        </div>
                        <div class="info-box">
                            <h4 class="name" style="text-align: center"><a href="javascript:void(0)">Dr. Sudipta Tung</a></h4>
                            <p class="designation" style="text-align: center; line-height: 20px; margin-top: 10px">Evolutionary Biology</p>
                            <p class="designation" style="text-align: center">Ashoka University, Sonepat</p>
                        </div>
                    </div>
                </div>
                <div class="speaker-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp animated" data-wow-delay="600ms" style="visibility: visible; animation-delay: 600ms; animation-name: fadeInUp;" >
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="javascript:void(0)"><img src="{{asset('assets/front/images/Speakers/ritoban.png')}}" alt=""></a></figure>
                        </div>
                        <div class="info-box">
                            <h4 class="name" style="text-align: center"><a href="javascript:void(0)">Dr. Rhitoban Raychoudhury</a></h4>
                            <p class="designation" style="text-align: center; line-height: 20px; margin-top: 10px">Evolution, Genetics, Genomics</p>
                            <p class="designation" style="text-align: center">IISER Mohali</p>
                        </div>
                    </div>
                </div>
                <div class="speaker-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp animated" data-wow-delay="600ms" style="visibility: visible; animation-delay: 600ms; animation-name: fadeInUp;" >
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="javascript:void(0)"><img src="{{asset('assets/front/images/Speakers/erick.png')}}" alt=""></a></figure>
                        </div>
                        <div class="info-box">
                            <h4 class="name" style="text-align: center"><a href="javascript:void(0)">Dr. Erika Bach</a></h4>
                            <p class="designation" style="text-align: center; line-height: 20px; margin-top: 10px">Cancer, Metabolism and Stem Cell Biology</p>
                            <p class="designation" style="text-align: center">NYU Langone Health</p>
                        </div>
                    </div>
                </div>
                <div class="speaker-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp animated" data-wow-delay="600ms" style="visibility: visible; animation-delay: 600ms; animation-name: fadeInUp;" >
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="javascript:void(0)"><img src="{{asset('assets/front/images/Speakers/sonal.png')}}" alt=""></a></figure>
                        </div>
                        <div class="info-box">
                            <h4 class="name" style="text-align: center"><a href="javascript:void(0)">Dr. Sonal N Jaiswal</a></h4>
                            <p class="designation" style="text-align: center; line-height: 20px; margin-top: 10px">Neurobiology</p>
                            <p class="designation" style="text-align: center">CCMB, Hyderabad</p>
                        </div>
                    </div>
                </div>


                <div class="speaker-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp animated" data-wow-delay="900ms" style="visibility: visible; animation-delay: 900ms; animation-name: fadeInUp;" >
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="javascript:void(0)"><img src="{{asset('assets/front/images/Speakers/varun.png')}}" alt=""></a></figure>
                        </div>
                        <div class="info-box">
                            <h4 class="name" style="text-align: center"><a href="javascript:void(0)">Dr. Varun Chaudhary</a></h4>
                            <p class="designation" style="text-align: center; line-height: 20px; margin-top: 10px">Cell and Developmental signaling</p>
                            <p class="designation" style="text-align: center">IISER Bhopal</p>
                        </div>
                    </div>
                </div>
                <div class="speaker-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp animated" data-wow-delay="900ms" style="visibility: visible; animation-delay: 900ms; animation-name: fadeInUp;">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="javascript:void(0)"><img src="{{asset('assets/front/images/Speakers/adrian.png')}}" alt=""></a></figure>
                        </div>
                        <div class="info-box">
                            <h4 class="name" style="text-align: center"><a href="javascript:void(0)">Dr. Adrian Moore</a></h4>
                            <p class="designation" style="text-align: center; line-height: 20px; margin-top: 10px">Neurodiversity</p>
                            <p class="designation" style="text-align: center">Riken Center for Brain Science</p>
                        </div>
                    </div>
                </div>
                <div class="speaker-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp animated" data-wow-delay="900ms" style="visibility: visible; animation-delay: 900ms; animation-name: fadeInUp;">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="javascript:void(0)"><img src="{{asset('assets/front/images/Speakers/teena.png')}}" alt=""></a></figure>
                        </div>
                        <div class="info-box">
                            <h4 class="name" style="text-align: center"><a href="javascript:void(0)">Dr. Tina Mukherjee</a></h4>
                            <p class="designation" style="text-align: center; line-height: 20px; margin-top: 10px">Metabolism And Development Lab</p>
                            <p class="designation" style="text-align: center">inStem, Bangalore, India</p>
                        </div>
                    </div>
                </div>
                <div class="speaker-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp animated" data-wow-delay="900ms" style="visibility: visible; animation-delay: 900ms; animation-name: fadeInUp;">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="javascript:void(0)"><img src="{{asset('assets/front/images/Speakers/marco.png')}}" alt=""></a></figure>
                        </div>
                        <div class="info-box">
                            <h4 class="name" style="text-align: center"><a href="javascript:void(0)">Dr. Marco Milan</a></h4>
                            <p class="designation" style="text-align: center; line-height: 20px; margin-top: 10px">Development and Growth Control Laboratory</p>
                            <p class="designation" style="text-align: center">IRB Barcelona</p>
                        </div>
                    </div>
                </div>


                <div class="speaker-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp animated" data-wow-delay="1200ms" style="visibility: visible; animation-delay: 1200ms; animation-name: fadeInUp;">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="javascript:void(0)"><img src="{{asset('assets/front/images/Speakers/mallik.png')}}" alt=""></a></figure>
                        </div>
                        <div class="info-box">
                            <h4 class="name" style="text-align: center"><a href="javascript:void(0)">Dr. Mallikarjun Shakarad</a></h4>
                            <p class="designation" style="text-align: center; line-height: 20px; margin-top: 10px">Evolutionary Biology</p>
                            <p class="designation" style="text-align: center">Delhi University, New Delhi</p>
                        </div>
                    </div>
                </div>
                <div class="speaker-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp animated" data-wow-delay="1200ms" style="visibility: visible; animation-delay: 1200ms; animation-name: fadeInUp;">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="javascript:void(0)"><img src="{{asset('assets/front/images/Speakers/gaiti.png')}}" alt=""></a></figure>
                        </div>
                        <div class="info-box">
                            <h4 class="name" style="text-align: center"><a href="javascript:void(0)">Dr. Gaiti Hasan</a></h4>
                            <p class="designation" style="text-align: center; line-height: 20px; margin-top: 10px">Neurobiology</p>
                            <p class="designation" style="text-align: center">NCBS, Bangalore</p>
                        </div>
                    </div>
                </div>
                <div class="speaker-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp animated" data-wow-delay="1200ms" style="visibility: visible; animation-delay: 1200ms; animation-name: fadeInUp;">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="javascript:void(0)"><img src="{{asset('assets/front/images/Speakers/rohit.png')}}" alt=""></a></figure>
                        </div>
                        <div class="info-box">
                            <h4 class="name" style="text-align: center"><a href="javascript:void(0)">Dr. Rohit Joshi</a></h4>
                            <p class="designation" style="text-align: center; line-height: 20px; margin-top: 10px">Developmental Neuroscience</p>
                            <p class="designation" style="text-align: center">CDFD, Hyderabad</p>
                        </div>
                    </div>
                </div>
                <div class="speaker-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp animated" data-wow-delay="1200ms" style="visibility: visible; animation-delay: 1200ms; animation-name: fadeInUp;">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="javascript:void(0)"><img src="{{asset('assets/front/images/Speakers/sheeba.png')}}" alt=""></a></figure>
                        </div>
                        <div class="info-box">
                            <h4 class="name" style="text-align: center"><a href="javascript:void(0)">Dr. Sheeba Vasu</a></h4>
                            <p class="designation" style="text-align: center; line-height: 20px; margin-top: 10px">Chronobiology and Behavioural Neurogenetics</p>
                            <p class="designation" style="text-align: center">JNCASR, Bangalore</p>
                        </div>
                    </div>
                </div>


                <div class="speaker-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp animated" data-wow-delay="1500ms" style="visibility: visible; animation-delay: 1500ms; animation-name: fadeInUp;">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="javascript:void(0)"><img src="{{asset('assets/front/images/Speakers/sveta.png')}}" alt=""></a></figure>
                        </div>
                        <div class="info-box">
                            <h4 class="name" style="text-align: center"><a href="javascript:void(0)">Dr. Sveta Chakrabarti</a></h4>
                            <p class="designation" style="text-align: center; line-height: 20px; margin-top: 10px">Immunology, Developmental biology, and Genetics</p>
                            <p class="designation" style="text-align: center">Manipal Academy of Higher Education</p>
                        </div>
                    </div>
                </div>
                <div class="speaker-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp animated" data-wow-delay="1500ms" style="visibility: visible; animation-delay: 1500ms; animation-name: fadeInUp;">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="javascript:void(0)"><img src="{{asset('assets/front/images/Speakers/dhananjay.png')}}" alt=""></a></figure>
                        </div>
                        <div class="info-box">
                            <h4 class="name" style="text-align: center"><a href="javascript:void(0)">Dr. Dhananjay Chaturvedi</a></h4>
                            <p class="designation" style="text-align: center; line-height: 20px; margin-top: 10px">Developmental Biology</p>
                            <p class="designation" style="text-align: center">CCMB, Hyderabad</p>
                        </div>
                    </div>
                </div>
                <div class="speaker-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp animated" data-wow-delay="1500ms" style="visibility: visible; animation-delay: 1500ms; animation-name: fadeInUp;">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="javascript:void(0)"><img src="{{asset('assets/front/images/Speakers/richa.png')}}" alt=""></a></figure>
                        </div>
                        <div class="info-box">
                            <h4 class="name" style="text-align: center"><a href="javascript:void(0)">Dr. Richa Arya</a></h4>
                            <p class="designation" style="text-align: center; line-height: 20px; margin-top: 10px">Genetics, Epigenetics, Developmental Biology, Stem cell biology</p>
                            <p class="designation" style="text-align: center">BHU, Varanasi</p>
                        </div>
                    </div>
                </div>
                <div class="speaker-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp animated" data-wow-delay="1500ms" style="visibility: visible; animation-delay: 1500ms; animation-name: fadeInUp;">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="javascript:void(0)"><img src="{{asset('assets/front/images/Speakers/debdeep.png')}}" alt=""></a></figure>
                        </div>
                        <div class="info-box">
                            <h4 class="name" style="text-align: center"><a href="javascript:void(0)">Dr. Debdeep Dutta</a></h4>
                            <p class="designation" style="text-align: center; line-height: 20px; margin-top: 10px">Genetic, Cellular, and Molecular mechanisms</p>
                            <p class="designation" style="text-align: center">IIT Kanpur</p>
                        </div>
                    </div>
                </div>


                <div class="speaker-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp animated" data-wow-delay="1800ms" style="visibility: visible; animation-delay: 1800ms; animation-name: fadeInUp;">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="javascript:void(0)"><img src="{{asset('assets/front/images/Speakers/shehnaz.png')}}" alt=""></a></figure>
                        </div>
                        <div class="info-box">
                            <h4 class="name" style="text-align: center"><a href="javascript:void(0)">Dr. Shenaz R Lone</a></h4>
                            <p class="designation" style="text-align: center; line-height: 20px; margin-top: 10px">Behavioral Neurogeneticist</p>
                            <p class="designation" style="text-align: center">Gitam University</p>
                        </div>
                    </div>
                </div>
                <div class="speaker-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp animated" data-wow-delay="1800ms" style="visibility: visible; animation-delay: 1800ms; animation-name: fadeInUp;">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="javascript:void(0)"><img src="{{asset('assets/front/images/Speakers/subhash.png')}}" alt=""></a></figure>
                        </div>
                        <div class="info-box">
                            <h4 class="name" style="text-align: center"><a href="javascript:void(0)">Dr. Subhash Rajpurohit</a></h4>
                            <p class="designation" style="text-align: center; line-height: 20px; margin-top: 10px">Ecological and Evolutionary physiology</p>
                            <p class="designation" style="text-align: center">Ahmedabad University</p>
                        </div>
                    </div>
                </div>
                <div class="speaker-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp animated" data-wow-delay="1800ms" style="visibility: visible; animation-delay: 1800ms; animation-name: fadeInUp;">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="javascript:void(0)"><img src="{{asset('assets/front/images/Speakers/meghna.png')}}" alt=""></a></figure>
                        </div>
                        <div class="info-box">
                            <h4 class="name" style="text-align: center"><a href="javascript:void(0)">Dr. Meghna Tare</a></h4>
                            <p class="designation" style="text-align: center; line-height: 20px; margin-top: 10px">Cellular and Molecular Genetics of Human Diseases</p>
                            <p class="designation" style="text-align: center">BITS Pilani</p>
                        </div>
                    </div>
                </div>
                <div class="speaker-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp animated" data-wow-delay="1800ms" style="visibility: visible; animation-delay: 1800ms; animation-name: fadeInUp;">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="javascript:void(0)"><img src="{{asset('assets/front/images/Speakers/anand.png')}}" alt=""></a></figure>
                        </div>
                        <div class="info-box">
                            <h4 class="name" style="text-align: center"><a href="javascript:void(0)">Dr. Anand Kumar Singh</a></h4>
                            <p class="designation" style="text-align: center; line-height: 20px; margin-top: 10px">RNA metabolism in health and disease.</p>
                            <p class="designation" style="text-align: center">IISER Tirupati</p>
                        </div>
                    </div>
                </div>


                <div class="speaker-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp animated" data-wow-delay="2100ms" style="visibility: visible; animation-delay: 2100ms; animation-name: fadeInUp;">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="javascript:void(0)"><img src="{{asset('assets/front/images/Speakers/shampa.png')}}" alt=""></a></figure>
                        </div>
                        <div class="info-box">
                            <h4 class="name" style="text-align: center"><a href="javascript:void(0)">Dr. Shampa M. Ghosh</a></h4>
                            <p class="designation" style="text-align: center; line-height: 20px; margin-top: 10px">Evolution and Evolutionary Developmental Biology</p>
                            <p class="designation" style="text-align: center">KIIT University, Bhubaneswar</p>
                        </div>
                    </div>
                </div>

                <div class="speaker-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp animated" data-wow-delay="2100ms" style="visibility: visible; animation-delay: 2100ms; animation-name: fadeInUp;">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="javascript:void(0)"><img src="{{asset('assets/front/images/Speakers/AntaraDas.png')}}" alt=""></a></figure>
                        </div>
                        <div class="info-box">
                            <h4 class="name" style="text-align: center"><a href="javascript:void(0)">Dr. Antara Das</a></h4>
                            <p class="designation" style="text-align: center; line-height: 20px; margin-top: 10px">Ion Channels, Circadian rhythms and sleep, Epilepsy</p>
                            <p class="designation" style="text-align: center">Azim Premji University</p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>

@endsection

