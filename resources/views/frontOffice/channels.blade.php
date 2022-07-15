@extends('frontOffice.layout.main')

@section('title','All Channels')

@section('content')


    @include('frontOffice.layout.includes.sidebarCart')


    <!-- Page Title -->
    <section class="page-title" style="background-image: url({{asset("assets")}}/images/background/8.jpg)">
        <div class="auto-container">
            <h2>Channels</h2>
            <ul class="bread-crumb clearfix">
                <li><a href="index.html">Home</a></li>
                <li>Channels</li>
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
                        <div class="title">Now Showing</div>
                        <h2>Channels showing</h2>
                    </div>
                </div>
            </div>
            <!-- End Sec Title -->

            <div class="row clearfix">

                <!-- Feature Block -->
                <div class="feature-block">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{asset("assets")}}/images/resource/feature-1.jpg" alt="" />
                            <div class="overlay-box">
                                <ul class="post-meta">
                                    <li><span class="icon fa fa-star"></span>5.7</li>
                                    <li><span class="icon fa fa-comment"></span>25</li>
                                </ul>
                            </div>
                        </div>
                        <div class="lower-content">
                            <div class="clearfix">
                                <div class="pull-left">
                                    <h6><a href="movie.html">Robin Hood</a></h6>
                                </div>
                                <div class="pull-right">
                                    <div class="year">2010</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Feature Block -->
                <div class="feature-block">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{asset("assets")}}/images/resource/feature-2.jpg" alt="" />
                            <div class="overlay-box">
                                <ul class="post-meta">
                                    <li><span class="icon fa fa-star"></span>5.7</li>
                                    <li><span class="icon fa fa-comment"></span>25</li>
                                </ul>
                            </div>
                        </div>
                        <div class="lower-content">
                            <div class="clearfix">
                                <div class="pull-left">
                                    <h6><a href="movie.html">Bad Boys Life</a></h6>
                                </div>
                                <div class="pull-right">
                                    <div class="year">2012</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Feature Block -->
                <div class="feature-block">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{asset("assets")}}/images/resource/feature-3.jpg" alt="" />
                            <div class="overlay-box">
                                <ul class="post-meta">
                                    <li><span class="icon fa fa-star"></span>5.7</li>
                                    <li><span class="icon fa fa-comment"></span>25</li>
                                </ul>
                            </div>
                        </div>
                        <div class="lower-content">
                            <div class="clearfix">
                                <div class="pull-left">
                                    <h6><a href="movie.html">Hot Dolitle</a></h6>
                                </div>
                                <div class="pull-right">
                                    <div class="year">2014</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Feature Block -->
                <div class="feature-block">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{asset("assets")}}/images/resource/feature-4.jpg" alt="" />
                            <div class="overlay-box">
                                <ul class="post-meta">
                                    <li><span class="icon fa fa-star"></span>5.7</li>
                                    <li><span class="icon fa fa-comment"></span>25</li>
                                </ul>
                            </div>
                        </div>
                        <div class="lower-content">
                            <div class="clearfix">
                                <div class="pull-left">
                                    <h6><a href="movie.html">Invisible Man</a></h6>
                                </div>
                                <div class="pull-right">
                                    <div class="year">2016</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Feature Block -->
                <div class="feature-block">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{asset("assets")}}/images/resource/feature-5.jpg" alt="" />
                            <div class="overlay-box">
                                <ul class="post-meta">
                                    <li><span class="icon fa fa-star"></span>5.7</li>
                                    <li><span class="icon fa fa-comment"></span>25</li>
                                </ul>
                            </div>
                        </div>
                        <div class="lower-content">
                            <div class="clearfix">
                                <div class="pull-left">
                                    <h6><a href="movie.html">Onward Hood</a></h6>
                                </div>
                                <div class="pull-right">
                                    <div class="year">2018</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Feature Block -->
                <div class="feature-block">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{asset("assets")}}/images/resource/feature-6.jpg" alt="" />
                            <div class="overlay-box">
                                <ul class="post-meta">
                                    <li><span class="icon fa fa-star"></span>5.7</li>
                                    <li><span class="icon fa fa-comment"></span>25</li>
                                </ul>
                            </div>
                        </div>
                        <div class="lower-content">
                            <div class="clearfix">
                                <div class="pull-left">
                                    <h6><a href="movie.html">Tenet Life</a></h6>
                                </div>
                                <div class="pull-right">
                                    <div class="year">2019</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Feature Block -->
                <div class="feature-block">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{asset("assets")}}/images/resource/feature-7.jpg" alt="" />
                            <div class="overlay-box">
                                <ul class="post-meta">
                                    <li><span class="icon fa fa-star"></span>5.7</li>
                                    <li><span class="icon fa fa-comment"></span>25</li>
                                </ul>
                            </div>
                        </div>
                        <div class="lower-content">
                            <div class="clearfix">
                                <div class="pull-left">
                                    <h6><a href="movie.html">The Grudge</a></h6>
                                </div>
                                <div class="pull-right">
                                    <div class="year">2020</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Feature Block -->
                <div class="feature-block">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{asset("assets")}}/images/resource/feature-8.jpg" alt="" />
                            <div class="overlay-box">
                                <ul class="post-meta">
                                    <li><span class="icon fa fa-star"></span>5.7</li>
                                    <li><span class="icon fa fa-comment"></span>25</li>
                                </ul>
                            </div>
                        </div>
                        <div class="lower-content">
                            <div class="clearfix">
                                <div class="pull-left">
                                    <h6><a href="movie.html">Underwater</a></h6>
                                </div>
                                <div class="pull-right">
                                    <div class="year">2021</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Feature Block -->
                <div class="feature-block">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{asset("assets")}}/images/resource/feature-9.jpg" alt="" />
                            <div class="overlay-box">
                                <ul class="post-meta">
                                    <li><span class="icon fa fa-star"></span>5.7</li>
                                    <li><span class="icon fa fa-comment"></span>25</li>
                                </ul>
                            </div>
                        </div>
                        <div class="lower-content">
                            <div class="clearfix">
                                <div class="pull-left">
                                    <h6><a href="movie.html">The Turning</a></h6>
                                </div>
                                <div class="pull-right">
                                    <div class="year">2021</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Feature Block -->
                <div class="feature-block">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{asset("assets")}}/images/resource/feature-10.jpg" alt="" />
                            <div class="overlay-box">
                                <ul class="post-meta">
                                    <li><span class="icon fa fa-star"></span>5.7</li>
                                    <li><span class="icon fa fa-comment"></span>25</li>
                                </ul>
                            </div>
                        </div>
                        <div class="lower-content">
                            <div class="clearfix">
                                <div class="pull-left">
                                    <h6><a href="movie.html">Birds of Prey</a></h6>
                                </div>
                                <div class="pull-right">
                                    <div class="year">2022</div>
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
