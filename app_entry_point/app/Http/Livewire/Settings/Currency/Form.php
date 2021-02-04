<?php

namespace App\Http\Livewire\Settings\Currency;

use Livewire\Component;
use App\Models\Currency;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;

class Form extends Component
{

    public  $short_name      = '';
    public  $long_name       = '';
    public  $symbol          = '';

    protected $rules = [

        'symbol'     => 'required|string|unique:currency|Max:5',
        'short_name' => 'required|string|unique:currency|Max:5',
        'long_name'  => 'required|string|unique:currency|Max:15',

    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function storeCurrency()
    {
        # code...
        $validatedData = $this->validate();
        Currency::create( $this->data() );
        $this->emit('currencyAdded');
        $this->flushData();

       session()->flash('message', 'Data added successfully');

    }

    public function data()
    {
       $data    =    [

        'symbol'        =>  $this->symbol,
        'short_name'    =>  $this->short_name,
        'long_name'     =>  $this->long_name,

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
                $this->long_name  = '',
                $this->short_name = '',
                $this->symbol     = '',
            ]
        );
    }

    public function render()
    {
        return view('livewire.settings.currency.form');
    }
}
