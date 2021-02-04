@extends('layouts.master')
    @section('content-area')
        	<!--Main Content-->
		<div class="px-0 main-content app-content">
			<!-- main-header -->
            @include('partials.main_header')
			<!--/main-header-->
			@include('partials.mobile_header')
			<!--Main Content Header-->
			<div class="p-4 main-content-header container-fluid">
				<div>
					<h6 class="main-content-title tx-18 mg-b-5 mg-t-7">Welcome to Dashboard</h6>
				</div>
				<div class="btn-list">
					<a href="{!! route('admin.delivery-status.index') !!}" class="btn btn-rounded btn-primary"><i class="mr-2 fe fe-settings"></i>Settings</a>
					{{-- <a href="#" class="btn btn-rounded btn-outline-primary dropdown-toggle" data-toggle="dropdown">
						<i class="mr-2 fe fe-settings"></i>Settings<span class="caret"></span>
					</a>
					<div class="dropdown-menu" role="menu">
						<a class="dropdown-item" href="#"><i class="mr-2 fe fe-mail"></i>Email</a>
						<a class="dropdown-item" href="#"><i class="mr-2 fe fe-printer"></i>Print</a>
						<a class="dropdown-item" href="#"><i class="mr-2 fe fe-copy"></i>Copy</a>
						<a class="dropdown-item" href="#"><i class="mr-2 fe fe-edit"></i>Edit</a>
					</div> --}}
				</div>
			</div>
			<!--Main Content Header-->

			<!--Main Content Container-->
            @include('partials.main_content_container')
            <!--Main Content Container-->
		</div>
		<!--Main Content-->
    @endsection

