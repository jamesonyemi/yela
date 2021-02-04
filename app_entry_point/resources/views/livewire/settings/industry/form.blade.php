<div class="col-lg-3">
    <div class="">
        @if (session()->has('message'))
            <div class="alert alert-success alert-avatar">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <span class="main-avatar avatar-sm cover-image"><i class="fa fa-bell" aria-hidden="true"></i></span>
                {{ session('message') }}
            </div>
        @endif
    </div>
    <div class="justify-center mb-2 d-flex">
        <h6 class="main-content-title tx-14 mg-b-5 mg-t-7 text-primary"><i class="pr-2 fas fa-industry" aria-hidden="true"></i>Industry Type</h6>
    </div>
        <div class="card">
            <div class="card-body">
                <div class="mt-4 main-content-label"></div>
                {{-- <form class="form-horizontal"> --}}
                    <div class="form-group ">
                        <div class="row">
                            <label class="form-label">Name</label>
                            <input
                            maxLength="15"
                            wire:model="industry_type" type="text" id="industry_type" name="industry_type" type="text"
                            class="{{ empty($industry_type) ? "form-control border-info" : "form-control border-success is-valid" }}
                            @error('industry_type') is-invalid  @enderror "
                             placeholder="Industry(e.g Fashion)" required
                             >
                             <div class="invalid-feedback ">
                                @error('industry_type') <span class="error">{{ $message }}</span> @enderror

                            </div>
                        </div>
                    </div>
                {{-- </form> --}}
                <div class="card-footer ">
                    <button
                        wire:click="storeIndustry"
                        {{ empty($industry_type) ? "disabled" : '' }}
                        type="submit" class="btn btn-lg btn-primary waves-effect waves-light pull-right">
                        Save
                    </button>
            </div>
        </div>
    </div>



