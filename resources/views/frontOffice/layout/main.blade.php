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

<div class="whatsapp">
    <a href="https://wa.me/13125006920" target="_blank">
        <img src="{{asset("assets")}}/images/icons/whatsapp.png" alt="" />
    </a>
</div>
<div class="whatsapp1 whatsapp">
    <a href="https://wa.me/16059713044" target="_blank">
        <img src="{{asset("assets")}}/images/icons/whatsapp.png" alt="" />
    </a>
</div>

<!-- Messenger Plugin de discussion Code -->
<div id="fb-root"></div>

<!-- Your Plugin de discussion code -->
<div id="fb-customer-chat" class="fb-customerchat">
</div>

<script>
    var chatbox = document.getElementById('fb-customer-chat');
    chatbox.setAttribute("page_id", "1379717192250753");
    chatbox.setAttribute("attribution", "biz_inbox");
</script>

<!-- Your SDK code -->
<script>
    window.fbAsyncInit = function() {
        FB.init({
            xfbml            : true,
            version          : 'v14.0'
        });
    };

    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>

@include('frontOffice.layout.includes.links.scriptLinks')
@stack('scripts')
</body>
</html>
