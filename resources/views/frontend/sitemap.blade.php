@extends('frontend.layouts.app')
@section('pageTitle', 'Sitemap')
@section('content')

<style>
    @media screen and (max-width: 767px) {
       #banner-section.bg-prefix{
       background:url(frontend/china-images/gray-mobile1.png) !important;
       background-attachment:fixed!important;
       background-repeat:no-repeat !important;
       background-size:cover !important;
   }
   }
   #banner-section.bg-prefix{
       background:url(frontend/china-images/gray-banner.png);
       background-attachment:fixed;
       background-repeat:no-repeat !important;
       background-size:cover !important;
       height:550px;
   }

   </style>
    <!--Temporarily css for further updated deisgn-->
    <!-- Hero End -->
    {{-- <section id="home" class="hero-area style1 ">
        <div class="hero-overlay">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-md-9 col-12">
                        <div class="hero-content mt-md-0 mt-5">
                            <h1 class="wow fadeInLeft" data-wow-delay=".5s">Largest International<span>Brokers Of Imported Secondhand Technical & MMF Machinerys.</span></h1>

                            <div class="hero-btn mt-50">
                                <a class="btn btn-one wow fadeInLeft" data-wow-delay="1.5s"
                                    href="{{ url('/latest-proposals') }}">Get Full Info <i class="lni lni-angle-double-right"></i></a>
                                <!--<a class="btn btn-two glightbox video-button wow fadeInLeft" data-wow-delay="2s"
                                            href="https://www.youtube.com/watch?v=SVYotEl0QNc"><i class="lni lni-play"></i><span
                                                class="text">Watch our
                                                intro video</span></a>-->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-3 col-12">
                        <div class="hero-image wow fadeInRight" data-wow-delay="2s">
                            <img src="frontend/images/china-man-new.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
--}}
    <!-- Service End -->
    <section id="banner-section" class="bg-prefix ">
        <div class="overlay">
            <div class="container">
                <div class="row text-center mt-100-px pt-5">
                    <div class="col-md-12 mt-30">
                        <h1 class="lowercase text-white">Sitemap</h1>
                    </div>
                    <div class="col-md-12 mt-3 divide">
                        <ul class="d-flex justify-content-center">
                            <li><a href="{{ url('/') }}" class="text-white">Home</a></li>
                            <li><!--<a class="dot-divider"></a>--><i class="text-white lni lni-angle-double-right divider mx-1"></i></li>
                            <li><a href="#!" class="text-primary">Sitemap</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        @php
            $MANUFACTURERS = [
                [
                    'name' => 'Home',
                    'link' => '/',
                ],
                [
                    'name' => 'Company Profile',
                    'link' => '/company-profile',
                ],
                [
                    'name' => 'Latest Proposals',
                    'link' => '/latest-proposals',
                ],

                [
                    'name' => 'Business Process',
                    'link' => '/business-process',
                ],
                [
                    'name' => 'Exhibitions',
                    'link' => '/exhibitions',
                ],
                [
                    'name' => 'Contact Us',
                    'link' => '/contact-us',
                ],
            ];
        @endphp
        <div class="container pb-0">
            <div class="service service-left text-center section-title pb-0 pt-0 px-0 mx-0 mt-4">

                    <h2 class="wow fadeInLeft my-0 blue-clr " data-wow-delay=".4s">Sitemap</h2>


            </div>

            <div class="row">
                <div class="service-btn cmn-btn-one mt-2 wow fadeInLeft " data-wow-delay="1s">

                    <div class="row px-3 px-md-0 ">
                        @foreach ($MANUFACTURERS as $item)
                            <div class="col-lg-3 col-md-6 col-12 pl-767-0">

                                <a {{ $item['link'] === '#' ? '' : 'target="_blank"' }}
                                    href="{{ $item['link'] === '#' ? 'javascript:;' : $item['link'] }}"
                                    class="btn btn-custom m-2 w-100 px-0 website-hover rounded f-s-15">{{ $item['name'] }}<i
                                        class="lni lni-arrow-right"></i></a>

                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section>
        <div class="container pb-5 mt-5">
            <div class="service service-left text-center section-title pb-0 pt-0 px-0 mx-0">

                <h2 class="wow fadeInLeft my-0 blue-clr " data-wow-delay=".4s">Latest Proposals</h2>
            </div>

            <div class="row">
                <div class="service-btn cmn-btn-one mt-3 wow fadeInLeft " data-wow-delay="1s">

                    <div class="row px-3 px-md-0 ">
                        @foreach ($offers as $offer)
                            <div class="col-lg-3 col-md-6 col-12 pl-767-0">

                                <a {{ route('frontend.offer.show', ['category' => $offer->categories->slug, 'offer' => $offer->slug]) }}
                                    href="{{ route('frontend.offer.show', ['category' => $offer->categories->slug, 'offer' => $offer->slug]) }}"
                                    class="btn btn-custom m-2  w-100 px-0 website-hover rounded f-s-15">{{ $offer->title }}</a>

                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- <section class="bg-dark py-4">
            <div class="service service-left section-title pb-0 pt-4 bg-dark ">

                <h2 class="wow fadeInLeft text-center text-white mt-2" data-wow-delay=".4s">Technical Data</h2>
            </div>
            <div class="row my-0 py-0">
                <div class="col-md-4 col-sm-5 mx-auto">
                    <div class=" mt-30 card service-download bg-dark pt-0 mt-0 w-75 m-0 px-0 mx-auto">

                        <ul class="list-group list-group-flush bg-dark">
                            <li class="list-group-item bg-dark"><a class="active h5" target="_blank"
                                    href="{{ url('pdf/Sino-Technical-Data.pdf') }}"><i class="fa fa-file-pdf-o"></i> Open
                                    PDF</a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </section> --}}

@endsection
@section('js')
    <script>
        //========= glightbox
        GLightbox({
            'href': 'https://www.youtube.com/watch?v=SVYotEl0QNc',
            'type': 'video',
            'source': 'youtube', //vimeo, youtube or local
            'width': 900,
            'autoplayVideos': true,
        });
    </script>

    <script>
        $(window).scroll(function() {

            if ($(this).scrollTop() > 50) {
                $('.scroll-hide').hide();
            } else {
                $('.scroll-hide').show();
            }
        });
    </script>
@endsection
