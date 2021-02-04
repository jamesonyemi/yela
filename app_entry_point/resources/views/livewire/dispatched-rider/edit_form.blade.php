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
                  <form wire:submit.prevent="storeDispatchedRiderData" id="rider-form" method="POST" >
                      @csrf
                      <div class="row">
                          <div class="mx-auto col-md-12 col-lg-12 col-xl-12 d-block ml">
                              <div class="flex border shadow-none card card-body col-12">
                                  <div class="form-group">
                                      <div class="row row-sm">
                                          <div class="col-sm-6">
                                          <label class="main-content-label tx-11 tx-medium tx-gray-900">First Name</label>
                                          <input
                                             id="first_name" name="first_name" type="text" value=""
                                             wire:model.lazy="first_name" id="first_name" name="first_name"
                                             class="{{ empty($first_name) ? "form-control border-info" : "form-control border-success is-valid" }}
                                             @error('first_name') is-invalid  @enderror "
                                              placeholder="" required >
                                              <div class="invalid-feedback ">
                                                  @error('first_name') <span class="error">{{ $message }}</span> @enderror
                                              </div>
                                          </div>
                                  <div class="col-sm-6">
                                      <label class="main-content-label tx-11 tx-medium tx-gray-900">Middle Name</label>
                                      <input
                                      wire:model.lazy="middle_name" id="middle_name" name="middle_name" type="text"
                                      class="{{ empty($middle_name) ? "form-control border-info" : "form-control border-success is-valid" }}
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
                                         wire:model.lazy="last_name" id="last_name" name="last_name"
                                         class="{{ empty($last_name) ? "form-control border-info" : "form-control border-success is-valid" }}
                                         @error('last_name') is-invalid  @enderror "
                                          placeholder="" required >
                                          <div class="invalid-feedback ">
                                              @error('last_name') <span class="error">{{ $message }}</span> @enderror
                                          </div>
                                      </div>
                              <div class="col-sm-6">
                                  <label class="main-content-label tx-11 tx-medium tx-gray-900">Email</label>
                                  <input
                                  wire:model.lazy="email" id="email" name="email" type="email"
                                  class="{{ empty($email) ? "form-control border-info" : "form-control border-success is-valid" }}
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
                                          wire:model.lazy="mobile_number" id="mobile_number" name="mobile_number" type="tel"
                                          class="{{ empty($mobile_number) ? "form-control border-info" : "form-control border-success is-valid" }}
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
                                              maxLength=15
                                              wire:model.lazy="residential_address" id="residential_address" name="residential_address" type="tel"
                                              class="{{ empty($residential_address) ? "form-control border-info" : "form-control border-success is-valid" }}
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
                                                  wire:model.lazy="vehicle_license_img_url" id="vehicle_license_img_url" name="vehicle_license_img_url"
                                                  accept=".jpg, .png, image/jpeg",
                                                  type="file"
                                                  class="{{ empty($vehicle_license_img_url) ? "form-control border-info" : "form-control border-success is-valid" }}
                                                  @error('vehicle_license_img_url') is-invalid  @enderror "
                                                  placeholder="" required
                                                  required="" >
                                                  <input type="text" class="timepicker">
                                                  <div class="invalid-feedback ">
                                                      @error('vehicle_license_img_url') <span class="error">{{ $message }}</span> @enderror
                                                  </div>
                                              </div>
                                              <div class="mt-4 col-lg-12 col-md-12 col-sm-12">
                                                  <div class="float-right row">
                                                      @if ($vehicle_license_img_url)
                                                          <div class="main-img-user">
                                                              <img src="{{ $vehicle_license_img_url->temporaryUrl() }}" >
                                                          </div>
  
                                                      @endif
                                                  </div>
                                              </div>
                                          </div>
                                          <div wire:loading wire:target="vehicle_license_img_url" >
                                              <button class="btn btn-primary" type="button" disabled>
                                                  <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true">
                                                  </span>
                                                  Uploading...
                                                </button>
                                              </div>
                                          </div>
                                  <div class="col-sm-6">
                                      <label class="main-content-label tx-11 tx-medium tx-gray-900">Profile Photo</label>
                                      <div class="row">
                                          <div class="col-lg-12 col-md-12 col-sm-12">
                                              <input
                                              wire:model.lazy="photo" id="photo" name="photo"
                                              accept=".jpg, .png, image/jpeg",
                                              type="file"
                                              class="{{ empty($photo) ? "form-control border-info" : "form-control border-success is-valid" }}
                                              @error('photo') is-invalid  @enderror "
                                              placeholder="" required
                                              required="" >
                                              <div class="invalid-feedback ">
                                                  @error('photo') <span class="error">{{ $message }}</span> @enderror
                                              </div>
                                          </div>
                                          <div class="mt-4 col-lg-12 col-md-12 col-sm-12">
                                              <div class="float-right row">
                                                  @if ($photo)
                                                      <div class="main-img-user">
                                                          <img src="{{ $photo->temporaryUrl() }}" >
                                                      </div>
  
                                                  @endif
                                              </div>
                                          </div>
                                      </div>
                                      <div wire:loading wire:target="photo" >
                                          <button class="btn btn-primary" type="button" disabled>
                                              <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true">
                                              </span>
                                              Uploading...
                                            </button>
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
  
  
  