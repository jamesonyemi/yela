<?php

namespace App\Http\Livewire\Customers;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Customer;

class CustomerDetails extends Component
{

    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    protected $listeners = ['customerAdded' => '$refresh'];
    public    $search = '';

    public  $updateMode = false;
    public  $customer_name = '';
    public  $company_size = '';
    public  $phone = '';
    public  $contact_person = '';

    protected $rules = [

        'customer_name'   => 'required|string|Max:225|',
        'company_size'   => 'required|string|',
        'contact_person' => 'required|string|',
        'phone_number'   => 'required|numeric|Max:15',

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
        $this->flushData();

       session()->flash('message', 'New Customer added successfully');

    }

    public function data()
    {
       $data    =    [

        'customer_name'   => $this->customer_name,
        'company_size'   =>  $this->company_size,
        'company_person' =>  $this->contact_person,
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

        $this->updateMode = true;

        $customer = Customer::where('id',$id)->first();

        $this->cust_id          =   $id;
        $this->customer_name    =   $customer->customer_name;
        $this->company_size     =   $customer->company_size;
        $this->contact_person   =   $customer->contact_person;
        $this->phone_number     =   $customer->phone_number;


    }


    public function cancel()

    {

        $this->updateMode = false;

        $this->flushData();



    }


    public function update()

    {

        $validatedDate = $this->validate([

            'name' => 'required',

            'email' => 'required|email',

        ]);


        if ($this->user_id) {

            $customer = Customer::find($this->user_id);

            $user->update([

                $this->data()

            ]);

            $this->updateMode = false;

            session()->flash('message', 'Users Updated Successfully.');

            $this->flushData();


        }

    }


    public function delete($id)

    {

        if($id){

            Customer::where('id',$id)->delete();

            session()->flash('message', 'Users Deleted Successfully.');

        }

    }



    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.customers.customer-details', [

            'allCustomers' => Customer::where('contact_person', 'like', '%'.$this->search.'%')
                ->orWhere('customer_name', 'like', '%'.$this->search.'%')
                ->orWhere('cust_country_id', 'like', '%'.$this->search.'%')
                ->orWhere('cust_state_id', 'like', '%'.$this->search.'%')
                ->orWhere('cust_city_id', 'like', '%'.$this->search.'%')
                ->orWhere('company_size', 'like', '%'.$this->search.'%')
                ->orWhere('status', 'like', '%'.$this->search.'%')
                ->latest()->paginate(),

         ]);
    }
}
