<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AppointmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $faker = Factory::create();
        for($i=0; $i < 4 ; $i++){
            DB::table('appointments')->insert([
                'first_time' => $faker->time('H:i:s'),
                'mintor_id' => rand(1,4),
                'slug' => 'appointments' . $i,
                'end_time' => $faker->time('H:i:s'),
                'dateoftime' => $faker->dateTime() ,
                'longoftime' => rand(0,15),
                'created_at' => now(),
            ]);
        }
    }
}
