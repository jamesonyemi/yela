<?php

namespace App\Http\Livewire\DispatchedRider;

use Livewire\Component;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;
use App\Models\DispatchRider;
use Livewire\WithFileUploads;

class Form extends Component
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

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function storeDispatchedRiderData()
    {
        # code...
        $validatedData = $this->validate();
        DispatchRider::create( array_merge($this->data(), [ 'password'  =>   "D"."-".random_int(1040, 9999),] ));
        notify()->success('You Just Created a new Dispatch Rider ⚡️', 'Congratulations');
        return redirect()->route('admin.dispatched-riders.index');
        $this->flushData();

    }

    public function UploadFile($file)
    {
        return $file->store('public/photo');
    }

    public function data()
    {

        $password     =   random_int(100, 999);

        $data    =    [

        'first_name'           =>   $this->first_name,
        'last_name'            =>   $this->last_name,
        'middle_name'          =>   $this->middle_name,
        'email'                =>   $this->email,
        'rider_photo_url'      =>   $this->uploadFile($this->photo),
        'license_img_url'      =>   $this->uploadFile($this->vehicle_license_img_url),
        'mobile_number'        =>   $this->mobile_number,
        'address_1'            =>   $this->residential_address,
        'created_by'           =>   random_int(100, 999),

       ];

       return $data;

    }

    public function clearData($args = []):void
    {

        foreach ($args as $value) {
            # code...
           $key = $value ;
        }

    }

    public function flushData():void
    {
        # code...
        $this->clearData(
            [

                $this->first_name       =   '',
                $this->last_name        =   '',
                $this->middle_name      =   '',
                $this->email            =   '',
                $this->photo            =   '',
                $this->mobile_number    =   '',
                $this->residential_address      =   '',
                $this->vehicle_license_img_url  = '' ,

            ]
        );
    }

    public function render()
    {
        return view('livewire.dispatched-rider.form');
    }
}
