<?php

namespace App\Http\Livewire\Settings\ItemCategory;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\ItemCategory;

class ItemType extends Component
{

    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    protected $listeners = ['itemCategoryAdded' => '$refresh'];
    public    $search = '';


    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.settings.item-category.item-type', [

            'item_categories' => ItemCategory::where('cat_type', 'like', '%'.$this->search.'%')->latest()->paginate(),

         ]);
    }
}
