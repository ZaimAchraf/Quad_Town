<!-- Pricing Section -->
<section class="pricing-section" style="background-image: url({{asset("assets")}}/images/background/pattern-3.png)">
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title light centered">
            <div class="title">{{__("index.pricing_plan")}}</div>
            <h2>{{__("index.pricing_title")}}</h2>
        </div>
        <!-- End Sec Title -->
        <div class="row clearfix">

            @foreach($packages as $package)

                <div class="price-block col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="upper-box" style="background-image: url({{asset("assets")}}/images/background/pattern-4.png)">
                            <ul class="icon-list">
                                <li><span class="icon"><img src="{{asset("assets")}}/images/icons/service-1.svg" alt="" /></span></li>
                            </ul>
                            <h4>{{$package->name}} <span>{{$package->price . "$ / " . $package->period}}</span></h4>
                        </div>
                        <div class="lower-box">
                            <ul class="price-list">
                                @foreach(explode("/", $package->server->description) as $quality)
                                    <li>{{$quality}}</li>
                                @endforeach
                            </ul>
                            <div class="button-box">
                                <a href="{{"checkout/" . $package->id}}" class="theme-btn btn-style-four"><span class="txt">{{__("index.get started")}}</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</section>
<!-- End Pricing Section -->
