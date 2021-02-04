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
         <h6 class="main-content-title tx-14 mg-b-5 mg-t-7 text-primary">
             <i class="pr-2 fas fa-currency" aria-hidden="true"></i>Charges Per Location
        </h6>
    </div>
        <div class="card">
            <div class="card-body">
                <div class="mt-4 main-content-label"></div>
                {{-- <form class="form-horizontal"> --}}
                    <div class="form-group ">
                        <div class="row">
                            <label class="form-label">Origin</label>
                            <input
                            maxLength="15"
                            wire:model="origin" id="origin" name="origin" type="text"
                            class="{{ empty($origin) ? "form-control border-info" : "form-control border-success is-valid" }}
                            @error('origin') is-invalid  @enderror "
                             placeholder="currency(e.g Ghana)" required
                             >
                             {{-- <select class="form-control select2-no-search">
                                <option label="Sending Country" >---Select---</option>
                                <option value="2018">
                                    Ghana
                                </option>
                                <option value="2019">
                                    Niger
                                </option>
                                <option value="2020">
                                    USA
                                </option>
                            </select> --}}
                             <div class="invalid-feedback ">
                                @error('origin') <span class="error">{{ $message }}</span> @enderror
                            </div>
                            <label class="mt-4 form-label">Destination</label>
                            <input
                            maxLength="5"
                            wire:model="destination" type="text" id="destination" name="destination" type="text"
                            class="{{ empty($destination) ? "form-control border-info" : "form-control border-success is-valid" }}
                            @error('destination') is-invalid  @enderror "
                             placeholder="(e.g Canada)" required
                             >
                             {{-- <select class="form-control select2-no-search">
                                <option label="Receiving Country" >---Select---</option>
                                <option value="2018">
                                    Ghana
                                </option>
                                <option value="2019">
                                    Niger
                                </option>
                                <option value="2020">
                                    USA
                                </option> --}}
                             <div class="invalid-feedback ">
                                @error('destination') <span class="error">{{ $message }}</span> @enderror
                            </div>
                            <div class="row">
                                <label class="mt-4 ml-3 form-label">Unit Price
                                    <i class="mx-2 my-2 row badge badge-primary">GHC</i>
                                </label>
                                <div class="col-12">
                                    <input
                                    maxLength="5"
                                    wire:model="unit_price" type="number" step="5" id="unit_price" name="unit_price" type="text"
                                    class="{{ empty($unit_price) ? "form-control border-info" : "form-control border-success is-valid" }}
                                    @error('unit_price') is-invalid  @enderror "
                                     placeholder="(e.g GH₵ 10 )" required
                                     >
                                     <div class="invalid-feedback ">
                                        @error('unit_price') <span class="error">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                {{-- </form> --}}
                <div class="card-footer ">
                    <button
                    @php
                        $contains = empty($origin) && empty($destination) && empty($unit_price);
                    @endphp
                        wire:click="storeChargesPerLocation"
                        {{ ($contains)  ? "disabled" : '' }}
                        type="submit" class="btn btn-lg btn-primary waves-effect waves-light pull-right">
                        Save
                    </button>
            </div>
        </div>
    </div>



