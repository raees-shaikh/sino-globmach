<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <title>
        @yield('pageTitle')
        {{ URL::current() == url('') ? '' : '|' }}
        Sino Globmach
    </title>
    @include('layouts.header')
    @yield('cdn')
</head>

<body>
    <div id="wrapper">
    @include('layouts.nav')
    @yield('content')
    @include('layouts.footer')
    </div>
    @yield('js')
</body>
</html>
