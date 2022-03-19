<?php

namespace App\Http\Livewire\Index;

use App\Models\Category;
use Livewire\Component;

class Categorias extends Component
{
    public function render()
    {
        return view('livewire.index.categorias',[
            'categories' => Category::all(),
        ]);
    }
}
