<?php

namespace App\Http\Livewire\Index;

use App\Models\Product;
use Livewire\Component;

class Comidas extends Component
{
    public function render()
    {
        return view('livewire.index.comidas',[
            'foods' => Product::with('category')->where('categories_id', '4')
            ->take(4)
            ->get(),
        ]);
    }
}
