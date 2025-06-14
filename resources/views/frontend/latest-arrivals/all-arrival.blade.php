@extends('frontend.layouts.app')
@section('pageTitle', 'Latest Proposals')
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
    <section id="banner-section" class="bg-prefix ">
        <div class="overlay">
            <div class="container">
                <div class="row text-center mt-100-px pt-5">
                    <div class="col-md-12 mt-30">
                        <h1 class="lowercase text-white">Latest Proposals</h1>
                    </div>
                    <div class="col-md-12 mt-3 divide">
                        <ul class="d-flex justify-content-center">
                            <li><a href="{{ url('/') }}" class="text-white">Home</a></li>
                            <li><!--<a class="dot-divider"></a>--><i class="text-white lni lni-angle-double-right divider mx-1"></i></li>
                            <li><a href="#!" class="text-primary">Latest Proposals</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Start -->

    <section id="service-section " class="">
        <div class=" bg-pink">
           <div class="container-fluid">
            <div class="service  text-center section-title pb-0 pt-4 ">

                <h2 class="wow fadeInLeft mt-2 mb-0 blue-clr" data-wow-delay=".4s">Latest Proposals</h2>
            </div>
           </div>
        </div>
            <div class="row  py-0">

                <div class="col-12 g-0">
                    <div class="service service-right py-0">
                        <div class="row justify-content-center  px-2">
                            @forelse($categories as $key=>$categorie)

                                <div class="col-lg-4 col-md-6 my-3   px-md-3 px-4  ">
                                    <a href="{{ route('frontend.offer.sub_category_one', $categorie->slug) }}" class="d-block ">
                                    <div class="proposal-card service-item  mt-25 wow fadeInUp h-100 row-design row-hover-card " data-wow-delay=".2s">
                                        {{--<img src="{{ asset('storage/images/latest_arrival/' . $categorie->image) }}"
                                            alt="" class="offers-img-style d-block rounded"><span class=" new-num my-5 ">{{ $key + 1 }}</span>--}}

                                        <a href="{{ route('frontend.offer.sub_category_one', $categorie->slug) }}" class="d-block">

                                            <h5 class="mt-4 text-machine">{{ $categorie->title }}</h5>

                                            <div class="service-btn cmn-btn-one mt-40  wow fadeInLeft" data-wow-delay="1s">
                                                <a href="{{ route('frontend.offer.sub_category_one', $categorie->slug) }}"
                                                                                         class="btn btn-primary py-2 read-btn">Read More </a>
                                            </div>
                                        </a>

                                    </div>
                                </a>
                                </div>
                            @empty
                                <div>
                                    <p>No Offers Found</p>
                                </div>
                            @endforelse

                        </div>
                    </div>
                    <div class="d-flex justify-content-center mt-5 mb-3">
                        {{ $categories->onEachSide(1)->links('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Service End -->

@endsection
