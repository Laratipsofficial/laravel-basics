<?php

namespace App\Models;

use App\Casts\MoneyCast;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $casts = [
        'is_active' => 'boolean',
        'price' => MoneyCast::class,
    ];

    public function getTitleAttribute($value)
    {
        return Str::title($value);
    }
}
