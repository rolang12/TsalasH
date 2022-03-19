<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\UserRol;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\Location;

class HomeController extends Controller
{
    public function index() {

        return view('dashboard');
    }


    public function menu() {

        return view('menu');

    }


}
