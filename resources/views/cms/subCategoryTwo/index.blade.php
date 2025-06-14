@extends('cms.layouts.app')
@section('title', 'Admin - ' . env('APP_NAME'))
@section('content')
<style>
    @media only screen and (max-width: 562px) {
    .d-flex-on-mobi{
      display: flex !important;
    }
  }

</style>
    <div class="page-wrapper">
        <!-- Container fluid  -->
        <div class="container-fluid">
            <div class="row page-titles">
                <div class="col-md-3 align-self-center pl-0">
                    <h4 class="text-themecolor ml-0 mb-md-0 mb-2">Sub Categories Two</h4>
                </div>
                <div class="">
                    <a href="{{ route('cms.subCategoryTwo.create') }}" class="btn btn-info bg-btn bg-mobile">
                        <i class="fa fa-plus-circle"></i>
                        Sub Category Two
                    </a>
                </div>
                <div class="col align-self-center text-right d-content">
                    <div class="d-flex justify-content-end align-items-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="/">Home</a>
                            </li>

                            <li class="breadcrumb-item active text-prime">Sub Categories Two</li>
                            {{-- <a href="{{ route('admin.create') }}">
                        <button type="button" class="btn btn-info  d-lg-block m-l-15">
                            <i class="fa fa-plus-circle"></i> Create New
                        </button>
                        </a> --}}

                        </ol>
                    </div>
                </div>
            </div>

            <div class="table-responsive card orders-table" >

                <table class="table table-striped footable" style="text-align:center;">
                    <thead>
                        <tr>
                            <th>Sr No.</th>
                            <th>Category</th>
                            <th>Sub Category One</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($subCategoryTwos as $subCategoryTwo)
                            <tr>
                                <td>{{ tableRowSrNo($loop->index, $subCategoryTwos) }}</td>
                                <td>
                                    <a href="{{ route('cms.categories.show', $subCategoryTwo->categories->id) }}"
                                        class="">{{ $subCategoryTwo->categories->title }}
                                    </a>
                                </td>
                                <td>
                                    <span>{{ $subCategoryTwo->subCategoryOne ? $subCategoryTwo->subCategoryOne->name : '---' }}</span>
                                </td>
                                <td>
                                    <span>{{ $subCategoryTwo->name }}</span>
                                </td>
                                <td class="d-flex-on-mobi">
                                    <a href="{{ route('cms.subCategoryTwo.show', $subCategoryTwo->id) }}" class="btn btn-warning">View
                                    </a>
                                    <a href="{{ route('cms.subCategoryTwo.edit', $subCategoryTwo->id) }}" class="btn btn-warning mx-1">Edit
                                    </a>
                                    <a onclick="return confirm('Are you sure you want delete this Latest Offer?');"
                                        class="btn btn-danger bg-mobile" href="{{ route('cms.subCategoryTwo.delete', $subCategoryTwo->id) }}">
                                        Delete
                                    </a>
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
                        {{ $subCategoryTwos->appends(Request::all())->links('pagination::bootstrap-4') }}
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
