@extends('cms.layouts.app')
@section('title', 'Admin - ' . env('APP_NAME'))
@section('content')

    <div class="page-wrapper">
        <!-- Container fluid  -->
        <div class="container-fluid">
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h4 class="text-themecolor m-0">Create Sub Category Two</h4>
                </div>
                <div class="col-md-7 align-self-center text-right">
                    <div class="d-flex justify-content-end align-items-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ url('/') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item active text-prime">Sub Category Two</li>
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
                                <form id="form" action="{{ route('cms.subCategoryTwo.store') }}" method="POST"
                                    enctype="multipart/form-data"
                                    onSubmit="return confirm('Are you sure you want to submit?');">
                                    @csrf

                                    <div class="form-group">
                                        <label>Categories</label>
                                        <select class="custom-select col-12" id="sel1" onchange="getValues()"
                                            name="category_id" required>
                                            <option value="">Select Category</option>
                                            @foreach ($categories as $key => $categorie)
                                                <option value="{{ $categorie->id }}"
                                                    {{ old('category_id') == $categorie->id ? 'selected' : '' }}>
                                                    {{ $categorie->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @if ($errors->has('category_id'))
                                        <div class="alert alert-danger">
                                            <li> {{ $errors->first('category_id') }} </li>
                                        </div>
                                    @endif

                                    <div class="cform-group">
                                        <label for="degree2">Sub Category One</label>
                                        <select class="form-control" name="sub_category_one_id" id="sub">
                                            <option value="">Select Any Sub Category One</option>
                                        </select>
                                        @if ($errors->has('sub_category_one_id'))
                                            <div class="alert alert-danger">
                                                <li> {{ $errors->first('sub_category_one_id') }} </li>
                                            </div>
                                        @endif
                                    </div>

                                    <div class="form-group mt-3">
                                        <label>Name</label>
                                        <input class="form-control" value="{{ old('title') }}" type="text"
                                            placeholder="Enter Name" id="name" name="name" maxlength="150"
                                            minlength="3" required>
                                    </div>
                                    @if ($errors->has('name'))
                                        <div class="alert alert-danger">
                                            <li> {{ $errors->first('name') }} </li>
                                        </div>
                                    @endif
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

        function getValues() {
            $('#sub').html('')

            if ($('#sel1').val()) {

                $.ajax({
                    url: '/category/get/subcategoryone/' + $('#sel1').val(),
                    method: "GET",
                    success: function(data) {
                        if (data.data == '') {
                            $('#sub').append(`<option value=''>No data</option>`)
                        } else {
                            $('#sub').append(`<option value=''>Select If Required</option>`)
                            $.each(data.data, function(id, value) {
                                $('#sub').append(`<option value="${value.id}">${value.name}</option>`)
                            })
                        }
                    },
                    error: function() {
                        Snackbar.show({
                            text: "Internal Error",
                            pos: 'top-right',
                            actionTextColor: '#fff',
                            backgroundColor: '#e7515a'
                        });
                    }
                })
            }
        }
    </script>
@endsection
