@extends('layouts.app')
@section('pageTitle', 'Latest Arrivals')
@section('content')

    <div class="page-content">

        <div class="wt-bnr-inr overlay-wraper bg-center" style="background-image:url(images/banner/5.jpg);">
            <div class="overlay-main site-bg-secondry opacity-05"></div>
            <div class="container">
                <div class="wt-bnr-inr-entry">
                    <div class="banner-title-outer">
                        <div class="banner-title-name">
                            <h2 class="site-text-primary text-white">Latest Offers</h2>
                        </div>
                    </div>
                    <!-- BREADCRUMB ROW -->

                    <div class="main-breadcrumbs">
                        <ul class="wt-breadcrumb breadcrumb-style-2">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li>Latest Offers</li>
                            <li class="b-links">Offers</li>
                        </ul>
                    </div>

                    <!-- BREADCRUMB ROW END -->
                </div>
            </div>
        </div>
        <!-- INNER PAGE BANNER END -->

        <div class="section-head center wt-small-separator-outer text-center mb-3 mt-5">
            <div class="wt-small-separator site-text-primary">
                <div class="sep-leaf-left"></div>
                <h2 class="d-inline h1">Technical Textiles </h2>
                <div class="sep-leaf-right"></div>
            </div>
        </div>
        <div class="container mb-1">
            <div class="row">
                <div class="col-lg-12">
                    <p>We Are Largest Plant & Machinery Brokers In India. We Are Pioneers And A Leading Player In
                        Industrial Machinery, Second Hand Machinery, Used Equipments.</p>
                </div>
            </div>


        </div>
        <!-- SERVICE DETAIL SECTION START -->
        <div class="section-full small-device  mt-5 p-b50 bg-white">
            <div class="section-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9 col-md-12">
                            <div class="row">
                                {{-- <div class="col-lg-6 col-md-6 col-sm-12 m-b50">
                                    <div class="service-border-box h-100">
                                        <div class="wt-box service-box-1 bg-white h-100">
                                            <div class="service-box-content">
                                                <h4 class="name">
                                                    Hometech (Home Textiles)
                                                </h4>
                                                <h5 class="site-text-primary about">
                                                    Carpet Backing Cloth, Blinds, Hvac Filters
                                                </h5>
                                                <hr class="m-1 p-1">
                                                <p class="type">
                                                    <strong>
                                                        Type:
                                                    </strong>
                                                    Weaving | Laminating | Coating etc. etc.
                                                </p>
                                                <p class="makes">
                                                    <strong>
                                                        Makes:
                                                    </strong>
                                                    SULZER-DORNIER-SOMET-TOYOTS-PICANOL-BRUCKNER-BENNINGER etc. Etc.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}


                                    <div class="card mx-3" >
                                      <img class="card-img-top" src="images/product-img/benninger.jpg" alt="Card image" style="width:100%">
                                      <div class="card-body">
                                        <h4 class="card-title">Title</h4>
                                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, unde accusantium. Perferendis sunt temporibus vel totam labore praesentium aliquam inventore, itaque doloremque et illum, sapiente mollitia nulla enim excepturi quia?</p>

                                      </div>
                                    </div>

                                @forelse($offers as $offer)
                                    <div class="col-lg-6 col-md-6 col-sm-12 m-b50">
                                        <a
                                            href="{{ route('frontend.offer.show', ['category' => $offer->categories()->first()->slug, 'slug' => $offer->slug]) }}">
                                            <div class="service-border-box h-100">
                                                <div class="wt-box service-box-1 bg-white h-100">
                                                    <div class="service-box-content">
                                                        <h4 class="name">
                                                            {{ $offer->title }}
                                                        </h4>
                                                        <h5 class="site-text-primary about">
                                                            {{ $offer->categories()->first()->title }}
                                                        </h5>
                                                        <hr class="m-1 p-1">
                                                        <p class="type">
                                                            {{ $offer->description }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                @empty
                                    <div>
                                        {{--<td colspan="4">No Data</td>--}}
                                    </div>
                                @endforelse
                            </div>
                            <div class="text-center mt-4 mx-auto">
                                {{ $offers->links() }}
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-12 rightSidebar bg-gray-light ">
                            <div class=" sidebar-scroll-widget">

                                @forelse($categories as $categorie)
                                    <a class="d-block" href="{{ route('frontend.offer.index', $categorie->slug) }}">
                                        <div class="h6 site-text-primary">
                                            {{ $categorie->title }}
                                        </div>
                                        {{-- <div class="small">
                                            TSUDAKOMA ZAX AIRJET LOOM&#8230;
                                        </div> --}}
                                        <hr>
                                    </a>
                                @empty
                                    <div>
                                        <td colspan="4">No Data</td>
                                    </div>
                                @endforelse

                                {{-- <a class="d-block " href="">
                                    <div class="h6 site-text-primary">
                                        TSUDAKOMA ZAX AIRJET LOOM WIDTH 280 CM CAM YEAR 1992-95
                                    </div>
                                    <div class="small">
                                        TOYOTA T710 AIRJET LOOM&#8230;
                                    </div>
                                    <hr>
                                </a> --}}
                            </div>
                        </div>
                        {{-- <ul class="pagination m-b0 p-b0 mx-auto">
                            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul> --}}
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
                        @forelse($latestoffers as $latestoffer)
                            <div class="item bg-white p-3 h-100" style="cursor: pointer;"
                                onclick='window.open("{{ route('frontend.offer.show', ['category' => $latestoffer->categories()->first()->slug, 'slug' => $latestoffer->slug]) }}","_self")'>
                                <div class="project-new-2">
                                    <div class="project-new-content2">
                                        <h4 class="wt-title"><a href="javascript:void(0);">
                                                {{ $latestoffer->title }}
                                            </a>
                                        </h4>
                                        <p>
                                            {{ $latestoffer->description }}
                                        </p>
                                        <a href="#" class="site-button-link site-text-primary">Read
                                            More </a>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div>
                                <td colspan="4">No Data</td>
                            </div>
                        @endforelse


                        <!-- COLUMNS  -->

                        {{-- <div class="item bg-white p-3 h-100">
                            <div class="project-new-2">
                                <div class="project-new-content2">
                                    <h4 class="wt-title"><a href="javascript:void(0);">
                                            Dyeing &amp; Finishing - Complete Plant &amp; Machinery
                                        </a>
                                    </h4>
                                    <p>
                                        Bhairav Plant &amp; Machinery Brokers LLP makes contact with world over Dyeing
                                        &amp; Finishing Mills &amp; locates of Secondhand Complete Plants &amp;
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
                        </div> --}}


                    </div>
                </div>
            </div>
        </div>
        <!-- LATEST PRJECTS SLIDER END -->
    </div>
@endsection
