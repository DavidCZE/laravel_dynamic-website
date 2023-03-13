<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produkty>
 */
class ProduktyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'pnazev' => $this->faker->firstNameFemale(),
            'pcena' => $this->faker->randomDigit(),
            'prok_vyroby' => $this->faker->year(),
            'puvod' => $this->faker->paragraph(1),
            'ppopisek' => $this->faker->paragraph(7),

        ];
    }
}
