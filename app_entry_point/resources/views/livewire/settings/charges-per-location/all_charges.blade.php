<div class="col-lg-9">
    <div class="mb-4 card">
        <div class="card-body">
            <div class="main-content-label mg-b-5">

            </div>
            <div id="no-more-tables">
            <div class="table-responsive">
                @include('livewire.settings.delivery.search_input')
                <table id="" class="table border table-striped table-bordered nowrap text-md-nowrap">
                    <thead>
                        <tr>
                            <th class="border-bottom-0">From</th>
                            <th class="border-bottom-0">To</th>
                            <th class="border-bottom-0">unit price</th>
                            <th class="border-bottom-0">Status</th>
                            <th class="border-bottom-0">Created</th>
                            <th class="border-bottom-0">Updated</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($chargesPerLocation as $charged_per_location)
                        <tr>
                            <td class="text-center">{{ ucfirst($charged_per_location->country_of_sender) }}</td>
                            <td class="text-center">{{ ucfirst($charged_per_location->country_of_receiver) }}</td>
                            <td class="text-center">{{ ucfirst($charged_per_location->unit_price) }}</td>
                            <td class="text-center">
                                <label class="{{ ($charged_per_location->is_active) ? 'badge badge-success' : 'badge badge-warning'  }} ">

                                    {{ ($charged_per_location->is_active) ?  ('active') : ('in-active') }}
                                </label>
                            </td>
                            <td>{{ date( ('l jS \\of F Y'), strtotime($charged_per_location->created_at) ) }}</td>
                            <td>{{ date( ('l jS \\of F Y'), strtotime($charged_per_location->updated_at) ) }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="flex-row">
                    <div class="float-right mt-4 float-sm-left" >
                        {{ $chargesPerLocation->links() }}
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>

