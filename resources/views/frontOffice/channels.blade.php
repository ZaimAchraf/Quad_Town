@extends('frontOffice.layout.main')

@section('title','All Channels')

@section('content')


    @include('frontOffice.layout.includes.sidebarCart')


    <!-- Page Title -->
    <section class="page-title" style="background-image: url({{asset("assets")}}/images/background/8.jpg)">
        <div class="auto-container">
            <h2>Channels</h2>
            <ul class="bread-crumb clearfix">
                <li><a href="/">{{__("index.home")}}</a></li>
                <li>{{__("index.channels")}}</li>
            </ul>
        </div>
    </section>
    <!-- End Page Title -->


    <!-- Featured Section -->
    <section class="featured-section">
        <div class="pattern-layer-one" style="background-image: url({{asset("assets")}}/images/background/pattern-9.png)"></div>
        <div class="pattern-layer-two" style="background-image: url({{asset("assets")}}/images/background/pattern-10.png)"></div>
        <div class="auto-container">

            <!-- Sec Title -->
            <div class="sec-title light">
                <div class="clearfix">
                    <div class="pull-left">
                        <h2>{{__("index.our Channels")}}</h2>
                    </div>
                </div>
            </div>
            <!-- End Sec Title -->

            <div class="row clearfix">

                <!-- Feature Block -->
                <div class="feature-block">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{asset("assets")}}/images/channels/bein.png" alt="" />
                            <div class="overlay-box">
                                <ul class="post-meta">
                                </ul>
                            </div>
                        </div>
                        <div class="lower-content">
                            <div class="clearfix">
                                <div class="pull-left">
                                    <h6><a href="#">Bein Sport</a></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Feature Block -->
                <div class="feature-block">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{asset("assets")}}/images/channels/film.jpg" alt="" />
                            <div class="overlay-box">
                                <ul class="post-meta">
                                </ul>
                            </div>
                        </div>
                        <div class="lower-content">
                            <div class="clearfix">
                                <div class="pull-left">
                                    <h6><a href="#">Film1</a></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Feature Block -->
                <div class="feature-block">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{asset("assets")}}/images/channels/canal.png" alt="" />
                            <div class="overlay-box">
                                <ul class="post-meta">
                                </ul>
                            </div>
                        </div>
                        <div class="lower-content">
                            <div class="clearfix">
                                <div class="pull-left">
                                    <h6><a href="#">Canal+</a></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Feature Block -->
                <div class="feature-block">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{asset("assets")}}/images/channels/Eleven.png" alt="" />
                            <div class="overlay-box">
                                <ul class="post-meta">
                                </ul>
                            </div>
                        </div>
                        <div class="lower-content">
                            <div class="clearfix">
                                <div class="pull-left">
                                    <h6><a href="#">Eleven Sport</a></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Feature Block -->
                <div class="feature-block">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{asset("assets")}}/images/channels/fox.png" alt="" />
                            <div class="overlay-box">
                                <ul class="post-meta">
                                </ul>
                            </div>
                        </div>
                        <div class="lower-content">
                            <div class="clearfix">
                                <div class="pull-left">
                                    <h6><a href="#">Fox Sports</a></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Feature Block -->
                <div class="feature-block">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{asset("assets")}}/images/channels/hbo.png" alt="" />
                            <div class="overlay-box">
                                <ul class="post-meta">
                                </ul>
                            </div>
                        </div>
                        <div class="lower-content">
                            <div class="clearfix">
                                <div class="pull-left">
                                    <h6><a href="#">HBO</a></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Feature Block -->
                <div class="feature-block">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{asset("assets")}}/images/channels/play.png" alt="" />
                            <div class="overlay-box">
                                <ul class="post-meta">
                                </ul>
                            </div>
                        </div>
                        <div class="lower-content">
                            <div class="clearfix">
                                <div class="pull-left">
                                    <h6><a href="#">Play More + Play Sport</a></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Feature Block -->
                <div class="feature-block">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{asset("assets")}}/images/channels/sky.png" alt="" />
                            <div class="overlay-box">
                                <ul class="post-meta">
                                </ul>
                            </div>
                        </div>
                        <div class="lower-content">
                            <div class="clearfix">
                                <div class="pull-left">
                                    <h6><a href="#">Sky sports</a></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Feature Block -->
                <div class="feature-block">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{asset("assets")}}/images/channels/sky.jpg" alt="" />
                            <div class="overlay-box">
                                <ul class="post-meta">
                                </ul>
                            </div>
                        </div>
                        <div class="lower-content">
                            <div class="clearfix">
                                <div class="pull-left">
                                    <h6><a href="#">Sky Cinema</a></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Feature Block -->
                <div class="feature-block">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{asset("assets")}}/images/channels/ziggo.png" alt="" />
                            <div class="overlay-box">
                                <ul class="post-meta">
                                </ul>
                            </div>
                        </div>
                        <div class="lower-content">
                            <div class="clearfix">
                                <div class="pull-left">
                                    <h6><a href="#">ZIGGO SPORT</a></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- End Featured Section -->

@endsection
