<?php

namespace Database\Seeders;

use App\Models\Pengajar;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PengajarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create('id_ID');
        for ($i=0; $i < 4; $i++) {
            Pengajar::create([
                'id_guru' => $faker->numberBetween(1,5),
                'id_mapel' => $faker->numberBetween(1,4),
                'kelas' => $faker->randomElement(['X-PPLG','XI-PPLG','XII-PPLG']),
                'jam_pelajaran' => $faker->numberBetween(1,8),
            ]);
        }
    }
}
