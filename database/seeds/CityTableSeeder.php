<?php

use Illuminate\Database\Seeder;

class CityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->insert(['name' => 'Hà Nội', 'active' => 1]);
		DB::table('cities')->insert(['name' => 'Hồ Chí Minh', 'active' => 1]);
		DB::table('cities')->insert(['name' => 'Đà Nẵng', 'active' => 1]);
		DB::table('cities')->insert(['name' => 'Hải Phòng']);
		DB::table('cities')->insert(['name' => 'Cần Thơ']);
		DB::table('cities')->insert(['name' => 'An Giang']);
		DB::table('cities')->insert(['name' => 'Bà Rịa Vũng Tàu']);
		DB::table('cities')->insert(['name' => 'Bạc Liêu']);
		DB::table('cities')->insert(['name' => 'Bắc Cạn']);
		DB::table('cities')->insert(['name' => 'Bắc Giang']);
		DB::table('cities')->insert(['name' => 'Hải Dương']);
		DB::table('cities')->insert(['name' => 'Bắc Ninh']);
		DB::table('cities')->insert(['name' => 'Bến Tre']);
		DB::table('cities')->insert(['name' => 'Bình Dương']);
		DB::table('cities')->insert(['name' => 'Bình Định']);
		DB::table('cities')->insert(['name' => 'Bình Phước']);
		DB::table('cities')->insert(['name' => 'Bình Thuận']);
		DB::table('cities')->insert(['name' => 'Cà Mau']);
		DB::table('cities')->insert(['name' => 'Cao Bằng']);
		DB::table('cities')->insert(['name' => 'Đắk Lắk']);
		DB::table('cities')->insert(['name' => 'Đăk Nông']);
		DB::table('cities')->insert(['name' => 'Điện Biên']);
		DB::table('cities')->insert(['name' => 'Đồng Nai']);
		DB::table('cities')->insert(['name' => 'Đồng Tháp']);
		DB::table('cities')->insert(['name' => 'Gia Lai']);
		DB::table('cities')->insert(['name' => 'Hà Giang']);
		DB::table('cities')->insert(['name' => 'Hà Nam']);
		DB::table('cities')->insert(['name' => 'Hà Tĩnh']);
		DB::table('cities')->insert(['name' => 'Hậu Giang']);
		DB::table('cities')->insert(['name' => 'Hòa Bình']);
		DB::table('cities')->insert(['name' => 'Hưng Yên']);
		DB::table('cities')->insert(['name' => 'Khánh Hòa']);
		DB::table('cities')->insert(['name' => 'Kiên Giang']);
		DB::table('cities')->insert(['name' => 'Kon Tum']);
		DB::table('cities')->insert(['name' => 'Lai Châu']);
		DB::table('cities')->insert(['name' => 'Lâm Đồng']);
		DB::table('cities')->insert(['name' => 'Lạng Sơn']);
		DB::table('cities')->insert(['name' => 'Lào Cai']);
		DB::table('cities')->insert(['name' => 'Long An']);
		DB::table('cities')->insert(['name' => 'Nam Định']);
		DB::table('cities')->insert(['name' => 'Nghệ An']);
		DB::table('cities')->insert(['name' => 'Ninh Bình']);
		DB::table('cities')->insert(['name' => 'Ninh Thuận']);
		DB::table('cities')->insert(['name' => 'Phú Thọ']);
		DB::table('cities')->insert(['name' => 'Phú Yên']);
		DB::table('cities')->insert(['name' => 'Quảng Bình']);
		DB::table('cities')->insert(['name' => 'Quảng Nam']);
		DB::table('cities')->insert(['name' => 'Quảng Ngãi']);
		DB::table('cities')->insert(['name' => 'Quảng Ninh']);
		DB::table('cities')->insert(['name' => 'Quảng Trị']);
		DB::table('cities')->insert(['name' => 'Sóc Trăng']);
		DB::table('cities')->insert(['name' => 'Sơn La']);
		DB::table('cities')->insert(['name' => 'Tây Ninh']);
		DB::table('cities')->insert(['name' => 'Thái Bình']);
		DB::table('cities')->insert(['name' => 'Thái Nguyên']);
		DB::table('cities')->insert(['name' => 'Thanh Hóa']);
		DB::table('cities')->insert(['name' => 'Huế']);
		DB::table('cities')->insert(['name' => 'Tiền Giang']);
		DB::table('cities')->insert(['name' => 'Trà Vinh']);
		DB::table('cities')->insert(['name' => 'Tuyên Quang']);
		DB::table('cities')->insert(['name' => 'Vĩnh Long']);
		DB::table('cities')->insert(['name' => 'Vĩnh Phúc']);
		DB::table('cities')->insert(['name' => 'Yên Bái']);
    }
}
