@extends('layouts.app')
@section('pageTitle', 'Company Profile')
@section('content')
    <!-- CONTENT START -->
    <style>
        @media only screen and (max-width: 600px) {
            .owl-carousel .owl-dots {
                display: none;
            }
        }

        @media only screen and (min-width: 768px) {
            .sub-style-lg {
                white-space: nowrap;
            }
        }

        .mb---25 {
            margin-bottom: -25px;
        }

        .logo-style {
            background: white;
        }

        .p-bar {
            background: #e70209;
        }

        .owl-carousel .owl-dots .owl-dot span {
            display: none;
        }
    </style>
    <!-- INNER PAGE BANNER -->
    <div class="wt-bnr-inr overlay-wraper bg-center" style="background-image:url(images/banner/5.jpg);">
        <div class="overlay-main site-bg-secondry opacity-05"></div>
        <div class="container">
            <div class="wt-bnr-inr-entry">
                <div class="banner-title-outer">
                    <div class="banner-title-name">
                        <h1 class="site-text-primary text-white">Company Profile</h1>
                    </div>
                </div>
                <!-- BREADCRUMB ROW -->
                <div class="main-breadcrumbs">
                    <ul class="wt-breadcrumb breadcrumb-style-2">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li class="b-links">Company Profile</li>
                    </ul>
                </div>

                <!-- BREADCRUMB ROW END -->
            </div>
        </div>
    </div>
    <!-- INNER PAGE BANNER END -->

    <!-- ABOUT ONE SECTION START -->
    <div class="section-full pt-sm-4 pt-0 p-b30 bg-no-repeat bg-center bg-white">
        <div class="about-section-three">
            <div class="container">
                <div class="section-content">
                    <div class="row justify-content-center d-flex">

                        <div class="col-lg-6 col-md-12 m-b30 mt-sm-5 mt-0">
                            <div class="about-max-three mt-sm-5 mt-0">
                                <div class="about-max-three-media"><img src="/images/product-img/about.png" alt="">
                                </div>
                                <div class="about-three">
                                    <div class="about-year">
                                        <div class="about-year-info">
                                            <span class="icon-md p-t10">
                                                <i class="flaticon-industry"></i>
                                            </span>
                                            <h3 class="wt-tilte">Running Business Since 1990</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-12 m-b30 ">
                            <div class="about-section-three-right">
                                <!-- TITLE START-->
                                <div class="left wt-small-separator-outer">
                                    <div class="wt-small-separator site-text-primary">
                                        <div class="sep-leaf-left"></div>
                                        <div>Company Profile</div>
                                        <div class="sep-leaf-right"></div>
                                    </div>
                                    <h2 class="m-0 p-0">Saturn Blue Links</h2>
                                </div>
                                <!-- TITLE END-->
                                <!--   <p>
                                        <strong>Saturn Bluelinks</strong> ( BPMB LLP) are leading
                                        Indian Agents-Brokers for RELOCATION of Used-Second-hand
                                        TEXTILE Plants, Machinery & Technology from different Countries worldwide.
                                    </p>
                                    <p>
                                        BPMB LLP has experience of more than two decades & has the ability of BPMB LLP being
                                        most extensive agent/brokers for all kinds of textile plants & having be sold more
                                        than 400,000 spindles of Ring Spinning Plant & Machineries, 40,000 Rotors, 1200
                                        Looms, 300 Circular Knitting Machines, 150 Flat Knitting, Warp Knitting,
                                        Non-Wovenplants, Man-made Fiber plants like Polyester POY,FDY,Nylon 66,Viscose
                                        Staple Fiber,Viscoe filament yarn, Acrylic,Tajima, Barudan Embroidery machines &
                                        others.
                                    </p>-->
                                <p class="p-1 m-0"> Saturn Blue Links are leading Indian International Brokers for
                                    RELOCATION of Used-Second-Hand TEXTILE Plants, Machinery & Technology from different
                                    countries worldwide & specialise in TECHNICAL & MMF TEXTILE INDUSTRY.</p>
                                <p class="p-1 m-0">Saturn Blue links has experience of more than three decades & has the
                                    ability of being most extensive agent/brokers for all kinds of textile plants & having
                                    sold many second-hand machinery, of which few are listed below:</p>
                                <p class="p-1 m-0">12 Nos. of Fiber & Filament Plants from OERLIKON
                                    BARMAG-FARE-NEUMAG-TORAY.</p>
                                <p class="p-1 m-0">600 Sulzer Projectiles looms also covering PP & HDPE sector for
                                    Geoetxtiles | Indutech | Tarpaulin | Ground Covers | Jumbo Bags | Container Liners |
                                    Agro Shade/Hail Nets | Baffel Bags | Ventilator Fabrics.</p>
                                <p class="p-1 m-0">300 Nos. of Lindauer Dornier Rapier & Airjet Looms for Filtech | Defence
                                    Tech | Industrial | Glass Fiber | Aerospace | Engineering Reinforced Fabrics |
                                    Automotive.</p>
                                <p class="p-1 m-0">10 Nos. Non Woven Needle Punching by Dilo | Ferher | Asselin for
                                    Geoetxtiles | Filteration | Carpet | Insulation.</p>
                                <p class="p-1 m-0">124 Nos. of Warp, Flat & Circular Knitting by Mayer & Cie | Karl Mayer |
                                    Liba | Stoll for Sportech | Agrotech | Clothtech | Fashion Fabrics | Automotive |
                                    Geogrid | Shade Nets.</p>
                                <p class="p-1 m-0">& many other technical textile machineries related like STARLINGER |
                                    LOHIA TAPE | WINDMOLLER | OERLIKON BARMAG Extrusion Lines, Circular Looms, Winders,
                                    Coating Laminations, etc.</p>

                                <div class="ab-three-info d-flex justify-content-between">
                                    {{-- <div class="welcom-btn-position m-t20"><a href="{{ url('/about') }}"
                                            class="site-button site-btn-effect">Read More</a></div> --}}
                                </div>

                            </div>


                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ABOUT ONE SECTION END -->


    <!-- QUALITY SECTION START -->
    <div class="section-full ">
        <div class="container">
            <!-- TITLE START-->
            <div class="section-head center wt-small-separator-outer text-center mb---25">
                <div class="wt-small-separator site-text-primary">
                    <div class="sep-leaf-left"></div>
                    <div>About Quality</div>
                    <div class="sep-leaf-right"></div>
                </div>
                <h2 class="sub-style-lg">Lowest Rates & Best Quality Always</h2>
            </div>
            <!-- TITLE END-->
        </div>

        <div class="container ">
            <div class="quality-section-content">

                <div class="counter-outer ">
                    <div class="row justify-content-center row-eq-height">

                        <!-- <div class="col-lg-4 col-md-6 col-sm-6 m-b30 ">
                                <div class="wt-icon-box-wraper center bg-gray-light p-a20">
                                    <h2 class="counter site-text-primary m-b0 ">900 </h2>
                                    <span class="site-text-secondry title-style-2">Plants & Machinery Sold</span>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                                <div class="wt-icon-box-wraper center bg-gray-light p-a20">
                                    <h2 class="counter site-text-primary  m-b0">7000</h2>
                                    <span class="site-text-secondry title-style-2">Clients</span>
                                </div>
                            </div>

                            <div class="col-lg-5 col-md-12 col-sm-12 m-b30">
                                <div class="wt-icon-box-wraper center bg-gray-light p-a20">
                                    <h2 class="counter site-text-primary  m-b0 ">33</h2>
                                    <span class="site-text-secondry title-style-2">World-Wide Exhibitions'
                                        Participated</span>
                                </div>
                            </div>-->
                        <div class="col-lg-4 col-md-6 col-sm-6 m-b30 ">
                            <div class="wt-icon-box-wraper center bg-gray-light p-a20 l-bg-orange-dark">
                                <span class="site-text-secondry title-style-2">Plants & Machinery Sold</span>
                                <h2 class="counter text-black m-b0">900 </h2>
                                <div class="progress mt-1 " data-height="8" style="height: 8px;">
                                    <div class="progress-bar p-bar" role="progressbar" data-width="25%" aria-valuenow="25"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 m-b30 ">
                            <div class="wt-icon-box-wraper center bg-gray-light p-a20 l-bg-orange-dark">
                                <span class="site-text-secondry title-style-2">Clients</span>
                                <h2 class="counter text-black  m-b0">7000</h2>
                                <div class="progress mt-1 " data-height="8" style="height: 8px;">
                                    <div class="progress-bar p-bar" role="progressbar" data-width="25%" aria-valuenow="25"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-12 col-sm-12 m-b30">
                            <div class="wt-icon-box-wraper center bg-gray-light p-a20 l-bg-orange-dark">
                                <span class="site-text-secondry title-style-2">World-Wide Exhibitions
                                    Participated</span>
                                <h2 class="counter  text-black  m-b0 ">33</h2>

                                <div class="progress mt-1 " data-height="8" style="height: 8px;">
                                    <div class="progress-bar p-bar" role="progressbar" data-width="25%"
                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;">
                                    </div>
                                </div>
                            </div>

                        </div>




                    </div>
                </div>

            </div>



        </div>
        <!-- QUALITY SECTION END -->
    </div>

    <div class="page-content">
        <div class="section-full p-t30 p-b30" style="background: #111;">
            <div class="container">
                <!-- TITLE START-->

                @php
                    $logos = [
                        [
                            'img-path' => 'images/logos/logokhosla.png',
                            'alt' => 'logokhosla',
                        ],
                        [
                            'img-path' => 'images/logos/logopolyspin.png',
                            'alt' => 'logopolyspin',
                        ],
                        [
                            'img-path' => 'images/logos/logoarvind.png',
                            'alt' => 'logoarvind',
                        ],
                        [
                            'img-path' => 'images/logos/logotechfab.png',
                            'alt' => 'logotechfab',
                        ],

                        [
                            'img-path' => 'images/logos/logogreenpro.png',
                            'alt' => 'logogreenpro',
                        ],
                        [
                            'img-path' => 'images/logos/logocentenary.png',
                            'alt' => 'logocentenary',
                        ],
                        [
                            'img-path' => 'images/newlogo/logocheviot.png',
                            'alt' => 'logocheviot',
                        ],
                        [
                            'img-path' => 'images/logos/logoflexi.png',
                            'alt' => 'flexituff',
                        ],
                        [
                            'img-path' => 'images/logos/logogeo.png',
                            'alt' => 'logogeo',
                        ],
                        [
                            'img-path' => 'images/logos/logogtf.png',
                            'alt' => 'gtf',
                        ],
                        [
                            'img-path' => 'images/newlogo/logoiff.png',
                            'alt' => 'logoiff',
                        ],
                        [
                            'img-path' => 'images/logos/logoimbb.png',
                            'alt' => 'logoimbb',
                        ],
                        [
                            'img-path' => 'images/logos/logojeevan.png',
                            'alt' => 'logojeevan',
                        ],
                        [
                            'img-path' => 'images/newlogo/logomanas-1.png',
                            'alt' => 'logomanas',
                        ],
                        [
                            'img-path' => 'images/logos/logomayur.png',
                            'alt' => 'logoMayur',
                        ],
                        [
                            'img-path' => 'images/logos/logomurugappa.png',
                            'alt' => 'logomuruguappa',
                        ],
                        [
                            'img-path' => 'images/logos/logoparrys.png',
                            'alt' => 'logoparrys',
                        ],
                        [
                            'img-path' => 'images/logos/logosafe.png',
                            'alt' => 'logosafelex',
                        ],

                        [
                            'img-path' => 'images/logos/logosrf.png',
                            'alt' => 'logosrf',
                        ],
                        [
                            'img-path' => 'images/logos/logotuflex.png',
                            'alt' => 'logotuflex',
                        ],
                        [
                            'img-path' => 'images/newlogo/logowinner.png',
                            'alt' => 'logowinnergroup',
                        ],
                        [
                            'img-path' => 'images/logos/logosanrhea.png',
                            'alt' => 'logosanrhea',
                        ],
                        [
                            'img-path' => 'images/newlogo/logozoom.png',
                            'alt' => 'logozoom',
                        ],
                        [
                            'img-path' => 'images/newlogo/logoshri.png',
                            'alt' => 'logoshri',
                        ],
                        [
                            'img-path' => 'images/newlogo/logoshri1.png',
                            'alt' => 'logoambika',
                        ],
                        [
                            'img-path' => 'images/newlogo/logodaman.png',
                            'alt' => 'logodaman',
                        ],
                        [
                            'img-path' => 'images/newlogo/logodcm.png',
                            'alt' => 'logoddcm',
                        ],
                        [
                            'img-path' => 'images/newlogo/logodfr.png',
                            'alt' => 'logoddfr',
                        ],
                        [
                            'img-path' => 'images/newlogo/logodiv.png',
                            'alt' => 'logoddiv',
                        ],
                        [
                            'img-path' => 'images/newlogo/logoinvermex.png',
                            'alt' => 'logoinvermex',
                        ],
                        [
                            'img-path' => 'images/newlogo/logojagdamba.png',
                            'alt' => 'logojagdamba',
                        ],
                        [
                            'img-path' => 'images/newlogo/logokanodia.png',
                            'alt' => 'logokanodia',
                        ],
                        [
                            'img-path' => 'images/newlogo/logomerit.png',
                            'alt' => 'logomerit',
                        ],
                        [
                            'img-path' => 'images/newlogo/logotara.png',
                            'alt' => 'logotara',
                        ],
                        [
                            'img-path' => 'images/newlogo/logotech.png',
                            'alt' => 'logotara',
                        ],
                    ];
                @endphp

                <div class=" center wt-small-separator-outer text-center">

                    <h2 class="text-white"> Technical Textile Clients </h2>
                </div>
                <!-- TITLE END-->
                <div class="logo-slider owl-carousel">
                    @foreach ($logos as $logo)
                        <a href="{{ $logo['img-path'] }}" target="_blank">
                            <img src="{{ $logo['img-path'] }}" width="100" class="mt-2 h-80 py-1 logo-style"
                                alt="{{ $logo['alt'] }}">
                        </a>
                    @endforeach

                    <!--<img src="images/image 34.png" width="100" class="mt-2 h-80" alt=""  >
                            <img src="images/image 35.png" width="100" class="mt-2 h-80" alt=""  >
                            <img src="images/image 36.png" width="100" class="mt-2 h-80" alt=""   >
                            <img src="images/image 37.png" width="100" class="mt-2 h-80" alt=""  >
                            <img src="images/image 38.png" width="100" class="mt-2 h-80" alt=""   >
                            <img src="images/logos/centenary-new.png" alt="" class="h-100 mt-2">
                            <img src="images/logos/logo-white.jpg" width="100" class="mt-2 h-80" alt=""  >
                            <img src="images/logos/flex.png"  alt="" class="mt-2 h-80" >
                            <img src="images/logos/geo.png" width="100" class="mt-2 h-80" alt="" >
                            <img src="images/logos/gtf.png" width="100" class="mt-2 h-80" alt="" >

                            <img src="images/logos/iff-new.png" width="100" class=" h-100" alt=""  >
                            <img src="images/logos/imbb.png" width="100" class=" h-100" alt=" " >
                            <img src="images/logos/jeevan-new.png" width="100" class="mt-2 h-80" alt=""  >
                            <img src="images/logos/manas.jpg" width="100" class="mt-2 h-80"  alt="" >
                            <img src="images/logos/Mayur.png" width="100" class="mt-2 h-80" alt=""  >
                            <img src="images/logos/muruguappa-new.png" width="100" class="mt-2 h-80" alt="" >
                            <img src="images/logos/parrys.png" width="100" class="mt-2 h-80" alt=""  >
                            <img src="images/logos/safelex.png" width="100" class="mt-2 h-80" alt="" >
                            <img src="images/logos/sanrhea.jpg" width="100" class="mt-2 h-80" alt="" >
                            <img src="images/logos/shyam.jpg" width="100" class="mt-2 h-80" alt="" >
                            <img src="images/logos/srf.png" width="100" class="mt-2 h-80" alt=""  >
                            <img src="images/logos/tuflex-new-.png" width="100" class=" " alt="" style="margin-top: -65px">
                            <img src="images/logos/winnergroup.jpg" width="100" class="mt-2 h-80" alt=""  >
                            <img src="images/logos/sanrhea.jpg" width="100" class="mt-2 h-80" alt="" >
                            <img src="images/logos/zoom.jpg" width="100" class="mt-2 h-80" alt=""  >
                            <img src="images/logos/shri.jpg" width="100" class="mt-2 h-80" alt=""  >-->

                </div>
            </div>
        </div>

    </div>
@endsection
@section('js')
    <script>
        $('.logo-slider').owlCarousel({
            loop: true,
            margin: 10,
            autoplay: true,
            responsive: {
                0: {
                    items: 2
                },
                600: {
                    items: 4
                },
                1000: {
                    items: 5
                }
            }
        })
    </script>
@endsection
