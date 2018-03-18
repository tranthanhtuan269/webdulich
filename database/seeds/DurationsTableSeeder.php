<?php

use Illuminate\Database\Seeder;

class DurationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('durations')->insert(['name' => 'Duration 1', 'active' => 1]);
        DB::table('durations')->insert(['name' => 'Duration 2', 'active' => 1]);
        DB::table('durations')->insert(['name' => 'Duration 3', 'active' => 1]);
        DB::table('durations')->insert(['name' => 'Duration 4']);
        DB::table('durations')->insert(['name' => 'Duration 5', 'active' => 1]);
    }
}
