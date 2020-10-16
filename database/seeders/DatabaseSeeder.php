<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();

        Product::factory()->count(10)->has(Comment::factory()->count(random_int(2, 3)))->create();
    }
}
