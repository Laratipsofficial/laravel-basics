<?php

namespace App\Models;

use App\Builders\ProductBuilder;
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
     * Create a new Eloquent query builder for the model.
     *
     * @param  \Illuminate\Database\Query\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder|static
     */
    public function newEloquentBuilder($query)
    {
        return new ProductBuilder($query);
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
