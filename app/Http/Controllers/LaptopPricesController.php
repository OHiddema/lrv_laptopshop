<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Laptop;
use App\Price;

class LaptopPricesController extends Controller
{
    public function store(Laptop $laptop) {
        Price::create([
            'laptop_id' => $laptop->id,
            'price' => request('price'),
            'startDate' => request('startDate')
        ]);
        return back();
    }
}
