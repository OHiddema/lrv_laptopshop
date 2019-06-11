<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laptop extends Model
{
    protected $guarded = [];

    public function prices() {
        return $this->hasMany(Price::class);
    }
}
