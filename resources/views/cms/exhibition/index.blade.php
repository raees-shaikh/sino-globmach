@extends('cms.layouts.app')
@section('title', 'Admin - ' . env('APP_NAME'))
@section('content')
    <div class="page-wrapper">
        <!-- Container fluid  -->
        <div class="container-fluid">
            <div class="row page-titles ">
                <div class="col-md-2 align-self-center pl-0">
                    <h4 class="text-themecolor ml-0 mb-md-0 mb-2">Exhibitions</h4>
                </div>
                <div class="">
                    <a href="{{ route('cms.exhibition.create') }}" class="btn btn-info bg-btn bg-mobile">
                        <i class="fa fa-plus-circle"></i>
                        Exhibition
                    </a>
                </div>
                <div class="col align-self-center text-right">
                    <div class="d-flex justify-content-end align-items-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="/">Home</a>
                            </li>

                            <li class="breadcrumb-item active text-prime">Exhibitions</li>


                        </ol>
                    </div>
                </div>
            </div>

            <div class="table-responsive card orders-table">

                <table class="table table-striped footable edit-categories-table">
                    <thead>
                        <tr>
                            <th>Sr No.</th>
                            <th>Title</th>
                            <th class="">Action</th>
                            {{-- <th>Edit</th>
                            <th>Delete</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($exhibitions as $exhibition)
                            <tr>
                                <td>{{ tableRowSrNo($loop->index, $exhibitions) }}</td>
                                <td>
                                    <span>{{ str_limit($exhibition->title,50) }}</span>
                                </td>
                                {{-- <td> --}}
                                {{-- <a href="{{ route('cms.exhibition.edit', $exhibition->id) }}" class="btn btn-info">Edit
                                    </a> --}}
                                {{-- </td> --}}
                                <td class="btns-row-style">
                                    <a href="{{ route('cms.exhibition.show', $exhibition->id) }}" class="btn btn-warning ">View
                                    </a>
                                    <a href="{{ route('cms.exhibition.edit', $exhibition->id) }}" class="btn btn-warning mx-2">Edit
                                    </a>
                                    <a class="btn btn-warning mr-2"
                                        href="{{ route('cms.exhibition.media.index', $exhibition->id) }}">
                                        View Gallery
                                    </a>
                                    <a onclick="return confirm('Are you sure you want delete this Exhibition?');"
                                        class="btn btn-danger mr-1 bg-mobile" href="{{ route('cms.exhibition.delete', $exhibition->id) }}">
                                        Delete
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3">No Data</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="pagination col-lg-12">
                <div class="col-md-12 text-center align-self-center">
                    <div class="pagination text-center">
                        {{ $exhibitions->appends(Request::all())->links('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div>
        </div>
        <!-- End Container fluid  -->
    </div>

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
