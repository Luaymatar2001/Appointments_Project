<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MainServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i=0 ; $i < 4 ; $i++){
            DB::table('main_services')->insert([
                'name' => fake()->name(),
                'slug' => 'main_service' . $i,
                'description'=>fake()->text(15),
                'time_of_services' => rand(5,20),
                'created_at' => now(),

            ]);
        }
    }
}
