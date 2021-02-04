<!--Action Button-->
@php
    $title;
    $create_btn;
    $routePage;
@endphp
<div class="p-4 main-content-header container-fluid">
    <div>
        <h6 class="text-center main-content-title tx-18 mg-b-5 mg-t-7 text-uppercase">
            {{ empty($title) ? '' : $title }}
        </h6>
    </div>
    <div class="btn-list">
        @if ($create_btn)
            <a href="{{ ($routePage) ?? $routePage }}" class="btn btn-rounded btn-primary"><i class="mr-2 fe fe-plus-circle"></i>
                {{ ($create_btn) ? $create_btn : '' }}
            </a>
            {{-- <a href="#" class="btn btn-rounded btn-outline-primary dropdown-toggle" data-toggle="dropdown">
                <i class="mr-2 fe fe-download"></i>Download<span class="caret"></span>
            </a>
            <div class="dropdown-menu" role="menu">
                <a class="dropdown-item" href="#"><i class="mr-2 fe fe-mail"></i>Email</a>
                <a class="dropdown-item" href="#"><i class="mr-2 fe fe-printer"></i>Print</a>
                <a class="dropdown-item" href="#"><i class="mr-2 fe fe-copy"></i>Copy</a>
                <a class="dropdown-item" href="#"><i class="mr-2 fe fe-edit"></i>Edit</a>
            </div> --}}
        @else

        @endif
    </div>
</div>
<!--Action Button-->
