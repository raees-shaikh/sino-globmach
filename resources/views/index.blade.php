@extends('layouts.app')
@section('pageTitle', '')
@section('content')

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

        .new-btns {
            width: 100%;
            border: 2px solid #e70209;

            color: #e70209;
            font-weight: bold;
        }

        .new-btns:hover {

            border-radius: 15px;
            background: #e70209;
            color: white;

        }

        .owl-carousel .owl-dots .owl-dot span {
            display: none;
        }
    </style>
    <!-- CONTENT START -->
    <div class="page-content">

        <!-- SLIDER START -->
        <div class="slider-outer d-none d-md-block">
            <div class="main-slider style-two default-banner">
                <div class="tp-banner-container">
                    <div class="tp-banner">
                        <!-- START REVOLUTION SLIDER 5.4.1 -->
                        <div id="rev_slider_home_wrapper" class="rev_slider_wrapper fullscreen-container"
                            data-alias="mask-showcase" data-source="gallery" style="background:#aaaaaa;padding:0px;">

                            <div id="rev_slider_home" class="rev_slider fullscreenbanner tiny_bullet_slider"
                                style="display:none;" data-version="5.4.1">
                                <ul>
                                    <!-- SLIDE 1 -->
                                    <li data-index="rs-1" data-transition="fade" data-slotamount="default"
                                        data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default"
                                        data-easeout="default" data-masterspeed="300" data-thumb="" data-rotate="0"
                                        data-saveperformance="off" data-title="Slide">
                                        <!-- MAIN IMAGE -->
                                        <img src="images/banner/au.jpg" alt="" data-bgposition="center center"
                                            data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="on"
                                            class=" rev-slidebg">
                                        <!-- LAYERS -->
                                    </li>

                                    <!-- SLIDE 1 -->
                                    {{--  <li data-index="rs-2" data-transition="fade" data-slotamount="default"
                                        data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default"
                                        data-easeout="default" data-masterspeed="300" data-thumb="" data-rotate="0"
                                        data-saveperformance="off" data-title="Slide">
                                        <!-- MAIN IMAGE -->
                                        <img src="images/banner/p.jpg" alt="" data-bgposition="center center"
                                            data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off"
                                            class=" rev-slidebg">
                                        <!-- LAYERS -->
                                    </li>

                                    <li data-index="rs-3" data-transition="fade" data-slotamount="default"
                                        data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default"
                                        data-easeout="default" data-masterspeed="300" data-thumb="" data-rotate="0"
                                        data-saveperformance="off" data-title="Slide">
                                        <!-- MAIN IMAGE -->
                                        <img src="images/banner/bp.jpg" alt="" data-bgposition="center center"
                                            data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off"
                                            class=" rev-slidebg">
                                        <!-- LAYERS -->
                                    </li> --}}


                                </ul>
                                <div class="tp-bannertimer" style="height: 10px; background: rgba(0, 0, 0, 0.15);"></div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="slider-outer d-block d-md-none">
            <div class="main-slider style-two default-banner">
                <div class="tp-banner-container">
                    <div class="tp-banner">
                        <div id="rev_slider_home-mob_wrapper" class="rev_slider_wrapper fullscreen-container"
                            data-alias="mask-showcase" data-source="gallery" style="background:#aaaaaa;padding:0px;">

                            <div id="rev_slider_home-mob" class="rev_slider fullscreenbanner tiny_bullet_slider"
                                style="display:none;" data-version="5.4.1">
                                <ul>
                                    <!-- SLIDE 1 -->
                                    <li data-index="rs-1-m" data-transition="fade" data-slotamount="default"
                                        data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default"
                                        data-easeout="default" data-masterspeed="300" data-thumb="" data-rotate="0"
                                        data-saveperformance="off" data-title="Slide">
                                        <!-- MAIN IMAGE -->
                                        <img src="images/banner/au-m.jpg" alt="" data-bgposition="center center"
                                            data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="on"
                                            class=" rev-slidebg">
                                        <!-- LAYERS -->
                                    </li>

                                    <!-- SLIDE 1 -->
                                    {{-- <li data-index="rs-2-m" data-transition="fade" data-slotamount="default"
                                        data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default"
                                        data-easeout="default" data-masterspeed="300" data-thumb="" data-rotate="0"
                                        data-saveperformance="off" data-title="Slide">
                                        <!-- MAIN IMAGE -->
                                        <img src="images/banner/p-m.jpg" alt="" data-bgposition="center center"
                                            data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off"
                                            class=" rev-slidebg">
                                        <!-- LAYERS -->
                                    </li>

                                    <li data-index="rs-3-m" data-transition="fade" data-slotamount="default"
                                        data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default"
                                        data-easeout="default" data-masterspeed="300" data-thumb="" data-rotate="0"
                                        data-saveperformance="off" data-title="Slide">
                                        <!-- MAIN IMAGE -->
                                        <img src="images/banner/bp-m.jpg" alt="" data-bgposition="center center"
                                            data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off"
                                            class=" rev-slidebg">
                                        <!-- LAYERS -->
                                    </li> --}}


                                </ul>
                                <div class="tp-bannertimer" style="height: 10px; background: rgba(0, 0, 0, 0.15);"></div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- SLIDER END -->
        <div class="section-full p-t30 p-b30 " style="background: #111;">
            <div class="container">

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
                <!-- TITLE START-->
                <div class=" center wt-small-separator-outer text-center">
                    <h2 class="text-white"> Technical Textile Clients </h2>
                </div>
                <!-- TITLE END-->
                <div class="logo-slider owl-carousel ">
                    @foreach ($logos as $logo)
                        <a href="{{ $logo['img-path'] }}" target="_blank">
                            <img src="{{ $logo['img-path'] }}" width="100" class="mt-2 py-1 h-80 m-full logo-style"
                                alt="{{ $logo['alt'] }}">
                        </a>
                    @endforeach
                </div>
            </div>
        </div>


        <!-- ABOUT ONE SECTION START -->
        <div class="section-full p-b30 bg-no-repeat bg-center bg-white">
            <div class="about-section-three">
                <div class="container">
                    <div class="section-content">
                        <div class="row justify-content-center d-flex">
                            <div class="col-lg-6 col-md-12 m-b30 mt-sm-5 mt-0">
                                <div class="about-max-three mt-sm-5 mt-0">
                                    <div class="about-max-three-media"><img src="images/product-img/about.png"
                                            alt="">
                                        <!-- https://thewebmax.com/industro/images/ui-10/intro-pic.jpg-->
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

                            <div class="col-lg-6 col-md-12 m-b30">
                                <div class="about-section-three-right">
                                    <!-- TITLE START-->
                                    <div class="left wt-small-separator-outer">
                                        <div class="wt-small-separator site-text-primary">
                                            <div class="sep-leaf-left"></div>
                                            <div>Company Profile</div>
                                            <div class="sep-leaf-right"></div>
                                        </div>
                                        <h2 class="p-0 m-0">Saturn Blue Links</h2>
                                    </div>
                                    <p class="p-1 m-0"> Saturn Blue Links are leading Indian International Brokers for
                                        RELOCATION of Used-Second-Hand TEXTILE Plants, Machinery & Technology from
                                        different
                                        countries worldwide & specialise in TECHNICAL & MMF TEXTILE INDUSTRY.</p>
                                    <p class="p-1 m-0">Saturn Blue links has experience of more than three decades &
                                        has
                                        the ability of being most extensive agent/brokers for all kinds of textile
                                        plants &
                                        having sold many second-hand machinery, of which few are listed below:</p>
                                    <p class="p-1 m-0">12 Nos. of Fiber & Filament Plants from OERLIKON
                                        BARMAG-FARE-NEUMAG-TORAY.</p>
                                    <p class="p-1 m-0">600 Sulzer Projectiles looms also covering PP & HDPE sector for
                                        Geoetxtiles | Indutech | Tarpaulin | Ground Covers | Jumbo Bags | Container
                                        Liners |
                                        Agro Shade/Hail Nets | Baffel Bags | Ventilator Fabrics.</p>
                                    <p class="p-1 m-0">300 Nos. of Lindauer Dornier Rapier & Airjet Looms for Filtech |
                                        Defence Tech | Industrial | Glass Fiber | Aerospace | Engineering Reinforced
                                        Fabrics
                                        | Automotive.</p>
                                    <p class="p-1 m-0">10 Nos. Non Woven Needle Punching by Dilo | Ferher | Asselin for
                                        Geoetxtiles | Filteration | Carpet | Insulation.</p>
                                    <p class="p-1 m-0">124 Nos. of Warp, Flat & Circular Knitting by Mayer & Cie | Karl
                                        Mayer | Liba | Stoll for Sportech | Agrotech | Clothtech | Fashion Fabrics |
                                        Automotive | Geogrid | Shade Nets.</p>
                                    <p class="p-1 m-0">& many other technical textile machineries related like
                                        STARLINGER |
                                        LOHIA TAPE | WINDMOLLER | OERLIKON BARMAG Extrusion Lines, Circular Looms,
                                        Winders,
                                        Coating Laminations, etc.</p>

                                    <div class="ab-three-info d-flex justify-content-between">
                                        <div class="welcom-btn-position m-t20"><a href="{{ url('/company-profile') }}"
                                                class="site-button site-btn-effect">Read More</a></div>
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
                        <div>About Saturn Blue Links </div>
                        <div class="sep-leaf-right"></div>
                    </div>
                    <h2 class="sub-style-lg">Lowest Rates & Best Quality Always</h2>
                </div>
                <!-- TITLE END-->
            </div>
            <div class="section-content quality-section-outer bg-white">
                <div class="container">
                    <div class="quality-section-content">
                        <div class="counter-outer">
                            <div class="row justify-content-center row-eq-height">
                                <div class="col-lg-4 col-md-6 col-sm-6 m-b30 ">
                                    <div class="wt-icon-box-wraper center bg-gray-light p-a20 l-bg-orange-dark">
                                        <span class="site-text-secondry title-style-2">Plants & Machinery Sold</span>
                                        <h2 class="counter text-black m-b0">900 </h2>
                                        <div class="progress mt-1 " data-height="8" style="height: 8px;">
                                            <div class="progress-bar p-bar" role="progressbar" data-width="25%"
                                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"
                                                style="width: 25%;"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 m-b30 ">
                                    <div class="wt-icon-box-wraper center bg-gray-light p-a20 l-bg-orange-dark">
                                        <span class="site-text-secondry title-style-2">Clients</span>
                                        <h2 class="counter text-black  m-b0">7000</h2>
                                        <div class="progress mt-1 " data-height="8" style="height: 8px;">
                                            <div class="progress-bar p-bar" role="progressbar" data-width="25%"
                                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"
                                                style="width: 25%;"></div>
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
                                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"
                                                style="width: 25%;"></div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- QUALITY SECTION END -->

        <!-- SERVICE SECTION START -->
        <div class="section-full p-t30 m-t30 p-b50 bg-gray-light">
            <div class="container">
                <!-- TITLE START-->
                <div class="section-head center wt-small-separator-outer text-center mb-0">
                    <div class="wt-small-separator site-text-primary">
                        <div class="sep-leaf-left"></div>
                        <h2 class="d-inline">Latest Offers</h2>
                        <div class="sep-leaf-right"></div>
                    </div>
                </div>
                <!-- TITLE END-->
                <div class="section-content">
                    <div class="row justify-content-center row-eq-height">
                        @forelse($categories as $key=>$categorie)
                            <!-- COLUMNS 1 -->
                            <a href="{{ route('frontend.offer.index', $categorie->slug) }}">
                                <div class="col-lg-4 col-md-6 animate_line">
                                    <div class="wt-box service-box-1-new bg-white cardbg h-100">
                                        <div class="wt-icon-box-wraper-new">
                                            <div class="icon-xl inline-icon">
                                                <img src="{{ asset('storage/images/latest_arrival/' . $categorie->image) }}"
                                                    alt="" style="width:100px;height:100px">
                                            </div>
                                            <div class="wt-icon-number-new"><span>{{ $key + 1 }}</span></div>
                                        </div>

                                        <div class="service-box-title-new title-style-2 site-text-secondry">
                                            <h3 class="s-title-one">{{ $categorie->title }}</h3>
                                        </div>
                                        <div class="service-box-new-link">
                                            <a href="{{ route('frontend.offer.category', $categorie->slug) }}"
                                                class="site-button-link">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @empty
                            <div>
                                <p>No Offers Found</p>
                            </div>
                        @endforelse
                    </div>
                </div>

            </div>
        </div>

    </div>
    <!-- CONTENT END -->

    <section>







        @php

            $MANUFACTURERS = [
                [
                    'name' => 'OERLIKON BARMAG',
                    'link' => 'https://www.oerlikon.com/en/brands/oerlikon-barmag/',
                ],
                [
                    'name' => 'NEUMAG GERMANY',
                    'link' => '#',
                ],
                [
                    'name' => 'FARE ITALY',
                    'link' => 'https://www.farespa.com/',
                ],
                [
                    'name' => 'ESL UK',
                    'link' => '#',
                ],
                [
                    'name' => 'MECCANICA MORDENE ITALY',
                    'link' => '#',
                ],
                [
                    'name' => 'DILO DILO GERMANY',
                    'link' => 'https://www.dilo.de/en/machines/needlelooms/',
                ],
                [
                    'name' => 'AUTEFA',
                    'link' => 'https://www.autefa.com/autefa-solutions-group',
                ],
                [
                    'name' => 'ANDRTIZ',
                    'link' => 'https://www.andritz.com/products-en/group/nonwoven-textile/needlepunch/excelle-range/specialty-needlelooms',
                ],
                [
                    'name' => 'FERHER',
                    'link' => '#',
                ],
                [
                    'name' => 'ASSELIN',
                    'link' => '#',
                ],
                [
                    'name' => 'OCTIR',
                    'link' => '#',
                ],
                [
                    'name' => 'SPINNBAU',
                    'link' => '#',
                ],
                [
                    'name' => 'HERGETH',
                    'link' => 'http://www.hergeth.de/',
                ],
                [
                    'name' => 'HUNTER',
                    'link' => '#',
                ],
                [
                    'name' => 'BYWATER',
                    'link' => '#',
                ],
                [
                    'name' => 'SULZER RUTI',
                    'link' => '#',
                ],
                [
                    'name' => 'ITEMA',
                    'link' => 'https://www.itemagroup.com/en/',
                ],
                [
                    'name' => 'LINDAUER DORNIER',
                    'link' => 'https://www.lindauerdornier.com/en/',
                ],
                [
                    'name' => 'TOYOTA',
                    'link' => 'https://www.toyota-industries.com',
                ],
                [
                    'name' => 'TSUDAKOMA',
                    'link' => 'https://www.tsudakoma.co.jp/english/',
                ],
                [
                    'name' => 'SAURER ALLMA',
                    'link' => 'https://saurer.com/en/systems/allma-systems/allma-systems-industrial-yarn',
                ],
                [
                    'name' => 'TEIJIN SEIKE',
                    'link' => 'https://www.teijin.com/',
                ],
                [
                    'name' => 'SSM',
                    'link' => '#',
                ],
                [
                    'name' => 'MENZEL',
                    'link' => '#',
                ],
                [
                    'name' => 'BRUCKNER',
                    'link' => 'https://www.brueckner.com/en',
                ],
                [
                    'name' => 'PICANOL',
                    'link' => 'https://www.picanol.be/',
                ],
                [
                    'name' => 'BENNINGER',
                    'link' => 'https://benningergroup.com/home',
                ],
                [
                    'name' => 'KARL MAYER',
                    'link' => 'https://www.karlmayer.com/en/',
                ],
                [
                    'name' => 'MAYER',
                    'link' => 'https://www.mayercie.com/en/',
                ],
                [
                    'name' => 'TERROT',
                    'link' => 'https://www.terrot.de/en/',
                ],
                [
                    'name' => 'LIBA',
                    'link' => '#',
                ],
                [
                    'name' => 'STARLINGER',
                    'link' => 'https://www.starlinger.com/en/',
                ],
                [
                    'name' => 'LOHIA',
                    'link' => 'https://www.lohiagroup.com/',
                ],
                [
                    'name' => 'WINDMOLLER',
                    'link' => 'https://www.wh.group/int/en/company/w_h_group/',
                ],
                [
                    'name' => 'NGR RECYLING',
                    'link' => 'https://www.ngr-world.com/',
                ],
                [
                    'name' => 'EREMA RECYLING',
                    'link' => 'https://www.erema.com/',
                ],
            ];
        @endphp
        <div class="container ">
            <h2 class="text-center mt-4 ">Best Manufacturers</h2>
            <p class="text-center mx-auto mt-4 ">Best European, Japanese Manufacturer's Quality Used Machineries & Low
                Costs From Who's Who In Techncial Textile Industry OEM</p>
            <div class="row pb-5">
                @foreach ($MANUFACTURERS as $item)
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 mt-3 text-center">
                        <a {{ $item['link'] === '#' ? '' : 'target="_blank"' }}
                            href="{{ $item['link'] === '#' ? 'javascript:;' : $item['link'] }}"
                            class=" new-btns btn  ">{{ $item['name'] }}</a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!--pdf section start -->
    <div class="container ">
        <h2 class="text-center">Technical Data </h2>
        <div class="row justify-content-center my-3">
            <a target="_blank" href="{{ url('pdf/Saturn-Technical-Data.pdf') }}"
                class="btn btn-primary btn-lg open-pdf-button site-button ">Open PDF</a>
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.2.228/pdf.min.js"></script>


    <script>
        var _PDF_DOC,
            _CURRENT_PAGE,
            _TOTAL_PAGES,
            _PAGE_RENDERING_IN_PROGRESS = 0,
            _CANVAS = document.querySelector('#pdf-canvas');





        var _PDF_DOC,
            _CURRENT_PAGE,
            _TOTAL_PAGES,
            _PAGE_RENDERING_IN_PROGRESS = 0,
            _CANVAS = document.querySelector('#pdf-canvas');

        // initialize and load the PDF
        async function showPDF(pdf_url) {
            document.querySelector("#pdf-loader").style.display = 'block';

            // get handle of pdf document
            try {
                _PDF_DOC = await pdfjsLib.getDocument({
                    url: pdf_url
                });
            } catch (error) {
                alert(error.message);
            }

            // total pages in pdf
            _TOTAL_PAGES = _PDF_DOC.numPages;

            // Hide the pdf loader and show pdf container
            document.querySelector("#pdf-loader").style.display = 'none';
            document.querySelector("#pdf-contents").style.display = 'block';
            document.querySelector("#pdf-total-pages").innerHTML = _TOTAL_PAGES;

            // show the first page
            showPage(1);
        }

        // load and render specific page of the PDF
        async function showPage(page_no) {
            _PAGE_RENDERING_IN_PROGRESS = 1;
            _CURRENT_PAGE = page_no;

            // disable Previous & Next buttons while page is being loaded
            document.querySelector("#pdf-next").disabled = true;
            document.querySelector("#pdf-prev").disabled = true;

            // while page is being rendered hide the canvas and show a loading message
            document.querySelector("#pdf-canvas").style.display = 'none';
            document.querySelector("#page-loader").style.display = 'block';

            // update current page
            document.querySelector("#pdf-current-page").innerHTML = page_no;

            // get handle of page
            try {
                var page = await _PDF_DOC.getPage(page_no);
            } catch (error) {
                alert(error.message);
            }

            // original width of the pdf page at scale 1
            var pdf_original_width = page.getViewport(1).width;

            // as the canvas is of a fixed width we need to adjust the scale of the viewport where page is rendered
            var scale_required = _CANVAS.width / pdf_original_width;

            // get viewport to render the page at required scale
            var viewport = page.getViewport(scale_required);

            // set canvas height same as viewport height
            _CANVAS.height = viewport.height;

            // setting page loader height for smooth experience
            document.querySelector("#page-loader").style.height = _CANVAS.height + 'px';
            document.querySelector("#page-loader").style.lineHeight = _CANVAS.height + 'px';

            var render_context = {
                canvasContext: _CANVAS.getContext('2d'),
                viewport: viewport
            };

            // render the page contents in the canvas
            try {
                await page.render(render_context);
            } catch (error) {
                alert(error.message);
            }

            _PAGE_RENDERING_IN_PROGRESS = 0;

            // re-enable Previous & Next buttons
            document.querySelector("#pdf-next").disabled = false;
            document.querySelector("#pdf-prev").disabled = false;

            // show the canvas and hide the page loader
            document.querySelector("#pdf-canvas").style.display = 'block';
            document.querySelector("#page-loader").style.display = 'none';
        }

        // click on "Show PDF" buuton
        document.querySelector("#show-pdf-button").addEventListener('click', function() {
            this.style.display = 'block';
            showPDF('pdf/Saturn-Technical-Data.pdf');
        });

        // click on the "Previous" page button
        document.querySelector("#pdf-prev").addEventListener('click', function() {
            if (_CURRENT_PAGE != 1)
                showPage(--_CURRENT_PAGE);
        });

        // click on the "Next" page button
        document.querySelector("#pdf-next").addEventListener('click', function() {
            if (_CURRENT_PAGE != _TOTAL_PAGES)
                showPage(++_CURRENT_PAGE);
        });
    </script>

@endsection
