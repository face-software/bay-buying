<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('categories')->insert([
            'category_name' => Str::random(10),
            'slug' => Str::random(10),
            'status' => 1,
   ]);

    }
}
