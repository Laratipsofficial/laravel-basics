<?php

namespace App\Builders;

use Illuminate\Database\Eloquent\Builder;

class ProductBuilder extends Builder
{
    public function inStock()
    {
        $this->where('quantity', '>', 0);

        return $this;
    }

    public function active()
    {
        $this->where('is_active', true);

        return $this;
    }

    public function canBeBought()
    {
        $this->active()->inStock();

        return $this;
    }
}
