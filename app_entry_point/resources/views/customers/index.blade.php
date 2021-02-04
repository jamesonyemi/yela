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
                @include('customers.all')

             </div>
            <!--Main Content Container-->
		</div>
		<!--Main Content-->

@endsection

@section('js-files')
    @include('partials.datatableScripts')

@endsection


