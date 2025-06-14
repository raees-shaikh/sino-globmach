@extends('cms.layouts.app')
@section('title', 'Admin - ' . env('APP_NAME'))
@section('content')
<style>

@media only screen and (max-width: 494px) {
    .exhibition-action-style {
      padding: 0px !important;
      margin-top: 70px !important;
      display: flex !important;
      margin-left: -10px;
    }

  }

</style>
    <div class="page-wrapper">
        <!-- Container fluid  -->
        <div class="container-fluid">
            <div class="row page-titles">
                <div class="col-md-2 align-self-center pl-0">
                    <h4 class="text-themecolor ml-0 mb-md-0 mb-2">Gallery</h4>
                </div>
                <div class="">
                    <a href="{{ route('cms.exhibition.media.create', $exhibitions->id) }}" class="btn btn-info bg-mobile bg-btn">
                        <i class="fa fa-plus-circle"></i>
                        Gallery
                    </a>
                </div>
                <div class="col align-self-center text-right">
                    <div class="d-flex justify-content-end align-items-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="/">Home</a>
                            </li>

                            <li class="breadcrumb-item active text-prime">Gallery</li>


                        </ol>
                    </div>
                </div>
            </div>

            <div class="table-responsive card orders-table">

                <table class="table table-striped footable edit-categories-table">
                    <thead>
                        <tr>
                            <th>Sr No.</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($medias as $media)
                            <tr>
                                <td>{{ tableRowSrNo($loop->index, $medias) }}</td>
                                <td class="img-on-tab-style ">
                                    @if ($media->filename)
                                        <img src="{{ asset('storage/images/exhibition/' . $media->filename) }}" width="110px"
                                            height="110px">
                                    @endif
                                </td>
                                <td class="exhibition-action-style h-btns ">
                                    <a href="{{ route('cms.exhibition.media.edit', ['exhibition_id' => $exhibitions->id, 'media_id' => $media->id]) }}"
                                        class="btn btn-warning mr-2 ">Edit
                                    </a>
                                    <button onclick="return confirm('Are you sure you want delete this Media?');"
                                        type="submit" class="btn  bg-mobile  mr-4">
                                        <a class="text-white"
                                            href="{{ route('cms.exhibition.media.delete', ['exhibition_id' => $exhibitions->id, 'media_id' => $media->id]) }}">
                                            Delete
                                        </a>
                                    </button>
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
                        {{ $medias->appends(Request::all())->links('pagination::bootstrap-4') }}
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
