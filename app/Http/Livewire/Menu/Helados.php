<?php

namespace App\Http\Livewire\Menu;

use App\Models\Product;
use Livewire\Component;

class Helados extends Component
{
    public function render()
    {
        return view('livewire.menu.helados',[
            'iceCreams' => Product::with('category')
            ->where('categories_id', '1')
            ->where('stock_min','>','0')
            ->get()
        ]);
    }
}
