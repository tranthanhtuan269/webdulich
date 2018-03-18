<?php

use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert(['name' => 'Service 1', 'active' => 1]);
        DB::table('services')->insert(['name' => 'Service 2', 'active' => 1]);
        DB::table('services')->insert(['name' => 'Service 3', 'active' => 1]);
        DB::table('services')->insert(['name' => 'Service 4']);
        DB::table('services')->insert(['name' => 'Service 5', 'active' => 1]);
    }
}
