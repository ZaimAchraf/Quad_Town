<!-- CTA Section -->
<section class="cta-section">
    <div class="auto-container">
        <div class="inner-container" style="background-image: url({{asset("assets")}}/images/background/pattern-11.png)">
            <div class="row clearfix">

                <!-- Title Column -->
                <div class="title-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <h3>{{__("index.newsletter_title")}}</h3>
                        <div class="text">{{__("index.newsletter_subtitle")}}</div>
                    </div>
                </div>

                <!-- Form Column -->
                <div class="form-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="newsletter-form">
                            <form method="post" action="{{route("newsletter")}}">
                                @csrf
                                <div class="form-group">
                                    <input type="email" name="email" value="" placeholder="Your Email Address" required="">
                                    @error("email")
                                        <p class="newsletterError">{{$message}}</p>
                                    @enderror
                                    <button type="submit" class="theme-btn btn-style-five"><span class="txt">Subscribe</span></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- End CTA Section -->

<!-- Main Footer -->
<footer class="main-footer">
    <div class="pattern-layer-one" style="background-image: url({{asset("assets")}}/images/background/pattern-12.png)"></div>
    <div class="pattern-layer-two" style="background-image: url({{asset("assets")}}/images/background/pattern-13.png)"></div>
    <div class="auto-container">
        <div class="widgets-section">
            <div class="logo">
                <a href="index.html"><img src="{{asset("assets")}}/images/logo.png" width="206px" alt="" /></a>
            </div>
            <ul class="contact-info-list">
                <li>
                    <span class="icon"><img src="{{asset("assets")}}/images/icons/icon-1.png" alt="" /></span>
                    <a href="https://wa.me/16059713044" target="_blank">+1 (605) 971-3044</a><br>
                    <a href="https://wa.me/13125006920" target="_blank">+1 (312) 500-6920</a>
                </li>
                <li>
                    <span class="icon"><img src="{{asset("assets")}}/images/icons/icon-2.png" alt="" /></span>
                    <a href="mailto:support@iptv-expert.com">support@iptv-expert.com</a><br>
                    <a href="mailto:support@iptv-expert.com">support@iptv-expert.com</a>
                </li>
                <li>
                    <span class="icon"><img src="{{asset("assets")}}/images/icons/icon-3.png" alt="" /></span>
                    503 Old Buffalo Street <br> Northwest #205, New York-3087
                </li>
            </ul>

            <!-- Social Box -->
            <ul class="social-box">
                <li><a href="https://www.facebook.com/" class="fa fa-facebook-f"></a></li>
                <li><a href="https://www.linkedin.com/" class="fa fa-linkedin"></a></li>
                <li><a href="https://skype.com/" class="fa fa-skype"></a></li>
                <li><a href="https://www.twitter.com/" class="fa fa-twitter"></a></li>
            </ul>

        </div>

    </div>
    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="auto-container">
            <div class="copyright">&copy; 2022 Your Company. All Rights Reserved. Developed By <a href="https://themeforest.net/user/themexriver">Zaim Achraf</a></div>
        </div>
    </div>
</footer>
<!-- End Main Footer -->
