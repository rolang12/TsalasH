<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index() {

        return view('dashboard');
    }


    public function menu() {

        return view('menu');

    }


}
