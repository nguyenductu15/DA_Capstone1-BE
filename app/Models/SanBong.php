<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SanBong extends Model
{
    use HasFactory;

    protected $table ='san_bongs';

    protected $fillable = [
            'ten_san',
            'dia_chi',
            'so_san_kinh_doanh',
            'gia_mac_dinh',
            'tinh_trang',
    ];
}
