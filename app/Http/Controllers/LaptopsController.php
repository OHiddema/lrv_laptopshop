<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Laptop;

class LaptopsController extends Controller
{
    public function index() {
        $laptops = \App\Laptop::all();
        return view('laptops.index', ['laptops'=>$laptops]);
    }

    public function create() {
        return view('laptops.create');
    }

    public function store() {
        $laptop = New Laptop();
        $laptop->brand = request('brand');
        $laptop->name = request('name');
        $laptop->memory = request('memory');
        $laptop->price = request('price');
        $laptop->save();
        return redirect('/laptops');
    }

    public function edit($id) {
        $laptop = \App\Laptop::find($id);
        return view('laptops.edit', ['laptop'=>$laptop]);
    }

    public function update($id) {
        $laptop = \App\Laptop::find($id);
        $laptop->brand = request('brand');
        $laptop->name = request('name');
        $laptop->memory = request('memory');
        $laptop->price = request('price');
        $laptop->save();
        return redirect('/laptops');
    }

    public function destroy($id) {
        \App\Laptop::find($id)->delete();
        return redirect('/laptops');
    }
}
