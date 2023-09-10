<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($j=0 ; $j < 5 ; $j++){
            DB::table('tags')->insert([
                'tag_name' => fake()->name(),
                'slug' =>  Str::random(10),
                'created_at' => now(),
            ]);
        }
    }
}
