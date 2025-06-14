@extends('cms.layouts.app')
@section('title', 'Admin - ' . env('APP_NAME'))
@section('content')
    <div class="page-wrapper">
        <!-- Container fluid  -->
        <div class="container-fluid">
            <div class="row page-titles ">
                <div class="col-md-2 align-self-center pl-0">
                    <h4 class="text-themecolor ml-0 mb-md-0 mb-2">Data</h4>
                </div>
                <div class="">
                    @if (!$dataCount)
                        <a href="{{ route('cms.data.create') }}" class="btn btn-info  bg-btn bg-mobile">
                            <i class="fa fa-plus-circle"></i>
                            Data
                        </a>
                    @endif
                </div>
                <div class="col align-self-center text-right">
                    <div class="d-flex justify-content-end align-items-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="/">Home</a>
                            </li>

                            <li class="breadcrumb-item active text-prime">Data</li>


                        </ol>
                    </div>
                </div>
            </div>

            <div class="table-responsive card orders-table">

                <table class="table table-striped footable edit-categories-table">
                    <thead>
                        <tr>
                            <th>Sr no.</th>
                            <th>Name</th>
                            <th class="">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($datas as $data)
                            <tr>
                                <td>{{ tableRowSrNo($loop->index, $datas) }}</td>
                                <td>{{ $data->name }}</td>
                                <td class="btns-row-style">
                                    <a href="{{ route('cms.data.edit', $data->id) }}" class="btn btn-warning mx-2">Edit
                                    </a>
                                    <a onclick="return confirm('Are you sure you want delete this Data?');"
                                        class="btn btn-danger mr-1 bg-mobile"
                                        href="{{ route('cms.data.delete', $data->id) }}">
                                        Delete
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <tr class="text-md-center">
                                <td colspan="3">No Records Found</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="pagination col-lg-12">
                <div class="col-md-12 text-center align-self-center">
                    <div class="pagination text-center">
                        {{ $datas->appends(Request::all())->links('pagination::bootstrap-4') }}
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
