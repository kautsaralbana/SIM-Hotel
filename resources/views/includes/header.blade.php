<header class="topbar">
    <nav class="navbar top-navbar navbar-expand-md navbar-light">
        {{-- Logo --}}
        <div class="navbar-header">
            <a class="navbar-brand" href="index.html">
                {{-- Dark Logo icon --}}
                <img src="{{ asset('images/logo-icon.png') }}" alt="homepage" class="dark-logo" />
                {{-- Light Logo icon --}}
                <img src="{{ asset('images/logo-light-icon.png') }}" alt="homepage" class="light-logo" />
                </b>

                {{-- Dark Logo text --}}
                <img src="{{ asset('images/logo-text.png') }}" alt="homepage" class="dark-logo" />
                {{-- Light Logo text --}}
                <img src="{{ asset('images/logo-light-text.png') }}" class="light-logo" alt="homepage" /></span> </a>
        </div>
        {{-- End Logo --}}
        <div class="navbar-collapse">
            {{-- toggle and nav items --}}
            <ul class="navbar-nav mr-auto mt-md-0">
                {{-- This is  --}}
                <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark"
                        href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                {{-- Search --}}
                <li class="nav-item hidden-sm-down search-box"> <a
                        class="nav-link hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i
                            class="ti-search"></i></a>
                    <form class="app-search">
                        <input type="text" class="form-control" placeholder="Search & enter"> <a class="srh-btn"><i
                                class="ti-close"></i></a> </form>
                </li>
            </ul>
            {{-- User profile and search --}}
            <ul class="navbar-nav my-lg-0">
                {{-- Profile --}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href=""
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img
                            src="{{ asset('images/users/1.jpg') }}" alt="user" class="profile-pic" /></a>
                    <div class="dropdown-menu dropdown-menu-right scale-up">
                        <ul class="dropdown-user">
                            <li>
                                <div class="dw-user-box">
                                    <div class="u-img"><img src="{{ asset('images/users/1.jpg') }}" alt="user"></div>
                                    <div class="u-text">
                                        <h4>Steave Jobs</h4>
                                        <p class="text-muted">varun@gmail.com</p>
                                    </div>
                                </div>
                            </li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#"><i class="ti-user"></i> My Profile</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#"><i class="ti-settings"></i> Account Setting</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#"><i class="fa fa-power-off"></i> Logout</a></li>
                        </ul>
                    </div>
                </li>
                {{-- End Profile --}}
            </ul>
        </div>
    </nav>
</header>
