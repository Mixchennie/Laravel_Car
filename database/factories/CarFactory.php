<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'description' => $this->faker->sentence,
            'model' => $this->faker->word,
            'produced_on' => $this->faker->date,
            'image' => 'car' . random_int(1, 3).'.jpg',
            'mf_id' => random_int(1, 50)
        ];
    }
}
