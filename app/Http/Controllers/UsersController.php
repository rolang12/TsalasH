<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Order;
use App\Models\Rol;
use Illuminate\Support\Facades\Crypt;
use App\Models\Services\UsersServices;

class UsersController extends Controller
{
    // use UsersServices;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public static function index()
    {
        
        $users = User::join('countries', 'users.countries_id', '=', 'countries.country_id')
        ->get(['users.id','users.name','users.email',
        'users.created_at','users.rol','countries.country']);
        
        return view('crud.crud', compact('users'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $users = User::all(['id','name','last_name','document_id','phone','email']);
        
        return view('users.crud-users', compact('users'));

    }

    public function showUser($id)
    {

        $id     = Crypt::decrypt($id);
        $user   = User::where('id', $id)->first();
                
        return view('users.show', compact('user'));

    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $id     = Crypt::decrypt($id);
        $user   = User::findOrFail($id);
        
        return view('users.update', compact('user'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $user = User::find($request->id);
        $user->name         = $request->name;
        $user->email        = $request->email;
        $user->rol          = $request->rol;
        $user->status          = $request->status;
        $user->phone          = $request->phone;
        $user->address          = $request->address;
        $user->save();

        return redirect()->route('user.user.show')->with('status','Usuario actualizado Sastisfactoriamente!');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $user = User::find($id);
        $id = Crypt::decrypt($id);
        $guest = User::findOrFail($id)->delete();

        return redirect()->back()->with('status','Usuario borado Satisfactoriamente!');
    
    }
}
