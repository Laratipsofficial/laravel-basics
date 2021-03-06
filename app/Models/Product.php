<?php

namespace App\Models;

use App\Builders\ProductBuilder;
use App\Collections\ProductCollection;
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

    /**
     * Create a new Eloquent Collection instance.
     *
     * @param  array  $models
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function newCollection(array $models = [])
    {
        return new ProductCollection($models);
    }

    public function getTitleAttribute($value)
    {
        return Str::title($value);
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
}
