<?php

use Illuminate\Database\Seeder;
use Cviebrock\EloquentSluggable\Sluggable;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('city')->insert([
            ['name' => 'Hà Nội','slug'=>Str::slug('Hà Nội','-')],
            ['name' => 'Huế','slug'=>Str::slug('Huế','-')],
            ['name' => 'Hồ Chí Minh','slug'=>Str::slug('Hồ Chí Minh','-')],
            ['name' => 'Đã Nắng','slug'=>Str::slug('Đã Nắng','-')],
            ['name' => 'Khánh Hòa','slug'=>Str::slug('Khánh Hòa','-')],
            ['name' => 'Lào Cai','slug'=>Str::slug('Lào Cai','-')],
            ['name' => 'Quảng Ninh','slug'=>Str::slug('Quảng Ninh','-')],
            ['name' => 'Vĩnh Phúc','slug'=>Str::slug('Vĩnh Phúc','-')],
            ['name' => 'Thái Nguyên','slug'=>Str::slug( 'Thái Nguyên','-')],
            ['name' => 'Phú Thọ','slug'=>Str::slug('Phú Thọ','-')],
            ['name' => 'An Giang','slug'=>Str::slug('An Giang','-')],
            ['name' => 'Cà Mau','slug'=>Str::slug('Cà Mau','-')],
            ['name' => 'Thanh Hóa','slug'=>Str::slug('Thanh Hóa','-')],
        ]);
        DB::table('tags')->insert([
            ['name' => 'Giới thiệu','slug'=>Str::slug('Giới thiệu','-'),'status_home'=>'0','status_menu'=>'1','type'=>'0'],
            ['name' => 'Lịch sử dòng họ','slug'=>Str::slug('Lịch sử dòng họ','-'),'status_home'=>'1','status_menu'=>'1','type'=>'0'],
            ['name' => 'Thông tin sự kiện','slug'=>Str::slug('Thông tin sự kiện','-'),'status_home'=>'1','status_menu'=>'1','type'=>'0'],
            ['name' => 'Khuyến học khuyến tài','slug'=>Str::slug('Khuyến học khuyến tài','-'),'status_home'=>'1','status_menu'=>'1','type'=>'0'],
            ['name' => 'Người tốt việc tốt','slug'=>Str::slug('Người tốt việc tốt','-'),'status_home'=>'1','status_menu'=>'1','type'=>'0'],
            ['name' => 'Cộng đồng họ lưu đóng góp','slug'=>Str::slug('Cộng đồng họ lưu đóng góp','-'),'status_home'=>'1','status_menu'=>'1','type'=>'0'],
            ['name' => 'Thư viện','slug'=>Str::slug('Thư viện','-'),'status_home'=>'1','status_menu'=>'1','type'=>'1'],
            
        ]);
        DB::table('users')->insert([
            ['name'=>'admin','email'=>'admin@gmail.com','password' => Hash::make('admin'),'role'=>'1','status'=>'1']
        ]);
    }
}
