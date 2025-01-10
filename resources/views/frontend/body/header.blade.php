
<header class="home-2 header">
    <div class="main-navigation">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('frontend/assets/img/logo/rupa-logo.png') }}" alt="logo">
                </a>
                <div class="mobile-menu-right">
                    <div class="mobile-menu-list">
                        <a href="#" class="mobile-menu-link search-box-outer">
                            <i class="far fa-search"></i>
                        </a>
                    </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"><i class="far fa-stream"></i></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="main_nav">
                    <ul class="navbar-nav">         
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('frontend.about-us') }}">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('frontend.service.list') }}">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('frontend.project.list') }}">Projects</a>
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="{{ route('frontend.blog.list') }}">Blog</a>
                        </li> --}}
                        <li class="nav-item"><a class="nav-link" href="{{ route('frontend.contact-us') }}">Contact</a></li>
                    </ul>
                    <div class="header-nav-right">
                        <div class="header-nav-search d-none d-sm-none">
                            <a href="#" class="header-nav-link search-box-outer"><i class="far fa-search"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>