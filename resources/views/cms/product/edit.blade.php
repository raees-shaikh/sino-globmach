@extends('cms.layouts.app')
@section('title', 'Admin - ' . env('APP_NAME'))
@section('content')
<style>
    .site-button {
    background-color: #1c63b8 !important;
    border:none;
    background: linear-gradient(90deg, rgba(43,50,113,1) 0%, rgba(11,138,203,1) 100%) !important;
}
</style>
    <div class="page-wrapper">
        <!-- Container fluid  -->
        <div class="container-fluid">
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h4 class="text-themecolor">Edit Product</h4>
                </div>
                <div class="col-md-7 align-self-center text-right">
                    <div class="d-flex justify-content-end align-items-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ url('/') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item active">Edit Product</li>
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
                                {{--   <form id="form" action="{{ route('cms.offer.update', $offer->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input class="form-control" value="{{ old('title', $offer->title) }}" type="text"
                                            id="title" name="title" maxlength="30" minlength="3" required>
                                    </div>
                                    @if ($errors->has('title'))
                                        <div class="alert alert-danger">
                                            <li> {{ $errors->first('title') }} </li>
                                        </div>
                                    @endif

                                    <div class="form-group">
                                        <select class="custom-select col-12" id="country" name="category_id" required>
                                            <option value="">Select Category</option>
                                            @foreach ($categories as $key => $categorie)
                                                <option value="{{ $categorie->id }}"
                                                    {{ $offer->categories_id == $categorie->id ? 'selected' : '' }}>
                                                    {{ $categorie->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @if ($errors->has('category_id'))
                                        <div class="alert alert-danger">
                                            <li> {{ $errors->first('category_id') }} </li>
                                        </div>
                                    @endif

                                    <div class="form-group">
                                        <label for="">Description</label>
                                        <input class="form-control" type="text" placeholder="description"
                                            name="description" value="{{ old('description', $offer->description) }}"
                                            minlength="3" maxlength="500">
                                    </div>
                                    @if ($errors->has('description'))
                                        <div class="alert alert-danger">
                                            <li> {{ $errors->first('description') }} </li>
                                        </div>
                                    @endif

                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <textarea placeholder="enter the description" id="mymce" name="body">{{ old('body', $offer->body) }}</textarea>
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

                                {{-- Static form start --}}

                                <form id="form" action="{{ route('cms.product.update', $product->id) }}" method="POST"
                                    enctype="multipart/form-data" onSubmit="return confirm('Are you sure you want to submit?');">
                                    @csrf
                                    <div class="form-group">
                                        <label>Product Categories</label>
                                        <select class="custom-select col-12" id="country" name="product_category_id"
                                            required>
                                            <option value="">Select Product Category</option>
                                            @foreach ($product_categories as $key => $product_categorie)
                                                <option value="{{ $product_categorie->id }}"
                                                    {{ $product->product_category_id == $product_categorie->id ? 'selected' : '' }}>
                                                    {{ $product_categorie->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @if ($errors->has('product_category_id'))
                                        <div class="alert alert-danger">
                                            <li> {{ $errors->first('product_category_id') }} </li>
                                        </div>
                                    @endif
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input class="form-control" value="{{ old('title') ?? $product->title }}"
                                            type="text" id="title" name="title" maxlength="150" minlength="3"
                                           placeholder="Enter Title" required>
                                    </div>
                                    @if ($errors->has('title'))
                                        <div class="alert alert-danger">
                                            <li> {{ $errors->first('title') }} </li>
                                        </div>
                                    @endif
                                    <div class="form-group">
                                        <label>Image</label><br>
                                        @if ($product->image)
                                            <img width="100" height="100" class="mr-2"
                                                src="{{ asset('storage/images/products/' . $product->image) }}">
                                        @endif
                                        <div class="form-group mt-4">
                                            <input type="file" class="form-control" id="product_image"
                                                name="product_image">
                                        </div>
                                    </div>
                                    @if ($errors->has('product_image'))
                                        <div class="alert alert-danger">
                                            <li> {{ $errors->first('product_image') }} </li>
                                        </div>
                                    @endif
                                    {{--
                                    <div class="form-group">
                                        <label for="">Description</label>
                                        <input class="form-control" type="text" placeholder="description"
                                        name="description" value="{{ old('description') }}" minlength="3" maxlength="500" required>
                                    </div>
                                    @if ($errors->has('description'))
                                        <div class="alert alert-danger">
                                            <li> {{ $errors->first('description') }} </li>
                                        </div>
                                    @endif --}}

                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-body p-0">
                                                    <textarea placeholder="enter the description" id="mymce" name="body" minlength="3" maxlength="9000">{{ old('body') ?? $product->body }}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                        @if ($errors->has('body'))
                                            <div class="alert alert-danger">
                                                <li> {{ $errors->first('body') }} </li>
                                            </div>
                                        @endif
                                    </div>

                                    <div class="alert alert-danger d-none">
                                        <li> </li>
                                    </div>


                                    <div class="alert alert-danger d-none">
                                        <li> </li>
                                    </div>

                                    {{-- Static form end --}}

                                    <div class="form-group col-md-3">
                                        <button type="submit"
                                            id="check"
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
    <script>
        $(document).ready(function() {
            if ($("#mymce").length > 0) {
                tinymce.init({
                    selector: "textarea#mymce",
                    theme: "modern",
                    height: 300,
                    plugins: [
                        "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                        "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                        "save table contextmenu directionality emoticons template paste textcolor"
                    ],
                    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",

                });
            }
        });
    </script>
@endsection
