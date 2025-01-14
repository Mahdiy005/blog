<!DOCTYPE html>
<html lang="en">

@include('theme.partials.head')

<body>
    <!--================Header Menu Area =================-->
    @include('theme.partials.header')
    <!--================Header Menu Area =================-->
    @yield('site-main')
    <!--================ Start Footer Area =================-->
    @include('theme.partials.footer')
    <!--================ End Footer Area =================-->
    @include('theme.partials.scripts')
</body>

</html>
