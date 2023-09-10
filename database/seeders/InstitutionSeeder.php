<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InstitutionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i=0; $i < 3 ; $i++){
            DB::table('institutions')->insert([
                'name' => fake()->name(),
                'slug' => 'institution' . $i,
                'location_id' => rand(1,3),
                'phone_number' => (string) random_int(1000000000, 9999999999),
                'email' => fake()->unique()->safeEmail(),
                'password' => 'institution' . $i,
                'category_id' => rand(1,3),
                'created_at' => now(),
            ]);
        }
    }
}
