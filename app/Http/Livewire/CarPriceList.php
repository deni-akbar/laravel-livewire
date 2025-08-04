<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Car;

class CarPriceList extends Component
{
    public $cars = [];

    public function mount()
    {
        $this->cars = Car::all();
    }

    public function render()
    {
        return view('livewire.car-price-list');
    }
}
