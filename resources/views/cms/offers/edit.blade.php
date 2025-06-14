@extends('cms.layouts.app')
@section('title', 'Admin - ' . env('APP_NAME'))
@section('content')

    <div class="page-wrapper">
        <!-- Container fluid  -->
        <div class="container-fluid">
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h4 class="text-themecolor m-0">Edit Offer</h4>
                </div>
                <div class="col-md-7 align-self-center text-right">
                    <div class="d-flex justify-content-end align-items-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ url('/') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item active text-prime">Offer</li>
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
                                <form id="form" action="{{ route('cms.offer.update', $offer->id) }}" method="POST"
                                    enctype="multipart/form-data" onSubmit="return confirm('Are you sure you want to submit?');">
                                    @csrf


                                    <div class="form-group">
                                        <label>Categorys</label>
                                        <select class="custom-select col-12" id="sel1" name="category_id" required>
                                            <option value="">Select Category</option>
                                            @foreach ($categories as $key => $categorie)
                                                <option value="{{ $categorie->id }}"
                                                    {{ $offer->category_id == $categorie->id ? 'selected' : '' }}>
                                                    {{ $categorie->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @if ($errors->has('category_id'))
                                        <div class="alert alert-danger">
                                            <li> {{ $errors->first('category_id') }} </li>
                                        </div>
                                    @endif
                                    {{-- <div class="form-group">
                                        <label for="degree2">Sub Category One</label>
                                        <select class="form-control" name="sub_category_one_id" id="sub"
                                            onchange="getTwoValues()">
                                            <option value="">Select Any Sub Category One</option>
                                        </select>
                                        @if ($errors->has('sub_category_one_id'))
                                            <div class="text-danger" role="alert">
                                                {{ $errors->first('sub_category_one_id') }}
                                            </div>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label for="degree2">Sub Category Two</label>
                                        <select class="form-control" name="sub_category_two_id" id="subTwo" onchange="getThreeValues()">
                                            <option value="">Select Any Sub Category Two</option>
                                        </select>
                                        @if ($errors->has('sub_category_two_id'))
                                            <div class="text-danger" role="alert">
                                                {{ $errors->first('sub_category_two_id') }}
                                            </div>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label for="degree2">Sub Category Three</label>
                                        <select class="form-control" name="sub_category_three_id" id="subThree">
                                            <option value="">Select Any Sub Category Three</option>
                                        </select>
                                        @if ($errors->has('sub_category_three_id'))
                                            <div class="text-danger" role="alert">
                                                {{ $errors->first('sub_category_three_id') }}
                                            </div>
                                        @endif
                                    </div> --}}

                                    <div class="form-group">
                                        <label>Title</label>
                                        <input class="form-control" value="{{ old('title', $offer->title) }}" type="text"
                                            id="title" name="title" maxlength="150" minlength="3" placeholder="Enter Title" required>
                                    </div>
                                    @if ($errors->has('title'))
                                        <div class="alert alert-danger">
                                            <li> {{ $errors->first('title') }} </li>
                                        </div>
                                    @endif
                                    <div class="form-group">
                                        <label>Image</label><br>
                                        @if ($offer->image)
                                            <img width="100" height="100" class="mr-2"
                                                src="{{ asset('storage/images/offers/' . $offer->image) }}">
                                        @endif
                                        <div class="form-group mt-1">
                                            <input type="file" class="form-control" id="offer_image" name="offer_image">
                                        </div>
                                    </div>
                                    @if ($errors->has('offer_image'))
                                        <div class="alert alert-danger">
                                            <li> {{ $errors->first('offer_image') }} </li>
                                        </div>
                                    @endif

                                    {{-- <div class="form-group">
                                        <label for="">Description</label>
                                        <input class="form-control" type="text" placeholder="description"
                                            name="description" value="{{ old('description', $offer->description) }}"
                                            minlength="3" maxlength="500">
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
                                                    <textarea placeholder="enter the description" id="mymce" name="body" minlength="3" maxlength="18000">{{ old('body', $offer->body) }}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                        @if ($errors->has('body'))
                                            <div class="alert alert-danger">
                                                <li> {{ $errors->first('body') }} </li>
                                            </div>
                                        @endif
                                    </div>

                                    {{-- <br> --}}
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

@endsection
@section('js')
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
        $('#subTwo').html('')
        $('#subThree').html('')

        if ($('#sel1').val()) {
            const sub_category_one_id = '{{ $offer->sub_category_one_id ?? null }}';
            console.log(sub_category_one_id)
            $.ajax({
                url: '/category/get/subcategoryone/' + $('#sel1').val(),
                method: "GET",
                success: function(data) {
                    if (data.data == '') {
                        $('#sub').append(`<option value=''>No data</option>`)
                    } else {
                        $('#sub').append(`<option value=''>Select If Required</option>`)
                        $.each(data.data, function(id, value) {
                            $('#sub').append(`<option value="${value.id}" ${sub_category_one_id == value.id ? 'selected' : ''}>${value.name}</option>`)
                        })
                    }
                    getTwoValues();
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


    function getTwoValues() {
        $('#subTwo').html('')
        $('#subThree').html('')
        if ($('#sub').val()) {
            const sub_category_two_id = '{{ $offer->sub_category_two_id ?? null }}';

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
                                `<option value="${value.id}" ${sub_category_two_id == value.id ? 'selected' : ''}>${value.name}</option>`)
                        })
                    }
                    getThreeValues();
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

    function getThreeValues() {
        $('#subThree').html('')

        if ($('#subTwo').val()) {
            const sub_category_three_id = '{{ $offer->sub_category_three_id ?? null }}';

            $.ajax({
                url: '/category/get/subcategorythree/' + $('#subTwo').val(),
                method: "GET",
                success: function(data) {
                    if (data.data == '') {
                        $('#subThree').append(`<option value=''>No data</option>`)
                    } else {
                        $('#subThree').append(`<option value=''>Select If Required</option>`)
                        $.each(data.data, function(id, value) {
                            $('#subThree').append(
                                `<option value="${value.id}" ${sub_category_three_id == value.id ? 'selected' : ''}>${value.name}</option>`)
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
</script>
@endsection
