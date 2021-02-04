<div class="col-lg-3">
    <div class="row">
        <div class="d-flex justify-content-center justify-content-sm-center bd-highlight">
            @if (session()->has('message'))
                <div class="alert alert-success alert-avatar">
                    <button type="button" class="p-2 mx-2 justify-content-sm-end close flex-fill bd-highlight" data-dismiss="alert" aria-hidden="true">×</button>
                    <span class="p-2 main-avatar avatar-sm cover-image flex-fill bd-highlight"><i class="fa fa-bell" aria-hidden="true"></i></span>
                    <span class="p-2 align-content-end flex-fill bd-highlight">{{ session('message') }}</span>
                </div>
            @endif
        </div>
    </div>
    <div class="justify-center mb-2 d-flex">
        <h6 class="main-content-title tx-14 mg-b-5 mg-t-7 text-primary"><i class="pr-2 fa fa-bar-chart" aria-hidden="true"></i>  Delivery Status</h6>
    </div>
        <div class="card">
            <div class="card-body">
                <div class="mt-4 main-content-label"></div>
                <form class="form-horizontal" action="{{ route('admin.delivery-status.store') }}"
                method="POST">
                    @csrf
                    <div class="form-group ">
                        <div class="row">
                            <label class="form-label">Status</label>
                            <input
                            maxLength="15"
                            v:model="delivery_type" type="text" id="delivery_type" name="delivery_type" type="text"
                            class="{{ empty($delivery_type) ? "form-control border-info" : "form-control border-success is-valid" }}
                            @error('delivery_type') is-invalid  @enderror "
                             placeholder="Delivery Status (e.g delayed)"
                             required
                             >
                             <div class="invalid-feedback ">
                                @error('delivery_type') <span class="error">{{ $message }}</span> @enderror

                            </div>
                        </div>
                    </div>
                    <div class="card-footer ">
                        <button
                        type="submit" class="btn btn-lg btn-primary waves-effect waves-light pull-right">
                        Save
                    </button>
                    </div>
                    {{--  <button
                        v:click="storeDeliveryType"
                        {{ empty($delivery_type) ? "disabled" : '' }}
                        type="submit" class="btn btn-lg btn-primary waves-effect waves-light pull-right">
                        Save
                    </button>  --}}
                </form>
            </div>
        </div>
    </div>
