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
            'nazev' => $this->faker->sentence(),
            'tagy' => 'plachetnice, motorová loď',
            'rok vyroby' => $this->faker->year(),
            'popisek' => $this->faker->paragraph(7),

        ];
    }
}
