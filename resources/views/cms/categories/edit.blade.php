@extends('cms.layouts.app')
@section('title', 'Admin - ' . env('APP_NAME'))
@section('content')

<div class="page-wrapper">
    <!-- Container fluid  -->
    <div class="container-fluid">
        <div class="row page-titles ">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor m-0">Edit Category</h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="breadcrumb-item active text-prime">Category</li>
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
                            <form id="form" action="{{route('cms.categories.update',$categories->id)}}" method="POST" enctype="multipart/form-data" onSubmit="return confirm('Are you sure you want to submit?');">
                                @csrf
                                <div class="form-group">
                                    <label>Title</label>
                                    <input class="form-control" type="text" value="{{old('title',$categories->title)}}" placeholder="Enter Title" id="title" name="title" maxlength="60" minlength="3" required>
                                </div>
                                @if ($errors->has('title'))
                                    <div class="alert alert-danger">
                                        <li> {{ $errors->first('title') }} </li>
                                    </div>
                                @endif
                                {{-- <div class="form-group">
                                    <label>Image</label><br>
                                    @if ($categories->image)
                                    <img width="100" height="100" class="mr-2" src="{{ asset('/storage/images/latest_arrival/' .$categories->image) }}" alt=""></td>
                                    @endif
                                    <div class="form-group mt-3">
                                        <input type="file" class="form-control" id="categories_image" name="categories_image">
                                    </div>
                                </div>
                                @if ($errors->has('categories_image'))
                                    <div class="alert alert-danger">
                                        <li> {{ $errors->first('categories_image') }} </li>
                                    </div>
                                @endif --}}
                                {{-- <div class="row">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-body p-0">
                                                <textarea  placeholder ="enter the description" id="mymce" name="body" minlength="3" maxlength="190">{{old('body') ?? $categories->body}}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    @if ($errors->has('body'))
                                        <div class="alert alert-danger">
                                            <li> {{ $errors->first('body') }} </li>
                                        </div>
                                    @endif
                                </div> --}}
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
