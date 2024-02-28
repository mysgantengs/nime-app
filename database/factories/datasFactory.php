<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\datas>
 */
class datasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "images" => $this->faker->imageUrl(),
            "cardtitle" => $this->faker->sentence(),
            "descriptions" =>  $this->faker->sentence()
        ];
    }
}
