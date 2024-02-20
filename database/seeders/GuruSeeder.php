<?php

namespace Database\Seeders;

use Faker\Factory;
use App\Models\Guru;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create('id_ID');


        for ($i=0; $i <= 5; $i++) {
            Guru::create([
                'nama' => $faker->name,
                'no_hp' => $faker->phoneNumber,
                'foto' => 'foto',
            ]);
        }
    }
}
