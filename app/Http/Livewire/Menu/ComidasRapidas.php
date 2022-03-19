<?php

namespace App\Http\Livewire\Menu;

use App\Models\Product;
use Livewire\Component;

class ComidasRapidas extends Component
{
    public function render()
    {
        return view('livewire.menu.comidas-rapidas',[
            'fastFoods' => Product::with('category')
            ->where('categories_id', '4')
            ->where('stock_min','>','0')
            ->get()
        ]);
    }
}
