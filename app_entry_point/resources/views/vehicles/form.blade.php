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
                    <a href="{{ route('admin.customers.create') }}" class="btn btn-rounded btn-primary"><i class="mr-2 fe fe-plus-circle"></i>New Customer</a>
                    <a href="#" class="btn btn-rounded btn-outline-primary dropdown-toggle" data-toggle="dropdown">
                        <i class="mr-2 fe fe-download"></i>Download<span class="caret"></span>
                    </a>
                    <div class="dropdown-menu" role="menu">
                        <a class="dropdown-item" href="#"><i class="mr-2 fe fe-mail"></i>Email</a>
                        <a class="dropdown-item" href="#"><i class="mr-2 fe fe-printer"></i>Print</a>
                        <a class="dropdown-item" href="#"><i class="mr-2 fe fe-copy"></i>Copy</a>
                        <a class="dropdown-item" href="#"><i class="mr-2 fe fe-edit"></i>Edit</a>
                    </div>
                </div>
            </div>
    <!--Main Content Header-->

    <!--Main Content Container-->
    <div class="container-fluid">
        <!-- Row -->
        <div class="row row-sm">
            @livewire('customers.form')
            <livewire:counter />
            
        </div>
        <!-- EndRow -->
    </div>
</div>
<!--Row -->
<div class="row row-sm">
    <div class="col-md-12">
        <div class="card mg-b-10">
            <div class="card-body">
                <div class="main-content-label mg-b-5">
                    Basic Wizard With Validation
                </div>
                <p class="mg-b-20">It is Very Easy to Customize and it uses in your website apllication.</p>
                <div id="wizard2">
                    <h3>Personal Information</h3>
                    <section>
                        <p class="mg-b-20">Try the keyboard navigation by clicking arrow left or right!</p>
                        <div class="row row-sm">
                            <div class="col-md-5 col-lg-4">
                                <label class="form-control-label">Firstname: <span class="tx-danger">*</span></label> <input class="form-control" id="firstname" name="firstname" placeholder="Enter firstname" required="" type="text">
                            </div>
                            <div class="col-md-5 col-lg-4 mg-t-20 mg-md-t-0">
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
<!--/Row-->

	