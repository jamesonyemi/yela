@php

$key;

$statusArray =   [

    'approved' => [
        'text-success-addon',
        'bg-success-addon',
    ],

  'awaiting-approval' => [
      'text-warning',
      'bg-warning',
    ],

    'processing' => [
        'text-secondary',
        'bg-secondary',
    ],

   'rejected' => [
        'text-danger',
        'bg-danger',
    ],

];

@endphp


    <i class="mr-2 fa fa-dot-circle-o
        {{ ( array_key_exists($key, $statusArray) ) ? $statusArray[$key][0] . ' ' . $statusArray[$key][1]
            : 'text-secondary-addon bg-secondary-addon' }}
        rounded-pill" aria-hidden="true">
    </i>
    <label for="" class="rounded-pill tx-14
        {{ ( array_key_exists($key, $statusArray) ) ? $statusArray[$key][0] : 'text-secondary-addon' }} ">
        <h6>{{ ucfirst(str_replace('-', ' ', $key)) }}</h6>
    </label>
