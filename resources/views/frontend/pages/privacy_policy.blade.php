
@extends('frontend.master')

@section('meta_title')
<title>Privacy Policy - Rupa Printing Press</title>
@endsection

@section('main_content')

<!-- breadcrumb -->
<div class="site-breadcrumb" style="background: url({{ asset('frontend/assets/img/breadcrumb/01.jpg') }})">
    <div class="container">
        <h2 class="breadcrumb-title">Privacy Policy</h2>
        <ul class="breadcrumb-menu">
            <li><a href="{{ route('frontend.index') }}">Home</a></li>
            <li class="active">Privacy Policy</li>
        </ul>
    </div>
</div>
<!-- breadcrumb end -->

<div class="privacy-policy">
    <div class="container my-5">
        <div class="card shadow">
            <div class="card-body">
                <p class="mb-3">
                    At <strong>Rupa Printing Press</strong>, we value your privacy and are committed to protecting your personal data. This Privacy Policy outlines how we collect, use, and safeguard your information when you use our website and services.
                </p>
                <h5 class="mb-2 font-weight-bold">Information We Collect</h5>
                <ul class="mb-3">
                    <li><strong>Personal Information:</strong> Name, email address, phone number, and other details you provide when filling out forms.</li>
                    <li><strong>Technical Data:</strong> IP address, browser type, and browsing activity on our website.</li>
                </ul>
                <h5 class="mb-2 font-weight-bold">How We Use Your Information</h5>
                <p>We may use your information for the following purposes:</p>
                <ul class="mb-3">
                    <li>To provide and improve our products and services.</li>
                    <li>To process orders and respond to inquiries.</li>
                    <li>To send promotional emails (if you opt in).</li>
                </ul>
                <h5 class="mb-2 font-weight-bold">Data Protection</h5>
                <p class="mb-3">We implement industry-standard security measures to ensure your data is safe. However, no online system is 100% secure, and we cannot guarantee absolute security.</p>
                <h5 class="mb-2 font-weight-bold">Cookies</h5>
                <p class="mb-3">We use cookies to improve your browsing experience. You can disable cookies through your browser settings, but this may affect website functionality.</p>
                <h5 class="mb-2 font-weight-bold">Third-Party Sharing</h5>
                <p class="mb-3">Your data will never be sold. We may share it with trusted partners to fulfill services, always in accordance with privacy laws.</p>
                <h5 class="mb-2 font-weight-bold">Your Rights</h5>
                <p class="mb-3">You have the right to access, correct, or delete your data. Contact us at <a href="mailto:privacy@royalpowerlink.com">privacy@royalpowerlink.com</a> for assistance.</p>
                <h5 class="mb-2 font-weight-bold">Updates</h5>
                <p class="mb-3">This Privacy Policy may be updated periodically. Check this page for changes.</p>
            </div>
        </div>
    </div>
</div>



@endsection
