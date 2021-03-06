   @php
       $alert_name;
    @endphp

<!-- component -->
<div class="-m-2 text-center alert alert-$alert_type['info'] alert-dismissible fade show" role="modal" >
    <div class="absolute inset-0 p-2 transition duration-300 transform hover:-translate-x-10">
      <div class="inline-flex items-center p-2 text-sm leading-none text-purple-600 bg-white rounded-full shadow text-teal">
        <span class="inline-flex items-center justify-center h-6 px-3 text-white bg-purple-600 rounded-full">Info</span>
        <span class="inline-flex px-2">{{ session($alert_name) }}</span>
        <span class="inline-flex items-center justify-center h-6 px-3 text-white bg-purple-600 rounded-full cursor-pointer" data-dismiss="alert" aria-label="Close">&times;</span>
      </div>
    </div>
  </div>

