@php
    $firstProject = App\Models\Project::first();
    $projects = App\Models\Project::get();
@endphp
<div class="project-area py-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 mx-auto">
                <div class="site-heading text-center">
                    <span class="site-title-tagline">Work</span>
                    <h2 class="site-title">Our Recent Work</h2>
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
                       @if($key != 0)
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
                                <img src="frontend/assets/img/project/02.jpg" alt="">
                            </div>
                            <div class="project-content">
                                <a class="popup-img project-link" href="frontend/assets/img/project/02.jpg"><i
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
                                <img src="frontend/assets/img/project/03.jpg" alt="">
                            </div>
                            <div class="project-content">
                                <a class="popup-img project-link" href="frontend/assets/img/project/03.jpg"><i
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
                                <img src="frontend/assets/img/project/04.jpg" alt="">
                            </div>
                            <div class="project-content">
                                <a class="popup-img project-link" href="frontend/assets/img/project/04.jpg"><i
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
                                <img src="frontend/assets/img/project/05.jpg" alt="">
                            </div>
                            <div class="project-content">
                                <a class="popup-img project-link" href="frontend/assets/img/project/05.jpg"><i
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