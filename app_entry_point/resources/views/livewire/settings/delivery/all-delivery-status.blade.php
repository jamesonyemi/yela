<div class="col-lg-9">
    <div class="mb-4 card">
        <div class="card-body">
            <div class="main-content-label mg-b-5">

            </div>
            <div id="no-more-tables">
            <div class="table-responsive">
                @include('livewire.settings.delivery.search_input')
                <table id="" class="table border table-striped table-bordered nowrap text-md-nowrap">
                    <thead class="container-fluid">
                        <tr>
                            <th class="border-bottom-0">Delivery Type</th>
                            <th class="border-bottom-0">Created On</th>
                            <th class="border-bottom-0">Last Updated</th>
                        </tr>
                    </thead>
                    <tbody >
                        @foreach ($delivery as $type)
                        <tr wire:transition="slide-down">
                            <td class="col-4">{{ ucfirst($type->delivery_type) }}</td>
                            <td class="col-4">{{ date( ('l jS \\of F Y'), strtotime($type->created_at) ) }}</td>
                            <td class="col-4">{{ date( ('l jS \\of F Y'), strtotime($type->updated_at) ) }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="flex-row">
                    <div class="float-right mt-4 float-sm-left" >
                        {{ $delivery->links() }}
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>

