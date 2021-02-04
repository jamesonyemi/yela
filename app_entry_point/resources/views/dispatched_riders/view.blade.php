<div  id="exampleModal" class="container" tabindex="-1"  >
    <div class="modal-dialog modal-xl">
      <div class="modal-content modal-content-demo">
              <div class="mb-2 modal-header">
                  <h6 class="modal-title">
                      <i class="mx-2 fas fa-truck text-primary"></i>

                  </h6>

              </div>
              <div class="modal-body">
                  <form >
                      <div class="row">
                          <div class="mx-auto col-md-12 col-lg-12 col-xl-12 d-block ml">
                              <div class="flex border shadow-none card card-body col-12">
                                  <div class="form-group">
                                      <div class="row row-sm">
                                          <div class="col-sm-6">
                                          <label class="main-content-label tx-11 tx-medium tx-gray-900">First Name</label>
                                          <input
                                             id="first_name" name="first_name" type="text" value="{{ $rider->first_name }}"
                                             wire:model.lazy="first_name" id="first_name" name="first_name"
                                             class="cursor-not-allowed form-control border-info" disabled >
                                          </div>
                                  <div class="col-sm-6">
                                      <label class="main-content-label tx-11 tx-medium tx-gray-900">Middle Name</label>
                                      <input value="{{ $rider->middle_name }}"
                                      wire:model.lazy="middle_name" id="middle_name" name="middle_name" type="text"
                                      class="cursor-not-allowed form-control border-info" disabled >
                                  </div>
                              </div>
                              </div>
                              <div class="form-group">
                                  <div class="row row-sm">
                                      <div class="col-sm-6">
                                      <label class=" main-content-label tx-11 tx-medium tx-gray-900">Last Name</label>
                                          <input value="{{ $rider->last_name }}"
                                      wire:model.lazy="last_name" id="last_name" name="last_name" type="text"
                                      class="cursor-not-allowed form-control border-info" disabled >
                                      </div>
                              <div class="col-sm-6">
                                  <label class="main-content-label tx-11 tx-medium tx-gray-900">Email</label>
                                  <input value="{{ $rider->email }}"
                                      wire:model.lazy="email" id="email" name="email" type="text"
                                      class="cursor-not-allowed form-control border-info" disabled >
                              </div>
                          </div>
                          </div>

                              <div class="form-group">
                                  <div class="row row-sm">
                                      <div class="col-sm-6">
                                          <label class="main-content-label tx-11 tx-medium tx-gray-900">Mobile Number</label>
                                          <input value="{{ $rider->mobile_number }}"
                                      wire:model.lazy="mobile_number" id="mobile_number" name="mobile_number" type="text"
                                      class="cursor-not-allowed form-control border-info" disabled >
                                      </div>
                                  <div class="col-sm-6">
                                      <label class="main-content-label tx-11 tx-medium tx-gray-900">Residential Address</label>
                                      <div class="row">
                                          <div class="col-lg-12 col-md-12 col-sm-12">
                                            <input value="{{ $rider->address_1 }}"
                                            wire:model.lazy="address_1" id="address_1" name="address_1" type="text"
                                            class="cursor-not-allowed form-control border-info" disabled >
                                          </div>
                                      </div>
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

   <!--Main Content-->


