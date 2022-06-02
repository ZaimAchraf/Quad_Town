@extends('frontOffice.layout.main')

@section('title','Home page')

@section('content')


    @include('frontOffice.layout.includes.sidebarCart')
    @include('frontOffice.layout.includes.mainSlider')
    @include('frontOffice.layout.includes.services')
    @include('frontOffice.layout.includes.pricing')
    @include('frontOffice.layout.includes.testimonials')

@endsection
