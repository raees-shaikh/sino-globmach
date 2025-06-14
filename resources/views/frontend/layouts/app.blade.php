<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>
        @yield('pageTitle')
        {{ URL::current() == url('') ? '' : '|' }}
        Sino Globmach
    </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{url('frontend/images/icon.png')}}">
    @include('frontend.layouts.header')
    @yield('cdn')
</head>

<body>
    @include('frontend.layouts.nav')
    @yield('content')
    @include('frontend.layouts.footer')
    @yield('js')
</body>

</html>
