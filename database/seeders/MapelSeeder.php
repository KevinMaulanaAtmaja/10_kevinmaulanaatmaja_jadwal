<?php

namespace Database\Seeders;

use Faker\Factory;
use App\Models\Mapel;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;

class MapelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create('id_ID');

        for ($i=0; $i < 5; $i++) {
            Mapel::create([
                'nama_mapel' => $faker->randomElement(['Matematika', 'IPA', 'IPS', 'Sejarah']),
            ]);
        }
    }
}
