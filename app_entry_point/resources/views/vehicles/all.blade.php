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
    <!--Page Section Title-->
    @include('partials.section_title', ['section_title' => 'All Vehicles', 'text_position' => 'left'])
    <!--Page Section Title-->

    <!--Main Content Container-->
    <div class="container-fluid ">
        <!-- Row -->
        <div class="row row-sm">
            @include('partials.modal_action_button')
            @include('vehicles.display_vehicles')
        </div>
        <!-- EndRow -->
    </div>
</div>

<!-- Modal2 -->
<div
x-cloak
class="fixed inset-0 z-20 w-full h-full overflow-y-auto duration-300 bg-black bg-opacity-50"
x-show="showModal2"
x-transition:enter="transition duration-300"
x-transition:enter-start="opacity-0"
x-transition:enter-end="opacity-100"
x-transition:leave="transition duration-300"
x-transition:leave-start="opacity-100"
x-transition:leave-end="opacity-0"
>
<div class="relative mx-2 opacity-100 lg:-my-20 sm:w-3/4 md:w-1/2 lg:w-1/3 sm:mx-auto center-modal sm-center-modal">
  <div
    class="relative z-20 justify-center text-gray-900 bg-white rounded-lg shadow-lg lg:flex-row lg:-ml-20"
    @click.away="showModal2 = false"
    x-show="showModal2"
    x-transition:enter="transition transform duration-300"
    x-transition:enter-start="scale-0"
    x-transition:enter-end="scale-100"
    x-transition:leave="transition transform duration-300"
    x-transition:leave-start="scale-100"
    x-transition:leave-end="scale-0"
  >
  <div class="row row-sm">
    <div class="col-md-12">
        <div class="card mg-b-10">
            <div class="card-body">
                <div class="main-content-label mg-b-5">
                    Create A New Vehicle
                </div>
                <p class="mg-b-20">The Information provided will help you keep track of all vehicle within your company.</p>
                <div id="wizard2">
                    <h3>Personal Information</h3>
                    <section>
                        <p class="mg-b-20">Please provided accurate data where it is required!</p>
                        <div class="row row-sm">
                            <div class="col-md-5 col-lg-6">
                                <label class="form-control-label">Firstname: <span class="tx-danger">*</span></label> <input class="form-control" id="firstname" name="firstname" placeholder="Enter firstname" required="" type="text">
                            </div>
                            <div class="col-md-5 col-lg-6 mg-t-20 mg-md-t-0">
                                <label class="form-control-label">Lastname: <span class="tx-danger">*</span></label> <input class="form-control" id="lastname" name="lastname" placeholder="Enter lastname" required="" type="text">
                            </div>
                        </div>
                    </section>
                    <h3>Billing Information</h3>
                    <section>
                        <p>Wonderful transition effects.</p>
                        <div class="form-group wd-xs-300">
                            <label class="form-control-label">Email: <span class="tx-danger">*</span></label> <input class="form-control" id="email" name="email" placeholder="Enter email address" required="" type="email">
                        </div>
                    </section>
                    <h3>Payment Details</h3>
                    <section>
                        <div class="form-group">
                            <label class="form-label" >CardHolder Name</label>
                            <input type="text" class="form-control" id="name11" placeholder="First Name">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Card number</label>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for...">
                                <span class="input-group-append">
                                    <button class="btn btn-info" type="button"><i class="fab fa-cc-visa"></i> &nbsp; <i class="fab fa-cc-amex"></i> &nbsp;
                                    <i class="fab fa-cc-mastercard"></i></button>
                                </span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-8">
                                <div class="form-group mb-sm-0">
                                    <label class="form-label">Expiration</label>
                                    <div class="input-group">
                                        <input type="number" class="form-control" placeholder="MM" name="expiremonth">
                                        <input type="number" class="form-control" placeholder="YY" name="expireyear">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 ">
                                <div class="mb-0 form-group">
                                    <label class="form-label">CVV <i class="fa fa-question-circle"></i></label>
                                    <input type="number" class="form-control" required="">
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>

  </div>
</div>
</div>

{{--  @include('customers.form_modal')  --}}
{{--  @include('customers.edit')  --}}
{{--  @include('customers.view_modal')  --}}
<!--Main Content-->
