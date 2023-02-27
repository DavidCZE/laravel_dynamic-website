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
            'nazev' => $this->faker->firstNameFemale(),
            'rok vyroby' => $this->faker->year(),
            'uvod' => $this->faker->paragraph(1),
            'popisek' => $this->faker->paragraph(7),

        ];
    }
}
