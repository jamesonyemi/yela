@if (session()->has('message'))
<div class="alert alert-success alert-avatar">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <span class="main-avatar avatar-sm cover-image"><i class="fa fa-bell" aria-hidden="true"></i></span>
    {{ session('message') }}
</div>
@endif
<div  id="exampleModal" class="container" tabindex="-1"  >
<div class="modal-dialog modal-xl">
<div class="modal-content modal-content-demo">
        <div class="mb-2 modal-header">
            <h6 class="modal-title">View Customer Info</h6>

        </div>
        <div class="modal-body">
            <form action="{{ route('admin.customers.update', $customer->cust_id) }}" id="cust-form" method="POST" >
                @csrf
                @method("PUT")
                <div class="row">
                    <div class="mx-auto col-md-12 col-lg-12 col-xl-12 d-block ml">
                        <div class="flex border shadow-none card card-body col-12">
                            <div class="form-group">
                                <div class="row row-sm">
                                    <input type="hidden" wire:model="selected_id">
                                    <div class="col-sm-6">
                                        <label class="main-content-label tx-11 tx-medium tx-gray-900">Customer Name</label>
                                        <input
                                        id="customer_name" name="customer_name"
                                        type="text" value="{{ $customer->customer_name }}"
                                        wire:model.lazy="customer_name" id="customer_name" name="customer_name" disabled
                                        class="form-control border-info" >
                                    </div>
                            <div class="mxt-3 col-sm-6">
                                <label class="main-content-label tx-11 tx-medium tx-gray-900">Phone Number</label>
                                <input
                                maxLength="15"
                                wire:model.lazy="phone_number" id="phone_number" name="phone_number" type="tel"
                                value="{{ $customer->phone_number }}"
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
                                    <div class="col-sm-6">
                                <label class="main-content-label tx-11 tx-medium tx-gray-900">Employee Size</label>
                                <input
                                wire:model.lazy="company_size" id="company_size" name="company_size" type="text"
                                value="{{ $customer->company_size }}"
                                class="form-control border-info" disabled
                               >
                            </div>
                            <div class="col-sm-6">
                                <label class="main-content-label tx-11 tx-medium tx-gray-900">Contact Person</label>
                                <input
                                wire:model.lazy="contact_person" id="contact_person" name="contact_person"
                                type="text" value="{{ $customer->contact_person}}"
                                class="form-control border-info"  disabled>

                            </div>
                        </div>
                        </div>
                        <div class="form-group">
                            <div class="row row-sm">
                                <div class="col-sm-6">
                                    <label class="main-content-label tx-11 tx-medium tx-gray-900">Country</label>
                                    <select id="inputCountry" name="inputCountry" class="form-control custom-select">
                                    <option selected>Choose...</option>
                                    <option>...</option>
                            </select>
                                </div>
                            <div class="col-sm-6">
                                <label class="main-content-label tx-11 tx-medium tx-gray-900">State / Region</label>
                                <select id="inputState" name="inputState" class="form-control custom-select">
                                    <option selected>Choose...</option>
                                    <option>...</option>
                            </select>
                            </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row row-sm">
                                <div class="col-sm-6">
                                    <label class="main-content-label tx-11 tx-medium tx-gray-900">City</label>
                                    <select id="inputCity" name="inputCity" class="form-control custom-select">
                                        <option selected>Choose...</option>
                                        <option>...</option>
                                    </select>
                                </div>
                                <div class="col-sm-6">
                                    <label class="main-content-label tx-11 tx-medium tx-gray-900">Zip Code</label>
                                        <input class="border-info form-control" disabled type="text"
                                        id="inputZipCode" name="inputZipCode" value="{{ $customer->zip_code }}"
                                        >
                                </div>
                        </div>
                        </div>

                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
