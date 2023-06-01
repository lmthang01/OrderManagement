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
        DB::table('users')->insert([
            'name' => 'Lê Thắng',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123456789'),
            'phone' => '0869888999',
            'status' => 2, // Type ADMIN
            'address' => 'Cần Thơ',
            'created_at' => Carbon::now()
        ]);
       
    }
}
