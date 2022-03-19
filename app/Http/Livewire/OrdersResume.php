<?php

namespace App\Http\Livewire;

use App\Models\Order;
use Carbon\Carbon;
use Livewire\Component;
use App\Models\ProductOrder;

class OrdersResume extends Component
{
    public function render()
    {
        $hoy = Carbon::today();
        return view('livewire.orders-resume', [
            'orders' => Order::with('user','product')
            ->where('status','confirmado')
            ->where('created_at','=', $hoy)
            ->get()
            
        ]);
    }
}
