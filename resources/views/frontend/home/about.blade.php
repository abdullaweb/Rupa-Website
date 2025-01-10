@php
    $abouts = App\Models\AboutUs::first();
@endphp
<div class="about-area py-120">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-left">
                    <div class="about-img">
                        <img class="about-img-1" src="{{ asset($abouts->about_us_image) }}" alt="About Image">
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
                    <a href="{{ route('frontend.about-us') }}" class="theme-btn mt-4">Discover More <i class="far fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>