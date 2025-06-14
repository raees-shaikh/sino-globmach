@extends('cms.layouts.app')
@section('title', 'Admin - ' . env('APP_NAME'))
@section('content')

<div class="page-wrapper">
    <!-- Container fluid  -->
    <div class="container-fluid">
        <div class="row page-titles ">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor m-0">Create Exhibition</h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="breadcrumb-item active text-prime">Create Exhibition</li>
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
                            <form id="form" action="{{route('cms.exhibition.store')}}" method="POST" enctype="multipart/form-data" onSubmit="return confirm('Are you sure you want to submit?');">
                                @csrf
                                <div class="form-group">
                                    <label>Title</label>
                                    <input class="form-control" type="text" id="title" name="title" placeholder="Enter Title" value="{{old('title')}}" maxlength="150" minlength="3" required>
                                </div>
                                @if ($errors->has('title'))
                                    <div class="alert alert-danger">
                                        <li> {{ $errors->first('title') }} </li>
                                    </div>
                                @endif
                                <div class="form-group">
                                    <label>Start Date</label>
                                    <input class="form-control" type="date" id="date" name="start_date" value="{{old('start_date')}}" required>
                                </div>
                                @if ($errors->has('start_date'))
                                    <div class="alert alert-danger">
                                        <li> {{ $errors->first('start_date') }} </li>
                                    </div>
                                @endif
                                <div class="form-group">
                                    <label>End Date</label>
                                    <input class="form-control" type="date" id="date" name="end_date" value="{{old('end_date')}}" required>
                                </div>
                                @if ($errors->has('end_date'))
                                    <div class="alert alert-danger">
                                        <li> {{ $errors->first('end_date') }} </li>
                                    </div>
                                @endif
                                <div class="form-group">
                                    <label>Image</label>
                                    <div class="form-group">
                                        <input type="file" class="form-control" id="image" name="image" required>
                                    </div>
                                </div>
                                @if ($errors->has('image'))
                                    <div class="alert alert-danger">
                                        <li> {{ $errors->first('image') }} </li>
                                    </div>
                                @endif
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-body p-0">
                                                <textarea  placeholder ="enter the description" id="mymce" name="descriptions" minlength="3" maxlength="18000">{{old('descriptions')}}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    @if ($errors->has('descriptions'))
                                        <div class="alert alert-danger">
                                            <li> {{ $errors->first('descriptions') }} </li>
                                        </div>
                                    @endif
                                </div>
                                {{-- <br> --}}
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
