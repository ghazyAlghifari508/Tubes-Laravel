<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PelaporSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        for ($i = 0; $i < 20; $i++) {
            DB::table('pelapor')->insert([
                'nama' => $faker->name,
                'nik' => $faker->unique()->nik(), // NIK acak khas Indonesia
                'email' => $faker->unique()->safeEmail,
                'telepon' => $faker->phoneNumber,
                'alamat' => $faker->address,
                'jenis_kelamin' => $faker->randomElement(['Laki-laki', 'Perempuan']),
                'tanggal_lahir' => $faker->date('Y-m-d', '2005-01-01'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
