<?php

namespace App\Http\Livewire\Sabors;


use App\Models\SaborStock;
use Livewire\Component;

class SaborDos extends Component
{
    public $product;
    public function render()
    {
        return view('livewire.sabors.sabor-dos',[
            'sabores' => SaborStock::where('status', 'disponible')
            ->get(),
        ]);
    }
}
