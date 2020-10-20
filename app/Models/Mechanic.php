<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mechanic extends Model
{
    use HasFactory;

    public function car()
    {
        return $this->hasOne(Car::class);
    }

    public function owner()
    {
        return $this->hasOneThrough(
            Owner::class,
            Car::class
        );
    }
}
