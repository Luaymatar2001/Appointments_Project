<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        for($i =1 ;  $i < 3 ; $i++){
            DB::table('admins')->insert([
                'first_name' => "admin$i",
                'last_name' => 'user' .$i,
                'phone_number' => (string) random_int(1000000000, 9999999999),
                'email'=> Str::random(6) . "@gmial.com",
                'password' => 'admin',
                'type' => '1',
                'slug' => "Admin$i",
                'created_at' => now(),
            ]);
        }
    }
}
