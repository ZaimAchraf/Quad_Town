@extends('frontOffice.layout.main')

@section('title','Vehicles')

@section('content')

    <!-- Page Header Start -->
    <div class="container-fluid page-header" style="background: center linear-gradient(rgba(28, 30, 50, .9), rgba(28, 30, 50, .9)), url('{{asset("assets")}}/images/bg-banner.jpg'); background-attachment: fixed;">
        <h1 class="display-3 text-uppercase text-white mb-3">Vehicles</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a class="text-white" href="">Home</a></h6>
            <h6 class="text-body m-0 px-3">/</h6>
            <h6 class="text-uppercase text-body m-0">Vehicles</h6>
        </div>
    </div>
    <!-- Page Header Start -->

    @include('frontOffice.layout.includes.pricing')
    @include('frontOffice.layout.includes.banner_2')



@endsection
