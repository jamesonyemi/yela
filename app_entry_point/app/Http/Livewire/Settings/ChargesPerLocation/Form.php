<?php

namespace App\Http\Livewire\Settings\ChargesPerLocation;

use Livewire\Component;
use App\Models\ChargesPerLocation;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;

class Form extends Component
{

    public  $origin         = '';
    public  $destination    = '';
    public  $unit_price     = '';

    protected $rules = [

        'unit_price'     => 'required|int|Min:1|',
        'origin'         => 'required|numeric|',
        'destination'    => 'required|numeric|',

    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function storeChargesPerLocation()
    {
        # code...
        $validatedData = $this->validate();
        ChargesPerLocation::create( $this->data() );
        $this->emit('chargesAdded');
        $this->flushData();

       session()->flash('message', 'New Charges added successfully');

    }

    public function data()
    {
       $data    =    [

        'unit_price'    =>  $this->unit_price,
        'origin'        =>  $this->origin,
        'destination'   =>  $this->destination,

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
                $this->destination  = '',
                $this->origin       = '',
                $this->unit_price   = '',
            ]
        );
    }

    public function render()
    {
        return view('livewire.settings.charges-per-location.form');
    }
}
