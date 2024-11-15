<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            // LoaiAnPhamSeeder::class,
            // AnPhamSeeder::class,
            // KhachHangSeeder::class,
            // GioHangSeeder::class,
            // NhanVienSeeder::class,
            taikhoan_seeder::class,
            // TinTucSeeder::class,
            // DonDatTruocSeeder::class,
            // DonHangSeeder::class,
            // DanhGiaSeeder::class,
        ]);
    }
}

