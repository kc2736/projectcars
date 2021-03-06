<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarYear extends Model
{
    use HasFactory;

    public function year(){
        $this->belongsToMany(Car::class,'car','year_id');
    }
}
