<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory;

    // protected $casts = [
    //     'is_active' => 'boolean',
    //     'price' => MoneyCast::class,
    // ];

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

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
}
