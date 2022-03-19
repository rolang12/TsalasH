<?php

namespace App\Http\Livewire\Products;

use Livewire\Component;

class OrderSingle extends Component
{
    public $product;

    public function render()
    {
        return view('livewire.products.order-single');
    }
}
