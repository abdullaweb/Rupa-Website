<div class="main-sidebar sidebar-style-2">

    <aside id="sidebar-wrapper">

        <div class="sidebar-brand">
            <a href="{{ route('admin.dashboard') }}">
                <img alt="image" src="{{ asset('/frontend/assets/img/logo/favicon.ico') }}" class="header-logo" />
                <span class="logo-name fs-6">Rupa Printing</span>
            </a>
        </div>

        <ul class="sidebar-menu">

            <li class="menu-header">Main</li>

            <li class="dropdown {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                <a href="{{ route('admin.dashboard') }}" class="nav-link">
                    <i data-feather="monitor"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="dropdown {{ request()->routeIs('admin.slider.list') ? 'active' : '' }}">
                <a href="#" class="menu-toggle nav-link has-dropdown">
                    <i data-feather="image"></i>
                    <span>Sliders</span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="nav-link" href="{{ route('admin.slider.list') }}">
                            Slider List
                        </a>
                    </li>
                </ul>
            </li>

            <li class="dropdown {{ request()->routeIs('admin.about-us.list') ? 'active' : '' }}">
                <a href="#" class="menu-toggle nav-link has-dropdown">
                    <i data-feather="list"></i>
                    <span>About Us</span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="nav-link" href="{{ route('admin.about-us.list') }}">About Us</a>
                    </li>
                </ul>
            </li>

            {{-- <li class="dropdown {{ request()->routeIs('admin.about-message.list') ? 'active' : '' }}">
                <a href="#" class="menu-toggle nav-link has-dropdown">
                    <i data-feather="list"></i>
                    <span>Chairman Message</span>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('admin.about-message.list') }}">Chairman Message</a></li>
                </ul>
            </li> --}}

            <li class="dropdown {{ request()->routeIs('admin.project.list') ? 'active' : '' }}">
                <a href="#" class="menu-toggle nav-link has-dropdown">
                    <i data-feather="list"></i>
                    <span>Projects</span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="nav-link" href="{{ route('admin.project.list') }}">Projects</a>
                    </li>
                </ul>
            </li>

            {{-- <li class="dropdown {{ request()->routeIs('admin.our-team.list') ? 'active' : '' }}">
                <a href="#" class="menu-toggle nav-link has-dropdown">
                    <i data-feather="list"></i>
                    <span>Our Team</span>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('admin.our-team.list') }}">Our Team List</a></li>
                </ul>
            </li> --}}

            <li class="dropdown {{ request()->routeIs(['admin.service-category.list', 'admin.service.list']) ? 'active' : '' }}">
                <a href="#" class="menu-toggle nav-link has-dropdown">
                    <i data-feather="list"></i>
                    <span>Services</span>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('admin.service-category.list') }}">Service Category List</a></li>
                    <li><a class="nav-link" href="{{ route('admin.service.list') }}">Service List</a></li>
                </ul>
            </li>

            <li class="dropdown {{ request()->routeIs('admin.contact.list') ? 'active' : '' }}">
                <a href="#" class="menu-toggle nav-link has-dropdown">
                    <i data-feather="list"></i>
                    <span>Contact</span>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('admin.contact.list') }}">Contact Message List</a></li>
                </ul>
            </li>

            {{-- <li class="dropdown {{ request()->routeIs('admin.career.list') ? 'active' : '' }}">
                <a href="#" class="menu-toggle nav-link has-dropdown">
                    <i data-feather="list"></i>
                    <span>Career</span>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('admin.career.list') }}">Job Post List</a></li>
                    <li><a class="nav-link" href="{{ route('admin.job_apply.list') }}">Job Application List</a></li>
                </ul>
            </li> --}}

            <li class="dropdown {{ request()->routeIs('admin.setting.font-awesome') ? 'active' : '' }}">
                <a href="#" class="menu-toggle nav-link has-dropdown">
                    <i data-feather="settings"></i>
                    <span>Settings</span>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('admin.setting.edit', siteSetting()->id) }}">Site Setting</a></li>
                    {{-- <li><a class="nav-link" href="{{ route('admin.setting.font-awesome') }}">FontAwesome List</a></li> --}}
                </ul>
            </li>

        </ul>

    </aside>

</div>
