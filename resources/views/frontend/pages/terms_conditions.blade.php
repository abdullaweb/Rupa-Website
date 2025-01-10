
@extends('frontend.master')

@section('meta_title')
<title>Terms & Conditions - Rupa Printing Press</title>
@endsection

@section('main_content')

 <!-- breadcrumb -->
 <div class="site-breadcrumb" style="background: url({{ asset('frontend/assets/img/breadcrumb/01.jpg') }})">
    <div class="container">
        <h2 class="breadcrumb-title">Terms & Conditions</h2>
        <ul class="breadcrumb-menu">
            <li><a href="{{ route('frontend.index') }}">Home</a></li>
            <li class="active">Terms & Conditions</li>
        </ul>
    </div>
</div>
<!-- breadcrumb end -->

<div class="terms-condition">
    <div class="container my-5">
        <div class="card shadow">
            <div class="card-body">
                <p class="mb-3">
                    Welcome to <strong>Royal Power Link</strong>. By accessing or using our website and services, you agree to comply with the following Terms and Conditions. Please read them carefully.
                </p>
                <h5 class="mb-2 font-weight-bold">Acceptance of Terms</h5>
                <p class="mb-3">
                    By using this website, you acknowledge that you have read, understood, and agreed to these terms. If you do not agree, please discontinue use of our services.
                </p>
                <h5 class="mb-2 font-weight-bold"> Use of Services</h5>
                <p class="mb-3">
                    Our website and services are intended for lawful purposes only. You agree not to:
                </p>
                <ul class="mb-2">
                    <li>Engage in any unauthorized or fraudulent activities.</li>
                    <li>Disrupt or interfere with the website's functionality.</li>
                    <li>Use our services to distribute harmful or illegal content.</li>
                </ul>
                <h5 class="mb-2 font-weight-bold"> Intellectual Property</h5>
                <p class="mb-3">
                    All content on this website, including text, images, logos, and trademarks, is the property of <strong>Royal Power Link</strong> and is protected by copyright laws. Unauthorized use is strictly prohibited.
                </p>
                <h5 class="mb-2 font-weight-bold"> Limitation of Liability</h5>
                <p class="mb-3">
                    Royal Power Link is not liable for any damages or losses arising from the use of our website or services, including errors, interruptions, or inaccuracies.
                </p>
                <h5 class="mb-2 font-weight-bold"> Warranty Disclaimer</h5>
                <p class="mb-3">
                    Our services are provided "as is" without warranties of any kind, either express or implied, including but not limited to fitness for a particular purpose.
                </p>
                <h5 class="mb-2 font-weight-bold"> User Accounts</h5>
                <p class="mb-3">
                    Users may need to create accounts to access certain features. You are responsible for maintaining the confidentiality of your login information and for all activities under your account.
                </p>
                <h5 class="mb-2 font-weight-bold"> Changes to Terms</h5>
                <p class="mb-3">
                    We reserve the right to update or modify these Terms and Conditions at any time. Changes will be effective immediately upon posting. Your continued use of our services constitutes acceptance of the modified terms.
                </p>
                <h5 class="mb-2 font-weight-bold"> Governing Law</h5>
                <p class="mb-3">
                    These terms are governed by the laws of [Insert Country/State]. Any disputes will be resolved in the jurisdiction of [Insert Jurisdiction].
                </p>
                <h5 class="mb-2 font-weight-bold"> Contact Us</h5>
                <p class="mb-3">
                    For questions or concerns regarding these terms, please contact us at <a href="mailto:support@royalpowerlink.com">support@royalpowerlink.com</a>.
                </p>
            </div>
        </div>
    </div>
</div>



@endsection