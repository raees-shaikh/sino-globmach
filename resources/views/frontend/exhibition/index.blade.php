@extends('frontend.layouts.app')
@section('pageTitle', 'Exhibitions')
@section('content')
<style>
 @media screen and (max-width: 767px) {
    #banner-section.bg-prefix{
	background:url(frontend/china-images/hand-banner-mobile.jpg) !important;
    background-attachment:fixed!important;
    background-repeat:no-repeat !important;
    background-size:cover !important;
}
}
#banner-section.bg-prefix{
	background:url(frontend/china-images/hand-banner1.png);
	background-attachment:fixed;
    background-repeat:no-repeat !important;
    background-size:cover !important;
    height:550px;
}
</style>
<!-- Banner Start -->
<section id="banner-section" class="bg-prefix">
    <div class="overlay">
        <div class="container">
            <div class="row text-center mt-100-px pt-5">
                <div class="col-md-12 mt-30">
                    <h1 class="lowercase text-white">Exhibitions</h1>
                </div>
                <div class="col-md-12 mt-3 divide">
                    <ul class="d-flex justify-content-center">
                        <li><a href="{{url('/')}}" class="text-white">Home</a></li>
                        <li><!--<a class="dot-divider"></a>--><i class="text-white lni lni-angle-double-right divider mx-1"></i></li>
                        <li><a href="#!" class="text-primary">Exhibitions</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner End -->

<!-- Project Start -->
<section id="blog-section" class="">
    <div class="service bg-pink text-center section-title pb-0 pt-2 mb-0">

        <h2 class="wow fadeInLeft my-0 pt-4 pb-0 blue-clr" data-wow-delay=".4s" >Exhibitions</h2>
    </div>
    <div class="container">

        <div class="row">
            <div class="col">
                <div class="blog-grid ">
                    <div class="row ">
                        @forelse($exhibitions as $exhibition)
                        <div class="col-lg-4 col-md-6 mb-2 ">
                            <div class="card mt-25 row-hover">

                                <a href="{{ route('frontend.exhibition.show', $exhibition->slug) }}">
                                <img src="{{ asset('storage/images/exhibition/' . $exhibition->image) }}" class="card-img-top new-img-size" alt="blog image">
                            </a>
                                <div class="card-body pt-2 pb-0">
                                    <h5>
                                    <a href="{{ route('frontend.exhibition.show', $exhibition->slug) }}" class="h4 text-machine"> {{ preg_replace('/<(|\/)p>/', '', $exhibition->title) }}</a>
                                </h5>
                                </div>
                                 <div>
                                    <small class="badge text-primary pb-2" ><i class="fa fa-calendar mx-1" aria-hidden="true"></i>  {{ dd_format($exhibition->start_date, 'd-m-Y') . ' to ' . dd_format($exhibition->end_date, 'd-m-Y') }}</small>
                                </div>
                                <hr class="my-1 ">
                                <div class="blog-btn mt-10">
                                    <a class="btn text-white bg-red" href="{{ route('frontend.exhibition.show', $exhibition->slug) }}">Read More</a>
                                </div>
                            </div>
                        </div>
                        @empty
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 m-b30">
                                <p class="text-center">No Exhibitions Found</p>
                            </div>
                        @endforelse
                                            </div>
                                            <div class="d-flex justify-content-center mt-5 mb-4">
                                                {{ $exhibitions->onEachSide(1)->links('pagination::bootstrap-4') }}
                                            </div>

                </div>
            </div>
            </div>
        </div>
    </div>
</section>
<!-- Project End -->
@endsection
