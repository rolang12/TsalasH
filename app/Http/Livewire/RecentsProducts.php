<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class RecentsProducts extends Component
{
    public function render()
    {
        return view('livewire.recents-products',[
            'recent' => Product::with('category')->get()->random(4)

        ]);
    }
}
