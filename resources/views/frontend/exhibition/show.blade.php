@extends('frontend.layouts.app')
@section('pageTitle', ucfirst($exhibition->title . ' - Exhibition'))

<style>
    #banner-section.bg-prefix {
        height: 550px;
    }
</style>
@section('cdn')
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/photoswipe/5.3.3/photoswipe.min.css">
@endsection
@section('content')

    <!-- Banner Start -->

    <section id="banner-section" class="bg-prefix"
        style='background-image: url("{{ asset('frontend/mountain-images/mount-' . $exhibition->id % 18 . '.jpg') }}") !important;  background-attachment: fixed; background-repeat: no-repeat;background-size: cover; background-position:bottom'>
        <div class="overlay">
            <div class="container">
                <div class="row text-center mt-100-px pt-5">
                    <div class="col-md-12 mt-30 ">
                        <h1 class="lowercase h5 text-white">{{ $exhibition->title }}</h1>
                    </div>
                    <div class="col-md-12 mt-2 divide">
                        <ul class="d-flex justify-content-center flex-wrap-links">
                            <li><a href="{{ url('/') }}" class="text-white font-sm">Home</a></li>
                            <li>
                                <!--<a class="dot-divider"></a>--><i
                                    class="text-white lni lni-angle-double-right divider mx-1"></i>
                            </li>
                            <li><a href="{{ url('exhibitions') }}" class="text-white font-sm">Exhibitions</a></li>
                            <li>
                                <!--<a class="dot-divider"></a>--><i
                                    class="text-white lni lni-angle-double-right divider mx-1"></i>
                            </li>
                            <li><a href="#!" class="text-primary font-sm">{{ $exhibition->title }}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner End -->

    <!-- Project Start -->
    <section id="blog-details-section" class="mt-4">
        <div class="container">
            <div class="row">

                <div class="blog-grid ">
                    <div class="row">
                        <div class="col-md-6">
                            <div class=" ">

                                <div class="">
                                    <h2 class=" text-machine">{{ $exhibition->title }}</h2>
                                    <p class="mb-3 text-primary  text-machine f-12"> <i class="fa fa-calendar mx-1"></i>
                                        {{ dd_format($exhibition->start_date, 'd-m-Y') . ' to ' . dd_format($exhibition->end_date, 'd-m-Y') }}
                                    </p>
                                    <img src="{{ asset('storage/images/exhibition/' . $exhibition->image) }}" class="w-100"
                                        alt="blog image">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mt-md-5 mt-0 ">
                            <h4 class="mt-5 text-machine">Description</h4>
                            @if ($exhibition->descriptions)
                                <p class="card-text mb-15 ">{!! $exhibition->descriptions !!}</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
        </div>
        </div>

    </section>
    <div class="container">
        <div class="row mt-3 mb-5">
            @if (count($medias))
                <div class="col-12">
                    <div class="section-head center wt-small-separator-outer text-center mb-0 mt-3">
                        <div class="wt-small-separator site-text-primary">
                            <div class="sep-leaf-left"></div>
                            <h2 class="d-inline text-machine">Gallery</h2>
                            <div class="sep-leaf-right"></div>
                        </div>
                    </div>
                    <div class="section-full ">
                        <div class="container mt-2">
                            <div
                                class="masonry-wrap mfp-gallery gallery-js   row clearfix d-flex justify-content-start flex-wrap">
                                @forelse($medias as $media)
                                    <div class="masonry-item  col-lg-4 col-md-6 col-sm-6 mb-3 mt-2 px-0 px-sm-3">
                                        <a 
                                            data-cropped="true" target="_blank"
                                            href="{{ asset('storage/images/exhibition/' . $media->filename) }}"
                                            class="d-block mfp-link project-img-effect-1">
                                            <img src="{{ asset('storage/images/exhibition/' . $media->filename) }}"
                                                alt="" class="w-100" />
                                        </a>
                                    </div>
                                @empty
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
            @endif

        </div>
    </div>
    <!-- Project End -->

@endsection
@section('js')
    <script src="{{ url('frontend/js/isotope.pkgd.min.js') }}"></script>


    <script type="module">
        import PhotoSwipeLightbox from 'https://cdnjs.cloudflare.com/ajax/libs/photoswipe/5.3.3/photoswipe-lightbox.esm.min.js';

        const options = {
            //Any element with this class will become an individual gallery
            gallery: '.gallery-js',

            // Your slides will be every <a> tag that is children from .gallery-js
            children: 'a',
            // This module will only load when you click to show the images, making your data bundle lighter
            pswpModule: () => import('https://cdnjs.cloudflare.com/ajax/libs/photoswipe/5.3.3/photoswipe.esm.min.js')
        };

        const lightbox = new PhotoSwipeLightbox(options);

        lightbox.init();
    </script>
@endsection
