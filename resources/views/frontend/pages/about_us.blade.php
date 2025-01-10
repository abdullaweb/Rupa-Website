@extends('frontend.master')

@section('meta_title')
<title>About - Rupa Printing Press</title>
@endsection

@section('main_content')

    <!-- breadcrumb -->
    <div class="site-breadcrumb" style="background: url({{ asset('frontend/assets/img/breadcrumb/01.jpg') }})">
        <div class="container">
            <h2 class="breadcrumb-title">About Us</h2>
            <ul class="breadcrumb-menu">
                <li><a href="{{ route('frontend.index') }}">Home</a></li>
                <li class="active">About Us</li>
            </ul>
        </div>
    </div>
    <!-- breadcrumb end -->

    <!-- about-style-six -->
    <div class="about-area py-120">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-left">
                        <div class="about-img">
                            <img class="about-img-1" src="frontend/assets/img/about/01.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-right">
                        <div class="site-heading mb-3">
                            <span class="site-title-tagline">About Us</span>
                        </div>
                       
                        <div class="about-text">
                            {!! $abouts->description !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about-style-six end -->

@endsection
