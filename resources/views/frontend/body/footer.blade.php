
 @php
     $serviceAll = App\Models\Service::get()->take(5);
 @endphp
 <footer class="footer-area">
    <div class="footer-widget">
        <div class="container">
            <div class="row footer-widget-wrapper pt-100 pb-70">
                <div class="col-md-6 col-lg-4">
                    <div class="footer-widget-box about-us">
                        <a href="{{ url('/') }}" class="footer-logo">
                            <img src="{{ asset('/frontend/assets/img/logo/rupa-white.png') }}" alt="">
                        </a>
                        <p class="mb-3">
                            We are many variations of passages available but the majority have suffered alteration
                            in some form by injected humour words believable.
                        </p>
                        <ul class="footer-contact">
                            <li><a href="tel:+21236547898"><i class="far fa-phone"></i>+88 017 *** **98</a></li>
                            <li>
                                <i class="far fa-map-marker-alt"></i>Plot-3, Block-A Road No-5, Dhaka 1216
                            </li>
                            <li>
                                <a href="#">
                                <i class="far fa-envelope"></i>
                                <span>info@rupaprintingpress.com</span>
                               </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-2">
                    <div class="footer-widget-box list">
                        <h4 class="footer-widget-title">Quick Links</h4>
                        <ul class="footer-list">
                            <li><a href="#"><i class="fas fa-caret-right"></i> About Us</a></li>
                            <li><a href="{{ route('frontend.terms.conditions') }}"><i class="fas fa-caret-right"></i> Terms Of Service</a></li>
                            <li><a href="{{ route('frontend.privacy.policy') }}"><i class="fas fa-caret-right"></i> Privacy policy</a></li>
                            <li><a href="#"><i class="fas fa-caret-right"></i> Our Services</a></li>
                            <li><a href="#"><i class="fas fa-caret-right"></i> Blog</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="footer-widget-box list">
                        <h4 class="footer-widget-title">Our Services</h4>
                        <ul class="footer-list">
                            @foreach ($serviceAll as $service)
                            <li>
                                <a href="{{ route('frontend.service.details', $service->slug) }}"><i class="fas fa-caret-right"></i> {{ $service->title }}</a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="footer-widget-box list">
                        <h4 class="footer-widget-title">Newsletter</h4>
                        <div class="footer-newsletter">
                            <p>Subscribe Our Newsletter To Get Latest Update And News</p>
                            <div class="subscribe-form">
                                <form action="#">
                                    <input type="email" class="form-control" placeholder="Your Email">
                                    <button class="theme-btn" type="submit">
                                        <span class="far fa-envelope"></span> Subscribe Now
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-6 align-self-center">
                    <p class="copyright-text">
                        &copy; Copyright <span id="date"></span> <a href="#"> Rupa Printing Press </a> All Rights Reserved.
                    </p>
                </div>
                <div class="col-md-6 align-self-center">
                    <ul class="footer-social">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
