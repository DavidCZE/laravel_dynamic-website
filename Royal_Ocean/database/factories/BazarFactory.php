<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bazar>
 */
class BazarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nazev' => $this->faker->firstNameMale(),
            'rok vyroby' => $this->faker->year(),
            'popisek' => $this->faker->paragraph(7),
        ];
    }
}