<!--! ================================================================ !-->
<header class="nxl-header">
    <div class="header-wrapper">
        <!--! [Start] Header Right !-->
        <div class="header-right ms-auto">
            <div class="d-flex align-items-center">
                <div class="nxl-h-item d-none d-sm-flex">
                    <div class="full-screen-switcher">
                        <a href="javascript:void(0);" class="nxl-head-link me-0"
                           onclick="$('body').fullScreenHelper('toggle');">
                            <i class="feather-maximize maximize"></i>
                            <i class="feather-minimize minimize"></i>
                        </a>
                    </div>
                </div>
                <div class="dropdown nxl-h-item">
                    <a href="javascript:void(0);" data-bs-toggle="dropdown" role="button"
                       data-bs-auto-close="outside">
                        <img src="{{ asset('assets/images/avatar/1.png') }}" alt="user-image"
                             class="img-fluid user-avtar me-0"/>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end nxl-h-dropdown nxl-user-dropdown">
                        <div class="dropdown-header">
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('assets/images/avatar/1.png') }}" alt="user-image"
                                     class="img-fluid user-avtar"/>
                                <div>
                                    <h6 class="text-dark mb-0">Alexandra Della <span
                                            class="badge bg-soft-success text-success ms-1 d-none">PRO</span></h6>
                                    <span class="fs-12 fw-medium text-muted">alex.della@outlook.com</span>
                                </div>
                            </div>
                        </div>
                        <a href="javascript:void(0);" class="dropdown-item">
                            <i class="feather-user"></i>
                            <span>Profile Details</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="feather-log-out"></i>
                            <span>Logout</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!--! [End] Header Right !-->
    </div>
</header>
<!--! ================================================================ !-->
