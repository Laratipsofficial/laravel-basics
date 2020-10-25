<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->sentence;

        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'price' => random_int(50, 1000),
            'quantity' => random_int(0, 5),
            'views' => random_int(1, 1000),
            'is_active' => $this->faker->boolean(90),
            'status' => $this->faker->randomElement(['Draft', 'Published' , 'Scheduled']),
        ];
    }
}
