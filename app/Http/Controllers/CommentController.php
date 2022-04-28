<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Http\Requests\StoreCommentRequest;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class CommentController extends Controller
{
    
   
    public function store(StoreCommentRequest $request)
    {
        
    
        $hasOrder = Order::with('user')
        ->where('users_id', Auth::user()->id)
        ->where('status', 'confirmado')
        ->get();

        if ($hasOrder->isEmpty()) {
            return redirect()->back()->withErrors('¡Debes tener compras registradas para poder comentar!');
        }

        $data = $request->validated();
        
        
        if ($data) {

            $data['content'] = $data['content'];
            $data['users_id'] = Auth::user()->id;

            $user = Comment::create($data);

            return redirect()->back()->with('status','¡Gracias por enviarnos tu experiencia');
        
        }

        return redirect()->back()->withErrors($data);

    }

   
    public function destroy($id)
    {
         $id = Crypt::decrypt($id);
        Comment::findOrFail($id)->delete();

        return redirect()->back()->with('status','Producto borrado Satisfactoriamente!');
    
    }
}
