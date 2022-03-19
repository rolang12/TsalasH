<?php

namespace App\Http\Livewire\Menu;

use App\Models\Product;
use Livewire\Component;

class BebidasCalientes extends Component
{
    public function render()
    {
        return view('livewire.menu.bebidas-calientes',[
            'beverages' => Product::with('category')
            ->where('categories_id', '3')
            ->where('stock_min','>','0')
            ->get()
        ]);
    }
}
