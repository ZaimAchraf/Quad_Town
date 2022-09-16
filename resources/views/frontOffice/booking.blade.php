@extends('frontOffice.layout.main')

@section('title','Booking')

@section('content')

    <!-- Page Header Start -->
    <div class="container-fluid page-header" style="background: center linear-gradient(rgba(28, 30, 50, .9), rgba(28, 30, 50, .9)), url('{{asset("assets")}}/images/bg-banner.jpg'); background-attachment: fixed;">
        <h1 class="display-3 text-uppercase text-white mb-3">Booking</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a class="text-white" href="">Home</a></h6>
            <h6 class="text-body m-0 px-3">/</h6>
            <h6 class="text-uppercase text-body m-0">Booking</h6>
        </div>
    </div>
    <!-- Page Header Start -->

    <!-- Car Booking Start -->
    <div class="container-fluid pb-5">
        <form action="/order" method="post">
            @csrf
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <h2 class="mb-4">Personal Details</h2>
                        <div class="mb-5">
                            <div class="row">
                                <div class="col-6 form-group">
                                    <input type="text" class="form-control p-4" name="firstname" placeholder="First Name" required="required">
                                    @error('firstname')
                                    <span class="invalid-feedback" style="display: block !important;" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-6 form-group">
                                    <input type="text" class="form-control p-4" name="lastname" placeholder="Last Name" required="required">
                                    @error('lastname')
                                    <span class="invalid-feedback" style="display: block !important;" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 form-group">
                                    <input type="email" class="form-control p-4" name="email" placeholder="Your Email" required="required">
                                    @error('email')
                                    <span class="invalid-feedback" style="display: block !important;" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-6 form-group">
                                    <input type="text" class="form-control p-4" name="phone" placeholder="Mobile Number" required="required">
                                    @error('phone')
                                    <span class="invalid-feedback" style="display: block !important;" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <h2 class="mb-4">Booking Detail</h2>
                        <div class="mb-5">
                            <div class="row">
                                <div class="col-6 form-group">
                                    <div class="date" id="date2" data-target-input="nearest">
                                        <input type="text" class="form-control p-4 datetimepicker-input" name="date" placeholder="Pickup Date"
                                               data-target="#date2" data-toggle="datetimepicker" />
                                        @error('date')
                                        <span class="invalid-feedback" style="display: block !important;" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-6 form-group">
                                    <div class="time" id="time2" data-target-input="nearest">
                                        <input type="text" class="form-control p-4 datetimepicker-input" name="time" placeholder="Pickup Time"
                                               data-target="#time2" data-toggle="datetimepicker" />
                                        @error('time')
                                        <span class="invalid-feedback" style="display: block !important;" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 form-group">
                                    <input type="number" class="form-control p-4" name="nbr_adults" placeholder="Adults" required="required">
                                    @error('nbr_adults')
                                    <span class="invalid-feedback" style="display: block !important;" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-6 form-group">
                                    <input type="number" class="form-control p-4" name="nbr_children" placeholder="Children" required="required">
                                    @error('nbr_children')
                                    <span class="invalid-feedback" style="display: block !important;" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <textarea class="form-control py-3 px-4" rows="3" name="notice" placeholder="Special Request" ></textarea>
                            </div>

                            <button class="btn btn-primary py-md-3 px-md-5 mt-2" type="submit"> Send</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </div>
    <!-- Car Booking End -->



@endsection
