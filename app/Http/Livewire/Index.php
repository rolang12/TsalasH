<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.index',[

            'iceCreams' => Product::with('category')->where('categories_id', '1')
            ->take(4)
            ->get(),

            'foods' => Product::with('category')->where('categories_id', '2')
            ->take(4)
            ->get(),

            'bebidas' => Product::with('category')->where('categories_id', '3')
            ->take(4)
            ->get(),

            'categories' => Category::all(),

        ]
    );
    }
}
