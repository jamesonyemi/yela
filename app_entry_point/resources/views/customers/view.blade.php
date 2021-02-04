@extends('layouts.master')
    @section('css-files')
      <!-- Data table css -->
        <link href="{!! asset('app_assets/plugins/datatable/css/dataTables.bootstrap4.min.css') !!}" rel="stylesheet" />
        <link rel="stylesheet" href="{!! asset('app_assets/plugins/datatable/css/buttons.bootstrap4.min.css') !!}">
        <link href="{!! asset('app_assets/plugins/datatable/responsive.bootstrap4.min.css') !!}" rel="stylesheet" />
        @endsection
    @section('content-area')
     	<!--Main Content-->
         <!-- main-header -->
         @include('partials.main_header')
         <!--/main-header-->
         @include('partials.mobile_header')

         <!--Main Content Header-->

         <!--Main Content Container-->
         <div>
            <div class="container-fluid">
                <!--Main Content-->
                <div class="px-0 main-content app-content">
                    <div class="mb-1 bg-white navbar navbar-expand-lg responsive-navbar navbar-dark d-md-none">
        <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
            <div class="ml-auto d-flex order-lg-2">
                <div class="main-header-fullscreen fullscreen-button">
                    <a href="#" class="header-link">
                        <i class="header-icons" data-eva="expand-outline"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Header -->

    <!--Action Button-->
    @include('customers.action_buttons')
    <!--Action Button-->

    <!--Main Content Container-->
    <div class="container-fluid">
        <!-- Row -->
        <div class="row row-sm">
            @include('customers.view_cust_info')
        </div>
        <!-- EndRow -->
    </div>
</div>


    </div>
    <!--Main Content Container-->
</div>
@endsection

@section('js-files')
    @include('partials.datatableScripts')
@endsection


