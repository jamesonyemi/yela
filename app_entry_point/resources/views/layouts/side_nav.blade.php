<!--App Sidebar-->
		<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
		<aside class="app-sidebar">
			<div class="side-header">
                {{-- <a class="main-logo desktop-logo" href="index.html"><img src=" {{ asset('app_assets/img/brand/logo-2.png') }} " alt="logo"></a> --}}
                <a class="main-logo desktop-logo" href="#"> <span class="ml-5 text-center col-12"> {{ config('app.name') }} </span></a>
				<a class="main-logo mobile-logo" href="index.html"><img src="{{ asset('app_assets/img/brand/icon-2.png') }} " alt="logo"></a>
				<a class="main-logo dark-theme-logo" href="index.html"><img src="{{ asset('app_assets/img/brand/logo-2-dark.png') }} " alt="logo"></a>
				<!-- sidebar-toggle-->
				<div class="app-sidebar__toggle" data-toggle="sidebar">
					<a class="open-toggle" href="#"><i class="header-icons" data-eva="menu-outline"></i></a>
					<a class="close-toggle" href="#"><i class="header-icons" data-eva="close-outline"></i></a>
				</div>
			</div>
			<!--/logo-->

			<div class="clearfix app-sidebar__user ">
				<div class="dropdown user-pro-body">
					<div class="float-right sideuser-img">
                        <img src="{{ asset('app_assets/img/users/male/2.jpg') }}" alt="user image" class="mCS_img_loaded">
                        {{-- <img src="{{ url('storage/' . $rider->photo_url) }}" alt="user image" class="mCS_img_loaded"> --}}
					</div>
					<div class="user-info">
						<h2 class="app-sidebar__user-name">Peter Hill
							<i class="ml-1 fe fe-check-circle text-success tx-11"></i>
						</h2>
						<span class="app-sidebar__title">Administrator</span>
					</div>
				</div>
			</div>
			<ul class="side-menu">
				<li class="slide slide-item-main">
					<a class="side-menu__item" href=" {{ url('/') }} "><i class="side-menu__icon" data-eva="monitor-outline"></i><span class="side-menu__label">Dashboard</span></a>
				</li>
				<li class="slide">
					<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon" data-eva="file-text-outline"></i><span class="side-menu__label">Pages</span><i class="angle fe fe-chevron-down"></i></a>
					<ul class="slide-menu">
                        <li><a class="slide-item" href="{{ route('admin.dispatch-rider.index') }}">
                            <i class="fas fa-truck tx-20 text-primary"></i>
                            <span class="mt-2 ml-2">{!! __('Dispatch Riders') !!}</span>
                            </a></li>
                        <li><a class="slide-item" href="insurance.html">
                            <i class="fas fa-user-shield tx-20 text-primary"></i>
                            <span class="mt-2 ml-2">{!! __('Insurance') !!} </span>
                            </a></li>
                        <li><a class="slide-item" href="roles.html">
                            <i class="fas fa-user-tag tx-20 text-primary"></i>
                            <span class="mt-2 ml-2">{!! __('Roles') !!}</span>
                            </a></li>
                            <hr>
                        <li><a class="slide-item" href="location.html">
                            <i class="fas fa-map-marked tx-20 text-primary"></i>
                            <span class="mx-2 mt-2">{!! __('Location') !!}</span>
                            </a></li>
                        <li><a class="slide-item" href="charges.html">
                            <i class="fas fa-credit-card tx-20 text-primary"></i>
                            <span class="mt-2 ml-2">{!! __('Charges') !!}</span>
                            </a></li>
                        <li><a class="slide-item" href="{{ route('admin.customers.index') }}">
                            <i class="fas fa-id-card-alt tx-20 text-primary"></i>
                            <span class="mt-2 ml-2"> {!! __(' Customer') !!}</span>
                            </a></li>
                            <li><a class="slide-item" href="industry.html">
                            <i class="mr-1 fas fa-industry tx-20 text-primary"></i>
                            <span class="mt-2 ml-2 ">{!! __('Industry') !!}</span>
                            </a></li>
                        <li><a class="slide-item" href="item-type.html">
                            <i class="fas fa-shopping-cart tx-20 text-primary"></i>
                            <span class="mt-2 ml-2 ">{!! __(' Item Type') !!}</span>
                            </a></li>
					</ul>
				</li>
			</ul>
		</aside>
		<!--/App Sidebar-->
