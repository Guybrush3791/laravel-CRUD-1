<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Saint>
 */
class SaintFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake() -> firstName(),
            'birdPlace' => fake() -> city(),
            'blessingDate' => fake() -> date(),
            'miracleCount' => fake() -> numberBetween(5, 1000),
        ];
    }
}
