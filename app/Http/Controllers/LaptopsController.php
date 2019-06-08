<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaptopsController extends Controller
{
    public function index() {
        $laptops = \App\Laptop::all();
        return view('laptops.index', ['laptops'=>$laptops]);
    }
}
