<?php

namespace App\Models;

use App\Casts\MoneyCast;
use App\Scopes\ActiveScope;
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

    public function scopeInStock($query)
    {
        return $query->where('quantity', '>', 0);
    }

    public function scopeCanBeBought($query)
    {
        return $query->active()->inStock();
    }

    protected static function booted()
    {
        // static::addGlobalScope(new ActiveScope);
    }
}
