@extends('cms.layouts.app')
@section('title', 'Admin - ' . env('APP_NAME'))
@section('content')

    <div class="page-wrapper">
        <!-- Container fluid  -->
        <div class="container-fluid">
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h4 class="text-themecolor m-0">Edit Sub Category Three </h4>
                </div>
                <div class="col-md-7 align-self-center text-right">
                    <div class="d-flex justify-content-end align-items-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ url('/') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item active text-prime">Sub Category Three</li>
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
                                    action="{{ route('cms.subCategoryThree.update', $subCategoryThree->id) }}"
                                    method="POST" enctype="multipart/form-data"
                                    onSubmit="return confirm('Are you sure you want to submit?');">
                                    @csrf

                                    <div class="form-group">
                                        <label for="degree2">Category</label>
                                        <select class="form-control" name="category_id" id="sel1"
                                            onchange="getValues()" required>
                                            <option value="">Select Any Category</option>
                                            @if (old('category_id'))
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}"
                                                        @if (old('category_id') == $category->id) {{ 'selected' }} @endif>
                                                        {{ $category->title }}</option>
                                                @endforeach
                                            @else
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}"
                                                        @if ($subCategoryThree->category_id == $category->id) {{ 'selected' }} @endif>
                                                        {{ $category->title }}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                        @if ($errors->has('category_id'))
                                            <div class="alert alert-danger">
                                                <li> {{ $errors->first('category_id') }} </li>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="degree2">Sub Category One</label>
                                        <select class="form-control" name="sub_category_one_id" id="sub"
                                            onchange="getTwoValues()">
                                            <option value="">Select Any Sub Category One</option>
                                        </select>
                                        @if ($errors->has('sub_category_one_id'))
                                            <div class="alert alert-danger">
                                                <li> {{ $errors->first('sub_category_one_id') }} </li>
                                            </div>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label for="degree2">Sub Category Two</label>
                                        <select class="form-control" name="sub_category_two_id" id="subTwo">
                                            <option value="">Select Any Sub Category Two</option>
                                        </select>
                                        @if ($errors->has('sub_category_two_id'))
                                            <div class="alert alert-danger">
                                                <li> {{ $errors->first('sub_category_two_id') }} </li>
                                            </div>
                                        @endif
                                    </div>
                                    {{-- <br> --}}
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input class="form-control" value="{{ old('name', $subCategoryThree->name) }}"
                                            type="text" id="name" name="name" maxlength="150" minlength="3"
                                            placeholder="Enter Name" required>
                                        @if ($errors->has('name'))
                                            <div class="alert alert-danger">
                                                <li> {{ $errors->first('name') }} </li>
                                            </div>
                                        @endif
                                    </div>

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
@section('js')
    <script>
        function getValues() {
            const sub_category_one_id = '{{ $subCategoryThree->sub_category_one_id ?? null }}';
            //console.log(sub_category_one_id);
            $('#sub').html('')
            $('#subTwo').html('')

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
                                // console(value);
                                $('#sub').append(
                                    `<option value="${value.id}" ${sub_category_one_id == value.id ? 'selected' : ''}>${value.name}</option>`
                                )
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
        $(document).ready(function() {
            getValues();
        });

        function getTwoValues() {
            const sub_category_two_id = '{{ $subCategoryThree->sub_category_two_id ?? null }}';
            $('#subTwo').html('')

            if ($('#sub').val()) {

                $.ajax({
                    url: '/category/get/subcategorytwo/' + $('#sub').val(),
                    method: "GET",
                    success: function(data) {
                        if (data.data == '') {
                            $('#subTwo').append(`<option value=''>No data</option>`)
                        } else {
                            $('#subTwo').append(`<option value=''>Select If Required</option>`)
                            $.each(data.data, function(id, value) {
                                $('#subTwo').append(
                                    `<option value="${value.id}" ${sub_category_two_id == value.id ? 'selected' : ''}>${value.name}</option>`
                                )
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
        $(document).ready(function() {
            getTwoValues();
            setTimeout(function() {
                getTwoValues();
            }, 200);
        });
    </script>
@endsection
