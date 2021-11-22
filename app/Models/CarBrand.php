<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarBrand extends Model
{
    use HasFactory;

    public function brand(){
        $this->belongsToMany(Car::class,'car','brand_id');
    }
}
