<?php

use Illuminate\Database\Seeder;

class ActivitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('activities')->insert(['name' => 'Activity 1', 'active' => 1]);
        DB::table('activities')->insert(['name' => 'Activity 2', 'active' => 1]);
        DB::table('activities')->insert(['name' => 'Activity 3', 'active' => 1]);
        DB::table('activities')->insert(['name' => 'Activity 4', 'active' => 0]);
        DB::table('activities')->insert(['name' => 'Activity 5', 'active' => 1]);
    }
}
