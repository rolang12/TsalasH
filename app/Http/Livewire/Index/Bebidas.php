<?php

namespace App\Http\Livewire\Index;

use App\Models\Product;
use Livewire\Component;

class Bebidas extends Component
{
    public function render()
    {
        return view('livewire.index.bebidas',[
            'bebidas' => Product::with('category')->where('categories_id', '2')
            ->take(4)
            ->get(),
        ]);
    }
}
