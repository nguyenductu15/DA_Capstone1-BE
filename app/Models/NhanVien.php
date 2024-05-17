<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NhanVien extends Model
{
    use HasFactory;

    protected $table = 'nhan_viens';

    protected $fillable = [
        'ma_nhan_vien',
        'ho_va_ten',
        'ngay_sinh',
        'dia_chi',
        'ngay_bat_dau',
        'email',
        'password',
        'so_dien_thoai',
        'tinh_trang',
    ];
}
