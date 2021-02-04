<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;


class CustomerController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('customers.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customers.create')->render();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $customer   =   Customer::findOrFail($id);
        return view('customers.view', compact('customer'))->render();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer   =   Customer::findOrFail($id);
        return view('customers.edit_cust_info', compact('customer'))->render();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        if ($this->validateIncomingData()) {

            $customer = Customer::find($id);
            $r = $customer->update( $this->data() );
            // ddd($r);
            notify()->success('Customer Info Updated Successfully ⚡️');
            return redirect()->route('admin.customers.index');
        }

        notify()->info('Try checking your input Data ⚡️');
        return redirect()->route('admin.customers.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    protected function validateIncomingData()
    {
       return Request()->validate([

        'contact_person' => 'required|string|regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/',
        'customer_name'  => 'required|string|unique:customers|Max:225|',
        'phone_number'   => 'required|numeric|unique:customers|Min:10|phone|',
        'company_size'   => 'required|numeric|',

        ]);

    }

    public function data()
    {
       $data    =    [

        'customer_name'   =>  Request()->customer_name,
        'company_size'    =>  Request()->company_size,
        'contact_person'  =>  Request()->contact_person,
        'phone_number'    =>  Request()->phone_number,
        'zip_code'        =>  Request()->inputZipCode,


       ];

       return $data;

    }

}
