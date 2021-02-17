<!--Action Button-->
@php
    $section_title;
    $text_position;
@endphp

<div class="p-4 container-fluid">
    <div>
        <h6 class="text-{!! $text_position !!}  main-content-title tx-18 mg-b-5 mg-t-7 sm:justify-center ">
            {{ empty($section_title) ? '' : $section_title }}
        </h6>
    </div>
</div>
<!--Action Button-->

