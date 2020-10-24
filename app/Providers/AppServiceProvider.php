<?php

namespace App\Providers;

use App\Models\Post;
use App\Models\Product;
use App\View\Components\Ui\Alert;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::component('alert', Alert::class);

        Relation::morphMap([
            'posts' => Post::class,
            'products' => Product::class,
        ]); 
    }
}
