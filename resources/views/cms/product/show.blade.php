@extends('cms.layouts.app')
@section('title', 'Admin - ' . env('APP_NAME'))
@section('content')

<style>
    .cust-title{
        font-size: 20px;
        font-weight: 600;
    }
    @media only screen and (min-width: 600px) {
            .p-title {
                    white-space: nowrap;
}
}
</style>
    <div class="page-wrapper">
        <!-- Container fluid  -->
        <div class="container-fluid">
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h4 class="text-themecolor">Product</h4>
                </div>
                <div class="col-md-7 align-self-center text-right">
                    <div class="d-flex justify-content-end align-items-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ url('/') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item active">Product</li>
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
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="degree3" class="cust-title p-title" class="label-title">Product Category Name</label><br>
                                            <p class="label-title">
                                                {{ $products->product_categories->title }}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-6 ">
                                        <div class="form-group ml-3">
                                            <label for="degree3" class="cust-title" class="label-title">Title</label><br>
                                            <p class="label-title">
                                                {{ $products->title }}
                                            </p>
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="degree3" class="cust-title" class="label-title">Image</label><br>
                                            <img width="100px" height="100px"
                                                src="{{ asset('storage/images/products/' . $products->image) }}">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="degree3" class="cust-title" class="label-title">Description</label><br>
                                            <div class="label-description">
                                                {!! $products->body !!}
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
