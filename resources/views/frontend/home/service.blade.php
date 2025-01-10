@php
    $services = App\Models\Service::get()->take(4);
@endphp
<div class="service-area bg py-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="site-heading text-center">
                    <span class="site-title-tagline">Services</span>
                    <h2 class="site-title">What We Offer</h2>
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