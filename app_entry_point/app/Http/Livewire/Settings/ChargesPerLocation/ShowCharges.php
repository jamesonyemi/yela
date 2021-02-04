<?php

namespace App\Http\Livewire\Settings\ChargesPerLocation;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\ChargesPerLocation;

class ShowCharges extends Component
{

    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    protected $listeners = ['chargesAdded' => '$refresh'];
    public    $search = '';

    public function updatingSearch()
    {
        $this->resetPage();
    }


    public function render()
    {
        return view('livewire.settings.charges-per-location.show-charges', [

            'chargesPerLocation' => ChargesPerLocation::where('country_of_receiver', 'like', '%'.$this->search.'%')
                ->orWhere('country_of_sender', 'like', '%'.$this->search.'%')
                ->orWhere('unit_price', 'like', '%'.$this->search.'%')->latest()->paginate(),

         ]);
    }
}
