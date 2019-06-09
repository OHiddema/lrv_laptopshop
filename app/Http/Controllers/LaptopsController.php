<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Laptop;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

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
        // backend validation
        $valitated = request()->validate([
            'brand'=>['required', 'min:2'],
            'name'=>['required', 'min:2'],
            'memory'=>'required',
            'price'=>'required'
        ]);

        Laptop::create($valitated);
        return redirect('/laptops');
    }

    public function edit(Laptop $laptop) {
        return view('laptops.edit', ['laptop'=>$laptop]);
    }

    public function update(Laptop $laptop) {
        $laptop->update(request(['brand', 'name', 'memory', 'price']));
        return redirect('/laptops');
    }

    public function destroy(Laptop $laptop) {
        $laptop->delete();
        return redirect('/laptops');
    }

    public function show(Laptop $laptop) {
        return view('laptops.show', ['laptop'=>$laptop]);
    }

    public function alldata() {
        $laptops = \App\Laptop::all();
        return view('laptops.alldata', ['laptops'=>$laptops]);
    }

}
