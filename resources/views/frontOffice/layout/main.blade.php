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


@include('frontOffice.layout.includes.links.scriptLinks')
@stack('scripts')
</body>
</html>
