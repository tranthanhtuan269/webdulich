<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategoryTableSeeder::class);
        $this->call(CityTableSeeder::class);
        $this->call(SiteConfigTableSeeder::class);
        $this->call(ServicesTableSeeder::class);
        $this->call(ActivitiesTableSeeder::class);
        $this->call(DurationsTableSeeder::class);
        $this->call(BudgetsTableSeeder::class);
    }
}
