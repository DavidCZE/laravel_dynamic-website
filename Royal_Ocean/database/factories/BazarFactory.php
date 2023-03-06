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
            'znacka' => $this->faker->company(),
            'rok_vyroby' => $this->faker->year(),
            'uvod' => $this->faker->paragraph(1),
            'popisek' => $this->faker->paragraph(7),
            'lokace'=> $this->faker->city(),
            'email' => $this->faker->email(),
            'cislo' => $this->faker->phoneNumber(),
        ];
    }
}
