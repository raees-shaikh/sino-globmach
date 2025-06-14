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
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h4 class="text-themecolor m-0">Offer</h4>
                </div>
                <div class="col-md-7 align-self-center text-right">
                    <div class="d-flex justify-content-end align-items-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ url('/') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item active text-prime">Offer</li>
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
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="degree3" class="cust-title" class="label-title">Category
                                                    Name</label><br>
                                                <p class="label-title">
                                                    {{ $offers->categories->title }}
                                                </p>
                                            </div>
                                        </div>
                                        {{-- <div class="col-12">
                                            <div class="form-group">
                                                <label for="degree3" class="cust-title" class="label-title">Sub Category One</label><br>
                                                <p class="label-title">
                                                    {{ $offers->subCategoryOne ? $offers->subCategoryOne->name: '---' }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="degree3" class="cust-title" class="label-title">Sub Category Two</label><br>
                                                <p class="label-title">
                                                    {{ $offers->subCategoryTwo ? $offers->subCategoryTwo->name: '---' }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="degree3" class="cust-title" class="label-title">Sub Category Three</label><br>
                                                <p class="label-title">
                                                    {{ $offers->subCategoryThree ? $offers->subCategoryThree->name: '---' }}
                                                </p>
                                            </div>
                                        </div> --}}
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="degree3" class="cust-title"
                                                    class="label-title">Title</label><br>
                                                <p class="label-title">
                                                    {{ $offers->title }}
                                                </p>
                                            </div>
                                        </div>
                                        @if ($offers->image)
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="degree3" class="cust-title"
                                                        class="label-title">Image</label><br>
                                                    <img width="100px" height="100px"
                                                        src="{{ asset('storage/images/offers/' . $offers->image) }}">
                                                </div>
                                            </div>
                                        @endif
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="degree3" class="cust-title"
                                                    class="label-title">Description</label><br>
                                                <div class="label-title">
                                                    {!! $offers->body !!}
                                                </div>
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
