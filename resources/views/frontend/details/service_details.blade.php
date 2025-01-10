
@extends('frontend.master')

@section('meta_title')
<title>Service Details - Rupa Printing Press</title>
<style>
    p{
        text-align: justify;
    }
</style>
@endsection

@section('main_content')

<main class="main">

    <!-- breadcrumb -->
    <div class="site-breadcrumb" style="background: url(/frontend/assets/img/breadcrumb/01.jpg)">
        <div class="container">
            <h2 class="breadcrumb-title">Services</h2>
            <ul class="breadcrumb-menu">
                <li><a href="index-2.html">Home</a></li>
                <li class="active">Service</li>
            </ul>
        </div>
    </div>
    <!-- breadcrumb end -->

    <!-- service-single-area -->
    <div class="service-single-area py-120">
        <div class="container">
            <div class="service-single-wrapper">
                <div class="row">
                    <div class="col-xl-4 col-lg-4">
                        <div class="service-sidebar">
                            <div class="widget category">
                                <h4 class="widget-title">All Services</h4>
                                <div class="category-list">
                                    @foreach ($services as $item)
                                    <a href="{{ route('frontend.service.details', $item->slug) }}">
                                        <i class="far fa-angle-double-right"></i>{{ $item->title }}
                                    </a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8">
                        <div class="service-details text-justify">
                            {!! $service->serviceDetail->long_description !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- service-single-area end -->

</main>


@endsection
