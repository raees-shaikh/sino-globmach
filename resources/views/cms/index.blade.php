@extends('cms.layouts.app')
@section('title', 'Admin - ' . config('app.name'))
@section('content')
    <div class="page-wrapper ">
        <!-- Container fluid  -->
        <div class="container-fluid">
            <div class="row page-titles ">
                <div class="col-md-3 align-self-center pl-0">
                    <h4 class="text-themecolor ml-0">Statistics</h4>
                </div>
                <div class="col-md-9 align-self-center text-right">
                    <div class="d-flex justify-content-end align-items-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ url('/') }}">Home</a>
                            </li>

                            <li class="breadcrumb-item active text-prime">Statistics</li>
                            {{-- <a href="{{ route('admin.create') }}">
                        <button type="button" class="btn btn-info  d-lg-block m-l-15">
                            <i class="fa fa-plus-circle"></i> Create New
                        </button>
                        </a> --}}

                        </ol>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title ml-0">Total Categories</h5>
                            <div class="d-flex no-block align-items-center m-t-20 m-b-20">
                                <div id="sparklinedash3">
                                    <img src="{{ asset('/assets/images/dash03-new.png') }}" alt="">

                                </div>
                                <div class="ml-auto">
                                    <h2 class=" text-prime"> <span class="counter">{{ $totalLatestOffer }}</span>
                                    </h2>
                                </div>
                            </div>
                        </div>
                        <div id="sparkline8" class="sparkchart"></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title ml-0">Total Offers</h5>
                            <div class="d-flex no-block align-items-center m-t-20 m-b-20">
                                <div id="sparklinedash3">
                                    <img src="{{ asset('/assets/images/dash03-new.png') }}" alt="">

                                </div>
                                <div class="ml-auto">
                                    <h2 class=" text-prime"> <span class="counter">{{ $totalOffers }}</span>
                                    </h2>
                                </div>
                            </div>
                        </div>
                        <div id="sparkline8" class="sparkchart"></div>
                    </div>
                </div>
            </div>
            {{-- @if (request()->has('doctor')) --}}
        </div>

    </div>
    <!-- End Container fluid  -->
    </div>

    <!-- <script src="{{ asset('dist/js/dashboard4.js') }}"></script> -->


@endsection

@section('js')
    <!--Sky Icons JavaScript -->
    <script src="../assets/node_modules/skycons/skycons.js"></script>
    <!--morris JavaScript -->
    <script src="../assets/node_modules/raphael/raphael-min.js"></script>
    <script src="../assets/node_modules/morrisjs/morris.min.js"></script>
    <script src="../assets/node_modules/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!-- Chart JS -->
    <script src="dist/js/dashboard4.js"></script>
@endsection
