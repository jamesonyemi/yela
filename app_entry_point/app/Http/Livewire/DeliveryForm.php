<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\DeliveryStatus;

class DeliveryForm extends Component
{
    public $delivery_type = '';
    public $createdBy = 1;

    protected $rules = [
        'delivery_type' => 'required|string|Max:15',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function storeDeliveryType()
    {
        # code...
        $validatedData = $this->validate();
        DeliveryStatus::create([

                'delivery_type' => $this->delivery_type,
                'created_by' => $this->createdBy,

            ]);
            // return redirect()->route('admin.delivery-status.index');
            session()->flash('message', 'Data added successfully');
            $this->emit('deliveryStatusAdded');
            $this->delivery_type = '';

    }

    public function render()
    {
        return view('livewire.settings.delivery.delivery-form');
    }
}
