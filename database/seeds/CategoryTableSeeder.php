<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert(['name' => 'Category 1', 'active' => 1]);
        DB::table('categories')->insert(['name' => 'Category 2', 'active' => 1]);
        DB::table('categories')->insert(['name' => 'Category 3', 'active' => 1]);
        DB::table('categories')->insert(['name' => 'Category 4']);
        DB::table('categories')->insert(['name' => 'Category 5', 'active' => 1]);
    }
}
