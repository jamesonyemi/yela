<div  id="exampleModal" class="container" tabindex="-1"  >
    <div class="modal-dialog modal-xl">
      <div class="modal-content modal-content-demo">
              <div class="mb-2 modal-header">
                  <h6 class="modal-title">
                      <i class="mx-2 fas fa-truck text-primary"></i>
                  </h6>

              </div>
              <div class="modal-body">
                  <form action="{{ route('admin.dispatch-rider.update', Crypt::encrypt($rider->rider_id)) }}" id="rider-form" method="POST" >
                      @csrf
                      @method("PUT")
                      <div class="row">
                          <div class="mx-auto col-md-12 col-lg-12 col-xl-12 d-block ml">
                              <div class="flex border shadow-none card card-body col-12">
                                  <div class="form-group">
                                      <div class="row row-sm">
                                          <div class="col-sm-6">
                                          <label class="main-content-label tx-11 tx-medium tx-gray-900">First Name</label>
                                          <input
                                             id="first_name" name="first_name" type="text" value="{{ old('first_name', $rider->first_name) }}"
                                             wire:model.lazy="first_name" id="first_name" name="first_name"
                                             class="{{ empty($rider->first_name) ? "form-control border-info" : "form-control border-success is-valid" }}
                                             @error('first_name') is-invalid  @enderror "
                                              placeholder="" required >
                                              <div class="invalid-feedback ">
                                                  @error('first_name') <span class="error">{{ $message }}</span> @enderror
                                              </div>
                                          </div>
                                  <div class="col-sm-6">
                                      <label class="main-content-label tx-11 tx-medium tx-gray-900">Middle Name</label>
                                      <input value="{{ old('middle_name', $rider->middle_name) }}"
                                      wire:model.lazy="middle_name" id="middle_name" name="middle_name" type="text"
                                      class="{{ empty($rider->middle_name) ? "form-control border-info" : "form-control border-success is-valid" }}
                                      @error('middle_name') is-invalid  @enderror "
                                      placeholder="" required
                                      required="" >
                                  <div class="invalid-feedback ">
                                      @error('middle_name') <span class="error">{{ $message }}</span> @enderror
                                  </div>
                                  </div>
                              </div>
                              </div>
                              <div class="form-group">
                                  <div class="row row-sm">
                                      <div class="col-sm-6">
                                      <label class="main-content-label tx-11 tx-medium tx-gray-900">Last Name</label>
                                      <input value="{{ old('last_name', $rider->last_name) }}"
                                         id="last_name" name="last_name" type="text"
                                         wire:model.lazy="last_name" id="last_name" name="last_name"
                                         class="{{ empty($rider->last_name) ? "form-control border-info" : "form-control border-success is-valid" }}
                                         @error('last_name') is-invalid  @enderror "
                                          placeholder="" required >
                                          <div class="invalid-feedback ">
                                              @error('last_name') <span class="error">{{ $message }}</span> @enderror
                                          </div>
                                      </div>
                              <div class="col-sm-6">
                                  <label class="main-content-label tx-11 tx-medium tx-gray-900">Email</label>
                                  <input value="{{ old('email', $rider->email) }}"
                                  wire:model.lazy="email" id="email" name="email" type="email"
                                  class="{{ empty($rider->email) ? "form-control border-info" : "form-control border-success is-valid" }}
                                  @error('email') is-invalid  @enderror "
                                  placeholder="" required
                                  required="" >
                              <div class="invalid-feedback ">
                                  @error('email') <span class="error">{{ $message }}</span> @enderror
                              </div>
                              </div>
                          </div>
                          </div>

                              <div class="form-group">
                                  <div class="row row-sm">
                                      <div class="col-sm-6">
                                          <label class="main-content-label tx-11 tx-medium tx-gray-900">Mobile Number</label>
                                          <input value="{{ old('mobile_number', $rider->mobile_number) }}"
                                          maxLength=15
                                          wire:model.lazy="mobile_number" id="mobile_number" name="mobile_number" type="tel"
                                          class="{{ empty($rider->mobile_number) ? "form-control border-info" : "form-control border-success is-valid" }}
                                          @error('mobile_number') is-invalid  @enderror "
                                          placeholder="" required
                                          required="" >
                                          <div class="invalid-feedback ">
                                              @error('mobile_number') <span class="error">{{ $message }}</span> @enderror
                                          </div>
                                      </div>
                                  <div class="col-sm-6">
                                      <label class="main-content-label tx-11 tx-medium tx-gray-900">Residential Address</label>
                                      <div class="row">
                                          <div class="col-lg-12 col-md-12 col-sm-12">
                                              <input value="{{ old('residential_addr', $rider->address_1) }}"
                                              maxLength=15
                                              wire:model.lazy="residential_address" id="residential_address" name="residential_address" type="tel"
                                              class="{{ empty($rider->address_1) ? "form-control border-info" : "form-control border-success is-valid" }}
                                              @error('residential_address') is-invalid  @enderror "
                                              placeholder="" required
                                              required="" >
                                          <div class="invalid-feedback ">
                                              @error('residential_address') <span class="error">{{ $message }}</span> @enderror
                                          </div>
                                          </div>
                                      </div>
                                      </div>
                                  </div>
                              </div>

                              </div>
                          </div>
                      </div>
                      <div class="mt-4 modal-footer">
                          <button class="btn btn-indigo" type="submit">Save Changes</button>
                      </div>
                  </form>
              </div>
          </div>
    </div>
  </div>

   <!--Main Content-->


