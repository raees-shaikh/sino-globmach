@extends('cms.layouts.app')
@section('title', 'Admin - ' . env('APP_NAME'))
@section('content')

    <div class="page-wrapper">
        <!-- Container fluid  -->
        <div class="container-fluid">
            <div class="row page-titles ">
                <div class="col-md-5 align-self-center">
                    <h4 class="text-themecolor m-0">Edit Data</h4>
                </div>
                <div class="col-md-7 align-self-center text-right">
                    <div class="d-flex justify-content-end align-items-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ url('/') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item active text-prime">data</li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- Start Page Content -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-body col-lg-6 py-0 pt-2">
                        <div class="row">
                            <div class="col-sm-12 col-xs-12 p-0">
                                <form id="form" action="{{ route('cms.data.update', $data->id) }}" method="POST"
                                    enctype="multipart/form-data"
                                    onSubmit="return confirm('Are you sure you want to submit?');">
                                    @csrf
                                    <div class="form-group">
                                        <label>file</label>
                                        <input type="file" class="form-control" id="formGroupExampleInput" required
                                            name="filename">
                                    </div>
                                    @if ($errors->has('filename'))
                                        <div class="alert alert-danger">
                                            <li> {{ $errors->first('filename') }} </li>
                                        </div>
                                    @endif
                                    <div class="form-group col-md-3">
                                        <button type="submit" id="check"
                                            class="site-button btn btn-success waves-effect waves-light m-r-12  col-sm-12">Submit</button>
                                    </div>
                                </form>
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
