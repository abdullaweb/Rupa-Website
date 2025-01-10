@extends('frontend.master')

@section('meta_title')
<title>Contact - Rupa Printing Press</title>
@endsection

@section('main_content')

<main class="main">

    <!-- breadcrumb -->
    <div class="site-breadcrumb" style="background: url({{ asset('frontend/assets/img/breadcrumb/01.jpg') }})">
        <div class="container">
            <h2 class="breadcrumb-title">Contact Us</h2>
            <ul class="breadcrumb-menu">
                <li><a href="{{ route('frontend.index') }}">Home</a></li>
                <li class="active">Contact Us</li>
            </ul>
        </div>
    </div>
    <!-- breadcrumb end -->




    <!-- contact area -->
    <div class="contact-area py-120">
        <div class="container">
            <div class="contact-wrapper">
                <div class="row pt-4">
                    <div class="col-lg-8 align-self-center">
                        <div class="contact-form">
                            <form method="post" action="{{ route('admin.contact.store') }}" id="contact-form">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name"
                                                placeholder="Your Name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email"
                                                placeholder="Your Email" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="phone"
                                                placeholder="Your Phone" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="subject"
                                                placeholder="Your Address" required>
                                        </div>
                                    </div>

                                </div>
                                <div class="form-group">
                                    <textarea name="message" cols="30" rows="5" class="form-control"
                                        placeholder="Write Your Message"></textarea>
                                </div>
                                <button type="submit" class="theme-btn">
                                    Send Message <i class="far fa-paper-plane"></i>
                                </button>
                                <div class="col-md-12 mt-3">
                                    <div class="form-messege text-success"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="contact-content">
                            <div class="contact-info">
                                <div class="contact-info-icon contact-icon-1">
                                    <i class="fal fa-map-marker-alt"></i>
                                </div>
                                <div class="contact-info-content">
                                    <h5>Office Address</h5>
                                    <p>Plot-3, Block-A Road No-5, Dhaka 1216</p>
                                </div>
                            </div>
                            <div class="contact-info">
                                <div class="contact-info-icon contact-icon-2">
                                    <i class="fal fa-phone"></i>
                                </div>
                                <div class="contact-info-content">
                                    <h5>Call Us</h5>
                                    <p>+880 123 *****89</p>
                                </div>
                            </div>
                            <div class="contact-info">
                                <div class="contact-info-icon contact-icon-3">
                                    <i class="fal fa-envelope"></i>
                                </div>
                                <div class="contact-info-content">
                                    <h5>Email Us</h5>
                                    <p>
                                        <a href="mailto:info@rupaprintingpress.com">info@rupaprintingpress.com</a>
                                    </p>
                                </div>
                            </div>
                            {{-- <div class="contact-info">
                                <div class="contact-info-icon contact-icon-4">
                                    <i class="fal fa-clock"></i>
                                </div>
                                <div class="contact-info-content">
                                    <h5>Office Open</h5>
                                    <p>Sat - Fri (08AM - 10PM)</p>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end contact area -->

    <!-- map -->
    <div class="contact-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.3036205961403!2d90.36317157502577!3d23.807800086570996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755bf6eabd7752d%3A0xa3d14584b2550e57!2sRupa%20Printing%20Press%20(Factory)!5e0!3m2!1sen!2sbd!4v1734927658009!5m2!1sen!2sbd" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>


</main>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            @if (session('success'))
                Swal.fire({
                    title: 'Success!',
                    text: 'Your message has been sent successfully!',
                    icon: 'success',
                    confirmButtonText: 'OK',
                    timer: 3000
                });
            @endif
        })
    </script>

    @endsection
