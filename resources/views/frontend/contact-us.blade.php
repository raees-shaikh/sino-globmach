@extends('frontend.layouts.app')
@section('pageTitle', 'Contact Us')
@section('content')
    <style>
        @media screen and (max-width: 767px) {
            #banner-section.bg-prefix {
                background: url(frontend/images/mobile-img1.png) !important;
                background-attachment: fixed !important;
                background-repeat: no-repeat !important;
                background-size: cover !important;
            }
        }

        #banner-section.bg-prefix {
            background: url(frontend/images/sin-banner.png);
            background-attachment: fixed;
            height: 550px;
        }
    </style>
    <!-- Banner Start -->
    <section id="banner-section" class="bg-prefix ">
        <div class="overlay">
            <div class="container">
                <div class="row text-center mt-100-px pt-5">
                    <div class="col-md-12 mt-30">
                        <h1 class="lowercase text-white">Contact Us</h1>
                    </div>
                    <div class="col-md-12 mt-3 divide">
                        <ul class="d-flex justify-content-center">
                            <li><a href="{{ url('/') }}" class="text-white">Home</a></li>
                            <li>
                                <!--<a class="dot-divider"></a>--><i
                                    class="text-white lni lni-angle-double-right divider mx-1"></i>
                            </li>
                            <li><a href="#!" class="text-primary">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner End -->

    <!-- Project Start -->
    <section class="bg-pink py-5">
        <div class="text-center d-none ">Contact Us</div>
    </section>
    <section id="contact-section" class=" mb-3 mb-sm-5 mt--70">

        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-6 mb-3 mt-md-3 mt-0 ">
                    <div class="service   section-title pb-0 pt-2 px-0 text-md-start text-center">
                        <h5 class="wow fadeInLeft" data-wow-delay=".2s">Contact Form</h5>
                        <h2 class="wow fadeInLeft text-machine" data-wow-delay=".4s">Get In Touch</h2>
                    </div>
                    <div class="card contact-form p-lg-4 p-2">
                        <div class="card-body p-2 ">
                            <!--<h4 class="mb-4">Connect with us</h4>-->
                            <div id="form-messages"></div>
                            <form id="ajax-contact" action="{{ route('contact.submit') }}" method="POST" class="mt-30">
                                @csrf
                                <input type="hidden" name="recaptcha_response" value="" id="recaptchaResponse">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <div class="form-group mb-30">
                                            <input id="name" type="text" name="name" placeholder="Full Name"
                                                class="form-control" minlength="3" maxlength="40" value="{{old('name')}}" required>
                                            @if ($errors->has('name'))
                                                <div class="text-danger  mb-3 matp-13">
                                                    <p> {{ $errors->first('name') }} </p>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <div class="form-group mb-30">
                                            <input id="email" type="email" name="email" placeholder="Email"
                                                minlength="5" maxlength="40" required value="{{old('email')}}" class="form-control">
                                            @if ($errors->has('email'))
                                                <div class="text-danger  mb-3 matp-13">
                                                    <p> {{ $errors->first('email') }} </p>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <div class="form-group mb-30">
                                            <input id="phone" type="text" name="phone" placeholder="Phone"
                                                minlength="10" maxlength="10" required value="{{old('phone')}}" class="form-control">
                                            @if ($errors->has('phone'))
                                                <div class="text-danger  mb-3 matp-13">
                                                    <p> {{ $errors->first('phone') }} </p>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <div class="form-group mb-30">
                                            <input name="subject" type="text" id="subject" minlength="2"
                                                maxlength="60" required class="form-control" value="{{old('subject')}}" placeholder="Subject">
                                            @if ($errors->has('subject'))
                                                <div class="text-danger  mb-3 matp-13">
                                                    <p> {{ $errors->first('subject') }} </p>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group mb-30">
                                            <textarea class="form-control" id="message" name="message" rows="4" placeholder="Message" minlength="2"
                                                maxlength="250" required>{{old('message')}}</textarea>
                                            @if ($errors->has('message'))
                                                <div class="text-danger  mb-3 matp-13">
                                                    <p> {{ $errors->first('message') }} </p>
                                                </div>
                                            @endif
                                            @if ($errors->has('recaptcha_response'))
                                                <div id="message-error " class="text-primary">
                                                    {{ $errors->first('recaptcha_response') }}
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary read-btn" type="submit" name="send">Submit
                                            Now</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 my-3  px-0 ">
                    <div class="service   section-title pb-md-4 pb-0 pt-md-2 pt-4 px-2 text-md-start text-center">
                        <h5 class="wow fadeInLeft" data-wow-delay=".2s">Contact Info</h5>
                        <h2 class="wow fadeInLeft px-0 m-md-0 pt-sm-3 pt-2 mt-2 mt-md-0 text-machine"
                            data-wow-delay=".4s">
                            Our Full Info</h2>
                    </div>
                    <div class="g-map bg-dark mx-2">
                        <div class="card card-body pl-5 ml-5 bg-dark h-479">
                            <div class="footer-cmn f-address wow fadeInUp" data-wow-delay=".8s">



                                <ul class="pb-md-0 pb-5">
                                    <h5 class="mt-md-4 mt-0 text-primary">Email Address</h5>
                                    <li><a href="mailto:sales@sinoglobmach.com" class="E-Mail">
                                            <!--<i class="fa fa-envelope"></i>-->sales[at]sinoglobmach[dot]com
                                        </a>
                                    </li>
                                    <h5 class="mt-md-5 mt-3 text-primary">Address Info</h5>
                                    <li class="mt-3"><a href="javascript:void(0)"> Mumbai, India</a>
                                    </li>
                                    <li class="mt-3"><a href="javascript:void(0)"> Shanghai, China</a>
                                    </li>
                                    {{-- <h5 class="mt-md-5 mt-3 text-primary">Contact Number</h5>
                                    <li>
                                        <a href="tel:00919500271679" class="E-Mail">
                                            00919500271679
                                        </a>
                                    </li> --}}
                                    {{-- <li class="mt-3"><a href="javascript:void(0)"> South Carolina, USA</a>
                                    </li>
                                    <li class="mt-3"><a href="javascript:void(0)"> Jebel Ali, UAE</a>
                                    </li>
                                    <li class="mt-3"><a href="javascript:void(0)"> Guangzhuo, China</a>
                                    </li> --}}
                                    <!-- <li><a href="javascript:void(0)"><i class="flaticon-mobile"></i> +1 555 222 000
                                                                           111</a></li>
                                                                        <li><a href="javascript:void(0)"><i class="flaticon-startup"></i>www.example.com </a>
                                                                        </li>-->
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('js')
    {{-- extra page specific js --}}
    <script
        src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render={{ config('app.google_captcha_site_key') }}"
        async defer></script>
    <script>
        var onloadCallback = function() {
            grecaptcha.ready(function() {
                grecaptcha.execute('{{ config('app.google_captcha_site_key') }}', {
                    action: 'submit'
                }).then(function(token) {
                    var recaptchaResponse = document.getElementById('recaptchaResponse');
                    recaptchaResponse.value = token;
                })
            })
        }
    </script>
@endsection
