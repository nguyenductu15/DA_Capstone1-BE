<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('nhan_viens', function (Blueprint $table) {
            $table->id();
            $table->string('ma_nhan_vien');
            $table->string('ho_va_ten');
            $table->date('ngay_sinh');
            $table->string('dia_chi');
            $table->date('ngay_bat_dau');
            $table->string('email');
            $table->string('password');
            $table->string('so_dien_thoai');
            $table->integer('tinh_trang');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('nhan_viens');
    }
};
