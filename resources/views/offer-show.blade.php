@extends('layouts.app')
@section('pageTitle', 'Business Process')
@section('content')
<style>
    .main-breadcrumbs .wt-breadcrumb .b-links{
        color: #80ddff;!important;
    }
</style>
    <!-- CONTENT START -->
    <div class="page-content">

        <!-- INNER PAGE BANNER -->
        <div class="wt-bnr-inr overlay-wraper bg-center" style="background-image:url(images/banner/5.jpg);">
            <div class="overlay-main site-bg-secondry opacity-05"></div>
            <div class="container">
                <div class="wt-bnr-inr-entry">
                    <div class="banner-title-outer">
                        <div class="banner-title-name">
                            <h2 class="site-text-primary">Offer</h2>
                        </div>
                    </div>
                    <!-- BREADCRUMB ROW -->

                    <div class="main-breadcrumbs">
                        <ul class="wt-breadcrumb breadcrumb-style-2">
                            <li><a href="javascript:void(0);">Home</a></li>
                            <li>Latest Offers</li>
                            <li>Offers</li>
                            <li class="b-links">Offer Detail</li>
                        </ul>
                    </div>

                    <!-- BREADCRUMB ROW END -->
                </div>
            </div>
        </div>
        <!-- INNER PAGE BANNER END -->

        <!-- OUR BLOG START -->
        <div class="section-full  p-t80 p-b50 bg-white">
            <div class="container">

                <!-- BLOG SECTION START -->
                <div class="section-content">
                    <div class="row d-flex justify-content-center">

                        <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 m-b30">
                            <!-- BLOG START -->
                            <div class="blog-post date-style-2 blog-lg">

                                <div class="wt-post-info  bg-white p-t30">
                                    <div class="wt-post-meta ">

                                    </div>
                                    <div class="wt-post-title ">
                                        <h2 class="post-title">{{ $offer->title }}</h2>
                                    </div>

                                    <div class="wt-post-text">
                                        {!! $offer->body !!}
                                    </div>

                                </div>
                            </div>

                            <ul class="pagination m-b0 p-b0">
                                <li class="page-item"><a class="page-link"
                                        href="{{ $prev == null ? 'javascript:void(0);' : route('frontend.offer.show', ['category' => $offer->categories()->first()->slug, 'slug' => $prev->slug]) }}">Previous</a>
                                </li>
                                <li class="page-item"><a class="page-link"
                                        href="{{ $next == null ? 'javascript:void(0);' : route('frontend.offer.show', ['category' => $offer->categories()->first()->slug, 'slug' => $next->slug]) }}">Next</a>
                                </li>
                            </ul>

                        </div>
                        <!-- SIDE BAR START -->
                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 rightSidebar  m-b30">
                            <aside class="side-bar">
                                <!-- RECENT POSTS -->
                                <div class="widget recent-posts-entry p-a20">
                                    <div class="text-left m-b30">
                                        <h3 class="widget-title">Recent Offers</h3>
                                    </div>
                                    <div class="section-content">
                                        <div class="widget-post-bx">
                                            @forelse($recentoffers as $recentoffer)
                                                <div class="widget-post clearfix">
                                                    <div class="wt-post-media">
                                                        <img src="images/blog/recent-blog/pic1.jpg" alt="">
                                                    </div>
                                                    <div class="wt-post-info">
                                                        <div class="wt-post-header">
                                                            <h6 class="post-title"> <a
                                                                    href="{{ route('frontend.offer.show', ['category' => $recentoffer->categories()->first()->slug, 'slug' => $recentoffer->slug]) }}">{{ $recentoffer->title }}</a>
                                                            </h6>
                                                        </div>

                                                    </div>
                                                </div>
                                            @empty
                                                <div>
                                                    <li><a href="javascript:void(0);">No post Found</span></li>
                                                </div>
                                            @endforelse

                                        </div>
                                    </div>
                                </div>
                                <!-- CATEGORY -->
                                <div class="widget widget_services p-a20">
                                    <div class="text-left m-b30">
                                        <h3 class="widget-title">Categories</h3>

                                    </div>
                                    <ul>
                                        @forelse($categories as $categorie)
                                            <li><a
                                                    href="{{ route('frontend.offer.index', $categorie->slug) }}">{{ $categorie->title }}</a>
                                            </li>
                                        @empty
                                            <div>
                                                <li><a href="javascript:void(0);">No post Found</span></li>
                                            </div>
                                        @endforelse
                                    </ul>
                                </div>

                            </aside>

                        </div>


                    </div>

                </div>

            </div>

        </div>
        <!-- OUR BLOG END -->



    </div>
    <!-- CONTENT END -->
@endsection
