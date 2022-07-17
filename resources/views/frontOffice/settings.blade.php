@extends('frontOffice.layout.main')

@section('title','Settings')

@section('content')


    @include('frontOffice.layout.includes.sidebarCart')
    <!-- Page Title -->
    <section class="page-title" style="background-image: url({{asset("assets")}}/images/background/7.jpg)">
        <div class="auto-container">
            <h2>{{__("index.config")}}</h2>
            <ul class="bread-crumb clearfix">
                <li><a href="/">{{__("index.home")}}</a></li>
                <li>{{__("index.config")}}</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->



    <!-- Sidebar Page Container -->
    <section class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Content Side -->
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
                    <div class="service-detail">
                        <div class="inner-box">
                            <div class="lower-content">
                                <!-- Accordian Outer -->
                                <div class="accordion-outer">
                                    <h4>How to Configure our IPTV</h4>

                                    <!-- Accordian Box / Style Two -->
                                    <ul class="accordion-box style-two">

                                        <!--Block-->
                                        <li class="accordion block active-block">
                                            <div class="acc-btn active"><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>
                                                1: Allumez votre appareil MAG. Chargez-le et cliquez sur Paramètres
                                            </div>
                                            <div class="acc-content current">
                                                <div class="content">
                                                    <div class="text">
                                                        <img src="https://i0.wp.com/www.bentv.ca/wp-content/uploads/2020/04/Abonnemen-IPTV-MAG1.jpg?w=691&ssl=1" alt="" />
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <!--Block-->
                                        <li class="accordion block">
                                            <div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>
                                                2: Go to the Settings menu. Click on System Settings
                                            </div>
                                            <div class="acc-content">
                                                <div class="content">
                                                    <div class="text">
                                                        <img src="https://i0.wp.com/www.bentv.ca/wp-content/uploads/2020/04/Abonnemen-IPTV-MAG2.jpg?w=700&ssl=1" alt="" />
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <!--Block-->
                                        <li class="accordion block">
                                            <div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>
                                                3: Veuillez cliquer sur les serveurs
                                            </div>
                                            <div class="acc-content">
                                                <div class="content">
                                                    <div class="text">
                                                        <img src="https://i0.wp.com/www.bentv.ca/wp-content/uploads/2020/04/Abonnemen-IPTV-MAG3.jpg?w=700&ssl=1" alt="" />
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <!--Block-->
                                        <li class="accordion block">
                                            <div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>
                                                4: Sélectionnez "Portails"
                                            </div>
                                            <div class="acc-content">
                                                <div class="content">
                                                    <div class="text">
                                                        <img src="https://i0.wp.com/www.bentv.ca/wp-content/uploads/2020/04/Abonnemen-IPTV-MAG4.jpg?w=693&ssl=1" alt="" />
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <!--Block-->
                                        <li class="accordion block">
                                            <div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>
                                                5: Dans la ligne "Nom du portail 1", entrez un nom de portail et dans l'URL du portail 1, entrez l'URL du portail.
                                            </div>
                                            <div class="acc-content">
                                                <div class="content">
                                                    <div class="text">
                                                        <img src="https://i0.wp.com/www.bentv.ca/wp-content/uploads/2020/04/Abonnemen-IPTV-MAG5.jpg?w=692&ssl=1" alt="" />
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                    </ul>

                                </div>
                                <!-- End Accordian Outer -->

                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Side -->
                <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                    <aside class="sidebar sticky-top">

                        <!-- Contact Widget -->
                        <div class="sidebar-widget contact-widget">
                            <div class="widget-content">
                                <div class="sidebar-title">
                                    <h5>Contact Us</h5>
                                </div>
                                <ul class="contact-info-widget">
                                    <li>
                                        <span class="icon flaticon-map"></span>
                                        503 Old Buffalo Street Northwest #205, New York-3087
                                    </li>
                                    <li>
                                        <span class="icon flaticon-call"></span>
                                        <a href="tel:+9684-32-45-789">+9684 32 45 789</a><br>
                                        <a href="tel:+9684-32-45-789">+9684 32 45 789</a>
                                    </li>
                                    <li>
                                        <span class="icon flaticon-email-1"></span>
                                        <a href="mailto:infoname@gmail.com">infoname@gmail.com</a><br>
                                        <a href="www.yourname.com">www.yourname.com</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </aside>
                </div>

            </div>
        </div>
    </section>
    <!-- End Sidebar Page Container -->
    @include('frontOffice.layout.includes.testimonials')

@endsection
