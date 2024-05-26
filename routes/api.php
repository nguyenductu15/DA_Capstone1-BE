<?php

use App\Http\Controllers\KhachHangController;
use App\Http\Controllers\NhanVienController;
use App\Http\Controllers\SanBongController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/nhan-vien/data', [NhanVienController::class, 'getData']);
Route::post('/nhan-vien/create', [NhanVienController::class, 'store']);
Route::delete('/nhan-vien/delete/{id}', [NhanVienController::class, 'destroy']);
Route::put('/nhan-vien/update', [NhanVienController::class, 'update']);
Route::put('/nhan-vien/doi-trang-thai', [NhanVienController::class, 'doiTrangThai']);


Route::get('/san-bong/data', [SanBongController::class, 'getData']);
Route::post('/san-bong/create', [SanBongController::class, 'store']);
Route::delete('/san-bong/delete/{id}', [SanBongController::class, 'destroy']);
Route::put('/san-bong/update', [SanBongController::class, 'update']);
Route::put('/san-bong/doi-trang-thai', [SanBongController::class, 'doiTrangThai']);


Route::get('/khach-hang/data', [KhachHangController::class, 'getData']);
Route::put('/khach-hang/doi-trang-thai', [KhachHangController::class, 'doiTrangThai']);
Route::delete('/khach-hang/delete/{id}', [KhachHangController::class, 'destroy']);
Route::put('/khach-hang/update', [KhachHangController::class, 'update']);
Route::post('/dang-ky', [KhachHangController::class, 'dangKy']);
