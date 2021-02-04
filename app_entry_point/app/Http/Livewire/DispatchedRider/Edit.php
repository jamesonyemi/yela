<?php

namespace App\Http\Livewire\DispatchedRider;

use Livewire\Component;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;
use App\Models\DispatchRider;
use Livewire\WithFileUploads;

class Edit extends Component
{
    use withFileUploads;

    public  $first_name       =   '';
    public  $last_name        =   '';
    public  $middle_name      =   '';
    public  $mobile_number    =   '';
    public  $email            =   '';
    public  $photo            =   '';
    public  $residential_address       =   '';
    public  $vehicle_license_img_url   =   '';

    public $rider;


    protected $rules = [

        'first_name'        => 'required|string|regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/',
        'last_name'         => 'required|string|regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/',
        'middle_name'       => 'required|string|regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/',
        'email'             => 'required|string|email|unique:dispatch_riders|Max:225|',
        'mobile_number'     => 'required|numeric|unique:dispatch_riders|Min:10|phone|',
        'photo'             => 'required|file|max:5000|mimes:png,jpg,jpeg',
        'residential_address'      => 'required|string',
        'vehicle_license_img_url'  => 'required|file|max:5000|mimes:pdf,jpg,jpeg,png',
    ];

    public function mount($id)
    {
        $this->rider = DispatchRider::find($id);
    }

    public function render()
    {
        return view('livewire.dispatched-rider.edit');
    }
}
