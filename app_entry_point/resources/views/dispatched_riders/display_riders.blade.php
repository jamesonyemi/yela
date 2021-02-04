<div class="col-lg-12">
    <div class="mb-4 card">
        <div class="card-body">
            <div class="main-content-label mg-b-5">

            </div>
            <div id="">
            <div class="table-responsive">
                <table id="" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%" >
                    <thead class="container-fluid">
                        <tr>
                            <th class="border-bottom-0">Rider</th>
                            <th class="border-bottom-0">Status</th>
                            <th class="border-bottom-0">Mobile</th>
                            {{-- <th class="border-bottom-0">Rating</th> --}}
                            {{-- <th class="border-bottom-0">Working Time</th> --}}
                            <th class="border-bottom-0">Created</th>
                            <th class="border-bottom-0">Updated</th>
                            <th class="flex border-bottom-0">Action</th>
                        </tr>
                    </thead>
                    <tbody >
                        @foreach ($riders as $rider)
                        <?php
                            $encryptData  =   Crypt::encrypt($rider->rider_id);
                         ?>
                        <tr wire:transition="slide-down" class="h-5 p-3 w-25 " >
                            <td >
                                <div class="container">
                                    <div class="row">
                                        <div class="col-xs-1-12">
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="row">
                                                    @if ( !empty($rider->rider_photo_url) )
                                                    <div class="col-xs-1-12">
                                                        <div class="main-img-user">
                                                            <img src="{{ url(config('app.dispatch_rider_img').Storage::url( $rider->rider_photo_url)) }}" >
                                                        </div>
                                                    </div>
                                                    <div class="ml-2 col-xs-1-12">
                                                        <h6 class="mg-b-0 tx-14">
                                                            {{ ucfirst($rider->first_name . ' ' . $rider->last_name) }}
                                                        </h6>
                                                        <div>
                                                            <small class="tx-12 tx-gray-400">{{ $rider->email }}</small>
                                                        </div>
                                                    </div>
                                                    </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                @include('partials.current_status_of_the_rider', ['key' => $rider->rider_status] )
                            </td>
                            <td>{{ ucfirst($rider->mobile_number) }}</td>
                            {{-- <td>{{ ucfirst($rider->rating) }}</td>
                            <td>
                                <label for="" class="">
                                    {{ ucfirst($rider->start_of_working_hr) }}
                                </label>
                                <label for="" class="">
                                    {{ ucfirst($rider->end_of_working_hr) }}
                                </label>
                            </td> --}}
                            <td class="col-12" id="created-at" >{{ date( ('D jS, M Y'), strtotime($rider->created_at) ) }}</td>
                            <td>{{ date( ('D jS, M Y'), strtotime($rider->updated_at) ) }}</td>
                            <td class="flex-row">
                                <a href="{{ route('admin.dispatch-rider.edit', Crypt::encrypt($rider->rider_id) ) }}"
                                 class="text-primary col-sm-6">
                                <i class="fas fa-user-edit tx-18"></i></a>
                                <a href="{{ route('admin.customers.show', Crypt::encrypt($rider->rider_id) ) }}"
                                class="text-orange">
                                <i class="fas fa-eye tx-18"></i> </a>
                                <a href="#"class="mr-3 text-danger col-sm-6"><i class="fas fa-trash tx-18"></i> </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="flex-row">
                    <div class="float-right mt-4 float-sm-left" >
                        {{ $riders->links() }}
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>





