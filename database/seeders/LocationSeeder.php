<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i=0 ; $i < 3 ; $i++){
            DB::table('locations')->insert([
                'name' => 'location' . $i,
                'slug' => 'location' . $i,
                'city_id' => rand(1,5),
                'location_code' => Str::random(10),
                'created_at' => now(),
            ]);
        }
    }
}
