<?php

namespace App\Collections;

use Illuminate\Database\Eloquent\Collection;

class ProductCollection extends Collection
{
    public function drafts()
    {
        return $this->filter(function ($product) {
            return $product->status === 'Draft';
        });
    }

    public function published()
    {
        return $this->filter(function ($product) {
            return $product->status === 'Published';
        });
    }

    public function scheduled()
    {
        return $this->filter(function ($product) {
            return $product->status === 'Scheduled';
        });
    }
}
