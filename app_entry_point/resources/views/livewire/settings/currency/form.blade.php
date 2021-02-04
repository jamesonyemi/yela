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
        <h6 class="main-content-title tx-14 mg-b-5 mg-t-7 text-primary"><i class="pr-2 fas fa-currency" aria-hidden="true"></i>currency Type</h6>
    </div>
        <div class="card">
            <div class="card-body">
                <div class="mt-4 main-content-label"></div>
                {{-- <form class="form-horizontal"> --}}
                    <div class="form-group ">
                        <div class="row">
                            <label class="form-label">Long Name</label>
                            <input
                            maxLength="15"
                            wire:model="long_name" type="text" id="long_name" name="long_name" type="text"
                            class="{{ empty($long_name) ? "form-control border-info" : "form-control border-success is-valid" }}
                            @error('long_name') is-invalid  @enderror "
                             placeholder="currency(e.g Ghanaian Cedi)" required
                             >
                             <div class="invalid-feedback ">
                                @error('long_name') <span class="error">{{ $message }}</span> @enderror
                            </div>
                            <label class="mt-4 form-label">Currency Code</label>
                            <input
                            maxLength="5"
                            wire:model="short_name" type="text" id="short_name" name="short_name" type="text"
                            class="{{ empty($short_name) ? "form-control border-info" : "form-control border-success is-valid" }}
                            @error('short_name') is-invalid  @enderror "
                             placeholder="(e.g GHS)" required
                             >
                             <div class="invalid-feedback ">
                                @error('short_name') <span class="error">{{ $message }}</span> @enderror
                            </div>
                            <label class="mt-4 form-label">Currency Sign</label>
                            <input
                            maxLength="5"
                            wire:model="symbol" type="text" id="symbol" name="symbol" type="text"
                            class="{{ empty($symbol) ? "form-control border-info" : "form-control border-success is-valid" }}
                            @error('symbol') is-invalid  @enderror "
                             placeholder="(e.g GH₵ )" required
                             >
                             <div class="invalid-feedback ">
                                @error('symbol') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                    </div>
                {{-- </form> --}}
                <div class="card-footer ">
                    <button
                    @php
                        $contains = empty($long_name) && empty($short_name) && empty($symbol);
                    @endphp
                        wire:click="storeCurrency"
                        {{ ($contains)  ? "disabled" : '' }}
                        type="submit" class="btn btn-lg btn-primary waves-effect waves-light pull-right">
                        Save
                    </button>
            </div>
        </div>
    </div>



