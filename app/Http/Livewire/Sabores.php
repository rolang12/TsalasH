<?php

namespace App\Http\Livewire;

use App\Models\Sabor;
use App\Models\SaborStock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Livewire\Component;

class Sabores extends Component
{
    
    public function render()
    {
        return view('livewire.sabores' ,[
            'sabors' => SaborStock::all()]);
    }

    public function edit(SaborStock $sabor, $id)
    {
        $id     = Crypt::decrypt($id);
        $sabor   = SaborStock::findOrFail($id);
        
        return view('livewire.sabores-update', compact('sabor'));
    }
    
    public function update(Request $request, SaborStock $sabor)
    {
        
        $sabor = SaborStock::find($request->id);
        $sabor->status         = $request->status;
        $sabor->save();
        return redirect()->route('sabors.sabors')->with('status','¡Sabor Actualizado Exitosamente!');

    }

    public function destroy($id)
    {
        $id = Crypt::decrypt($id);
        SaborStock::findOrFail($id)->delete();

        return redirect()->route('sabors.sabors')->with('status','¡Sabor Eliminado Exitosamente!');

    }

}
