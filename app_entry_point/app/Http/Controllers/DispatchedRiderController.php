<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DispatchRider;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;


class DispatchedRiderController extends Controller
{


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


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $riders   =   DispatchRider::latest()->whereRiderStatus("active")->paginate();
        return view('dispatched_riders.index', compact('riders'))->render();

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return  view('dispatched_riders.create')->render();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        DispatchRider::create( array_merge($this->data(), [ 'password'  =>   "D"."-".random_int(1040, 9999),] ));

        return redirect()->route('admin.dispatch-rider.index')
            ->with('success', 'You Just Created a new Dispatch Rider ⚡️');

    }

    public function UploadFile($file)
    {
        return \Request()->file($file)->store('public/photo');
    }

    public function data()
    {

        $password     =   random_int(100, 999);

        $data    =    [

        'first_name'           =>   \Request()->first_name,
        'last_name'            =>   \Request()->last_name,
        'middle_name'          =>   \Request()->middle_name,
        'email'                =>   \Request()->email,
        'rider_photo_url'      =>   $this->uploadFile('photo'),
        'license_img_url'      =>   $this->uploadFile('vehicle_license_img_url'),
        'mobile_number'        =>   \Request()->mobile_number,
        'address_1'            =>   \Request()->residential_address,
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

                \Request()->first_name       =   '',
                \Request()->last_name        =   '',
                \Request()->middle_name      =   '',
                \Request()->email            =   '',
                \Request()->photo            =   '',
                \Request()->mobile_number    =   '',
                \Request()->residential_address      =   '',
                \Request()->vehicle_license_img_url  = '' ,

            ]
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DispatchRider $dispatchRider
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $rider = DispatchRider::find(Crypt::decrypt($id));
        return view('dispatched_riders.view_rider_info', compact("rider"))->render();

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DispatchRider $dispatchRider
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $rider = DispatchRider::find(Crypt::decrypt($id));
        return view('dispatched_riders.update_rider_info', compact("rider"))->render();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DispatchRider $dispatchRider
     * @return \Illuminate\Http\Response
     */
    public function update($incoming_rider_id)
    {

        $decrypt_rider_id   =  Crypt::decrypt($incoming_rider_id);

        $update_rider_info  =  DB::table('dispatch_riders')->where('rider_id', $decrypt_rider_id)
              ->update( static::getRiderArrayDataForUpdate() );

        return redirect()->route('admin.dispatch-rider.index')
        ->with('success', "Dispatch Rider # $decrypt_rider_id Updated Successfully ");

    }

    private static function getRiderArrayDataForUpdate(): array
    {
        # code...
       return [

            "first_name" => request()->first_name,
            "middle_name" => request()->middle_name,
            "last_name" => request()->last_name,
            "email" => request()->email,
            "mobile_number" => request()->mobile_number,
            "address_1" => request()->residential_address,

        ];

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DispatchRider $dispatchRider
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $get_incoming_rider_id = Crypt::decrypt($id);
        return DB::table('dispatch_riders')->where('rider_id', $get_incoming_rider_id)->update( [ 'rider_status' => 'deleted'] );
        return view('dispatched_riders.ionde', compact("rider"))->render();
    }


}
