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

    <!--Main Content Header-->
    <div class="p-4 main-content-header container-fluid">
                <div>
                    {{-- <h6 class="text-center main-content-title tx-18 mg-b-5 mg-t-7">Customers</h6> --}}
                </div>
                <div class="btn-list">
                    <a href="{{ URL::previous() }}" class="btn btn-rounded btn-primary">
                        <i class="pr-2 fas fa-long-arrow-alt-left"></i>Back</a>
                    {{-- <a href="#" class="btn btn-rounded btn-outline-primary dropdown-toggle" data-toggle="dropdown">
                        <i class="mr-2 fe fe-download"></i>Download<span class="caret"></span>
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
    <div class="container-fluid">
        <!-- Row -->
        @include('partials.section_title', ['section_title' => "View Dispatch Rider Info" ])
        <div class="row row-sm">
            @include('dispatched_riders.view')
        </div>
        <!-- EndRow -->
    </div>
</div>

