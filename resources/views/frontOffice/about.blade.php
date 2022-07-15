@extends('frontOffice.layout.main')

@section('title','About Us')

@section('content')


    @include('frontOffice.layout.includes.sidebarCart')
    <!-- Page Title -->
    <section class="page-title" style="background-image: url({{asset("assets")}}/images/background/7.jpg)">
        <div class="auto-container">
            <h2>{{__("index.about")}}</h2>
            <ul class="bread-crumb clearfix">
                <li><a href="/">{{__("index.home")}}</a></li>
                <li>{{__("index.about")}}</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->


    <!-- Network Section / Style Two -->
    <section class="network-section style-two" style="background-image: url({{asset("assets")}}/images/background/2.jpg)">
        <div class="auto-container">
            <div class="inner-container">
                <div class="row clearfix">

                    <!-- Image Column -->
                    <div class="images-column col-lg-7 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="image wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <img src="{{asset("assets")}}/images/resource/network-4.jpg" alt="" />
                            </div>
                            <div class="image-two wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <img src="{{asset("assets")}}/images/resource/network-5.jpg" alt="" />
                            </div>
                            <div class="image-three wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <img src="{{asset("assets")}}/images/resource/network-3.png" alt="" />
                            </div>
                        </div>
                    </div>

                    <!-- Content Column -->
                    <div class="content-column col-lg-5 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <!-- Sec Title -->
                            <div class="sec-title">
                                <div class="separator"></div>
                                <h2>{{__("about.about_title")}}</h2>
                                <div class="text">{{__("index.about_quote")}}</div>
                            </div>
                            <!-- Network List -->
                            <ul class="network-list">
                                <li>
                                    <span class="icon flaticon-tick-1"></span>
                                    <strong>{{__("index.all_devices_title")}}</strong>
                                    {{__("index.all_devices_core")}}
                                </li>
                                <li>
                                    <span class="icon flaticon-tick-1"></span>
                                    <strong>{{__("index.high_quality_title")}}</strong>
                                    {{__("index.high_quality_core")}}
                                </li>
                                <li>
                                    <span class="icon flaticon-tick-1"></span>
                                    <strong>{{__("index.nbr_channels_title")}}</strong>
                                    {{__("index.nbr_channels_core")}}
                                </li>
                            </ul>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End Network Section / Style Two -->


    <!-- Services Section Three -->
    <section class="services-section-three" style="background-image: url({{asset("assets")}}/images/background/pattern-6.png)">
        <div class="auto-container">
            <div class="sec-title clearfix">
                <div class="pull-left">
                    <div class="separator"></div>
                    <h2>{{__("about.qualities_title_1")}} <br> {{__("about.qualities_title_2")}}</h2>
                </div>
            </div>
            <div class="row clearfix">

                <!-- Facility Block -->
                <div class="facility-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="pattern-layer" style="background-image: url({{asset("assets")}}/images/background/pattern-14.png)"></div>
                        <div class="icon-box flaticon-swimming-pool"></div>
                        <h5><a href="#">{{__("about.quality_1_title")}}</a></h5>
                        <div class="text">{{__("about.quality_1_core")}}</div>
                    </div>
                </div>

                <!-- Facility Block -->
                <div class="facility-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="pattern-layer" style="background-image: url({{asset("assets")}}/images/background/pattern-14.png)"></div>
                        <div class="icon-box flaticon-5g"></div>
                        <h5><a href="#">{{__("about.quality_2_title")}}</a></h5>
                        <div class="text">{{__("about.quality_2_core")}}</div>
                    </div>
                </div>

                <!-- Facility Block -->
                <div class="facility-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="pattern-layer" style="background-image: url({{asset("assets")}}/images/background/pattern-14.png)"></div>
                        <div class="icon-box flaticon-8k"></div>
                        <h5><a href="#">{{__("about.quality_3_title")}}</a></h5>
                        <div class="text">{{__("about.quality_3_core")}}</div>
                    </div>
                </div>

                <!-- Facility Block -->
                <div class="facility-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="pattern-layer" style="background-image: url({{asset("assets")}}/images/background/pattern-14.png)"></div>
                        <div class="icon-box flaticon-customer-service"></div>
                        <h5><a href="{{route("contact")}}">{{__("about.quality_4_title")}}</a></h5>
                        <div class="text">{{__("about.quality_4_core")}}</div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- End Services Section Three -->
    @include('frontOffice.layout.includes.testimonials')

@endsection
