<?php

namespace App\Http\Livewire\Settings\Currency;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Currency;

class ShowCurrency extends Component
{

    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    protected $listeners = ['currencyAdded' => '$refresh'];
    public    $search = '';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.settings.currency.show-currency', [

            'currencies' => Currency::where('long_name', 'like', '%'.$this->search.'%')
                ->orWhere('short_name', 'like', '%'.$this->search.'%')
                ->orWhere('symbol', 'like', '%'.$this->search.'%')->latest()->paginate(),

         ]);
    }
}
