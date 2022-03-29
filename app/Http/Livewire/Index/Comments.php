<?php

namespace App\Http\Livewire\Index;

use App\Models\Comment;
use App\Models\Order;
use App\Models\ProductOrder;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Comments extends Component
{
    public function render()
    {
        return view('livewire.index.comments', [
            'comments' => Comment::with('user')->get()->take(-3)
        ]);
    }

   
}
