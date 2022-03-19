<?php

namespace App\Http\Livewire\Sabors;

use App\Models\SaborStock;
use Livewire\Component;

class SaborCua extends Component
{
    public $product;
    public function render()
    {
        return view('livewire.sabors.sabor-cua',[
            'sabores' => SaborStock::where('status', 'disponible')
            ->get(),
        ]);
    }
}
