<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = ['category1','category2','category3'];

        foreach($categories as $category){
            DB::table('categories')->insert([
                'name' => $category,
                'slug' => $category . "_slug",
                'created_at' => now(),
            ]);
        }
    }
}
