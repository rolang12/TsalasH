<?php
namespace App\Http\Livewire\Sabors;

use App\Models\Category;
use App\Models\SaborStock;
use Livewire\Component;

class Saboruno extends Component
{
    public $product;
    
    public function render()
    {
        return view('livewire.sabors.saboruno',[
            'sabores' => SaborStock::where('status', 'disponible')
            ->get(),
        ]);
    }
}
