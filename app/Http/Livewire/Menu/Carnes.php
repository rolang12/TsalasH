<?php

namespace App\Http\Livewire\Menu;

use App\Models\Product;
use Livewire\Component;

class Carnes extends Component
{
    public function render()
    {
        return view('livewire.menu.carnes',[
            'meats' => Product::with('category')
            ->where('categories_id', '5')
            ->where('stock_min','>','0')
            ->get()
        ]);
    }
}
