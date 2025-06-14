@extends('layouts.app')
@section('pageTitle', 'Business Process')
@section('content')



    <div class="page-content bg-gray-light">

        <div class="wt-bnr-inr overlay-wraper bg-center" style="background-image:url(images/banner/5.jpg);">
            <div class="overlay-main site-bg-secondry opacity-05"></div>
            <div class="container">
                <div class="wt-bnr-inr-entry">
                    <div class="banner-title-outer">
                        <div class="banner-title-name">
                            <h1 class="site-text-primary text-white">Business Process</h1>
                        </div>
                    </div>
                    <!-- BREADCRUMB ROW -->

                    <div class="main-breadcrumbs">
                        <ul class="wt-breadcrumb breadcrumb-style-2">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li class="b-links">Business Process</li>
                        </ul>
                    </div>

                    <!-- BREADCRUMB ROW END -->
                </div>
            </div>

        </div>
        <!-- INNER PAGE BANNER END -->
        <div class="business-process-title">
            <div class="container">
                <div class="title">
                    <h2>How We Work</h2>
                    <h3>Process Flow / Methodology</h3>
                </div>
            </div>
        </div>
        <div class="business-process bg-gray-light py-4">
            <div class="row">
                @php
                    $processItem = [
                        [
                            'index' => '01',
                            'name' => 'Inquiry',
                            'icon' => 'inquiry.svg',
                            'image' => 'Curious.png',
                            'about' => 'All Inquiry’s Received By WhatsApp, Phone Calls, Website. Google Search, References By Our Existing Clients, Via Participating Through Exhibitions In India & International, Advertisements In New Paper, Magazines, Online Media, Sales Circulars Etc.',
                        ],
                        [
                            'index' => '02',
                            'name' => 'Inward Inquiry',
                            'icon' => 'inward-inquiry.svg',
                            'image' => 'Cohort analysis.png',
                            'about' => 'All Inquiries Are Been Verified On The Authenticity Of Each Clients, Based On Their Actual Inquiry Immediate Of Projects, Whether They Can Import With Having Valid Gst-Iec Codes, Land, Building, Shed To Install Plant Or Machinery’s & Most Importantly Ready Banks Approved Finances Or Internal Finances…',
                        ],
                        [
                            'index' => '03',
                            'name' => 'Guidance, Instructions & Suggestion',
                            'icon' => 'guidance-instructions-suggestion.svg',
                            'image' => 'Business Plan.png',
                            'about' => '<p>Once Our Marketing & Sales Staff Gets Feedback From Our Research & Development Departments On Each Client’s History, They Speak To Clients To Get To Real Specifications, Prices They Can Afford To Import, Tech Parameters, Terms Of Payments For Imports, Inspection Plans, Visiting Peoples Invitation Letters, Getting Them Apply For Visas & Guide Them To Visit Overseas Where The Plant Or Machinery’s Are Of Their Interest To Finalize……Help Each Client Whether Owners/Cmd/Directors Or Presidents To Gm Technical On Overseas Hotels, Locations, Transportations, Managing With Our Counter Parts Who Sell These Second-Hand Machinery’s…</p>  <p>In Short We Treat Our Clients Like Our Family For Ease Of Doing Business & Feel Comfortable.</p> <p>We Do Suggest Our Clients Not Just One Proposals But With Many Options To Choose Of With Their Matching Price/Specifications Requirements, As We Feel A Client Needs To Have A Transparent International Broker With Not Just Intentions Of Sales But Also Services…</p>',
                        ],
                        [
                            'index' => '04',
                            'name' => 'Price & Terms',
                            'icon' => 'price-terms.svg',
                            'image' => 'Credit assesment.png',
                            'about' => '<p>All Our Proposals/Offers Submitted To Clients After Discussions & Felt Being Genuine Buyer, We Give Technical Specifications, Videos, Photos Of The Machinery’s Of Their Interest & Lowest Rates Possible With Max Scope Of Supply & As Also Sometimes Spare Parts Included Free, We Don’t See As Always Our Profits, Commissions/Fees/Consultations 1st But For Our Company Policy Matters, Client/Customer/Buyer 1st & Then Profits.</p> <p>Terms We Always Try To Submit Flexible Terms To Accommodate Clients Based On Their Financial Availability, With Preferred Letter Of Credit Due To Overseas Imports & Risks Sometimes Client Think Of, Or If They Prefer 100% Wire Transfer From Banks, We Do Workout The Same .. Any Terms Which Gives Client Ease Of Doing Business We Assist Them..</p>',
                        ],
                        [
                            'index' => '05',
                            'name' => 'Pre Finalization Process',
                            'icon' => 'pre-finalization-process.svg',
                            'image' => 'New employee.png',
                            'about' => '<p>We After Speaking To Client, Owners & Their Technical Team, Submit A Final Price Based On Terms Of Delivery, Payment & Port/Destinations They Need In Proforma Invoice Format Signed By Oversees Seller & Countered By Buyer From India Or Our Overs Clients/Buyers Too…</p><p> For Financial Requirements From Banks, We Do Provide Imports Related Documents In Draft Format, Like Chartered Engg Certificates,BL Drafts, Commercial Invoices, Serial Number Photos If Available, Layouts, Dimensions Of Machinery’s/Plants, Power Requirements, Production Parameters, Efficiency Of Overseas Machinery’s When In Production, Quality Configuration, Etc, In Order That Our Clients Get Full Satisfaction To Proceed To Finalize As Next Step…</p>',
                        ],
                        [
                            'index' => '06',
                            'name' => 'Post Finalization',
                            'icon' => 'process.svg',
                            'image' => 'Product iteration.png',
                            'about' => 'Submitting All Draft Documentations Of Shipping, For Clients Import Departments To Approve, As Well As Their Banks & Then Give Them Final Imports Documentations, From Copy Of BL, Commercial Invoices, CEC, Packing List, Photos Of The Machinery’s Pre Loading In Containers & Post With Container Numbers, Liners Indian Agents Contacts For Our Clients Imports Clearness… Any Further Assistance/Help We Are Always There To Support Our Genuine Clients All Over India & Overseas Countries.',
                        ],
                    ];
                @endphp
                {{-- {{ dd($processItem) }} --}}
                @foreach ($processItem as $item)
                    <div class="col col-12 col-lg-2 col-md-4 col-sm-6 col-xs-12">
                        <a href="{{ url()->current() }}#product{{ $item['index'] }}" class="item">
                            <div class="item-icon">
                                <img src="images/icons/{{ $item['icon'] }}" alt="">
                            </div>
                            <div class="item-number-line">
                                <div class="item-number">
                                    <div>
                                        {{ $item['index'] }}
                                    </div>
                                </div>
                            </div>
                            <div class="item-name">
                                <h3>
                                    {{ $item['name'] }}
                                </h3>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
        <section class="container  bg-gray-light py-4">
            <div class="row">
                @foreach ($processItem as $item)
                    <div id="product{{ $item['index'] }}" class=" col-lg-6  mb-4">
                        <div class="service-border-box h-100">
                            <div class="wt-box service-box-1 bg-white h-100">
                                <div class="service-box-content">
                                    <h3>{{ $item['name'] }}</h3>
                                    <hr class="m-1 p-1">
                                    <img src="images/process/{{ $item['image'] }}" alt=""
                                        class="m-auto d-block max-h-250" />
                                    <p>{!! $item['about'] !!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </div>
@endsection
