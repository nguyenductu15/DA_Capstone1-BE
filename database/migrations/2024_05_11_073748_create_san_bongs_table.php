<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('san_bongs', function (Blueprint $table) {
            $table->id();
            $table->string('ten_san');
            $table->string('dia_chi');
            $table->integer('so_san_kinh_doanh');
            $table->integer('gia_mac_dinh');
            $table->integer('tinh_trang');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('san_bongs');
    }
};
