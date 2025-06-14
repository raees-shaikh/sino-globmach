@extends('frontend.layouts.app')
@section('pageTitle', ucfirst($subCatTwo->name . ' - ' . $category->title . ' - Latest Proposals'))
@section('content')
    <style>
        #banner-section.bg-prefix {

            height: 550px;
        }
    </style>
    <!-- Banner Start -->
    <section id="banner-section" class="bg-prefix w-100" style='background-image:  url("{{ asset('frontend/mountain-images/mount-' . $subCatTwo->id % 18 . '.jpg') }}"); background-attachment: fixed; background-repeat: no-repeat;background-size: cover; background-position:bottom'>
        <div class="overlay">
            <div class="container">
                <div class="row text-center mt-100-px pt-5">
                    <div class="col-md-12 mt-30">
                        <h1 class="lowercase text-white ">{{ $subCatTwo->name }}</h1>
                    </div>
                    <div class="col-md-12 mt-2 divide">
                        <ul class="d-flex justify-content-center flex-wrap-links">
                            <li><a href="{{ url('/') }}" class="text-white font-sm">Home</a></li>
                            <li>
                                <!--<a class="dot-divider"></a>--><i
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
                            <li><a href="{{ route('frontend.offer.sub_category_two', ['category' => $category->slug, 'sub_category_one' => $subCatOne->slug]) }}"
                                    class="text-white font-sm">{{ $subCatOne->name }}</a></li>
                            <li><i class="text-white lni lni-angle-double-right divider mx-1"></i>
                            </li>
                            <li><a href="#!" class="text-primary font-sm">{{ $subCatTwo->name }}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner End -->

    <!-- Project Start -->
    <section id="blog-section" class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-7">
                    @if ($subCatThree->count() || $offers->count())
                        <div class="blog-grid mt-25">
                            <div class="row">
                                @forelse($subCatThree as $subCat)
                                    <div class="col-lg-5 mt-4">
                                        <div class="card h-100">
                                            <div class="card-body pt-2 pb-0">
                                                <a
                                                    href="{{ route('frontend.offer.index', ['category' => $category->slug, 'sub_category_one' => $subCatOne->slug, 'sub_category_two' => $subCatTwo->slug, 'sub_category_three' => $subCat->slug]) }}">
                                                    <h6 class="card-title text-machine offer-title-style">
                                                        {{ $subCat->name }}
                                                    </h6>
                                                </a>
                                            </div>
                                            <div class="blog-btn mt-10">
                                                <a class="btn text-white bg-red"
                                                    href="{{ route('frontend.offer.index', ['category' => $category->slug, 'sub_category_one' => $subCatOne->slug, 'sub_category_two' => $subCatTwo->slug, 'sub_category_three' => $subCat->slug]) }}">Read
                                                    More</a>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    {{-- <li>No Offers Found</li> --}}
                                @endforelse
                            </div>
                        </div>
                        <div class="d-flex justify-content-center mt-5 mb-3">
                            {{ $subCatThree->withQueryString()->onEachSide(1)->links('pagination::bootstrap-4') }}
                        </div>
                        @if ($subCatThree->count() && $offers->count())
                            <hr>
                        @endif
                        {{-- showing offers --}}
                        <div class="blog-grid mt-25">
                            <div class="row">
                                @forelse($offers as $offer)
                                    <div class="col-lg-5 mt-4">
                                        <div class="card h-100">
                                            <div class="card-body pt-2 pb-0">
                                                <a
                                                    href="{{ route('frontend.offer.show', ['category' => $category->slug, 'offer' => $offer->slug]) }}">
                                                    <h6 class="card-title text-machine offer-title-style">
                                                        {{ $offer->title }}
                                                    </h6>
                                                </a>
                                            </div>
                                            <div class="blog-btn mt-10">
                                                <a class="btn text-white bg-red"
                                                    href="{{ route('frontend.offer.show', ['category' => $category->slug, 'offer' => $offer->slug]) }}">Read
                                                    More</a>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    {{-- <li>No Offers Found</li> --}}
                                @endforelse
                            </div>
                        </div>
                        <div class="d-flex justify-content-center mt-5 mb-3">
                            {{ $offers->withQueryString()->onEachSide(1)->links('pagination::bootstrap-4') }}
                        </div>
                    @else
                        <p>No Offers Found</p>
                    @endif
                </div>
                <div class="col-lg-4 col-md-5 mt-0">
                    <div class="sidebar blog-sidebar mt-4">


                        <div class="card text-white bg-light mb-5">
                            <div class="card-header bg-red">Other Categories</div>
                            <div class="card-body">
                                <ul class="list-group list-group-flush">
                                    @forelse ($relatedCategories as $rCategory)
                                        <li class="list-group-item text-dark"><a
                                                href="{{ route('frontend.offer.sub_category_one', $rCategory->slug) }}">{{ $rCategory->title }}</a>
                                        </li>
                                    @empty
                                        <li>No Offers Found</li>
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
