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
                    <h4 class="text-themecolor m-0">Sub Category Three</h4>
                </div>
                <div class="col-md-7 align-self-center text-right">
                    <div class="d-flex justify-content-end align-items-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ url('/') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item active text-prime">Sub Category Three</li>
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
                                                    {{ $subCategoryThree->categories->title }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="degree3" class="cust-title" class="label-title">Sub Category One</label><br>
                                                <p class="label-title">
                                                    {{ $subCategoryThree->subCategoryOne ? $subCategoryThree->subCategoryOne->name: '---' }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="degree3" class="cust-title" class="label-title">Sub Category Two</label><br>
                                                <p class="label-title">
                                                    {{ $subCategoryThree->subCategoryTwo ? $subCategoryThree->subCategoryTwo->name: '---' }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="degree3" class="cust-title"
                                                    class="label-title">Name</label><br>
                                                <p class="label-title">
                                                    {{ $subCategoryThree->name }}
                                                </p>
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
