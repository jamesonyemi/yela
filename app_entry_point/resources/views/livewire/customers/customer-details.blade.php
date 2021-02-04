<div class="col-lg-12">
    <div class="mb-4 card">
        <div class="card-body">
            <div class="main-content-label mg-b-5">

            </div>
            <div id="no-more-tables">
            <div class="table-responsive">
                {{-- @include('livewire.settings.delivery.search_input') --}}
                <table id="" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%"
                >
                    <thead class="container-fluid">
                        <tr>
                            <th class="border-bottom-0">Company</th>
                            <th class="border-bottom-0">Status</th>
                            <th class="border-bottom-0">Joined</th>
                            <th class="border-bottom-0">Emp. Size</th>
                            <th class="border-bottom-0">Location</th>
                            <th class="border-bottom-0">Contact</th>
                            <th class="border-bottom-0">Updated</th>
                            <th class="flex border-bottom-0">Action</th>
                        </tr>
                    </thead>
                    <tbody >
                        @foreach ($allCustomers as $customer)
                        <?php $encryptData  =   Crypt::encrypt($customer->cust_id);  ?>
                        <tr wire:transition="slide-down" >
                            <td>{{ ucfirst($customer->customer_name) }}</td>
                            <td>{{ ucfirst($customer->status) }}</td>
                            <td class="col-12" >{{ date( ('l jS, F Y'), strtotime($customer->created_at) ) }}</td>
                            <td>{{ ucfirst($customer->company_size) }}</td>
                            <td>{{ ucfirst($customer->cust_country_id) }}</td>
                            <td>{{ ucfirst($customer->contact_person) }}</td>
                            <td>{{ date( ('l jS,F Y'), strtotime($customer->updated_at) ) }}</td>
                            <td class="flex-row">
                                <a
                                href="{{ route('admin.customers.edit', $customer->cust_id ) }}"
                                 class="text-primary col-sm-6"
                                >
                                <i class="fas fa-user-edit tx-18"></i></a>
                                <a href="{{ route('admin.customers.show', $customer->cust_id ) }}"
                                class="text-primary col-sm-6"
                                ><i class="fas fa-eye tx-18"></i> </a>
                                <a href="#"class="mr-3 text-danger col-sm-6"
                                ><i class="fas fa-trash tx-18"></i> </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="flex-row">
                    <div class="float-right mt-4 float-sm-left" >
                        {{ $allCustomers->links() }}
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>





