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
                            <th class="border-bottom-0">Currency</th>
                            <th class="border-bottom-0">Code</th>
                            <th class="border-bottom-0">Status</th>
                            <th class="border-bottom-0 tx-12">Created</th>
                            <th class="border-bottom-0">Modified</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($currencies as $currency)
                        <tr>
                            <td class="text-center">{{ ucfirst($currency->long_name) }}</td>
                            <td class="text-center">{{ ucfirst($currency->short_name) }}</td>
                            <td class="text-center">
                                <label class="{{ ($currency->is_active) ? 'badge badge-success' : 'badge badge-warning'  }} ">

                                    {{ ($currency->is_active) ?  ('active') : ('in-active') }}
                                </label>
                            </td>
                            <td>{{ date( ('l jS \\of F Y'), strtotime($currency->created_at) ) }}</td>
                            <td>{{ date( ('l jS \\of F Y'), strtotime($currency->updated_at) ) }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="flex-row">
                    <div class="float-right mt-4 float-sm-left" >
                        {{ $currencies->links() }}
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>

