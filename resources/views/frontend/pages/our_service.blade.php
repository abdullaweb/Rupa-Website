
@extends('frontend.master')

@section('meta_title')
<title>Services - Rupa Printing Press</title>
@endsection

@section('main_content')

<main class="main">

    <!-- breadcrumb -->
    <div class="site-breadcrumb" style="background: url(/frontend/assets/img/breadcrumb/01.jpg)">
        <div class="container">
            <h2 class="breadcrumb-title">Services</h2>
            <ul class="breadcrumb-menu">
                <li><a href="index-2.html">Home</a></li>
                <li class="active">Services</li>
            </ul>
        </div>
    </div>
    <!-- breadcrumb end -->


    <!-- service area -->
    <div class="service-area py-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="site-heading text-center">
                        <span class="site-title-tagline">Services</span>
                        <h2 class="site-title">What We Offer</h2>
                        <span class="shadow-title">Services</span>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($services as $service)
                <div class="col-md-6 col-lg-3">
                    <div class="service-item">
                        <div class="service-icon">
                            <img src="{{ asset($service->serviceDetail->service_image) }}" alt="">
                        </div>
                        <div class="service-content">
                            <h4 class="service-title">
                                <a href="{{ route('frontend.service.details', $service->slug) }}">{{ $service->title }}</a>
                            </h4>
                            <p class="service-text">
                                {{ $service->serviceDetail->short_description }}
                            </p>
                            <div class="service-arrow">
                                <a href="{{ route('frontend.service.details', $service->slug) }}" class="service-btn">Read More <i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- service area end -->
    


</main>


@endsection
