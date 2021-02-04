<!-- Mobile Header -->
<div class="mobile-header">
    <div class="container">
        <div class="d-flex">
            <!--logo-->
            <div class="mobileheader-logo">
                <div class="app-sidebar__toggle mobile-toggle" data-toggle="sidebar">
                    <a class="open-toggle" href="#">
                        <i class="header-icons" data-eva="open-outline"></i>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="eva eva-menu-outline header-icons"><g data-name="Layer 2"><g data-name="menu"><rect width="24" height="24" transform="rotate(180 12 12)" opacity="0"></rect><rect x="3" y="11" width="18" height="2" rx=".95" ry=".95"></rect><rect x="3" y="16" width="18" height="2" rx=".95" ry=".95"></rect><rect x="3" y="6" width="18" height="2" rx=".95" ry=".95"></rect></g></g></svg></a>
                    <a class="close-toggle" href="#"><i class="header-icons" data-eva="close-outline"></i>
                        <a class="close-toggle" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="eva eva-close-outline header-icons"><g data-name="Layer 2"><g data-name="close"><rect width="24" height="24" transform="rotate(180 12 12)" opacity="0"></rect><path d="M13.41 12l4.3-4.29a1 1 0 1 0-1.42-1.42L12 10.59l-4.29-4.3a1 1 0 0 0-1.42 1.42l4.3 4.29-4.3 4.29a1 1 0 0 0 0 1.42 1 1 0 0 0 1.42 0l4.29-4.3 4.29 4.3a1 1 0 0 0 1.42 0 1 1 0 0 0 0-1.42z"></path></g></g></svg></a>
                    </a>
                </div>
                <a class="main-logo desktop-logo" href="index.html"><img src="{{ asset('app_assets/img/brand/logo-2.png') }}" alt="logo"></a>
                <a class="main-logo dark-theme-logo" href="index.html"><img src="{{ asset('app_assets/img/brand/logo-2-dark.png') }}" alt="logo"></a>
            </div>
            <!--/logo-->
            <div class="ml-auto d-flex order-lg-2 header-right-icons">
                <a href="" class="navbar-toggler navresponsive-toggler d-md-none header-link" data-toggle="collapse" data-target="#navbarSupportedContent-4"
                    aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"><i class="header-icons" data-eva="more-horizontal-outline"></i></span>
                </a>
            </div>
            <div class="dropdown main-profile-menu">
                <a class="main-img-user" href="" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img alt="" src="{!! asset('app_assets/img/users/male/2.jpg') !!}">
                </a>
                <div class="dropdown-menu">
                    <div class="main-header-profile">
                        <h6>Peter Hill</h6>
                        <span>Administrator</span>
                    </div>
                    <a class="dropdown-item" href="#"><i class="si si-user"></i> Profile</a>
                    <a class="dropdown-item" href="#"><i class="si si-envelope-open"></i> Inbox</a>
                    <a class="dropdown-item" href="#"><i class="si si-calendar"></i> Activity</a>
                    <a class="dropdown-item" href="#"><i class="si si-bubbles"></i> Chat</a>
                    <a class="dropdown-item" href="#"><i class="si si-settings"></i> Settings</a>
                    <a class="dropdown-item" href="#"><i class="si si-power"></i> Logo Out</a>
                </div>
            </div>
            <div class="main-header-sidebar-notification">
                <a href="#" class="header-link" data-toggle="sidebar-right" data-target=".sidebar-right">
                    <i class="header-icons" data-eva="options-2-outline"></i>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="mb-1 bg-white navbar navbar-expand-lg responsive-navbar navbar-dark d-md-none">
    <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
        <div class="ml-auto d-flex order-lg-2">
            <div class="main-header-fullscreen fullscreen-button">
                <a href="#" class="header-link">
                    <i class="header-icons" data-eva="expand-outline"></i>
                </a>
            </div>
            <div class="dropdown main-header-search">
                <a class="new header-link" href="">
                    <i class="header-icons" data-eva="search-outline"></i>
                </a>
                <div class="dropdown-menu">
                    <div class="p-2 main-form-search">
                        <input class="form-control" placeholder="Search here..." type="search">
                        <button class="btn"><i class="fe fe-search"></i></button>
                    </div>
                </div>
            </div>

        </div>
    </div>
    @include('partials.alerts')
</div>
<!-- Mobile Header -->
