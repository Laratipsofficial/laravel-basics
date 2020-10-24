<?php

namespace Database\Seeders;

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

        // Product::factory()->count(10)->has(Comment::factory()->count(random_int(2, 3)))->create();

        // Country::factory()->count(3)->create()
        //     ->each(function ($c) {
        //         User::factory()->count(3)->create([
        //             'country_id' => $c->id,
        //         ]);
        //     });

        // User::get()->each(function ($user) {
        //     Post::factory()->count(2)->create([
        //         'user_id' => $user->id,
        //     ]);
        // });
    }
}
