<?php

namespace App\Http\Livewire\Index;

use App\Models\Product;
use Livewire\Component;

class Helados extends Component
{
 
    public function render()
    {
        return view('livewire.index.helados',[
            'iceCreams' => Product::with('category')->where('categories_id', '1')
            ->where('stock_min','>','1')
            ->take(4)
            ->get(),
        ]);
    }
}
