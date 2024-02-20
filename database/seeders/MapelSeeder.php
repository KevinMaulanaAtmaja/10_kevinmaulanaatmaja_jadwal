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

        Mapel::create([
            'nama_mapel' => 'Matematika',
        ]);
        Mapel::create([
            'nama_mapel' => 'IPA',
        ]);
        Mapel::create([
            'nama_mapel' => 'IPS',
        ]);
        Mapel::create([
            'nama_mapel' => 'Sejarah',
        ]);
    }
}
