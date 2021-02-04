<?php

namespace App\Http\Livewire\Settings\Industry;

use Livewire\Component;
use App\Models\Industry;

class Form extends Component
{

    public $industry_type = '';
    public $creator = 1;

    protected $rules = [
        'industry_type' => 'required|string|Max:15',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function storeIndustry()
    {
        # code...
        $validatedData = $this->validate();
        Industry::create([

                'industry_type' => $this->industry_type,
                'created_by' => $this->creator,

            ]);
            session()->flash('message', 'Data added successfully');
            $this->emit('industryAdded');
            $this->industry_type = '';

    }

    public function render()
    {
        return view('livewire.settings.industry.form');
    }
}
