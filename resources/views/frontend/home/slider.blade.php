@php
    $sliders = App\Models\Slider::get();
@endphp

<div class="hero-section">
    <div class="hero-slider2 owl-carousel owl-theme">
        @if (count($sliders) > 0)
            @foreach ($sliders as $slider)
            <div class="hero-single" style="background: url({{ asset($slider->slider_image) }})">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-7 col-lg-7">
                            <div class="hero-content">
                                <h6 class="hero-sub-title wow animate__animated animate__fadeInUp"
                                    data-wow-duration="1s" data-wow-delay=".25s">Welcome To Rupa!</h6>
                                <h1 class="hero-title wow animate__animated animate__fadeInUp"
                                    data-wow-duration="1s" data-wow-delay=".50s">
                                    {{ $slider->title }}
                                </h1>
                                <div class="hero-btn wow animate__animated animate__fadeInUp" data-wow-duration="1s"
                                    data-wow-delay="1s">
                                    <a href="{{ route('frontend.about-us') }}" class="theme-btn">About More<i class="far fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        @endif
    </div>
</div>
