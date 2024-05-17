<?php

use App\Http\Controllers\NhanVienController;
use App\Http\Controllers\SanBongController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/nhan-vien/data', [NhanVienController::class, 'getData']);
Route::post('/nhan-vien/create', [NhanVienController::class, 'store']);
Route::delete('/nhan-vien/delete/{id}', [NhanVienController::class, 'destroy']);
Route::put('/nhan-vien/update', [NhanVienController::class, 'update']);

Route::get('/san-bong/data', [SanBongController::class, 'getData']);
Route::post('/san-bong/create', [SanBongController::class, 'store']);
Route::delete('/san-bong/delete/{id}', [SanBongController::class, 'destroy']);
Route::put('/san-bong/update', [SanBongController::class, 'update']);
