@extends('cms.layouts.app')
@section('title', 'Admin - ' . env('APP_NAME'))
@section('content')
<style>
    .overFlow-mobi{
        display: inline-flex;
    }
</style>
    <div class="page-wrapper">
        <!-- Container fluid  -->
        <div class="container-fluid">
            <div class="row page-titles ">
                <div class="col-md-2 align-self-center pl-0">
                    <h4 class="text-themecolor ml-0 mb-md-0 mb-2">Products</h4>
                </div>
                <div class="">
                    <a href="{{ url('/product/create') }}" class="btn btn-info">
                        <i class="fa fa-plus-circle"></i>
                        Product
                    </a>
                </div>
                <div class="col align-self-center text-right">
                    <div class="d-flex justify-content-end align-items-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="/">Home</a>
                            </li>

                            <li class="breadcrumb-item active">Products</li>
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

                {{-- <table class="table table-striped footable" style="text-align:center;">
                    <thead>
                        <tr>
                            <th>Categories</th>
                            <th>Title</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($offers as $offer)
                            <tr>
                                <td>
                                    <span>{{ $offer->categories()->first()->title }}</span>
                                </td>
                                <td>
                                    <span>{{ $offer->title }}</span>
                                </td>
                                <td>
                                    <a href="{{ route('cms.offer.edit', $offer->id) }}" class="btn btn-info">Edit
                                    </a>
                                </td>
                                <td>
                                    <button onclick="return confirm('Are you sure you want delete this Latest Offer?');"
                                        type="submit" class="btn btn-danger">
                                        <a href="{{ route('cms.offer.delete', $offer->id) }}">
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
                <table class="table table-striped footable" style="text-align:center;">
                    <thead>
                        <tr>
                            <th>Sr No.</th>
                            <th>Product Category</th>
                            <th>Title</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($products as $product)
                            <tr>
                                <td>{{ tableRowSrNo($loop->index, $products) }}</td>
                                <td>
                                    <a href="{{ route('cms.productCategories.show', $product->product_categories->id) }}"
                                        class="">{{ str_limit($product->product_categories->title, 40) }}
                                    </a>
                                </td>
                                <td>
                                    <span>{{ str_limit($product->title,50) }}</span>
                                </td>
                                <td class="overFlow-mobi">
                                    <a href="{{ route('cms.product.show', $product->id) }}" class="btn btn-info">View
                                    </a>
                                    <a href="{{ route('cms.product.edit', $product->id) }}" class="mx-1 btn btn-info">Edit
                                    </a>
                                    <a onclick="return confirm('Are you sure you want delete this Product?');"
                                        class="btn btn-danger" href="{{ route('cms.product.delete', $product->id) }}">
                                        Delete
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <td colspan="4">No Data</td>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <div class="pagination col-lg-12">
                <div class="col-md-12 text-center align-self-center">
                    <div class="pagination text-center">
                        {{ $products->appends(Request::all())->links('pagination::bootstrap-4') }}
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
