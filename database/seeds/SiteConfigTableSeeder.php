<?php

use Illuminate\Database\Seeder;

class SiteConfigTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('site_configs')->insert(['name' => 'site_name','text' => 'dulich.gmon.vn']);
        DB::table('site_configs')->insert(['name' => 'address1','text' => 'Duong Dinh Nghe']);
        DB::table('site_configs')->insert(['name' => 'address2','text' => 'Cau Giay - Ha Noi']);
        DB::table('site_configs')->insert(['name' => 'phone1','text' => '0973.619.398']);
        DB::table('site_configs')->insert(['name' => 'phone2','text' => '094.707.9055']);
        DB::table('site_configs')->insert(['name' => 'open_time','text' => 'Mon -Fri: 9:00-19:00']);
        DB::table('site_configs')->insert(['name' => 'close_time','text' => 'Sunday Closed']);
        DB::table('site_configs')->insert(['name' => 'copyright','text' => 'Gmon.vn']);
    }
}
