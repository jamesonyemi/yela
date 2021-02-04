<?php

namespace App\Http\Livewire\Settings\Industry;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Industry;

class ShowIndustry extends Component
{

    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    protected $listeners = ['industryAdded' => '$refresh'];
    public    $search = '';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.settings.industry.show-industry', [

            'industries' => Industry::where('industry_type', 'like', '%'.$this->search.'%')
            ->orWhere('created_at', 'like', '%'.$this->search.'%')
            ->orWhere('updated_at', 'like', '%'.$this->search.'%')->latest()->paginate(),

         ]);
    }
}
