<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <!-- Stylesheets -->


    @include('frontOffice.layout.includes.links.styleLinks')
    @yield('styles')



    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

</head>

<body class="hidden-bar-wrapper">


<div class="page-wrapper">
    <!-- Preloader -->
    <div class="preloader">
        <span></span>
    </div>


</div>


<div class="ha-app">
    {{--        <div class="show-contact-form"><i class="far fa-paper-plane"></i><br><span>Contact Us</span></div>--}}
{{--    <div class="alert alert-success message-sent text-center">Votre message a ete envoye avec succes</div>--}}
    @include('frontOffice.layout.includes.header')

    @yield('content')


    @include('frontOffice.layout.includes.footer')


</div>

<!-- Search Popup -->
<div class="search-popup">
    <div class="color-layer"></div>
    <button class="close-search"><span class="fa fa-arrow-up"></span></button>
    <form method="post" action="blog.html">
        <div class="form-group">
            <input type="search" name="search-field" value="" placeholder="Search Here" required="">
            <button type="submit"><i class="fa fa-search"></i></button>
        </div>
    </form>
</div>
<!-- End Header Search -->

<!-- Scroll To Top -->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-up"></span></div>


@include('frontOffice.layout.includes.links.scriptLinks')
@stack('scripts')
</body>
</html>
