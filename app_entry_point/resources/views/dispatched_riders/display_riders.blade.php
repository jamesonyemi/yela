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
                            <td class="flex flex-col items-center justify-center sm:flex-row">
                                <a href="{{ route('admin.dispatch-rider.edit', Crypt::encrypt($rider->rider_id) ) }}"
                                 class="flex-1 text-primary">
                                    <i class="fas fa-user-edit tx-18"></i>
                                </a>

                                <a href="{{ route('admin.dispatch-rider.show', Crypt::encrypt($rider->rider_id) )  }}"
                                class="flex-1 ml-3 mr-3 text-orange">
                                    <i class="fas fa-eye tx-18"></i>
                                </a>
                                <a href="#" class="flex-1 mr-3 text-danger">
                                <i class="fas fa-trash tx-18"> </i>
                                </a>
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

<button
        class="w-32 p-2 m-2 font-semibold text-white transition-all duration-300 bg-red-600 rounded-full shadow-lg hover:bg-red-700 focus:outline-none focus:ring hover:shadow-none"
        @click="showModal1 = true"
      >
        Click here
      </button>

<!-- Modal1 -->
<div
id="my-modal"
class="fixed inset-0 z-20 w-full h-full overflow-y-auto duration-300 bg-black bg-opacity-50"
x-show="showModal1"
x-transition:enter="transition duration-300"
x-transition:enter-start="opacity-0"
x-transition:enter-end="opacity-100"
x-transition:leave="transition duration-300"
x-transition:leave-start="opacity-100"
x-transition:leave-end="opacity-0"
>
<div class="relative mx-2 my-10 opacity-100 sm:w-3/4 md:w-1/2 lg:w-1/3 sm:mx-auto center-modal sm-center-modal">
  <div
    class="relative z-20 text-gray-900 bg-white rounded-md shadow-lg"
    @click.away="showModal1 = false"
    x-show="showModal1"
    x-transition:enter="transition transform duration-300"
    x-transition:enter-start="scale-0"
    x-transition:enter-end="scale-100"
    x-transition:leave="transition transform duration-300"
    x-transition:leave-start="scale-100"
    x-transition:leave-end="scale-0"
  >
    <header class="flex items-center justify-between p-2">
      <h2 class="font-semibold">Header</h2>
      <button class="p-2 focus:outline-none" @click="showModal1 = false">
        <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
          <path
            d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"
          ></path>
        </svg>
      </button>
    </header>
    <main class="p-2 text-center">
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam voluptatem, optio dolorem accusantium fuga
        molestias nobis sequi autem ducimus laudantium beatae amet earum, quia reiciendis corporis animi modi
        pariatur impedit!
      </p>
    </main>
    <footer class="flex justify-center p-2">
      <button
        class="w-32 p-2 font-semibold text-white transition-all duration-300 bg-red-600 rounded-full shadow-lg hover:bg-red-700 focus:outline-none focus:ring hover:shadow-none"
        @click="showModal1 = false"
      >
        Go back
      </button>
    </footer>
  </div>
</div>
</div>





