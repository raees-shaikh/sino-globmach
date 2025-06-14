@extends('layouts.app')
@section('pageTitle', 'Our Business - ')
@section('content')

    <!-- CONTENT START -->
    <div class="page-content">

        <!-- INNER PAGE BANNER -->
        <div class="wt-bnr-inr overlay-wraper bg-center" style="background-image:url(images/banner/5.jpg);">
            <div class="overlay-main site-bg-secondry opacity-05"></div>
            <div class="container">
                <div class="wt-bnr-inr-entry">
                    <div class="banner-title-outer">
                        <div class="banner-title-name">
                            <h2 class="site-text-primary text-white">Our Business</h2>
                        </div>
                    </div>
                    <!-- BREADCRUMB ROW -->

                    <div class="main-breadcrumbs">
                        <ul class="wt-breadcrumb breadcrumb-style-2">
                            <li><a href="javascript:void(0);">Home</a></li>
                            <li class="b-links">Our Business</li>
                        </ul>
                    </div>

                    <!-- BREADCRUMB ROW END -->
                </div>
            </div>
        </div>
        <!-- INNER PAGE BANNER END -->
        <div class="page-content">

            <div class="section-head center wt-small-separator-outer text-center mb-3 mt-5">
                <div class="wt-small-separator site-text-primary">
                    <div class="sep-leaf-left"></div>
                    <h2 class="d-inline h1">TECHNICAL TEXTILES</h2>
                    <div class="sep-leaf-right"></div>
                </div>
            </div>
            <div class="container mb-1">
                <div class="row">
                    <div class="col-lg-12">
                        <p>We are largest Plant & Machinery brokers in India. We are Pioneers and a leading player in
                            industrial machinery, second hand machinery, used equipments.</p>
                    </div>
                </div>
                {{-- <div class="row d-flex justify-content-center">
                        <div class="col-lg-4 col-md-6 col-sm-12 m-b50">
                            <div class="service-border-box h-100">
                                <div class="wt-box service-box-1 bg-white h-100">
                                    <div class="service-box-content">
                                        <h4> Agrotech (Agro Textiles)</h4>
                                        <h5 class="site-text-primary">All Kinds of Birds, Protection, Insects, Fruit Covers Etc.
                                            Etc.</h5>
                                        <strong> Machinery & Reputed Makes:</strong>
                                        <hr class="m-1 p-1">
                                        <p>
                                            <strong>
                                                Type:
                                            </strong>
                                            Warp Knitting | Weaving etc. etc.
                                        </p>
                                        <p>
                                            <strong>
                                                Makes:
                                            </strong>
                                            KARLMAYER-LIBA-SULZER etc. etc.
                                        </p>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 m-b50">
                            <div class="service-border-box h-100">
                                <div class="wt-box service-box-1 bg-white h-100">
                                    <div class="service-box-content">
                                        <h4> Buildtech (Construction Textiles)</h4>
                                        <h5 class="site-text-primary">Scaffolding Nets, Tarpaulins &#8211; Hdpe, Cotton Canvas
                                            and
                                            Jute Tarpaulins, Hoardings / Signages, Architectural Membranes, Etc.</h5>
                                        <strong> Machinery & Reputed Makes:</strong>
                                        <hr class="m-1 p-1">
                                        <p>
                                            <strong>
                                                Type:
                                            </strong>
                                            Warp Knitting | Weaving | Laminating | Coating etc. etc.
                                        </p>
                                        <p>
                                            <strong>
                                                Makes:
                                            </strong>
                                            KARLMAYER-LIBA-SULZER-DORNIER-NP-NORSDEN-BRUCKNER-ARTOS-BENNINGER etc. etc.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 m-b50">
                            <div class="service-border-box h-100">
                                <div class="wt-box service-box-1 bg-white h-100">
                                    <div class="service-box-content">
                                        <h4>Clothtech (Clothing Textiles)</h4>
                                        <h5 class="site-text-primary">Sewing Thread, Shoe Lace, Interlining, Zip Fastener</h5>

                                        <hr class="m-1 p-1">
                                        <p>
                                            <strong>
                                                Type:
                                            </strong>
                                            PPMFY &#8211; Nylon-HDPE-PP Monofilament, Warp & Circular Knitting | Weaving
                                            |Crochet
                                        </p>
                                        <p>
                                            <strong>
                                                Makes:
                                            </strong>
                                            KARLMAYER-TERROT-MAYER & CIE-LIBA-DORNIER-BARMAG-NEUMAG-SML
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 m-b50">
                            <div class="service-border-box h-100">
                                <div class="wt-box service-box-1 bg-white h-100">
                                    <div class="service-box-content">
                                        <h4>
                                            Geotech (Geo Textiles-Geogrid)
                                        </h4>
                                        <h5 class="site-text-primary">
                                            Infrastrcutre, Railways, Roads, Canals, Lakes, Ponds
                                        </h5>

                                        <hr class="m-1 p-1">
                                        <p>
                                            <strong>
                                                Type:
                                            </strong>
                                            Warp Knitting| Weft Insertion | Weaving | Laminating | Coating etc. etc.
                                        </p>
                                        <p>
                                            <strong>
                                                Makes:
                                            </strong>
                                            KARLMAYER-LIBA-SULZER-DORNIER-NP-NORSDEN-BRUCKNER-ARTOS-BENNINGER etc. etc.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 m-b50">
                            <div class="service-border-box h-100">
                                <div class="wt-box service-box-1 bg-white h-100">
                                    <div class="service-box-content">
                                        <h4>
                                            Hometech (Home Textiles)
                                        </h4>
                                        <h5 class="site-text-primary">
                                            Carpet Backing Cloth, Blinds, Hvac Filters
                                        </h5>

                                        <hr class="m-1 p-1">
                                        <p>
                                            <strong>
                                                Type:
                                            </strong>
                                            Weaving | Laminating | Coating etc. etc.
                                        </p>
                                        <p>
                                            <strong>
                                                Makes:
                                            </strong>
                                            SULZER-DORNIER-SOMET-TOYOTS-PICANOL-BRUCKNER-BENNINGER etc. Etc.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 m-b50">
                            <div class="service-border-box h-100">
                                <div class="wt-box service-box-1 bg-white h-100">
                                    <div class="service-box-content">
                                        <h4>
                                            Indutech (Industrial Textiles)
                                        </h4>
                                        <h5 class="site-text-primary">
                                            Workers Clothing In Oil & Gas ,Chemical Factroys,Filter,Bolting Fabrics, Machine
                                            Lubrication, Cleaning Fabric Etc. Etc. Coated Abrasives, Conveyor Belts, Drive
                                            Belts, Computer Printer Ribbon, Printed Circuit Board, Pp/Hdpe/Ldpe
                                            /Pet,Twines,Ropes And Cordages, Industrial Brushes, Composites, Separators, Cement
                                            Coal, Filter Fabrics, Mattresses And Pillows, Nonwoven Wipes, Furniture Fabrics
                                        </h5>
                                        <hr class="m-1 p-1">
                                        <p>
                                            <strong>
                                                Type:
                                            </strong>
                                            Weaving | Laminating | Coating etc. etc.
                                        </p>
                                        <p>
                                            <strong>
                                                Makes:
                                            </strong>
                                            SULZER-DORNIER-SOMET-TOYOTS-PICANOL-BRUCKNER-BENNINGER etc. Etc.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 m-b50">
                            <div class="service-border-box h-100">
                                <div class="wt-box service-box-1 bg-white h-100">
                                    <div class="service-box-content">
                                        <h4>
                                            Meditech (Medical Textiles)
                                        </h4>
                                        <h5 class="site-text-primary">
                                            Baby Diapers, Surgical Disposables, Surgical Dressing Material, Implantable
                                            Materials, Sanitary Napkin
                                        </h5>
                                        <hr class="m-1 p-1">
                                        <p>
                                            <strong>
                                                Type:
                                            </strong>
                                            Nonwovens SMS | Thermo-Spun Bonding | Coating etc. etc.
                                        </p>
                                        <p>
                                            <strong>
                                                Makes:
                                            </strong>
                                            DILO-FERHER-ASSELIN-AUTEFA-SML-REFIENHAUSER etc. etc.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 m-b50">
                            <div class="service-border-box h-100">
                                <div class="wt-box service-box-1 bg-white h-100">
                                    <div class="service-box-content">
                                        <h4>
                                            Mobiltech (Automotive Textiles)
                                        </h4>
                                        <h5 class="site-text-primary">
                                            Nylon Tyre Cord, Seat Belt Webbing, Car Upholstery/ Seat Cover Fabrics, Automotive
                                            Airbags, Helmets Fabrics Inside, Railways Seat Cover Fabric, Airline Disposables
                                        </h5>
                                        <hr class="m-1 p-1">
                                        <p>
                                            <strong>
                                                Type:
                                            </strong>
                                            POY-FDY Nylon 66, Polyester Filament &#8211; High Speed Air jet-Rapier Weaving | Non
                                            Wovens- Circular-Warp Knitting | Laminating | Coating etc. etc.
                                        </p>
                                        <p>
                                            <strong>
                                                Makes:
                                            </strong>
                                            OERLIKON-BARMAG-NEUMAG-TEIJIN
                                            SEIKE-TORAY-TOYOTA-TSUDAKOMA-SULZER-DORNIER-SOMET-TOYOTS-PICANOL-BRUCKNER-BENNINGER
                                            etc. Etc.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 m-b50">
                            <div class="service-border-box h-100">
                                <div class="wt-box service-box-1 bg-white h-100">
                                    <div class="service-box-content">
                                        <h4>
                                            Packtech (Packaging Textiles)
                                        </h4>
                                        <h5 class="site-text-primary">
                                            Polyolefin Woven Sacks, Flexible Intermediate Bulk Containers (Fibc), Leno Bags,
                                            Wrapping Fabric, Soft Luggage, Jute Hessian, Tea Bags
                                        </h5>
                                        <hr class="m-1 p-1">
                                        <p>
                                            <strong>
                                                Type:
                                            </strong>
                                            PP-HDPE-LDOE-PE Tape Extrusion-Winding-Circular Looms-Flat Weaving-Spun Bond
                                            Nonwovens-Needle Punching
                                        </p>
                                        <p>
                                            <strong>
                                                Makes:
                                            </strong>
                                            STARLINGER-LOHIA &#8211;WINDMOLLER
                                            -BARMAG-NEUMAG-SULZER-DORNIER-SOMET-DILO-FERHER-SMS-REFINHAUSER
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 m-b50">
                            <div class="service-border-box h-100">
                                <div class="wt-box service-box-1 bg-white h-100">
                                    <div class="service-box-content">
                                        <h4>
                                            Protech (Protective Textiles)
                                        </h4>
                                        <h5 class="site-text-primary">
                                            Industrial Gloves, High Altitude Clothing, Chemical Protective Clothing (CC), High
                                            Visibility Clothes, Fire /Flame Retardant Apparel, Fire/Flame Retardant Fabrics (For
                                            Furnishings), Bullet-Proof Jacket.
                                        </h5>
                                        <hr class="m-1 p-1">
                                        <p>
                                            <strong>
                                                Type:
                                            </strong>
                                            Polyester Filament &#8211; High Speed Water jet &#8211;Air jet-Rapier Weaving | Non
                                            Wovens-
                                            Circular-Warp Knitting | Laminating | Coating etc. etc.
                                        </p>
                                        <p>
                                            <strong>
                                                Makes:
                                            </strong>
                                            OERLIKON-BARMAG-NEUMAG-TEIJIN
                                            SEIKE-TORAY-TOYOTA-TSUDAKOMA-SULZER-DORNIER-SOMET-TOYOTS-PICANOL-BRUCKNER-BENNINGER
                                            etc. Etc.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 m-b50">
                            <div class="service-border-box h-100">
                                <div class="wt-box service-box-1 bg-white h-100">
                                    <div class="service-box-content">
                                        <h4>
                                            Sportech (Sports Textiles)
                                        </h4>
                                        <h5 class="site-text-primary">
                                            Parachute Fabrics, Sports Shoe Components, Sports Nets, Sleeping Bags for
                                            Defence/Army Personles, Sports Composites Market, Artificial Turf,
                                        </h5>
                                        <hr class="m-1 p-1">
                                        <p>
                                            <strong>
                                                Type:
                                            </strong>
                                            PE-PP-PET-Tape Extrusions-Polyester Filament &#8211; Crochet-Narrow Weaving &#8211;
                                            High Speed
                                            Water jet &#8211; Air jet-Rapier Weaving | Non Wovens- Circular-Warp Knitting |
                                            Laminating
                                            | Coating etc. etc.
                                        </p>
                                        <p>
                                            <strong>
                                                Makes:
                                            </strong>
                                            KARLMAYER-SIMA-MAGURE-COMEZH-OERLIKON-BARMAG-NEUMAG-TEIJIN
                                            SEIKE-TORAY-TOYOTA-TSUDAKOMA-SULZER-DORNIER-SOMET-TOYOTS-PICANOL-BRUCKNER-BENNINGER
                                            etc. Etc.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div> --}}

            </div>
            <!-- SERVICE DETAIL SECTION START -->
            <div class="section-full small-device  mt-5 p-b50 bg-white">
                <div class="section-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-9 col-md-12">
                                <div class="row">

                                    <div class="col-lg-6 col-md-6 col-sm-12 m-b50">
                                        <div class="service-border-box h-100">
                                            <div class="wt-box service-box-1 bg-white h-100">
                                                <div class="service-box-content">
                                                    <h4> Agrotech (Agro Textiles)</h4>
                                                    <h5 class="site-text-primary">All Kinds of Birds, Protection, Insects,
                                                        Fruit Covers Etc.
                                                        Etc.</h5>
                                                    <strong> Machinery & Reputed Makes:</strong>
                                                    <hr class="m-1 p-1">
                                                    <p>
                                                        <strong>
                                                            Type:
                                                        </strong>
                                                        Warp Knitting | Weaving etc. etc.
                                                    </p>
                                                    <p>
                                                        <strong>
                                                            Makes:
                                                        </strong>
                                                        KARLMAYER-LIBA-SULZER etc. etc.
                                                    </p>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 m-b50">
                                        <div class="service-border-box h-100">
                                            <div class="wt-box service-box-1 bg-white h-100">
                                                <div class="service-box-content">
                                                    <h4>
                                                        Hometech (Home Textiles)
                                                    </h4>
                                                    <h5 class="site-text-primary">
                                                        Carpet Backing Cloth, Blinds, Hvac Filters
                                                    </h5>

                                                    <hr class="m-1 p-1">
                                                    <p>
                                                        <strong>
                                                            Type:
                                                        </strong>
                                                        Weaving | Laminating | Coating etc. etc.
                                                    </p>
                                                    <p>
                                                        <strong>
                                                            Makes:
                                                        </strong>
                                                        SULZER-DORNIER-SOMET-TOYOTS-PICANOL-BRUCKNER-BENNINGER etc. Etc.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 m-b50">
                                        <div class="service-border-box h-100">
                                            <div class="wt-box service-box-1 bg-white h-100">
                                                <div class="service-box-content">
                                                    <h4> Buildtech (Construction Textiles)</h4>
                                                    <h5 class="site-text-primary">Scaffolding Nets, Tarpaulins &#8211; Hdpe,
                                                        Cotton Canvas
                                                        and
                                                        Jute Tarpaulins, Hoardings / Signages, Architectural Membranes, Etc.
                                                    </h5>
                                                    <strong> Machinery & Reputed Makes:</strong>
                                                    <hr class="m-1 p-1">
                                                    <p>
                                                        <strong>
                                                            Type:
                                                        </strong>
                                                        Warp Knitting | Weaving | Laminating | Coating etc. etc.
                                                    </p>
                                                    <p>
                                                        <strong>
                                                            Makes:
                                                        </strong>
                                                        KARLMAYER-LIBA-SULZER-DORNIER-NP-NORSDEN-BRUCKNER-ARTOS-BENNINGER
                                                        etc. etc.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 m-b50">
                                        <div class="service-border-box h-100">
                                            <div class="wt-box service-box-1 bg-white h-100">
                                                <div class="service-box-content">
                                                    <h4>Clothtech (Clothing Textiles)</h4>
                                                    <h5 class="site-text-primary">Sewing Thread, Shoe Lace, Interlining, Zip
                                                        Fastener</h5>

                                                    <hr class="m-1 p-1">
                                                    <p>
                                                        <strong>
                                                            Type:
                                                        </strong>
                                                        PPMFY &#8211; Nylon-HDPE-PP Monofilament, Warp & Circular Knitting |
                                                        Weaving
                                                        |Crochet
                                                    </p>
                                                    <p>
                                                        <strong>
                                                            Makes:
                                                        </strong>
                                                        KARLMAYER-TERROT-MAYER & CIE-LIBA-DORNIER-BARMAG-NEUMAG-SML
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 m-b50">
                                        <div class="service-border-box h-100">
                                            <div class="wt-box service-box-1 bg-white h-100">
                                                <div class="service-box-content">
                                                    <h4>
                                                        Geotech (Geo Textiles-Geogrid)
                                                    </h4>
                                                    <h5 class="site-text-primary">
                                                        Infrastrcutre, Railways, Roads, Canals, Lakes, Ponds
                                                    </h5>

                                                    <hr class="m-1 p-1">
                                                    <p>
                                                        <strong>
                                                            Type:
                                                        </strong>
                                                        Warp Knitting| Weft Insertion | Weaving | Laminating | Coating etc.
                                                        etc.
                                                    </p>
                                                    <p>
                                                        <strong>
                                                            Makes:
                                                        </strong>
                                                        KARLMAYER-LIBA-SULZER-DORNIER-NP-NORSDEN-BRUCKNER-ARTOS-BENNINGER
                                                        etc. etc.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12 m-b50">
                                        <div class="service-border-box h-100">
                                            <div class="wt-box service-box-1 bg-white h-100">
                                                <div class="service-box-content">
                                                    <h4>
                                                        Indutech (Industrial Textiles)
                                                    </h4>
                                                    <h5 class="site-text-primary">
                                                        Workers Clothing In Oil & Gas ,Chemical Factroys,Filter,Bolting
                                                        Fabrics, Machine
                                                        Lubrication, Cleaning Fabric Etc. Etc. Coated Abrasives, Conveyor
                                                        Belts, Drive
                                                        Belts, Computer Printer Ribbon, Printed Circuit Board, Pp/Hdpe/Ldpe
                                                        /Pet,Twines,Ropes And Cordages, Industrial Brushes, Composites,
                                                        Separators, Cement
                                                        Coal, Filter Fabrics, Mattresses And Pillows, Nonwoven Wipes,
                                                        Furniture Fabrics
                                                    </h5>
                                                    <hr class="m-1 p-1">
                                                    <p>
                                                        <strong>
                                                            Type:
                                                        </strong>
                                                        Weaving | Laminating | Coating etc. etc.
                                                    </p>
                                                    <p>
                                                        <strong>
                                                            Makes:
                                                        </strong>
                                                        SULZER-DORNIER-SOMET-TOYOTS-PICANOL-BRUCKNER-BENNINGER etc. Etc.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 m-b50">
                                        <div class="service-border-box h-100">
                                            <div class="wt-box service-box-1 bg-white h-100">
                                                <div class="service-box-content">
                                                    <h4>
                                                        Meditech (Medical Textiles)
                                                    </h4>
                                                    <h5 class="site-text-primary">
                                                        Baby Diapers, Surgical Disposables, Surgical Dressing Material,
                                                        Implantable
                                                        Materials, Sanitary Napkin
                                                    </h5>
                                                    <hr class="m-1 p-1">
                                                    <p>
                                                        <strong>
                                                            Type:
                                                        </strong>
                                                        Nonwovens SMS | Thermo-Spun Bonding | Coating etc. etc.
                                                    </p>
                                                    <p>
                                                        <strong>
                                                            Makes:
                                                        </strong>
                                                        DILO-FERHER-ASSELIN-AUTEFA-SML-REFIENHAUSER etc. etc.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 m-b50">
                                        <div class="service-border-box h-100">
                                            <div class="wt-box service-box-1 bg-white h-100">
                                                <div class="service-box-content">
                                                    <h4>
                                                        Mobiltech (Automotive Textiles)
                                                    </h4>
                                                    <h5 class="site-text-primary">
                                                        Nylon Tyre Cord, Seat Belt Webbing, Car Upholstery/ Seat Cover
                                                        Fabrics, Automotive
                                                        Airbags, Helmets Fabrics Inside, Railways Seat Cover Fabric, Airline
                                                        Disposables
                                                    </h5>
                                                    <hr class="m-1 p-1">
                                                    <p>
                                                        <strong>
                                                            Type:
                                                        </strong>
                                                        POY-FDY Nylon 66, Polyester Filament &#8211; High Speed Air
                                                        jet-Rapier Weaving | Non
                                                        Wovens- Circular-Warp Knitting | Laminating | Coating etc. etc.
                                                    </p>
                                                    <p>
                                                        <strong>
                                                            Makes:
                                                        </strong>
                                                        OERLIKON-BARMAG-NEUMAG-TEIJIN
                                                        SEIKE-TORAY-TOYOTA-TSUDAKOMA-SULZER-DORNIER-SOMET-TOYOTS-PICANOL-BRUCKNER-BENNINGER
                                                        etc. Etc.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 m-b50">
                                        <div class="service-border-box h-100">
                                            <div class="wt-box service-box-1 bg-white h-100">
                                                <div class="service-box-content">
                                                    <h4>
                                                        Packtech (Packaging Textiles)
                                                    </h4>
                                                    <h5 class="site-text-primary">
                                                        Polyolefin Woven Sacks, Flexible Intermediate Bulk Containers
                                                        (Fibc), Leno Bags,
                                                        Wrapping Fabric, Soft Luggage, Jute Hessian, Tea Bags
                                                    </h5>
                                                    <hr class="m-1 p-1">
                                                    <p>
                                                        <strong>
                                                            Type:
                                                        </strong>
                                                        PP-HDPE-LDOE-PE Tape Extrusion-Winding-Circular Looms-Flat
                                                        Weaving-Spun Bond
                                                        Nonwovens-Needle Punching
                                                    </p>
                                                    <p>
                                                        <strong>
                                                            Makes:
                                                        </strong>
                                                        STARLINGER-LOHIA &#8211;WINDMOLLER
                                                        -BARMAG-NEUMAG-SULZER-DORNIER-SOMET-DILO-FERHER-SMS-REFINHAUSER
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 m-b50">
                                        <div class="service-border-box h-100">
                                            <div class="wt-box service-box-1 bg-white h-100">
                                                <div class="service-box-content">
                                                    <h4>
                                                        Protech (Protective Textiles)
                                                    </h4>
                                                    <h5 class="site-text-primary">
                                                        Industrial Gloves, High Altitude Clothing, Chemical Protective
                                                        Clothing (CC), High
                                                        Visibility Clothes, Fire /Flame Retardant Apparel, Fire/Flame
                                                        Retardant Fabrics (For
                                                        Furnishings), Bullet-Proof Jacket.
                                                    </h5>
                                                    <hr class="m-1 p-1">
                                                    <p>
                                                        <strong>
                                                            Type:
                                                        </strong>
                                                        Polyester Filament &#8211; High Speed Water jet &#8211;Air
                                                        jet-Rapier Weaving | Non
                                                        Wovens-
                                                        Circular-Warp Knitting | Laminating | Coating etc. etc.
                                                    </p>
                                                    <p>
                                                        <strong>
                                                            Makes:
                                                        </strong>
                                                        OERLIKON-BARMAG-NEUMAG-TEIJIN
                                                        SEIKE-TORAY-TOYOTA-TSUDAKOMA-SULZER-DORNIER-SOMET-TOYOTS-PICANOL-BRUCKNER-BENNINGER
                                                        etc. Etc.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 m-b50">
                                        <div class="service-border-box h-100">
                                            <div class="wt-box service-box-1 bg-white h-100">
                                                <div class="service-box-content">
                                                    <h4>
                                                        Sportech (Sports Textiles)
                                                    </h4>
                                                    <h5 class="site-text-primary">
                                                        Parachute Fabrics, Sports Shoe Components, Sports Nets, Sleeping
                                                        Bags for
                                                        Defence/Army Personles, Sports Composites Market, Artificial Turf,
                                                    </h5>
                                                    <hr class="m-1 p-1">
                                                    <p>
                                                        <strong>
                                                            Type:
                                                        </strong>
                                                        PE-PP-PET-Tape Extrusions-Polyester Filament &#8211; Crochet-Narrow
                                                        Weaving &#8211;
                                                        High Speed
                                                        Water jet &#8211; Air jet-Rapier Weaving | Non Wovens- Circular-Warp
                                                        Knitting |
                                                        Laminating
                                                        | Coating etc. etc.
                                                    </p>
                                                    <p>
                                                        <strong>
                                                            Makes:
                                                        </strong>
                                                        KARLMAYER-SIMA-MAGURE-COMEZH-OERLIKON-BARMAG-NEUMAG-TEIJIN
                                                        SEIKE-TORAY-TOYOTA-TSUDAKOMA-SULZER-DORNIER-SOMET-TOYOTS-PICANOL-BRUCKNER-BENNINGER
                                                        etc. Etc.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-3 col-md-12 rightSidebar bg-gray-light ">
                                <div class=" sidebar-scroll-widget">

                                    <a class="d-block " href="">
                                        <div class="h6 site-text-primary">
                                            TSUDAKOMA ZAX AIRJET LOOM WIDTH 330 CM CAM YEAR 1992-95
                                        </div>
                                        <div class="small">
                                            TSUDAKOMA ZAX AIRJET LOOM&#8230;
                                        </div>
                                        <hr>
                                    </a>
                                    <a class="d-block " href="">
                                        <div class="h6 site-text-primary">
                                            TSUDAKOMA ZAX AIRJET LOOM WIDTH 280 CM CAM YEAR 1992-95
                                        </div>
                                        <div class="small">
                                            TOYOTA T710 AIRJET LOOM&#8230;
                                        </div>
                                        <hr>
                                    </a>
                                    <a class="d-block " href="">
                                        <div class="h6 site-text-primary">
                                            TECHNICAL TEXTILES
                                        </div>
                                        <div class="small">
                                            We are largest Plant&#8230;
                                        </div>
                                        <hr>
                                    </a>
                                    <a class="d-block " href="">
                                        <div class="h6 site-text-primary">
                                            TOYOTA T710 AIRJET LOOM WIDTH 190 CM CAM YEAR 2004
                                        </div>
                                        <div class="small">
                                            TOYOTA T710 AIRJET LOOM&#8230;
                                        </div>
                                        <hr>
                                    </a>
                                    <a class="d-block " href="">
                                        <div class="h6 site-text-primary">
                                            TOYOTA T710 AIRJET LOOM WIDTH 190 CM CAM YEAR 2004
                                        </div>
                                        <div class="small">
                                            TOYOTA T710 AIRJET LOOM&#8230;
                                        </div>
                                        <hr>
                                    </a>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- LATEST PRJECTS SLIDER START -->
            <div class=" p-b30 p-t50  project-style-new bg-gray-light ">

                <!-- IMAGE CAROUSEL START -->
                <div class="section-content ">
                    <div class="container">
                        <div class="owl-carousel project-carousel  owl-btn-vertical-center ">


                            <!-- COLUMNS  -->
                            <div class="item bg-white p-3 h-100">
                                <div class="project-new-2">
                                    <div class="project-new-content2">
                                        <h4 class="wt-title"><a href="javascript:void(0);">
                                                Man Made Fiber- Complete Plant &amp; Machinery
                                            </a>
                                        </h4>
                                        <p>
                                            Bhairav Plant &amp; Machinery Brokers LLP due to its continuouscontacts with
                                            Textile Mills world over, from Composite Mills to just Spinners, Weavers,
                                            Knitters &amp; Processors, get timely news of aution, liquidations .
                                        </p>
                                        <a href="#" class="site-button-link site-text-primary">Read
                                            More </a>
                                    </div>
                                </div>
                            </div>


                            <!-- COLUMNS  -->
                            <div class="item bg-white p-3 h-100">
                                <div class="project-new-2">
                                    <div class="project-new-content2">
                                        <h4 class="wt-title"><a href="javascript:void(0);">
                                                Dyeing &amp; Finishing - Complete Plant &amp; Machinery
                                            </a>
                                        </h4>
                                        <p>
                                            Bhairav Plant &amp; Machinery Brokers LLP makes contact with world over Dyeing
                                            &amp; Finishing Mills &amp; locates of  Complete Plants &amp;
                                            Machinery's for Dyeing
                                        </p>
                                        <a href="#" class="site-button-link site-text-primary">Read
                                            More </a>
                                    </div>
                                </div>
                            </div>


                            <!-- COLUMNS  -->
                            <div class="item bg-white p-3 h-100">
                                <div class="project-new-2">
                                    <div class="project-new-content2">
                                        <h4 class="wt-title"><a href="javascript:void(0);">
                                                Non Woven - Complete Plant &amp; Machinery
                                            </a>
                                        </h4>
                                        <p>
                                            Bhairav Plant &amp; Machinery Brokers LLP Locates CompletePlants for Technical
                                            Textiles, Nonwoven fabircs, Baby Daipers, Tissues, Wipes, Paper, Hygine
                                            Products, Linning,
                                        </p>
                                        <a href="#" class="site-button-link site-text-primary">Read
                                            More </a>
                                    </div>
                                </div>
                            </div>

                            <!-- COLUMNS  -->
                            <div class="item bg-white p-3 h-100">
                                <div class="project-new-2">
                                    <div class="project-new-content2">
                                        <h4 class="wt-title"><a href="javascript:void(0);">
                                                Embroidery - Complete Plant &amp; Machinery
                                            </a>
                                        </h4>
                                        <p>
                                            Bhairav Plant &amp; Machinery Brokers LLP offers all kinds of Large Quantity
                                            Machines for Embroidery from Single Head to Multihead &amp;Shuttle, Braidingand
                                            Trimming.
                                        </p>
                                        <a href="#" class="site-button-link site-text-primary">Read
                                            More </a>
                                    </div>
                                </div>
                            </div>


                            <!-- COLUMNS  -->
                            <div class="item bg-white p-3 h-100">
                                <div class="project-new-2">
                                    <div class="project-new-content2">
                                        <h4 class="wt-title"><a href="javascript:void(0);">
                                                Miscellaneous - Complete Plant &amp; Machinery
                                            </a>
                                        </h4>
                                        <p>
                                            Miscellaneous Equipments. Coming soon...
                                        </p>
                                        <a href="#" class="site-button-link site-text-primary">
                                            Read More
                                        </a>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>


            </div>
            <!-- LATEST PRJECTS SLIDER END -->

        @endsection
