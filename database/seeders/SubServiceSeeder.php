<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($j=0; $j < 10 ; $j++){
            DB::table('sub_services')->insert([
                'name' => 'sub_service'. $j,
                'slug' => 'sub_service_slug' .$j,
                'mainservices_id' => rand(1,4),
                'mintor_id' => rand(1,4),
                'total_time' => rand(5,120), 
                'created_at'=>now(),
            ]);
        }
    }
}
