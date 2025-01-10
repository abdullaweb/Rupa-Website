@extends('frontend.master')

@section('meta_title')
<title>Projects - Rupa Printing Press</title>
@endsection

@section('main_content')

<main class="main">

    <!-- breadcrumb -->
    <div class="site-breadcrumb" style="background: url({{ asset('frontend/assets/img/breadcrumb/01.jpg') }})">
        <div class="container">
            <h2 class="breadcrumb-title">Our Project</h2>
            <ul class="breadcrumb-menu">
                <li><a href="{{ route('frontend.index') }}">Home</a></li>
                <li class="active">Project</li>
            </ul>
        </div>
    </div>
    <!-- breadcrumb end -->

   <!-- project-area -->
   <div class="project-area bg py-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 mx-auto">
                <div class="site-heading text-center">
                    <span class="site-title-tagline">Work</span>
                    <h2 class="site-title">Our Recent Work</h2>
                    <span class="shadow-title">Work</span>
                </div>
            </div>
        </div>
        <div class="row popup-gallery">
            <div class="col-md-5">
                <div class="project-item">
                    <div class="project-img">
                        <img src="{{ asset($firstProject->project_image) }}" alt="">
                    </div>
                    <div class="project-content">
                        <a class="popup-img project-link" href="{{ asset($firstProject->project_image) }}"><i
                                class="far fa-magnifying-glass-plus"></i></a>
                        <div class="project-info">
                            <h5 class="project-subtitle"><span>//</span> {{ $firstProject->project_title }}</h5>
                            <a href="#">
                                <h4 class="project-title">{!! $firstProject->project_description !!}</h4>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="row">
                    @foreach ($projects as $key => $project)
                      @if ($key > 0)
                        <div class="col-md-6">
                            <div class="project-item">
                                <div class="project-img">
                                    <img src="{{ asset($project->project_image) }}" alt="">
                                </div>
                                <div class="project-content">
                                    <a class="popup-img project-link" href="{{ asset($project->project_image) }}"><i
                                            class="far fa-magnifying-glass-plus"></i></a>
                                    <div class="project-info">
                                        <h5 class="project-subtitle"><span>//</span> {{ $project->project_title }}</h5>
                                        <a href="#">
                                            <h4 class="project-title">{!! $project->project_description !!}</h4>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                      @endif
                    @endforeach
                    {{-- <div class="col-md-6">
                        <div class="project-item">
                            <div class="project-img">
                                <img src="/frontend/assets/img/project/02.jpg" alt="">
                            </div>
                            <div class="project-content">
                                <a class="popup-img project-link" href="assets/img/project/02.jpg"><i
                                        class="far fa-magnifying-glass-plus"></i></a>
                                <div class="project-info">
                                    <h5 class="project-subtitle"><span>//</span> Poster</h5>
                                    <a href="#">
                                        <h4 class="project-title">Package Design</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="project-item">
                            <div class="project-img">
                                <img src="/frontend/assets/img/project/03.jpg" alt="">
                            </div>
                            <div class="project-content">
                                <a class="popup-img project-link" href="assets/img/project/03.jpg"><i
                                        class="far fa-magnifying-glass-plus"></i></a>
                                <div class="project-info">
                                    <h5 class="project-subtitle"><span>//</span> Poster</h5>
                                    <a href="#">
                                        <h4 class="project-title">Package Design</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="project-item">
                            <div class="project-img">
                                <img src="/frontend/assets/img/project/04.jpg" alt="">
                            </div>
                            <div class="project-content">
                                <a class="popup-img project-link" href="assets/img/project/04.jpg"><i
                                        class="far fa-magnifying-glass-plus"></i></a>
                                <div class="project-info">
                                    <h5 class="project-subtitle"><span>//</span> Poster</h5>
                                    <a href="#">
                                        <h4 class="project-title">Package Design</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="project-item">
                            <div class="project-img">
                                <img src="/frontend/assets/img/project/05.jpg" alt="">
                            </div>
                            <div class="project-content">
                                <a class="popup-img project-link" href="assets/img/project/05.jpg"><i
                                        class="far fa-magnifying-glass-plus"></i></a>
                                <div class="project-info">
                                    <h5 class="project-subtitle"><span>//</span> Poster</h5>
                                    <a href="#">
                                        <h4 class="project-title">Package Design</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- project-area end -->


</main>


@endsection
