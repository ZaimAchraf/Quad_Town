<!-- Main Header -->
<header class="main-header">

    <!-- Header Top -->
    <div class="header-top">
        <div class="auto-container clearfix" style="background: #00507e; margin-left: 0">

            <div class="pull-left">
                <ul class="info">
                    <li><a href="tel:+6789-875-2235"><span class="icon flaticon-maps-and-flags"></span>Call: +6789-875-2235</a></li>
                    <li><a href="mailto:Info.domain@info.com"><span class="icon flaticon-email-2"></span>Info.domain@info.com</a></li>
                </ul>
            </div>

            <div class="pull-right clearfix">
                <!-- Social Box -->
                <ul class="social-box">
                    <li><a href="https://www.facebook.com/" class="fa fa-facebook-f"></a></li>
                    <li><a href="https://www.twitter.com/" class="fa fa-twitter"></a></li>
                    <li><a href="https://dribbble.com/" class="fa fa-dribbble"></a></li>
                    <li><a href="https://www.linkedin.com/" class="fa fa-linkedin"></a></li>
                </ul>
            </div>

        </div>
    </div>

    <!-- Header Lower -->
    <div class="header-lower">

        <div class="auto-container clearfix">
            <div class="inner-container clearfix">

                <div class="pull-left logo-box">
                    <div class="logo"><a href="/"><img src="{{asset("assets")}}/images/logo.png" width="180px" height="70px" alt="" title=""></a></div>
                </div>
                <div class="nav-outer clearfix">

                    <!-- Mobile Navigation Toggler -->
                    <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
                    <!-- Main Menu -->
                    <nav class="main-menu show navbar-expand-md">
                        <div class="navbar-header">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <li><a href="{{route("home")}}">{{__("index.home")}}</a></li>
                                <li class="dropdown"><a href="#">{{__("index.about")}}</a>
                                    <ul>
                                        <li><a href="{{route("about")}}">{{__("index.about")}}</a></li>
                                        <li><a href="#">{{__("index.pricing")}}</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{route("channels")}}">{{__("index.channels")}}</a></li>
                                <li><a href="{{route("contact")}}">{{__("index.contact")}}</a></li>
                            </ul>
                        </div>

                    </nav>
                    <!-- Main Menu End-->

                    <!-- Outer Box -->
                    <div class="outer-box clearfix">

                        <!--Search Box-->
                        <div class="search-box-outer">
                            <div class="search-box-btn"><span class="fa fa-search"></span></div>
                        </div>

                        <!-- Nav Btn -->
                        <div class="nav-btn navSidebar-button"><span class="icon flaticon-dots-menu"></span></div>

                    </div>
                    <!-- End Outer Box -->

                </div>
            </div>

        </div>
    </div>
    <!-- End Header Lower -->

    <!-- Sticky Header  -->
    <div class="sticky-header">
        <div class="auto-container clearfix">
            <!-- Logo -->
            <div class="logo pull-left">
                <a href="/" title=""><img src="{{asset("assets")}}/images/logo-small.png" style="margin-top: -16px;" width="170px" height="50px" alt="" title=""></a>
            </div>

            <!--Right Col-->
            <div class="pull-right">
                <!-- Main Menu -->
                <nav class="main-menu">
                    <!--Keep This Empty / Menu will come through Javascript-->
                </nav><!-- Main Menu End-->

                <!-- Outer Box -->
                <div class="outer-box clearfix">

                    <!--Search Box-->
                    <div class="search-box-outer">
                        <div class="search-box-btn"><span class="fa fa-search"></span></div>
                    </div>

                    <!-- Nav Btn -->
                    <div class="nav-btn navSidebar-button"><span class="icon flaticon-dots-menu"></span></div>

                </div>
                <!-- End Outer Box -->

            </div>
        </div>
    </div><!-- End Sticky Menu -->

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><span class="icon flaticon-multiply"></span></div>

        <nav class="menu-box">
            <div class="nav-logo"><a href="/"><img src="images/logo.png" alt="" title=""></a></div>
            <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
        </nav>
    </div><!-- End Mobile Menu -->

</header>
<!-- End Main Header -->
