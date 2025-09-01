@extends('frontend.layouts.layout')
@section('content')
    <style>
        @keyframes pulse {
            0% {
                transform: scale(1);
                opacity: 1;
            }
            50% {
                transform: scale(1.1);
                opacity: 0;
            }
            100% {
                transform: scale(1);
                opacity: 1;
            }
        }
    </style>
    <section class="page-title" style="background-image: url({{asset('assets/front/images/main-slider/registration.png')}}); background-repeat: no-repeat; background-position: center; background-size: cover">
        <div class="anim-icons full-width">
            <span class="icon icon-bull-eye"></span>
            <span class="icon icon-dotted-circle"></span>
        </div>
        <div class="auto-container">
            <div class="title-outer">
{{--                <h1>Registration</h1>--}}
{{--                <ul class="page-breadcrumb">--}}
{{--                    <li><a href="{{route('index')}}">Home</a></li>--}}
{{--                    <li>Registration</li>--}}
{{--                </ul>--}}
            </div>
        </div>
    </section>
    <!--End Page Title-->
    <section class="about-section-two" style="padding-top: 50px; padding-bottom: 0px">
        <div class="auto-container">
            <div class="row">

                <div class="content-column col-lg-6 col-md-6 col-sm-12">
                    <div class="inner-column">
                        <div class="sec-title" style="text-align: justify">
                            <h2>Registration</h2>
                            <span class="divider"></span>


                            <h3 style="margin-top: 20px">Registration Dates</h3>
                            <div class="text" style="margin-top: 10px">September 01, 2025 to October 10, 2025</div>
                            <span class="divider"></span>


                            <h3 style="margin-top: 20px">Registration Includes</h3>
                            <div class="text" style="margin-top: 10px; padding-left: 20px">• Registration Kit</div>
                            <div class="text" style="margin-top: 5px; padding-left: 20px">• Breakfast and Lunch for all conference days</div>
                            <div class="text" style="margin-top: 5px; padding-left: 20px">• One dinner and One Conference Dinner</div>
                            <div class="text" style="margin-top: 5px; padding-left: 20px">• Morning and afternoon tea/coffee each day</div>
                            <div class="text" style="margin-top: 5px; padding-left: 20px">• High Tea on the last day</div>
                            <div class="text" style="margin-top: 5px; padding-left: 20px">• Entry to all sessions and conference facilities</div>
                            <div class="text" style="margin-top: 5px; padding-left: 20px">• Opportunity to submit abstracts and present an oral or poster presentation</div>
                            <div class="text" style="margin-top: 5px; color: #0b5ed7"><strong>Please Note:</strong> Registration Fee does not include accommodation charges.</div>
                            <span class="divider"></span>

                            <h3 style="margin-top: 20px" id="registrationHeading">Registration Fees</h3>
                            <div class="text" style="margin-top: 10px; padding-left: 20px"><strong>• IISER Mohali Students/Postdocs:</strong> Rs. 5000 (GST not applicable)</div>
                            <div class="text" style="margin-top: 5px; padding-left: 20px"><strong>• Non-IISER Mohali Students/Postdocs:</strong> Rs. 5900 (GST included)</div>
                            <div class="text" style="margin-top: 5px; padding-left: 20px"><strong>• IISER Mohali Faculty/Scientists:</strong> Rs. 7500 (GST not applicable)</div>
                            <div class="text" style="margin-top: 5px; padding-left: 20px"><strong>• Non-IISER Mohali Faculty/Scientists:</strong> Rs. 8850 (GST included)</div>
                            <span class="divider"></span>
                            <h3 style="margin-top: 20px; background-color: #ff9300; padding: 15px 5px; color: white">
                                <a href="">Click here</a> for registration
                                <span style="font-size: 25px; color: blue; animation: pulse 1.5s infinite;">(Coming soon)</span>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="content-column col-lg-6 col-md-6 col-sm-12">
                    <div class="inner-column" id="registrationRightSection" style="padding-left: 50px">
                        <div class="sec-title" style="text-align: justify">
                            <h2>Abstract Submission</h2>
                            <span class="divider"></span>
                            <div class="text">Instructions and a template for preparing the abstract is provided below. Please prepare your abstract accordingly and upload it during registration.</div>
                            <span class="divider"></span>

                            <h3 style="margin-top: 20px">Title</h3>
                            <div class="text" style="margin-top: 10px; padding-left: 20px"><strong>Font:</strong> Times New Roman 11 bold.</div>
                            <div class="text" style="margin-top: 5px; padding-left: 20px"><strong>Limit:</strong> 200 characters including space. (Please do not exceed the maximum length).</div>
                            <span class="divider"></span>

                            <h3 style="margin-top: 20px">Authors</h3>
                            <div class="text" style="margin-top: 10px; padding-left: 20px">Provide Full list of authors, separated by coma (use superscript numbers at the end of surname to map affiliation) Example: Sushmit Ghosh<sup>1</sup></div>
                            <div class="text" style="margin-top: 5px; padding-left: 20px"><strong>Font:</strong> Times New Roman 11.</div>
                            <div class="text" style="margin-top: 5px; padding-left: 20px">The name of the presenting author should be in <strong>Bold</strong>.</div>
                            <span class="divider"></span>

                            <h3 style="margin-top: 20px">Affiliation</h3>
                            <div class="text" style="margin-top: 10px; padding-left: 20px"><strong>Font:</strong> Times New Roman 11</div>
                            <div class="text" style="margin-top: 5px; padding-left: 20px">Use superscript numbers at the beginning of an affiliation to map authors. Example: <sup>1</sup> IISER Mohali</div>
                            <div class="text" style="margin-top: 5px; padding-left: 20px">If there are more than one university/institute the names should be separated by semi-colon.</div>
                            <span class="divider"></span>

                            <h3 style="margin-top: 20px">Main Text</h3>
                            <div class="text" style="margin-top: 10px; padding-left: 20px"><strong>Font:</strong> Times New Roman 11</div>
                            <div class="text" style="margin-top: 5px; padding-left: 20px"><strong>Limit:</strong> 2000 characters including space. (Please do not exceed the maximum length).</div>

                            <h3 style="margin-top: 20px; display: flex; ">
                                <a href="{{asset('assets/front/images/sponsorship/template_abstract.docx')}}"> Download template </a>
                            </h3>

                        </div>
                    </div>
                </div>

                <div class="content-column col-lg-12 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="sec-title" style="text-align: justify">
                <h3 style="margin-top: 20px">Payment Options</h3>
                <div class="text" style="margin-top: 10px">The online registration form will display the exact amount to be paid based on your category and accommodation needs.</div>
                <div class="text" style="margin-top: 10px; padding-left: 20px"><strong>•</strong> Please note the Transaction ID and save the payment receipt as a PDF.</div>
                <div class="text" style="margin-top: 5px; padding-left: 20px"><strong>•</strong> Upload the payment receipt PDF on the registration portal to complete your registration.</div>
                <div class="text" style="margin-top: 10px">For payments via RTGS/NEFT, use the following bank details:</div>

                <table class="bank-details-table" style="border: 1px solid black; border-collapse: collapse">
                    <tr style="border: 1px solid black;">
                        <td style="border: 1px solid black; padding: 5px 10px" class="field-name">Name of Account Holder</td>
                        <td style="border: 1px solid black; padding: 5px 10px">IISER Mohali Conference Account</td>
                    </tr>
                    <tr style="border: 1px solid black;">
                        <td style="border: 1px solid black; padding: 5px 10px" class="field-name">Account Number</td>
                        <td style="border: 1px solid black; padding: 5px 10px">4790101002303</td>
                    </tr>
                    <tr style="border: 1px solid black;">
                        <td style="border: 1px solid black; padding: 5px 10px" class="field-name">Swift Code</td>
                        <td style="border: 1px solid black; padding: 5px 10px">CNRBINBBBFD</td>
                    </tr>
                    <tr style="border: 1px solid black;">
                        <td style="border: 1px solid black; padding: 5px 10px" class="field-name">IFS Code</td>
                        <td style="border: 1px solid black; padding: 5px 10px">CNRB0004790</td>
                    </tr>
                    <tr style="border: 1px solid black;">
                        <td style="border: 1px solid black; padding: 5px 10px" class="field-name">Account Type</td>
                        <td style="border: 1px solid black; padding: 5px 10px">Savings Account</td>
                    </tr>
                    <tr style="border: 1px solid black;">
                        <td style="border: 1px solid black; padding: 5px 10px" class="field-name">Bank Name</td>
                        <td style="border: 1px solid black; padding: 5px 10px">Canara Bank</td>
                    </tr>
                    <tr style="border: 1px solid black;">
                        <td style="border: 1px solid black; padding: 5px 10px" class="field-name">Branch Name</td>
                        <td style="border: 1px solid black; padding: 5px 10px">IISER Mohali Campus</td>
                    </tr>
                    <tr style="border: 1px solid black;">
                        <td style="border: 1px solid black; padding: 5px 10px" class="field-name">UPI ID</td>
                        <td style="border: 1px solid black; padding: 5px 10px">120880646002303@cnrb</td>
                    </tr>
                    <tr style="border: 1px solid black;">
                        <td style="border: 1px solid black; padding: 5px 10px" class="field-name">Branch Address</td>
                        <td style="border: 1px solid black; padding: 5px 10px">IISER Mohali Campus, Sector - 81, SAS Nagar, Mohali-140306, Punjab, India</td>
                    </tr>
                    <tr style="border: 1px solid black;">
                        <td style="border: 1px solid black; padding: 5px 10px" class="field-name">Email</td>
                        <td style="border: 1px solid black; padding: 5px 10px">cb4790@canarabank.com</td>
                    </tr>
                    <tr style="border: 1px solid black;">
                        <td style="border: 1px solid black; padding: 5px 10px" class="field-name">Telephone</td>
                        <td style="border: 1px solid black; padding: 5px 10px">0172-2240790</td>
                    </tr>
                </table>

                            <div class="text" style="margin-top: 10px">"Payment can also be done using QR code. It will be available during payment, while doing registration"</div>

                            <span class="divider"></span>

                <h3 style="margin-top: 20px">Child Care Facility</h3>
                <div class="text" style="margin-top: 10px; margin-bottom: 30px">IISER Mohali has a creche/day care facility in the Community Center Complex for children aged 1.5 years and above. The creche is open Monday to Saturday, from 9:00 am to 6:00 pm. To avail of this facility for your child, please email the organizers at <strong>indrciiserm2025@gmail.com</strong> with the subject line: “Query about day care facility.”</div>
                        </div>
                    </div>
                </div>



            </div>

        </div>
        </div>
    </section>


@endsection
