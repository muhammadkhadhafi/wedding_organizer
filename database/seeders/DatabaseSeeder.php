<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Admin;
use App\Models\DaftarKlien;
use App\Models\GaleriFoto;
use App\Models\JasaPerusahaan;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Admin::factory(20)->create();

        JasaPerusahaan::factory(20)->create();

        GaleriFoto::factory(20)->create();

        DaftarKlien::factory(5)->create();
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Admin::create([
            'nama' => 'Muhammad Khadafi',
            'username' => 'khadafi',
            'password' => bcrypt('password')
        ]);
    }
}
