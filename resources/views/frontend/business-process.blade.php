@extends('frontend.layouts.app')

@section('pageTitle', 'Business Process')
@section('content')
<style>
#banner-section.bg-prefix{
	background:url(frontend/images/about/banner-b-process.png);
	background-attachment:fixed;
   background-position: top;
   height:550px;
}
.text-light-black{
    color:#00000080;
}

</style>
    <!-- Banner Start -->
    <section id="banner-section" class="bg-prefix ">
        <div class="overlay">
            <div class="container">
                <div class="row text-center  pt-5 mt-100-px" >
                    <div class="col-md-12 mt-30">
                        <h1 class="lowercase text-white">Business Process</h1>
                    </div>
                    <div class="col-md-12 mt-3 divide">
                        <ul class="d-flex justify-content-center">
                            <li><a href="{{url('/')}}" class="text-white">Home</a></li>
                            <li><!--<a class="dot-divider"></a>--><i class="text-white lni lni-angle-double-right divider mx-1"></i></li>
                            <li><a href="#!" class="text-primary">Business Process</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Banner End -->
    <section  class=" py-4 bg-pink" >
        <div class="">
            <div class="container">
                <div class="row text-center">


                    <div class="col-md-12 mt-30">
                        <h2 class=" text-machine ">How We Work</h2>
                    </div>
                    <div class="col-md-12  mt-2 text-machine ">
                        <ul class="d-flex justify-content-center text-machine">
                            <li ><a href="javascript:void(0)" class="text-machine pointer-none h3 f-16-es">Process Flow </a></li>
                            <li class="text-machine h3 mx-1"> / </li>
                            <li><a href="javascript:void(0)" class="text-machine pointer-none h3 f-16-es"> Methodology</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


<section>
    <div class="container">

        <div class="business-process bg-gray-light py-4">
            <div class="row  px-3 px-md-2">
                @php
                    $processItem = [
                        [
                            'index' => '01',
                            'name' => 'Inquiry',
                            'icon' => 'inq.png',
                            'image' => 'inq-new.png',
                            'about' => 'All Inquiry’s Received By WhatsApp, Phone Calls, Website. Google Search, References By Our Existing Clients, Via Participating Through Exhibitions In India & International, Advertisements In News Paper, Magazines, Online Media, Sales Circulars Etc.',
                        ],
                        [
                            'index' => '02',
                            'name' => 'Inward Inquiry',
                            'icon' => 'inward-inq.png',
                            'image' => 'inward-new.png',
                            'about' => 'All Inquiries Are Been Verified On The Authenticity Of Each Clients, Based On Their Actual Inquiry Immediate Of Projects, Whether They Can Import With Having Valid GST-lec Codes, Land, Building, Shed To Install Plant Or Machinery’s & Most Importantly Ready Banks Approved Finances Or Internal Finances…',
                        ],
                        [
                            'index' => '03',
                            'name' => 'Guidance, Instructions & Suggestion',
                            'icon' => 'guidance.png',
                            'image' => 'guadiance-new.png',
                            'about' => '<p>Once Our Marketing & Sales Staff Gets Feedback From Our Research & Development Departments On Each Client’s History, They Speak To Clients To Get To Real Specifications, Prices They Can Afford To Import, Tech Parameters, Terms Of Payments For Imports, Inspection Plans, Visiting Peoples Invitation Letters, Getting Them Apply For Visas & Guide Them To Visit Overseas Where The Plant Or Machinery’s Are Of Their Interest To Finalize……Help Each Client Whether Owners/Cmd/Directors Or Presidents To Gm Technical On Overseas Hotels, Locations, Transportations, Managing With Our Counter Parts Who Sell These  Machinery’s…</p>  <p>In Short We Treat Our Clients Like Our Family For Ease Of Doing Business & Feel Comfortable.</p> <p>We Do Suggest Our Clients Not Just One Proposals But With Many Options To Choose Of With Their Matching Price/Specifications Requirements, As We Feel A Client Needs To Have A Transparent International Broker With Not Just Intentions Of Sales But Also Services…</p>',
                        ],
                        [
                            'index' => '04',
                            'name' => 'Price & Terms',
                            'icon' => 'price.png',
                            'image' => 'price-new.png',
                            'about' => '<p>All Our Proposals/Offers Submitted To Clients After Discussions & Felt Being Genuine Buyer, We Give Technical Specifications, Videos, Photos Of The Machinery’s Of Their Interest & Lowest Rates Possible With Max Scope Of Supply & As Also Sometimes Spare Parts Included Free, We Don’t See As Always Our Profits, Commissions/Fees/Consultations 1st But For Our Company Policy Matters, Client/Customer/Buyer 1st & Then Profits.</p> <p>Terms We Always Try To Submit Flexible Terms To Accommodate Clients Based On Their Financial Availability, With Preferred Letter Of Credit Due To Overseas Imports & Risks Sometimes Client Think Of, Or If They Prefer 100% Wire Transfer From Banks, We Do Workout The Same .. Any Terms Which Gives Client Ease Of Doing Business We Assist Them..</p>',
                        ],
                        [
                            'index' => '05',
                            'name' => 'Pre Finalization Process',
                            'icon' => 'pre-final.png',
                            'image' => 'pre-new.png',
                            'about' => '<p>We After Speaking To Client, Owners & Their Technical Team, Submit A Final Price Based On Terms Of Delivery, Payment & Port/Destinations They Need In Proforma Invoice Format Signed By Oversees Seller & Countered By Buyer From India Or Our Overs Clients/Buyers Too…</p><p> For Financial Requirements From Banks, We Do Provide Imports Related Documents In Draft Format, Like Chartered Engg Certificates, BL Drafts, Commercial Invoices, Serial Number Photos If Available, Layouts, Dimensions Of Machinery’s/Plants, Power Requirements, Production Parameters, Efficiency Of Overseas Machinery’s When In Production, Quality Configuration, Etc, In Order That Our Clients Get Full Satisfaction To Proceed To Finalize As Next Step…</p>',
                        ],
                        [
                            'index' => '06',
                            'name' => 'Post Finalization',
                            'icon' => 'post-final.png',
                            'image' => 'post-new.png',
                            'about' => 'Submitting All Draft Documentations Of Shipping, For Clients Import Departments To Approve, As Well As Their Banks & Then Give Them Final Imports Documentations, From Copy Of BL, Commercial Invoices, CEC, Packing List, Photos Of The Machinery’s Pre Loading In Containers & Post With Container Numbers, Liners Indian Agents Contacts For Our Clients Imports Clearness… Any Further Assistance/Help We Are Always There To Support Our Genuine Clients All Over India & Overseas Countries.',
                        ],
                    ];
                @endphp
                {{-- {{ dd($processItem) }} --}}
               @foreach ($processItem as $item)
                    <div class=" col-lg-2 col-md-4 col-sm-6 col-4 col-xs-12  mt-3 mt-lg-0 px-sm-2 px-1" >
                        <div  class="h-100 box-card">
                        <a href="{{ url()->current() }}#product{{ $item['index'] }}" class="item  " >
                            <div class="item-icon">
                                <img src="frontend/images/about/{{ $item['icon'] }}" alt=""  class="w-sm-70">
                            </div>
                            {{--<div class="item-number-line">
                                <div class="item-number">
                                    <div>
                                        {{ $item['index'] }}
                                    </div>
                                </div>
                            </div>--}}
                            <div class="item-name">
                                <h6 class="text-light-black f-sm-12" >
                                    {{ $item['name'] }}
                                </h6>
                            </div>
                        </a>
                    </div>
                    </div>
                @endforeach
            </div>
        </div>

    </div>
</section>
    <!-- Service Start -->
    {{--<section id="service-section" class="all-service pb-5 mb-3">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-md-12 g-0">
                    <div class="service service-right ">
                        <div class="row">
                            @foreach ($processItem as $item)
                            <div class="col-xl-4 col-md-6 my-3">
                                <div class="service-item bg-dark mt-25 py-1 wow fadeInUp h-100"  id="product{{ $item['index'] }}" data-wow-delay=".2s">
                                    <img src="images/process/{{ $item['image'] }}" alt=""
                                    class="m-auto d-block process-img" />
                                    <a href="#!"><h5 class="text-primary">{{ $item['name'] }}</h5></a>
                                    <div class="text-y-overflow">
                                    <p class="p-2 pt-0 ">{!! $item['about'] !!}</p></div>
                                </div>
                            </div>
                            @endforeach
                                                  </div>
                    </div>
                </div>
            </div>
        </div>
    </section>--}}
    <section class="pb-5 px-3 mb-md-3 mb-2">
        <div class="container ">
            @foreach ($processItem as $item)
<div class="row justify-content-center p-0 hr-hover" id="product{{ $item['index'] }}">
    <div class="row justify-content-center p-0">
<div class="row justify-content-center p-0">
    <div class="row justify-content-center p-0">
        <div class="row justify-content-center p-0">

            <div  class="row  mt-5 justify-content-center py-3 row-design row-hover" >
                <div class="col-lg-4 border-b text-center">
                    <img src="frontend/images/about/{{ $item['image'] }}" alt="">
                </div>
                <div class="col-lg-8 mt-5 ">
                    <h3 class="text-machine  p-0-es f-sm-20">{{ $item['name'] }}</h3>
                    <hr class="hr-title " >
                    <p class="mt-3 ">{!! $item['about'] !!}</p>
                </div>
            </div>
        </div>
    </div></div></div></div>
            @endforeach
        </div>
    </section>
    <!-- Service End -->
@endsection
