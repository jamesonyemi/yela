@php

$alert_type  =   [

    'success'  =>  'success',
    'warning'  =>  'warning',
    'info'     =>  'info',
    'error'    =>  'error',

    ];

@endphp



@if (session('success') )

    @include('partials.success_alert',  ['alert_name' => 'success' ] ),
@elseif (session('warning') )
    @include('partials.warning_alert', ['alert_name' => 'warning' ] ),
@elseif (session('info') )
    @include('partials.info_alert', ['alert_name' => 'info' ] ),
@elseif (session('error') )
    @include('partials.error_alert', ['alert_name' => 'error' ] ),

 @endif



