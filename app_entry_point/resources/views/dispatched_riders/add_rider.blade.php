<div  id="exampleModal" class="container" tabindex="-1"  >
    <div class="modal-dialog modal-xl">
      <div class="modal-content modal-content-demo">
              <div class="mb-2 modal-header">
                  <h6 class="modal-title">
                      <i class="mx-2 fas fa-truck text-primary"></i>
                      {{-- {{ ddd($dispatch_rider) }} --}}
                  </h6>

              </div>
              <div class="modal-body">
                  <form action="{{ route('admin.dispatch-rider.store') }}" id="rider-form" method="POST"
                  enctype="multipart/form-data" >
                      @csrf
                      <div class="row">
                          <div class="mx-auto col-md-12 col-lg-12 col-xl-12 d-block ml">
                              <div class="flex border shadow-none card card-body col-12">
                                  <div class="form-group">
                                      <div class="row row-sm">
                                          <div class="col-sm-6">
                                          <label class="main-content-label tx-11 tx-medium tx-gray-900">First Name</label>
                                          <input
                                             id="first_name" name="first_name" type="text"
                                             v:model.lazy="first_name" id="first_name" name="first_name"
                                             class="form-control border-info
                                             @error('first_name') is-invalid  @enderror"
                                              placeholder="" required >
                                              <div class="invalid-feedback ">
                                                  @error('first_name') <span class="error">{{ $message }}</span> @enderror
                                              </div>
                                          </div>
                                  <div class="col-sm-6">
                                      <label class="main-content-label tx-11 tx-medium tx-gray-900">Middle Name</label>
                                      <input
                                      v:model.lazy="middle_name" id="middle_name" name="middle_name" type="text"
                                      class="form-control border-info
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
                                      <input
                                         id="last_name" name="last_name" type="text"
                                         v:model.lazy="last_name" id="last_name" name="last_name"
                                         class="form-control border-info
                                         @error('last_name') is-invalid  @enderror "
                                          placeholder="" required >
                                          <div class="invalid-feedback ">
                                              @error('last_name') <span class="error">{{ $message }}</span> @enderror
                                          </div>
                                      </div>
                              <div class="col-sm-6">
                                  <label class="main-content-label tx-11 tx-medium tx-gray-900">Email</label>
                                  <input
                                  v:model.lazy="email" id="email" name="email" type="email"
                                  class="form-control border-info
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
                                          <input
                                          maxLength=15
                                          v:model.lazy="mobile_number" id="mobile_number" name="mobile_number" type="tel"
                                          class="form-control border-info
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
                                              <input
                                              v:model.lazy="residential_address" id="residential_address" name="residential_address" type="text"
                                              class="form-control border-info
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
                              <div class="form-group">
                                  <div class="row row-sm">
                                      <div class="col-sm-6">
                                          <label class="main-content-label tx-11 tx-medium tx-gray-900">
                                              Vehicle License Screenshot</label>
                                          <div class="row">
                                              <div class="col-lg-12 col-md-12 col-sm-12">
                                                  <input
                                                  v:model.lazy="vehicle_license_img_url" id="vehicle_license_img_url" name="vehicle_license_img_url"
                                                  accept=".jpg, .png, image/jpeg",
                                                  type="file"
                                                  class="form-control border-info
                                                  @error('vehicle_license_img_url') is-invalid  @enderror "
                                                  placeholder="" required
                                                  required="" >
                                                  <div class="invalid-feedback ">
                                                      @error('vehicle_license_img_url') <span class="error">{{ $message }}</span> @enderror
                                                  </div>
                                              </div>

                                          </div>
                                          </div>
                                  <div class="col-sm-6">
                                      <label class="main-content-label tx-11 tx-medium tx-gray-900">Profile Photo</label>
                                      <div class="row">
                                          <div class="col-lg-12 col-md-12 col-sm-12">
                                              <input
                                              v:model.lazy="photo" id="photo" name="photo"
                                              accept=".jpg, .png, image/jpeg",
                                              type="file"
                                              class="form-control border-info
                                              @error('photo') is-invalid  @enderror "
                                              placeholder="" required
                                              required="" >
                                              <div class="invalid-feedback ">
                                                  @error('photo') <span class="error">{{ $message }}</span> @enderror
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
                          <button class="btn btn-indigo" type="submit">Save Data</button>
                          <button class="border-danger btn btn-outline-light text-danger" type="button" data-dismiss="modal"
                              onClick="reset()"
                          >Reset</button>
                      </div>
                  </form>
              </div>
          </div>
    </div>
  </div>

   <!--Main Content-->

