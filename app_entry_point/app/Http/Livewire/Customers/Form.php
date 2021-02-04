<?php

namespace App\Http\Livewire\Customers;

use Livewire\Component;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;
use App\Models\Customer;

class Form extends Component
{

    public  $updateMode = false;
    public  $customer_name = '';
    public  $company_size = '';
    public  $phone_number = '';
    public  $contact_person = '';
    public  $selected_id;

    protected $rules = [

        'contact_person' => 'required|string|regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/',
        'customer_name'  => 'required|string|unique:customers|Max:225|',
        'phone_number'   => 'required|numeric|unique:customers|Min:10|phone|',
        'company_size'   => 'required|numeric|',

    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function storeCustomerData()
    {
        # code...
        $validatedData = $this->validate();
        Customer::create( $this->data() );
        $this->emit('customerAdded');
        notify()->success('Customer Added Successfully ⚡️');
        return redirect()->route('admin.customers.index');
        $this->flushData();
        // session()->flash('message', 'New Customer added successfully');

    }

    public function data()
    {
       $data    =    [

        'customer_name'   => $this->customer_name,
        'company_size'   =>  $this->company_size,
        'contact_person' =>  $this->contact_person,
        'phone_number'   =>  $this->phone_number,


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
                $this->customer_name = '',
                $this->company_size  = '',
                $this->contact_person = '',
                $this->phone_number = '',
            ]
        );
    }

    public function edit($id)

    {


        $customer = Customer::where('id',$id)->first();

        $this->cust_id          =   $id;
        $this->customer_name    =   $customer->customer_name;
        $this->company_size     =   $customer->company_size;
        $this->contact_person   =   $customer->contact_person;
        $this->phone_number     =   $customer->phone_number;
        $this->updateMode       =   true;


    }

    

    public function render()
    {
        return view('livewire.customers.form');
    }
}
