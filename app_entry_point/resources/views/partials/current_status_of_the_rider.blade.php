@php

$key;

$current_status_of_dispatch_rider =   [

  'active' => [
        'text-success-addon',
        'bg-success-addon',
    ],

  'inactive' => [
      'text-warning',
      'bg-warning',
    ],

   'suspended' => [
        'text-info',
        'bg-info',
    ],

   'deleted' => [
        'text-danger',
        'bg-danger',
    ],

];

@endphp


    <i class="mr-2 fa fa-dot-circle-o
        {{ ( array_key_exists($key, $current_status_of_dispatch_rider) ) ? $current_status_of_dispatch_rider[$key][0] . ' ' . $current_status_of_dispatch_rider[$key][1]
            : 'text-secondary-addon bg-secondary-addon' }}
        rounded-pill" aria-hidden="true">
    </i>
    <label for="" class="rounded-pill tx-14
        {{ ( array_key_exists($key, $current_status_of_dispatch_rider) ) ? $current_status_of_dispatch_rider[$key][0] : 'text-secondary-addon' }} ">
        <h6>{{ strtolower(str_replace('-', ' ', $key)) }}</h6>
    </label>
