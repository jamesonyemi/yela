<div class="main-header">
    <div class="container-fluid">
        <div class="main-header-center d-none d-lg-flex">
            <div class="dropdown main-header-app">
                <div class="new header-link d-flex">
                    <i class="header-icons" data-eva="grid-outline"></i>
                    <div class="ml-1 fs-14 header-subtext text-dark">
                        <div class="dropdown">

                          </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-header-right d-none d-md-flex">
            <div class="dropdown main-header-flags d-none d-md-flex">


            </div>
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

            <div class="dropdown main-profile-menu">
                <a class="main-img-user" href="" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img alt="" src="{!!asset('app_assets/img/users/male/2.jpg') !!}">
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
                    <a class="dropdown-item" href="{!! route('admin.delivery-status.index') !!}"><i class="si si-settings"></i> Settings</a>
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
    @include('partials.alerts')
    
</div>
