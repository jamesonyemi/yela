<?php

namespace App\Http\Livewire\Settings\ItemCategory;

use Livewire\Component;
use App\Models\ItemCategory;

class CategoryForm extends Component
{

    public $category = '';
    public $creator = 1;

    protected $rules = [
        'category' => 'required|string|Max:15',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function storeCategory()
    {
        # code...
        $validatedData = $this->validate();
        ItemCategory::create([

                'cat_type' => $this->category,
                'creator' => $this->creator,

            ]);
            session()->flash('message', 'Data added successfully');
            $this->emit('itemCategoryAdded');
            $this->category = '';

    }


    public function render()
    {
        return view('livewire.settings.item-category.category-form');
    }
}
