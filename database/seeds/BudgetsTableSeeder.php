<?php

use Illuminate\Database\Seeder;

class BudgetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('budgets')->insert(['name' => 'Budget 1', 'active' => 1]);
        DB::table('budgets')->insert(['name' => 'Budget 2', 'active' => 1]);
        DB::table('budgets')->insert(['name' => 'Budget 3', 'active' => 1]);
        DB::table('budgets')->insert(['name' => 'Budget 4']);
        DB::table('budgets')->insert(['name' => 'Budget 5', 'active' => 1]);
    }
}
