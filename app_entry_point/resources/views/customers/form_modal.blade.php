@if (session()->has('message'))
    <div class="alert alert-success alert-avatar">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <span class="main-avatar avatar-sm cover-image"><i class="fa fa-bell" aria-hidden="true"></i></span>
        {{ session('message') }}
    </div>
@endif
<div wire:ignore.self id="exampleModal" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content modal-content-demo">
            <div class="mb-2 modal-header">
                <h6 class="modal-title">Create New Customer</h6>
                <button aria-label="Close" class="close text-danger" data-dismiss="modal" type="button"><span aria-hidden="true" class="text-danger">&times;</span></button>
            </div>
            <div class="modal-body">
                <form wire.prevent id="cust-form" method="POST" action="{{ route('admin.customers.store') }}">
                    @csrf
                    <div class="row">
                        <div class="mx-auto col-md-12 col-lg-12 col-xl-12 d-block">
                            <div class="border shadow-none card card-body">
                                <h5 class="card-title mg-b-20">Your Customer Details</h5>
                                <div class="form-group">
                                    <div class="row row-sm">
                                        <div class="col-6">
                                        <label class="main-content-label tx-11 tx-medium tx-gray-900">Customer Name</label>
                                        <input
                                            maxLength="15"
                                           id="customer_name" name="customer_name" type="text"
                                            class=" form-control border-info
                                             @error('customer_name') is-invalid  @enderror"
                                            placeholder="" required >
                                        </div>
                                            <div class="invalid-feedback ">
                                                @error('customer_name') <span class="error">{{ $message }}</span> @enderror
                                            </div>
                                <div class="col-6">
                                    <label class="main-content-label tx-11 tx-medium tx-gray-900">Phone Number</label>
                                    <input maxLength="15"
                                    wire:model="phone_number" id="phone_number" name="phone_number" type="tel"
                                    class="{{ empty($phone_number) ? "form-control border-info" : "form-control border-success is-valid" }}
                                    @error('phone_number') is-invalid  @enderror "
                                    placeholder="" required
                                    required="" >
                                <div class="invalid-feedback ">
                                    @error('phone_number') <span class="error">{{ $message }}</span> @enderror
                                </div>
                                </div>
                            </div>
                            </div>
                            <div class="form-group">
                                    <div class="row row-sm">
                                        <div class="col-6">
                                    <label class="main-content-label tx-11 tx-medium tx-gray-900">Employee Size</label>
                                    <input maxLength="15"
                                    wire:model="company_size" id="company_size" name="company_size" type="text"
                                    class="{{ empty($company_size) ? "form-control border-info" : "form-control border-success is-valid" }}
                                    @error('company_size') is-invalid  @enderror "
                                    placeholder="" required
                                    required="" >
                                </div>
                                    <div class="invalid-feedback ">
                                        @error('company_size') <span class="error">{{ $message }}</span> @enderror
                                    </div>
                                <div class="col-6">
                                    <label class="main-content-label tx-11 tx-medium tx-gray-900">Contact Person</label>
                                    <input maxLength="15"
                                    wire:model="contact_person" id="contact_person" name="contact_person" type="text"
                                    class="{{ empty($contact_person) ? "form-control border-info" : "form-control border-success is-valid" }}
                                    @error('contact_person') is-invalid  @enderror "
                                    placeholder="" required
                                    required="" >
                                <div class="invalid-feedback ">
                                    @error('contact_person') <span class="error">{{ $message }}</span> @enderror
                                </div>
                                </div>
                            </div>
                            </div>
                            <div class="form-group">
                                <div class="row row-sm">
                                    <div class="col-4">
                                        <label class="main-content-label tx-11 tx-medium tx-gray-900">Country</label>
                                        <select id="inputCountry" name="inputCountry" class="form-control custom-select">
                                        <option selected>Choose...</option>
                                        <option>...</option>
                                  </select>
                                    </div>
                                <div class="col-4">
                                    <label class="main-content-label tx-11 tx-medium tx-gray-900">State / Region</label>
                                    <select id="inputState" name="inputState" class="form-control custom-select">
                                        <option selected>Choose...</option>
                                        <option>...</option>
                                  </select>
                                </div>
                                <div class="col-4">
                                    <div class="row">
                                        <div class="col-6">
                                            <label class="main-content-label tx-11 tx-medium tx-gray-900">City</label>
                                            <select id="inputCity" name="inputCity" class="form-control custom-select">
                                                <option selected>Choose...</option>
                                                <option>...</option>
                                          </select>
                                        </div>
                                        <div class="col-6">
                                            <label class="main-content-label tx-11 tx-medium tx-gray-900">Zip Code</label>
                                                <input class="form-control" required="" type="text" d="inputZipCode" name="inputZipCode" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>

                            </div>
                        </div>
                    </div>
                    <div class="mt-4 modal-footer">
                        <button class="btn btn-indigo" type="submit"
                        >Save changes</button>
                        <button class="btn btn-outline-light" type="button" data-dismiss="modal"
                            onClick="reset()"
                        >Close</button>
                    </div>
                </form>
            </div>
        </div>
  </div>
</div>
