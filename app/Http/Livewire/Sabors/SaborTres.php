<?php

namespace App\Http\Livewire\Sabors;

use App\Models\SaborStock;
use Livewire\Component;

class SaborTres extends Component
{
    public $product;
    public function render()
    {
        return view('livewire.sabors.sabor-tres',[
            'sabores' => SaborStock::where('status', 'disponible')
            ->get(),
        ]);
    }
}
