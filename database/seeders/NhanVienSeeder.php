<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NhanVienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('nhan_viens')->delete();
        DB::table('nhan_viens')->truncate();
        DB::table('nhan_viens')->insert([
            [
                'ma_nhan_vien'      =>  '2621123',
                'ho_va_ten'         =>  'Nguyễn Đức Tú',
                'ngay_sinh'         =>  '2002-02-15',
                'dia_chi'           =>  'Đà Nẵng',
                'ngay_bat_dau'      => '2024-01-01',
                'so_dien_thoai'     =>  '0905.786.761',
                'email'             =>  'nguyenductu123@gmail.com',
                'password'          =>  bcrypt('12345678'),
                'tinh_trang'        =>  1,
            ],
        ]);
    }
}
