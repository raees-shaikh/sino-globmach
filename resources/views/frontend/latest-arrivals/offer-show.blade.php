@extends('frontend.layouts.app')
@section('pageTitle', ucfirst($offer->title . ' - ' . $category->title . ' - Latest Proposals'))
@section('content')

    <!-- Banner Start -->
    <section id="banner-section" class="bg-prefix w-100"
        style='background-image: url("{{ asset('frontend/mountain-images/mount-' . $offer->id % 18 . '.jpg') }}") !important; background-attachment: fixed; background-repeat: no-repeat;background-size: cover; background-position:bottom'>
        <div class="overlay">
            <div class="container">
                <div class="row text-center mt-100-px pt-5">
                    <h1 class="card-title mt-30 h5 text-white word-break">{{ $offer->title }}</h1>
                    <div class="col-md-12 mt-2 divide">
                        <ul class="d-flex justify-content-center flex-wrap-links">
                            <li><a href="{{ url('/') }}" class="text-white font-sm">Home</a></li>
                            <li>
                                <!--<a class="dot-divider"></a>--> <i
                                    class="text-white lni lni-angle-double-right divider mx-1"></i>
                            </li>
                            <li><a href="{{ url('latest-proposals') }}" class="text-white font-sm">Latest Proposals</a></li>
                            <li>
                                <!--<a class="dot-divider"></a>--><i
                                    class="text-white lni lni-angle-double-right divider mx-1"></i>
                            </li>
                            <li><a href="{{ route('frontend.offer.sub_category_one', $category->slug) }}"
                                    class="text-white font-sm">{{ $category->title }}</a></li>
                            <li><i class="text-white lni lni-angle-double-right divider mx-1"></i>
                            </li>
                            {{-- <li><a href="{{ route('frontend.offer.sub_category_two', ['category' => $category->slug, 'sub_category_one' => $subCatOne->slug]) }}"
                                    class="text-white font-sm">{{ $subCatOne->name }}</a></li>
                            <li><i class="text-white lni lni-angle-double-right divider mx-1"></i>
                            </li>
                            <li><a href="{{ route('frontend.offer.sub_category_three', ['category' => $category->slug, 'sub_category_one' => $subCatOne->slug, 'sub_category_two' => $subCatTwo->slug]) }}"
                                    class="text-white font-sm">{{ $subCatTwo->name }}</a></li>
                            <li><i class="text-white lni lni-angle-double-right divider mx-1"></i>
                            </li>
                            <li><a href="{{ route('frontend.offer.index', ['category' => $category->slug, 'sub_category_one' => $subCatOne->slug, 'sub_category_two' => $subCatTwo->slug, 'sub_category_three' => $subCatThree->slug]) }}"
                                    class="text-white font-sm">{{ $subCatThree->name }}</a></li>
                            <li><i class="text-white lni lni-angle-double-right divider mx-1"></i>
                            </li> --}}
                            <li><a href="#!" class="text-primary font-sm">{{ $offer->title }}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner End -->

    <!-- Project Start -->
    <section id="blog-details-section" class="">
        <div class="container">
            <div class="row mt-0">
                <div class="col-xl-8 col-lg-8 col-md-7">
                    <div class="blog-grid ">
                        <div class="row ">
                            <div class="col-lg-12 mt-3 ">
                                <div class=" ">

                                    <div class="card-body p-0 mb-md-4">

                                        <h2 class="card-title mt-30 text-machine long-text-break mb-3">{{ $offer->title }}
                                        </h2>
                                        @if ($offer->image)
                                            <img src="{{ asset('storage/images/offers/' . $offer->image) }}"
                                                class="card-img-top h-auto offer-img text-left" alt="blog image">
                                        @endif
                                        @if ($offer->body)
                                            <h4 class="mt-3 text-machine">Description</h4>
                                            <p class="card-text ">{!! $offer->body !!}</p>
                                        @endif

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-5 mt-md-5 mt-2 pt-3">
                    <div class="sidebar blog-sidebar mt-50">

                        <div class="card text-white bg-light mb-5">
                            <div class="card-header bg-red">Related Offers</div>
                            <div class="card-body">
                                <ul class="list-group list-group-flush">
                                    @forelse ($relatedOffers as $offer)
                                        <li class="list-group-item text-dark"><a
                                                href="{{ route('frontend.offer.show', ['category' => $category->slug, 'offer' => $offer->slug]) }}">{{ $offer->title }}</a>
                                        </li>
                                    @empty
                                        <li class="list-group-item text-dark"><a href="javascript:void(0);">No Offer
                                                Found</span></li>
                                    @endforelse
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Project End -->

@endsection
