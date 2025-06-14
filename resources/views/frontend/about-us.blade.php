@extends('frontend.layouts.app')
@section('pageTitle', 'Company Profile')
@section('content')
    <style>
        .about-img {
            background: url(frontend/namaste-chinese-girl-new-v-.jpg) !important;
            min-height: 630px !important;
            background-size: cover !important;

        }

        @media screen and (max-width: 767px) {
            #banner-section.bg-prefix {
                background: url(frontend/china-images/blue-bannermobile.png) !important;
                background-attachment: fixed !important;
                background-repeat: no-repeat !important;
                background-size: cover !important;
            }

        }

        #banner-section.bg-prefix {
            background: url(frontend/china-images/blue-banner1.png);
            background-attachment: fixed;
            background-repeat: no-repeat !important;
            background-size: cover !important;
            height: 550px;
        }
    </style><!-- Temporarily css untill next deisgn-->
    <!-- Banner Start -->
    <section id="banner-section" class="bg-prefix">
        <div class="overlay">
            <div class="container">
                <div class="row text-center mt-100-px pt-5">
                    <div class="col-md-12 mt-30">
                        <h1 class="lowercase text-white">Company Profile</h1>
                    </div>
                    <div class="col-md-12 mt-3 divide">
                        <ul class="d-flex justify-content-center">
                            <li><a href="{{ url('/') }}" class="text-white">Home</a></li>
                            <li><!--<a class="dot-divider"></a>--><i
                                    class="text-white lni lni-angle-double-right divider mx-1"></i></li>
                            <li><a href="#!" class="text-primary">Company Profile</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner End -->

    <!-- About Detl Start -->
    <section class="bg-pink py-5 d-md-block d-none">
        <div class="text-center d-none ">About Us</div>
    </section>
    <section id="about-detl" class="  mt--95 mt--0 mb--85">
        <div class="container-fluid ">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-12  order-2">
                    <div class="about-text section-title px-3 py-5">
                        <h5 class="wow fadeInLeft " data-wow-delay=".2s">Company Profile </h5>
                        <h2 class="wow fadeInLeft blue-clr py-0 my-0 pt-2" data-wow-delay=".4s">Sino Globmach</h2>
                        <p class="wow fadeInLeft py-1" data-wow-delay=".8s">SINO GLOBMACH are Largest International Brokers
                            & Agents For New, Complete Plants & Machinery For Technical Textiles &
                            Technical Engineered Plastics from different Countries worldwide focusing though on CHINA
                            majorly.</p>
                        <p class="wow fadeInLeft py-1" data-wow-delay=".6s">We offer a wide selection of canceled orders and
                            brand-new and  plants for the global polymer and plastics industry, including technical
                            textiles.</p>
                        <p class="wow fadeInLeft py-1" data-wow-delay=".6s">Our company has experience of more than two
                            decades & has the ability of being most extensive brokers for all kinds of textile plants.</p>
                        <p class="wow fadeInLeft py-1" data-wow-delay=".6s">To name a few past experiences, we have sold
                            more than 500,000 spindles of Ring Spinning Plant & Machineries, 60,000 Rotors, 1000 Looms, 200
                            Circular Knitting Machines, 100 Flat Knitting, Warp Knitting, Non-Woven plants, Man-made Fibre
                            plants like Polyester POY, FDY, Nylon 66, Viscose Staple Fiber, Viscose filament yarn, Acrylic,
                            Tajima, Barudan Embroidery machines & others.</p>
                        <p class="wow fadeInLeft py-1" data-wow-delay=".6s">We specialize in providing geotechnical and
                            technical plastics industry plant and machinery solutions realted to all Polymers & Reinforced
                            Materials.<br>
                            THERMOPLASTICS | THERMOSETS | ELASTOMERS | LLDPE | LDPE | HDPE | POLYPROPYELENE | POLYESTER |
                            NYLON | NYLON66 | POLYCARBONATE | PVA | UPVC | PVC | RUBBER | SYTHETIC RUBBER | CARBON | GLASS |
                            ABS | ACRYCLIC | EPOXY | RESINS | NATURAL FIBERS | VISCOSE | COTTON | JUTE | BAMBOO FIBER & many
                            many more.</p>
                        <p class="wow fadeInLeft py-1" data-wow-delay=".6s">Sino GLOBMACH provides its Indian & other
                            Overseas Customers, one of the largest inventory of  TEXTILE plants and individual machinery
                            covering Entire range of TEXTILE Industries from SPINNING, WEAVING, PROCESSING, KNITTING,
                            WOLLEN, WORSTED, MAN MADE FIBRE, NON WOVENS, EMBROIDERY & other TEXTILE RELATED MACHINERY'S,
                            which are located in different countries from mostly from CHINA - EUROPE - AMERICA - ASIA -
                            AFRICA & are decommissioned due to overcapacity, Economic, expensive labour, Market conditions,
                            mergers, business re-organisation or environmental regulations at their present location. </p>
                        <p class="wow fadeInLeft py-1" data-wow-delay=".6s">This plants & machinery’s are available at a
                            very low cost for relocation to any part of the world.</p>

                    </div>
                </div>
                <div class="col-lg-5 col-md-12  g-0  order-1">

                    <div class="about-img-quote wow fadeInLeft  b-left-0 border-0" data-wow-delay="1s">

                        <!--<i class="fa fa-industry text-white"></i>-->
                        <a href="{{ url('/') }}"> <img src="{{ url('frontend/images/logo-horizontal.png') }}"
                                alt=""></a>
                        <!-- <i class="flaticon-straight-quotes"></i>-->
                        <h5 class="mt-2 text-white ml-20">Running Business Since 2000</h5>

                    </div>
                    <div class="text-center">
                        <img src="frontend/namaste-chinese-girl-new.png" alt="" class="mt-md-5 mt-2 pt-5">
                    </div>
                </div>
                <div class="col-12 order-3">
                    <div class="about-text section-title px-3 py-0 py-md-1">

                        <p class="wow fadeInLeft py-1" data-wow-delay=".6s">We cater to various industries such as GEOCELL |
                            GEOMEMBRANE | GEOSTRAPS | GEOGRIDS | FLAT WOVEN | WARP KNITTED WEFT INSERTIONS | EXTRUDED| BLOWN
                            | CAST | BOPP | BOPET | BOPA | PVA FILMS | RUBBER SYNTH | RENIFRICED BY CARBON | GLASS | STEEL
                            WIRE | ALUMINIUM WIRE | NON FEROUS & many more.</p>
                        <p class="wow fadeInLeft py-1" data-wow-delay=".6s">Applications : INFRAPROJECTS LIKE ROADS |
                            RAILWAYS | TUNNELS | AEROSPACE | DEFENCE | PLASTICS RECYLCING | EXTRUSIONS | ENGIENERING
                            PLASTICS | PACKTECH | SPORTECH | INDUTECH | MEDITECH | AGROTECH | COMPRESSED BIOGAS |
                            ACQUACULURE | PONDS | FISHERES | WATER STROAGES | METHANE GAS STORAGE | FILMS | COATING |
                            EMBOSSING | REINFORCMENTS | TARAPAULINS | VENTILATOR | DRY FILTERATION | WET FILTERATIONS |
                            NONWOVENS NEEDLE PUNCHED | SPUNBONDED | THERMOBONDED | CHEMCIAL BONDED | SPUN LACE | MAN MADE
                            FIBER & YARNS | TYRECORD | CONYVER BELTS | PHARAMA | TEXTILES | CEMENT | STEEL | CONSTRCUTION |
                            PROCESS CHEMICAL INDUSTRY | CONSUMER & FOOD PACKING | INDUSTRAIL PACKING | COSMETICS & OIL
                            PACAKING | LARGE DIAMETER PIPES TO SMALL | TANKS | BOARDS | SHEETS.</p>
                        <p class="wow fadeInLeft py-1" data-wow-delay=".6s">Plants or Machinery come with complete
                            documentation including detailed engineering, layouts & foundation drawings. The facilities
                            located abroad for plants available for SALE, can be inspected at customers convenience to
                            investigate how they may compliment expansion plans or new investment projects.</p>
                        <p class="wow fadeInLeft py-1" data-wow-delay=".6s">We believe in providing the best services by
                            offering BEST QUALITY/CONDITION & LOW COST complete plants-machinery & try to negotiate a deal
                            successfully on behalf or along with our clients at most competitive prices & do quick
                            implementation with faster delivery for different plants to be installed in India.</p>

                        <P class="wow fadeInLeft py-1" data-wow-delay=".6s">About the founder - Textile Technologist &
                            Marketing Expert TRAVELLED TO ALMOST MAJOR COUNTRIES which are TEXTILE CENTERS IN
                            USA-EUROPE-CHINA-ASIA-AFRICA & has been providing Indian clients in TEXTILE sectors with full
                            range of support, from selling Large Plants to small machinery & negotiating a better deal for
                            them by utilizing the ART of SOURCING-RELOCATING-EVALUATING & NEGOTIATING.</P>
                        <P class="wow fadeInLeft py-1" data-wow-delay=".6s">We look forward to have a WIN - WIN deals for
                            all our potential clients. We believe CUSTOMER IS KING & we are ready to serve them with
                            transparency, honesty & with fully dedicated manner.</P>
                        <p class="wow fadeInLeft py-1" data-wow-delay=".6s"> 24/7/365 Working Days is our aim to let
                            customer have fastest & instant information to move forward.</p>
                        <p class="wow fadeInLeft py-1" data-wow-delay=".6s">Export & Imports Division Our Motto Max
                            hours/day & May days in Year.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Detl End -->

    <!-- Counter Start -->
    {{-- <section id="counter-box" class="bg-blue ">
        <div class="text-center   section-title pt-5 pb-4">
            <h5 class="wow fadeInLeft" data-wow-delay=".2s">About Sino Globmach</h5>
            <h2 class="wow fadeInLeft mt-2" data-wow-delay=".4s">Lowest Rates & Best Quality Always</h2>
        </div>
        <div class="container py-3" >
            <div class="row justify-content-center pb-4 ">

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="counter-item text-center wow fadeInUp" data-wow-delay=".2s">
                        <div class="counter-icon">
                            <img src="frontend/images/new-shape-.png" alt="">
                            <i class="lni lni-thumbs-up"></i>
                        </div>
                        <h3 class=" mb-0 "><span  class="counter h3 text-white" data-number="900"></span>+</h3>
                        <h5 class="text-white mt-2">Plants & Machinery Sold</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 my-4 my-md-0">
                    <div class="counter-item text-center wow fadeInUp" data-wow-delay=".4s">
                        <div class="counter-icon">
                            <img src="frontend/images/new-shape-.png" alt="">
                            <i class="lni lni-users"></i>
                        </div>
                        <h3 class=" mb-0 " ><span  class="counter h3 text-white" data-number="7000"></span>+</h3>
                        <h5 class="text-white mt-2">Clients</h5>
                    </div>
                </div>

                <div class="col-lg-5 col-md-6 mt-lg-0 mt-md-5 mt-0 col-12">
                    <div class="counter-item text-center wow fadeInUp" data-wow-delay=".6s">
                        <div class="counter-icon">
                            <img src="frontend/images/new-shape-.png" alt="">
                            <i class="lni lni-cup"></i>
                        </div>
                        <h3 class=" mb-0 "><span  class="counter h3 text-white" data-number="33"></span>+</h3>
                        <h5 class="text-white mt-2">World-Wide Exhibitions Participated</h5>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- Counter End -->



@endsection
