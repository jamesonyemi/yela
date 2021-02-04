<?php

namespace App\Http\Livewire\Settings\Delivery;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\DeliveryStatus;

class AllDeliveryStatus extends Component
{
    use WithPagination;

    public $search = '';
    protected $paginationTheme = 'bootstrap';
    protected $listeners = ['deliveryStatusAdded' => '$refresh'];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.settings.delivery.all-delivery-status', [

            'delivery' => DeliveryStatus::where('delivery_type', 'like', '%'.$this->search.'%')->latest()->orderBy('status_id', 'desc')->reorder('created_at', 'desc')->paginate(),

         ]);
    }
}
