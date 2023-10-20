<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\JasaPerusahaan>
 */
class JasaPerusahaanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'judul' => fake()->sentence(),
            'harga' => fake()->numberBetween(500000, 1000000),
            'kapasitas' => fake()->numberBetween(800, 1200),
            'lokasi' => fake()->city(),
            'deskripsi' => fake()->text()
        ];
    }
}
