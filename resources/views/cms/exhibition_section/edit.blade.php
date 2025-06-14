@extends('cms.layouts.app')
@section('title', 'Admin - ' . env('APP_NAME'))
@section('content')
    
    <div class="page-wrapper">
        <!-- Container fluid  -->
        <div class="container-fluid">
            <div class="row page-titles ">
                <div class="col-md-5 align-self-center">
                    <h4 class="text-themecolor">Edit Gallery</h4>
                </div>
                <div class="col-md-7 align-self-center text-right">
                    <div class="d-flex justify-content-end align-items-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ url('/') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item active text-prime">Gallery</li>
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
                                <form id="form"
                                    action="{{ route('cms.exhibition.media.update', ['exhibition_id' => $exhibition->id, 'media_id' => $medias->id]) }}"
                                    method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label>Image</label>
                                        <div class="form-group">
                                            <input type="file" class="form-control" id="image" name="image">
                                            @if ($errors->has('image'))
                                                <div class="text-danger" role="alert">{{ $errors->first('image') }}
                                                </div>
                                            @endif
                                            @if ($errors->has('image.*'))
                                                <div class="text-danger" role="alert">{{ $errors->first('image.*') }}
                                                </div>
                                            @endif
                                        </div>
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
