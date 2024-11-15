<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\taikhoan;
use Illuminate\Support\Facades\Hash;

class taikhoan_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        taikhoan::create([
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123456'), // Mã hóa mật khẩu
            'phanquyen' => 'admin',
        ]);
    }
}
