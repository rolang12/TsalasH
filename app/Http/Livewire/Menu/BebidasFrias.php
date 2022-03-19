<?php

namespace App\Http\Livewire\Menu;

use App\Models\Product;
use Livewire\Component;

class BebidasFrias extends Component
{
    public function render()
    {
        return view('livewire.menu.bebidas-frias',[
            'coldBeverages' => Product::with('category')
            ->where('categories_id', '2')
            ->where('stock_min','>','0')
            ->get()
        ]);
    }
}
