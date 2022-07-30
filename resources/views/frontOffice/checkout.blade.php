@extends('frontOffice.layout.main')

@section('title','Checkout')

@section('content')


    @include('frontOffice.layout.includes.sidebarCart')
    <!-- Page Title -->
    <section class="page-title" style="background-image: url({{asset("assets")}}/images/background/8.jpg)">
        <div class="auto-container">
            <h2>CheckOut</h2>
            <ul class="bread-crumb clearfix">
                <li><a href="index.html">Home</a></li>
                <li>CheckOut</li>
            </ul>
        </div>
    </section>
    <!-- End Page Title -->

    <!-- Checkout Page -->
    <div class="checkout-page">
        <div class="auto-container">
            <!--Billing Details-->
            <div class="billing-details">
                <div class="shop-form">
                    <form action="/order" method="post">
                        @csrf
                        <div class="row clearfix">
                            <div class="col-lg-7 col-md-12 col-sm-12">

                                <div class="sec-title"><h2>Billing Details</h2></div>
                                <div class="billing-inner">
                                    <div class="row clearfix">

                                        <!--Form Group-->
                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <div class="field-label">Firstname<sup>*</sup></div>
                                            <input type="text" name="firstname" value="" placeholder="First Name">
                                            @error('firstname')
                                            <span class="invalid-feedback" style="display: block !important;" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <!--Form Group-->
                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <div class="field-label">Lastname <sup>*</sup></div>
                                            <input type="text" name="lastname" value="" placeholder="Last Name">
                                            @error('lastname')
                                            <span class="invalid-feedback" style="display: block !important;" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <!--Form Group-->
                                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                            <div class="field-label">Address <sup>*</sup></div>
                                            <input type="text" name="address" value="" placeholder="Street Address">
                                            @error('address')
                                            <span class="invalid-feedback" style="display: block !important;" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                            <input class="address-two" type="text" name="address2" value="" placeholder="Apartment, Suit unit etc (optional)">
                                            @error('address2')
                                            <span class="invalid-feedback" style="display: block !important;" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <!--Form Group-->
                                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                                <div class="field-label">City <sup>*</sup></div>
                                                <input type="text" name="country" value="" placeholder="Country">
                                                @error('country')
                                                <span class="invalid-feedback" style="display: block !important;" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                                <input class="address-two" type="text" name="city" value="" placeholder="City">
                                                @error('city')
                                                <span class="invalid-feedback" style="display: block !important;" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>

                                        <!--Form Group-->
                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <div class="field-label">Postcode <sup>*</sup></div>
                                            <input type="text" name="postal" value="" placeholder="Postcode / Zip">
                                            @error('postal')
                                            <span class="invalid-feedback" style="display: block !important;" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <!--Form Group-->
                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <div class="field-label">Email Address <sup>*</sup></div>
                                            <input type="email" name="email" value="" placeholder="Email Address">
                                            @error('email')
                                            <span class="invalid-feedback" style="display: block !important;" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <!--Form Group-->
                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <div class="field-label">Phone <sup>*</sup></div>
                                            <input type="text" name="phone" value="">
                                            @error('phone')
                                            <span class="invalid-feedback" style="display: block !important;" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                            <div class="field-label">Order Notes</div>
                                            <textarea name="note" placeholder="Note about your order. e.g. special note for delivery"></textarea>
                                        </div>
                                        <input type="hidden" name="package_id" value="{{$package->id}}">
                                        <input type="hidden" name="total" value="{{$package->price}}">



                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-5 col-md-12 col-sm-12">
                                <div class="sec-title"><h2>Your Order</h2></div>
                                <div class="shop-order-box">
                                    <ul class="order-list">
                                        <li>Prodcut<span>TOTAL</span></li>
                                        <li>Package {{$package->name}}<span>{{$package->price}} €</span></li>
                                        <li>Subtotal<span class="dark">{{$package->price}} €</span></li>
                                        <li class="total">TOTAL<span class="dark">{{$package->price}} €</span></li>
                                    </ul>


                                    <!--Place Order-->
                                    <div class="place-order">
                                        <!--Payment Options-->
                                        <div class="payment-options">
                                            <ul>
                                                <li>
                                                    <div class="radio-option">
                                                        <input type="radio" name="payment-group" id="payment-2" checked>
                                                        <label for="payment-2"><strong>Direct Bank Transfer</strong>
                                                            <span class="small-text">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</span>
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="radio-option">
                                                        <input type="radio" name="payment-group" id="payment-1">
                                                        <label for="payment-1"><strong>Cheque Payment</strong>
                                                            <span class="small-text">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</span>
                                                        </label>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="radio-option">
                                                        <input type="radio" name="payment-group" id="payment-3">
                                                        <label for="payment-3"><strong>Paypal</strong><img src="images/resource/paypal.jpg" alt="" /> <a href="#" class="what-paypall">What is PayPal?</a></label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>

                                        <button type="submit" class="theme-btn btn-style-four"><span class="txt">Place Order</span></button>

                                    </div>
                                    <!--End Place Order-->

                                </div>


                            </div>
                        </div>
                    </form>

                </div>

            </div><!--End Billing Details-->
        </div>
    </div>

@endsection
