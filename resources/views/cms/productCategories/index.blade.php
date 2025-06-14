@extends('cms.layouts.app')
@section('title', 'Admin - ' . env('APP_NAME'))
@section('content')
    <div class="page-wrapper">
        <!-- Container fluid  -->
        <div class="container-fluid">
            <div class="row page-titles ">
                <div class="col-md-3 align-self-center pl-0">
                    <h4 class="text-themecolor ml-0 mb-md-0 mb-2 ">Product Categories</h4>
                </div>
                <div class="">
                    <a href="{{ url('/product-category/create') }}" class="btn btn-info">
                        <i class="fa fa-plus-circle"></i>
                        Product Category
                    </a>
                </div>
                <div class="col align-self-center text-right">
                    <div class="d-flex justify-content-end align-items-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="/">Home</a>
                            </li>

                            <li class="breadcrumb-item active">Product Categories</li>
                            {{-- <a href="{{ route('admin.create') }}">
                        <button type="button" class="btn btn-info  d-lg-block m-l-15">
                            <i class="fa fa-plus-circle"></i> Create New
                        </button>
                        </a> --}}

                        </ol>
                    </div>
                </div>
            </div>

            <div class="table-responsive card orders-table">

                {{--     <table class="table table-striped footable edit-categories-table">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Image</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($categories as $categorie)
                            <tr>
                                <td>
                                    <span>{{$categorie->title}}</span>
                                </td>
                                <td>
                                    <img width="100" height="100" class="mr-2" src="{{ asset('storage/categories/images/' . $categorie->image) }}" alt=""></td>
                                <td>
                                    <a href="{{ route('cms.categories.edit', $categorie->id) }}" class="btn btn-info">Edit
                                    </a>
                                </td>
                                <td>
                                    <button onclick="return confirm('Are you sure you want delete this Latest Offer?');"
                                            type="submit" class="btn btn-danger">
                                            <a href="{{ route('cms.categories.delete', $categorie->id) }}">
                                                Delete
                                            </a>
                                    </button>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4">No Data</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table> --}}
                <table class="table table-striped footable edit-categories-table">
                    <thead>
                        <tr>
                            <th>Sr No.</th>
                            <th>Title</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($product_categories as $product_categorie)
                            <tr>
                                <td>{{ tableRowSrNo($loop->index, $product_categories) }}</td>
                                <td>
                                    <span>{{ str_limit($product_categorie->title, 50) }}</span>
                                </td>
                                <td class="btns-row-style">
                                    <a href="{{ route('cms.productCategories.show', $product_categorie->id) }}"
                                        class="btn btn-info">View
                                    </a>
                                    <a href="{{ route('cms.productCategories.edit', $product_categorie->id) }}"
                                        class="btn btn-info mx-1">Edit
                                    </a>
                                    <a class="btn btn-danger"
                                        href="{{ route('cms.productCategories.delete', $product_categorie->id) }}"
                                        onclick="return confirm('Are you sure you want delete this Product Category?');">
                                        Delete
                                    </a>
                                </td>
                                <td>
                                    {{-- <button onclick="return confirm('Are you sure you want delete this Latest Offer?');"
                                            type="submit" class="btn btn-danger">
                                            <a href="{{ route('cms.categories.delete', $categorie->id) }}">
                                                Delete
                                            </a>
                                    </button> --}}
                                </td>
                            </tr>

                        @empty
                            <tr>
                                <td colspan="4">No Data</td>
                            </tr>
                        @endforelse

                    </tbody>
                </table>
            </div>
            <div class="pagination col-lg-12">
                <div class="col-md-12 text-center align-self-center">
                    <div class="pagination text-center">
                        {{ $product_categories->appends(Request::all())->links('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div>


        </div>
        <!-- End Container fluid  -->
    </div>
    <style>
        .bg-color-blue {
            background-color: #03a9f3;
        }

        .bg-color-yellow {
            background-color: #fdb72c;
        }

        .bg-color-green {
            background-color: #17ba89;
        }

        .bg-color-green {
            background-color: #17ba89;
        }
    </style>

@endsection

@section('js')
    <!--Sky Icons JavaScript -->
    <script src="{{ asset('assets/node_modules/skycons/skycons.js') }}"></script>
    <!--morris JavaScript -->
    <script src="{{ asset('assets/node_modules/raphael/raphael-min.js') }}"></script>
    <script src="{{ asset('assets/node_modules/morrisjs/morris.min.js') }}"></script>
    <script src="{{ asset('assets/node_modules/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
    <!-- Chart JS -->
    <script src="{{ asset('dist/js/dashboard4.js') }}"></script>
@endsection
