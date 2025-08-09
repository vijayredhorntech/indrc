@extends('frontend.layouts.layout')
@section('content')
    <section class="page-title" data-bg-img="{{asset('assets/frontEnd/images/portfolio/large/01.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h1>
                        Contact Us
                    </h1>
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{route('index')}}">
                                    <i class="bi bi-house-door me-1"></i>Home</a>
                            </li>

                            <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div id="particles-js"></div>
    </section>
    <div class="page-content">
            <div class="container" style="padding: 20px">
                <div class="row">
                    <div class="col-lg-6" style="background-color: #80808017">
                        <div class="row align-items-end mb-6">
                            <div class="col-md-12">
                                <div class="theme-title mb-0">
                                    <h2>Get In <span>Touch</span> </h2>
                                    @if(session('success'))
                                        <div class="alert alert-success mt-2">
                                            {{ session('success') }}
                                        </div>
                                    @elseif(session('error'))
                                        <div class="alert alert-danger mt-2">
                                            {{ session('error') }}
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col-md-12">
                                <form method="post" action="{{route('enquiry.create',['type'=>'enquiry'])}}">
                                    @csrf
                                    <div class="messages"></div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>First Name</label>
                                                <input id="form_name" type="text" name="name" class="form-control" placeholder="Enter Your First Name" required="required" data-error="Name is required.">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Email Address</label>
                                                <input id="form_email" type="email" name="email" class="form-control" placeholder="Enter Email Address" required="required" data-error="Valid email is required.">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Phone Number</label>
                                                <input id="form_phone" type="number" name="mobile" class="form-control" placeholder="Enter Phone number" required="required" data-error="Phone is required">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Message</label>
                                                <textarea id="form_message" name="subject" class="form-control" placeholder="Write Your Message Here..." rows="4" required="required" data-error="Please,leave us a message."></textarea>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mt-3">
                                            <button type="submit" class="themeht-btn primary-btn">Contact Us</button>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8532.637976171332!2d77.89049119601384!3d29.866923703955393!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390eb3650bfe37a7%3A0xa9d19b15af050467!2sIndian%20Institute%20Of%20Technology%20Roorkee!5e1!3m2!1sen!2sin!4v1747823892625!5m2!1sen!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>

                </div>
            </div>
    </div>
@endsection
