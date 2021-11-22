<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    public function carType(){
        return $this->hasOne(CarType::class, 'type_id');
    }
    public function carBrand(){
        return $this->hasOne(CarBrand::class, 'brand_id');
    }
    public function carYear(){
        return $this->hasOne(CarBrand::class, 'year_id');
    }

}
