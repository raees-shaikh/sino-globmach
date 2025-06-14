@extends('cms.layouts.app')
@section('title', 'Admin - ' . env('APP_NAME'))
@section('content')

<style>
    .cust-title{
        font-size: 20px;
        font-weight: 600;
    }

</style>
    <div class="page-wrapper">
        <!-- Container fluid  -->
        <div class="container-fluid">
            <div class="row page-titles ">
                <div class="col-md-5 align-self-center">
                    <h4 class="text-themecolor m-0">Exhibition</h4>
                </div>
                <div class="col-md-7 align-self-center text-right">
                    <div class="d-flex justify-content-end align-items-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ url('/') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item active text-prime">Exhibition</li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- Start Page Content -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-body col-lg-6 ">
                        <div class="row">
                            <div class="col-sm-12 col-xs-12">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="form-group ml-2">
                                            <label for="degree3" class="cust-title" class="label-title">Title</label><br>
                                            <p class="label-title">
                                                {{ $exhibition->title }}
                                            </p>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="degree3" class="cust-title"
                                                    class="label-title">Description</label><br>
                                                <p class="label-title my-0">
                                                    {!! $exhibition->descriptions !!}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="degree3" class="cust-title"
                                                    class="label-title">Start Date</label><br>
                                                <p class="label-title">
                                                    {{ $exhibition->start_date }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="degree3" class="cust-title"
                                                    class="label-title">End Date</label><br>
                                                <p class="label-title">
                                                    {{ $exhibition->end_date }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="degree3" class="cust-title"
                                                    class="label-title">Image</label><br>
                                                <img width="100px" height="100px"
                                                    src="{{ asset('storage/images/exhibition/' . $exhibition->image) }}">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <a class="btn btn-info site-button"
                                                    href="{{ route('cms.exhibition.media.index', $exhibition->id) }}">
                                                    View Gallery
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- End Page Content -->
        </div>
        <!-- End Container fluid  -->
    </div>
@endsection
