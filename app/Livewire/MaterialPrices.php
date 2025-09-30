<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\BuildingMaterialPrice;

class MaterialPrices extends Component
{
    public $prices = [];

    public function mount()
    {
        $this->loadPrices();
    }

    public function loadPrices()
    {
        $this->prices = BuildingMaterialPrice::latest()->get();
    }

    public function render()
    {
        return view('livewire.material-prices');
    }
}
