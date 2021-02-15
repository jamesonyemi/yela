  <div class="col-lg-12">
    <div class="mb-4 card">
        <div class="card-body">
            <div class="main-content-label mg-b-5">

            </div>
            <div id="">
            <div class="table-responsive">
                {{-- @include('livewire.settings.delivery.search_input') --}}
                <table id="" class="table w-auto table-striped table-bordered dt-responsive nowrap" style="width:100%"
                >
                    <thead class="container-fluid">
                        <tr>
                            <th class="border-bottom-0"><p class="mx-3 my-0">Year</p>  Purchased</th>
                            <th class="border-bottom-0"><p class="mx-3 my-0">Year</p>  <p class="mx-3 my-0">Sold</p></th>
                            <th class="border-bottom-0">Transmission</th>
                            <th class="border-bottom-0">Country</th>
                            <th class="border-bottom-0">Purpose</th>
                            <th class="border-bottom-0">Created</th>
                            <th class="border-bottom-0">Modified</th>
                            <th class="border-bottom-0">Action</th>
                        </tr>
                    </thead>
                    <tbody >
                        @foreach ($vehicles as $vehicle)
                        <?php $encryptData  =   Crypt::encrypt($vehicle->v_id);  ?>
                        <tr wire:transition="slide-down" class="w-auto h-5 p-3 " >
                            <td class="justify-center col-1">{{ ucfirst($vehicle->year_purchased) }}</td>
                            <td class="justify-center col-1">{{ ucfirst($vehicle->year_sold) }}</td>
                            <td class="justify-center col-2">{{ ucfirst($vehicle->transmission_type) }}</td>
                            <td class="justify-center col-1">{{ ucfirst($vehicle-> make_country ) }}</td>
                            <td class="justify-center col-2">{{ ucfirst($vehicle->purpose) }}</td>
                            <td class="justify-center col-2" >{{ date(('D jS, M Y'), strtotime($vehicle->created_at) ) }}</td>
                            <td class="justify-center col-2">{{ date( ('D jS, M Y'), strtotime($vehicle->updated_at) ) }}</td>
                            <td class="container-fluid">
                                <div class="row">
                                    <a href="{{ route('admin.vehicles.edit',$encryptData ) }}"
                                    class="flex-1 text-primary">
                                        <i class="fas fa-edit tx-18"></i>
                                    </a>

                                    <a href="{{ route('admin.vehicles.show',$encryptData )  }}"
                                    class="flex-1 text-orange">
                                        <i class="fas fa-eye tx-18"></i>
                                    </a>
                                    <a href="#" class="flex-1 text-danger" @click="showModal1 = true" id="show-modal" data-href="{{ route('admin.vehicles.destroy', $encryptData )  }}" >
                                    <i class="fas fa-trash tx-18"> </i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            </div>
        </div>
    </div>
</div>

@include('partials.flag_as_deleted_modal')






