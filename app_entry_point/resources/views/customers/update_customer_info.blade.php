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
     @include('partials.action_buttons', [

        'title' => 'Edit',
        'create_btn' => 'Add Customer',
        'routePage' =>  route('admin.customers.edit')

        ] )
    <!--Action Button-->
    <!--Main Content Container-->
    <div class="container-fluid">
        <!-- Row -->
        <div class="row row-sm">
           @include('livewire.customers.edit_form')
        </div>
        <!-- EndRow -->
    </div>
</div>

