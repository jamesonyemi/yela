@extends('layouts.master')
    @section('css-files')
        @endsection
    @section('content-area')
     	<!--Main Content-->
         <!-- main-header -->
         @include('partials.main_header')
         <!--/main-header-->
         @include('partials.mobile_header')

         <!--Main Content Header-->

         <!--Main Content Container-->
         <div class="mt-5">
            <div class="container-fluid">
                @include('vehicles.all')
             </div>
            <!--Main Content Container-->
		</div>
		<!--Main Content-->

@endsection

@section('js-files')
    @include('partials.datatableScripts')
@endsection


