<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DaftarKlien>
 */
class DaftarKlienFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => fake()->name(),
            'deskripsi' => fake()->text(),
            'tanggal_kegiatan' => fake()->dateTimeBetween('2022-01-01', 'now')
        ];
    }
}
