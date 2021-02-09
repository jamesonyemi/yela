<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
		<meta name="Description" content="courier web app tracking parcels packages">
		<meta name="author" content="{!! config('app.company') !!}">
		<meta name="keywords" content="courier web app tracking parcels packages">

		<!-- Favicon -->
		<link rel="icon" href="{!! asset('app_assets/img/brand/favicon.ico') !!}" type="image/x-icon"/>

		<!-- Title -->
        <title> {!! config('app.name') !!}</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.2/tailwind.min.css">
		<!-- Font Awesome -->
		<link href="{!! asset('app_assets/plugins/fontawesome-free/css/all.min.css') !!}" rel="stylesheet">

		<!-- Bootstrap -->
		{{-- <link href="{!! asset('app_assets/plugins/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet"> --}}

		<!-- Ionicons -->
		<link href="{!! asset('app_assets/plugins/ionicons/css/ionicons.min.css') !!}" rel="stylesheet">

		<!-- Typicons -->
		<link href="{!! asset('app_assets/plugins/typicons.font/typicons.css') !!}" rel="stylesheet">

		<!-- Sidebar css -->
		<link href="{!! asset('app_assets/plugins/sidebar/sidebar.css') !!}" rel="stylesheet">

		<!-- Side menu css-->
		<link href="{!! asset('app_assets/plugins/sidemenu/sidemenu.css') !!}" rel="stylesheet">

		<!-- Custom Scroll bar-->
		<link href="{!! asset('app_assets/plugins/mscrollbar/jquery.mCustomScrollbar.css') !!}" rel="stylesheet"/>

		<!-- Prism Css -->
		<link href="{{ asset('app_assets/plugins/prism/prism.css') }}" rel="stylesheet">
		<!-- morris css -->
		<link href="{!! asset('app_assets/plugins/morris.js/morris.css') !!}" rel="stylesheet">

		<!--Bootstrap-daterangepicker css-->
		<link href="{!! asset('app_assets/plugins/bootstrap-daterangepicker/daterangepicker.css') !!}" rel="stylesheet" >

		<!-- Default Style -->
		<link href="{!! asset('app_assets/css/dashboard-two.css') !!}" rel="stylesheet">
		<link href="{!! asset('app_assets/css/dashboard-two-dark.css') !!}" rel="stylesheet">

		<!-- Icon Style -->
		<link href="{!! asset('app_assets/css/icons.css') !!}" rel="stylesheet">

		<!-- Lightslider Css -->
		<link href="{!! asset('app_assets/plugins/lightslider/css/lightslider.min.css') !!}" rel="stylesheet">

		<!--Crypto Css -->
		<link href="{!! asset('app_assets/plugins/cryptofont/css/cryptofont.min.css') !!}" rel="stylesheet">

		<!--Flag Css -->
		<link href="{!! asset('app_assets/plugins/flag-icon-css/css/flag-icon.min.css') !!}" rel="stylesheet">

        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.6.0/dist/alpine.js" defer></script>
        @yield('css-files')
    </head>
    <style>

@media only screen and (max-width: 760px), (min-device-width: 768px) and (max-device-width: 1024px)
{

    /* Force table to not be like tables anymore */
	#no-more-tables table{border: none;}
	#no-more-tables thead,
	#no-more-tables tbody,
	#no-more-tables th,
	#no-more-tables td,
	#no-more-tables tr {
		display: block;
        margin-top: 0.1rem;
        margin-bottom: -0.3rem;
	}

	/* Hide table headers (but not display: none;, for accessibility) */
	#no-more-tables thead tr {
		position: absolute;
		top: -9999px;
		left: -9999px;
	}

	#no-more-tables tr { border: 1px solid #ccc; }

	#no-more-tables td {
		/* Behave  like a "row" */
		border: none;
		border-bottom: 1px solid #eee;
		position: relative;
		padding-left: 50%;
		white-space: normal;
		text-align:left;

	}
    table {border: none;}

	#no-more-tables td:before {
		/* Now like a table header */
		position: absolute;
		/* Top/left values mimic padding */
		top: 6px;
		left: 6px;
		width: 45%;
		padding-right: 10px;
		white-space: nowrap;
		text-align:left;
		font-weight: bold;
	}

	/*
	Label the data
	*/
	#no-more-tables td:before { content: attr(data-title); }
}

 th { font-size: .75rem !important; }
 td { width: 100% !important; }

 .text-success-addon {
    color: #28a745 !important;
}

.text-secondary-addon {
    color: #c4cdd7 !important;
}
.bg-success-addon {
    background-color: #28a745 !important;
}

.bg-secondary-addon {
    background-color: #c4cdd7 !important;
}

.setting-dashboard {
   display:flex;
   align-items:center;
   justify-center:center;
   left:7%;
   position:relative;
   transform: translateX(3%);
   /* display: block;
    margin-left: auto;
    margin-right: auto */

}

.center-modal {
   display:flex;
   align-items:center;
   justify-center:center;
   left:40%;
   top:20%;
   position:relative;
   transform: translateX(1.5%);


}

@media only screen and (max-width:375px) {
    .setting-dashboard {
        display:flex;
        align-items:center;
        justify-center:center;
        left:7%;
        position:relative;
        transform: translateX(-7%);

    }

    .sm-center-modal {
        display:flex;
        align-items:center;
        justify-center:center;
        left: 0.8%;
        top:10%;
        position:relative;
        transform: translateX(-1.5%);

    }
}

</style>

<style>
    [x-cloak] {
        display: none !important;
     }
  </style>

<style>
    /* html,
    body {
      height: 100%;
    } */

    @media (min-width: 640px) {
      table {
        display: inline-table !important;
      }

      thead tr:not(:first-child) {
        display: none;
      }
    }

    td:not(:last-child) {
      border-bottom: 0;
    }

    th:not(:last-child) {
      border-bottom: 2px solid rgba(0, 0, 0, .1);
    }
  </style>

    <body class="main-body app sidebar-mini"  x-data="{ showModal1: false  }" :class="{'overflow-y-hidden': showModal1}"
    >



