<?php

namespace Database\Factories;

use App\Models\Car;
use App\Models\Mechanic;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CarFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Car::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'mechanic_id' => Mechanic::factory(),
            'model' => $this->faker->name,
        ];
    }
}
