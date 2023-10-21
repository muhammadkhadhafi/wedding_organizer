<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\GaleriFoto>
 */
class GaleriFotoFactory extends Factory
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
            'deskripsi' => fake()->text(),
            'tanggal_kegiatan' => fake()->dateTimeBetween('2022-01-01', 'now')
        ];
    }
}
