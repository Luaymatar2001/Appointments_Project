<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MintorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i=0;$i < 4 ; $i++){
            DB::table('mintors')->insert([
                'name' => fake()->name(),
                'slug' => 'Mintor' .$i,
                'institution_id' => rand(1,3),
                'created_at' => now(),
            ]);
        }
    }
}
