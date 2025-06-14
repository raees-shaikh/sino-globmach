@extends('layouts.app')
@section('pageTitle', 'Contact Us')
@section('content')
    <style>
        .icon-content .email-hover:hover {
            color: #1c63b8 !important;
        }
    </style>
    <!-- CONTENT START -->
    <div class="page-content">

        <!-- INNER PAGE BANNER -->
        <div class="wt-bnr-inr overlay-wraper bg-center" style="background-image:url(images/banner/5.jpg);">
            <div class="overlay-main site-bg-secondry opacity-05"></div>
            <div class="container">
                <div class="wt-bnr-inr-entry">
                    <div class="banner-title-outer">
                        <div class="banner-title-name">
                            <h2 class="site-text-primary text-white">Contact Us</h2>
                        </div>
                    </div>
                    <!-- BREADCRUMB ROW -->

                    <div class="main-breadcrumbs">
                        <ul class="wt-breadcrumb breadcrumb-style-2">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li class="b-links">Contact Us</li>
                        </ul>
                    </div>

                    <!-- BREADCRUMB ROW END -->
                </div>
            </div>
        </div>
        <!-- INNER PAGE BANNER END -->

        <!-- SECTION CONTENTG START -->

        <!-- CONTACT FORM -->
        <div class="section-full  p-t80 p-b50 bg-cover" style="background-image:url(images/background/bg-7.jpg)">
            <div class="section-content">
                <div class="container">
                    <div class="contact-one">
                        <!-- CONTACT FORM-->
                        <div class="row  d-flex justify-content-center flex-wrap">

                            <div class="col-lg-6 col-md-6 m-b30">
                                <form class="cons-contact-form" method="post" action="{{ route('contact.submit') }}">
                                    <!-- TITLE START -->
                                    <div class="section-head left wt-small-separator-outer">
                                        <div class="wt-small-separator site-text-primary">
                                            <div class="sep-leaf-left"></div>
                                            <div>Contact Form</div>
                                            <div class="sep-leaf-right"></div>
                                        </div>
                                        <h2>Get In Touch</h2>
                                    </div>
                                    <!-- TITLE END -->
                                    @csrf
                                    <div class="row">
                                        <input type="hidden" name="page_name" value="Contact">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <input name="name" type="text" required class="form-control"
                                                    placeholder="Full Name" value="{{ old('name') }}" minlength="3"
                                                    maxlength="40">
                                                @if ($errors->has('name'))
                                                    <div class="text-danger  mb-3 matp-13">
                                                        <p> {{ $errors->first('name') }} </p>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <input name="email" type="email" class="form-control" required
                                                    placeholder="Email" value="{{ old('email') }}" minlength="5"
                                                    maxlength="40">

                                                <!-- <input name="email" type="text" class="form-control" required
                                                            placeholder="Email" value="{{ old('email') }}" minlength="5"
                                                            maxlength="50">-->

                                                            @if ($errors->has('email'))
                                                                <div class="text-danger  mb-3 matp-13">
                                                                    <p> {{ $errors->first('email') }} </p>
                                                                </div>
                                                            @endif
                                            </div>
                                        </div>


                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <input name="phone" type="text" class="form-control " required
                                                    placeholder="Phone" value="{{ old('phone') }}" minlength="10"
                                                    maxlength="10">

                                                <!--<input name="phone" type="text" class="form-control" required
                                                            placeholder="Phone" value="{{ old('phone') }}" minlength="10"
                                                            maxlength="10">-->

                                                            @if ($errors->has('phone'))
                                                                <div class="text-danger  mb-3 matp-13">
                                                                    <p> {{ $errors->first('phone') }} </p>
                                                                </div>
                                                            @endif
                                            </div>
                                        </div>


                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <input name="subject" type="text" class="form-control " required
                                                    placeholder="Subject" value="{{ old('subject') }}" minlength="2"
                                                    maxlength="60">
                                                    @if ($errors->has('subject'))
                                                        <div class="text-danger  mb-3 matp-13">
                                                            <p> {{ $errors->first('subject') }} </p>
                                                        </div>
                                                    @endif
                                            </div>
                                        </div>


                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <textarea name="message" class="form-control  " rows="4" placeholder="Message" required minlength="2"
                                                    maxlength="250">{{ old('message') }}</textarea>
                                                    @if ($errors->has('message'))
                                                        <div class="text-danger  mb-3 matp-13">
                                                            <p> {{ $errors->first('message') }} </p>
                                                        </div>
                                                    @endif
                                            </div>
                                        </div>


                                        <div class="col-md-12">
                                            <button type="submit" class="site-button site-btn-effect ">Submit
                                                Now</button>
                                        </div>

                                    </div>
                                </form>
                            </div>


                            <div class="col-lg-6 col-md-6 m-b30 ">
                                <div class="contact-info">
                                    <div class="contact-info-inner ">

                                        <!-- TITLE START-->
                                        <div class="section-head left wt-small-separator-outer">
                                            <div class="wt-small-separator site-text-primary">
                                                <div class="sep-leaf-left"></div>
                                                <div>Contact Info</div>
                                                <div class="sep-leaf-right"></div>
                                            </div>
                                            <h2>Our Full Info</h2>
                                        </div>
                                        <!-- TITLE END-->

                                        <div class="contact-info-section pt-2 pb-2 "
                                            style="background-image:url(images/background/bg-map2.png);">

                                            <!-- <div class="wt-icon-box-wraper left m-b30">

                                                            <div class="icon-content">
                                                                <h3 class="m-t0 site-text-primary">Phone number</h3>
                                                                <p>(+291) 0987 654 321</p>
                                                            </div>
                                                        </div> -->
                                            <div class="wt-icon-box-wraper left m-b30">

                                                <div class="icon-content">
                                                    <!--<h3 class="m-t0 site-text-primary">Opening Hours</h3>-->
                                                    <ul class="list-unstyled m-b0">
                                                        <!--<li>Mon-Fri: 9 am – 6 pm</li>-->
                                                        <!--<li>Saturday: 9 am – 4 pm</li>
                                                            <li>Sunday: Closed</li>-->
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="wt-icon-box-wraper left mb-3">

                                                <div class="icon-content ">
                                                    <h3 class="m-t0 mt-3 site-text-primary mb-4">Email Address</h3>
                                                    <a href="mailto:sales@saturnbluelinks.com"
                                                        class="email-hover e-hover-clr text-white ">sales@saturnbluelinks.com</a>

                                                </div>
                                            </div>

                                            <div class="wt-icon-box-wraper left pb-5">

                                                <div class="icon-content ">
                                                    <h3 class="m-t0 site-text-primary mt-3">Address Info</h3>
                                                    <!--<h4 class="m-t0 site-text-primary mt-2">India</h4>-->
                                                    <p class="mt-4">Mumbai, India</p>

                                                    <!--<p>1363-1385 Sunset Blvd, Los Angeles, CA 90026, USA</p>-->
                                                    <p class="mt-4">South Carolina, USA</p>

                                                    <!--<p>1363-1385 Sunset Blvd, Los Angeles, CA 90026, USA</p>-->
                                                    <p class="mt-4">Jebel Ali, UAE</p>

                                                    <!--<p>1363-1385 Sunset Blvd, Los Angeles, CA 90026, USA</p>-->
                                                    <p class="mt-4">Guangzhuo, China</p>
                                                </div>
                                            </div>



                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- GOOGLE MAP -->
        <!-- <div class="section-full bg-white p-tb80">
                        <div class="section-content">
                            <div class="container">
                                <div class="gmap-outline">
                                    <div id="gmap_canvas2" class="google-map">
                                        <iframe
                                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15082.579067759236!2d72.9083154!3d19.07935!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd5ce904909cd7abe!2sAcetrot%20-%20Web%20Apps%20%7C%20Mobile%20Apps%20%7C%20Social%20Media%20Marketing%20in%20Mumbai!5e0!3m2!1sen!2sin!4v1643456679351!5m2!1sen!2sin"
                                            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->

    </div>
    <!-- CONTENT END -->


@endsection
