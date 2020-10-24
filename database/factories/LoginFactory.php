<?php

namespace Database\Factories;

use App\Models\Login;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class LoginFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Login::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'ip' => $this->faker->ipv4,
            'logged_in_at' => $this->faker->dateTime,
        ];
    }
}
