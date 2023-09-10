<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class CitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cities_list = ['Gaza','Khan Younes' , 'Rafah' , 'Dair Al Balah', 'Beit Hanoun'];
        
        foreach($cities_list as $city){
            DB::table('cities')->insert([
                'name' => $city,
                'slug' => $city . '_slug',
                'created_at' => now(),
            ]);
        }
    }
}
