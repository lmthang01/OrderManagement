<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // DB::table('users')->insert([
        //     'name' => 'Lê Trường',
        //     'email' => 'truong123@gmail.com',
        //     'password' => bcrypt('123456789'),
        //     'phone' => '0869888999',
        //     'status' => 1, // Type ADMIN
        //     'address' => 'Cần Thơ',
        //     'created_at' => Carbon::now()
        // ]);
        DB::table('orders')->insert([
            'code_customer' => 4,
            'deliver' => 'Huỳnh Nhật Trường',
            'contact_id' => 2,// Địa chỉ văn phòng
            'guarantee' =>'NULL',
            'delivery_address'=> 'Cầu Đỏ - Vĩnh Lộc - Hồng Dân - Bạc Liêu',
            'payments' => 'Thanh toán khi nhận hàng',
            'delivery_time'=>  Carbon::now(),
            'order_date' => Carbon::now(),
            'note'=>'NULL',
            'status'=> 1,
            'user_id' => 1,// Thuộc user nào tạo

            'created_at' => Carbon::now()
        ]);
        
    }
}
