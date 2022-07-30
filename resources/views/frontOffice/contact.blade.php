@extends('frontOffice.layout.main')

@section('title','Contact us')

@section('content')


    @include('frontOffice.layout.includes.sidebarCart')

    <!-- Page Title -->
    <section class="page-title" style="background-image: url({{asset("assets")}}/images/background/10.jpg)">
        <div class="auto-container">
            <h2>{{__("index.contact")}}</h2>
            <ul class="bread-crumb clearfix">
                <li><a href="/">{{__("index.home")}}</a></li>
                <li>{{__("index.contact")}}</li>
            </ul>
        </div>
    </section>
    <!-- End Page Title -->

    <!-- Contact Page Section -->
    <section class="contact-page-section">
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Info Column -->
                <div class="info-column col-lg-4 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="title-box">
                            <h4>{{__("index.contact_details")}}</h4>
                        </div>
                        <div class="lower-box">
                            <ul class="info-list">
                                <li>
                                    <span class="icon flaticon-map"></span>
                                    503 Old Buffalo Street
                                    Northwest #205, New York-3087
                                </li>
                                <li>
                                    <span class="icon flaticon-call"></span>
                                    <a href="https://wa.me/13125006920" target="_blank">+1 (312) 500-6920</a><br>
                                    <a href="https://wa.me/16059713044" target="_blank">+1 (605) 971-3044</a>
                                </li>
                                <li>
                                    <span class="icon flaticon-email-1"></span>
                                    <a href="mailto:support@iptv-expert.com" style="margin-top: 15px">support@iptv-expert.com</a><br>
                                    <a href="https://www.iptv-expert.com">www.iptv-expert.com</a>
                                </li>
                            </ul>

                            <!-- Social Box -->
                            <ul class="social-box">
                                <li class="facebook"><a href="#" class="fa fa-facebook-f"></a></li>
                                <li class="twitter"><a href="#" class="fa fa-twitter"></a></li>
                                <li class="google"><a href="#" class="fa fa-google"></a></li>
                                <li class="dribbble"><a href="#" class="fa fa-dribbble"></a></li>
                                <li class="linkedin"><a href="#" class="fa fa-linkedin"></a></li>
                                <li class="pinterest"><a href="#" class="fa fa-pinterest-p"></a></li>
                            </ul>

                        </div>
                    </div>
                </div>

                <!-- Map Column -->
                <div class="map-column col-lg-8 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <!--Map Outer-->
                        <div class="map-outer">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d805184.6331292129!2d144.49266890254142!3d-37.97123689954809!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad646b5d2ba4df7%3A0x4045675218ccd90!2sMelbourne%20VIC%2C%20Australia!5e0!3m2!1sen!2s!4v1574408946759!5m2!1sen!2s" allowfullscreen=""></iframe>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Contact Form Box -->
            <div class="contact-form-box">
{{--                <!-- Form Title Box -->--}}
                <div class="form-title-box">
                    <h3>{{__("index.send_message")}}</h3>
                </div>

{{--                <!-- Contact Form -->--}}
                <div class="contact-form">
                    <form method="post" action="{{route("send_contact")}}">
                        @csrf
                        <div class="row clearfix">

                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                <input type="text" name="full_name" placeholder="Name" required>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                <input type="email" name="email" placeholder="Email Address" required>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                <input type="text" name="subject" placeholder="Subject" required>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                <textarea class="darma" name="message" placeholder="Write Your Message..."></textarea>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 form-group text-center">
                                <button class="theme-btn btn-style-four" type="submit" name="submit-form"><span class="txt">{{__("index.send")}}</span></button>
                            </div>

                        </div>
                    </form>
                </div>

            </div>
            <!-- End Contact Form Box -->

        </div>
    </section>
    <!-- End Contact Page Section -->

@endsection
