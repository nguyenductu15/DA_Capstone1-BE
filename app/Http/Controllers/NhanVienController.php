<?php

namespace App\Http\Controllers;

use App\Models\NhanVien;
use Illuminate\Http\Request;

class NhanVienController extends Controller
{
    public function getData()
    {
        $data = NhanVien::all();

        return response()->json([
            'nhan_vien'  =>  $data
        ]);
    }
    public function store(Request $request)
    {
        $data   =   $request->all();
        $data['password'] = bcrypt($request->password);

        NhanVien::create($data);

        return response()->json([
            'status'    =>  true,
            'message'   =>  'Đã tạo mới nhân viên thành công!'
        ]);
    }

    public function destroy($id)
    {
        NhanVien::find($id)->delete();

        return response()->json([
            'status'    =>  true,
            'message'   =>  'Đã xoá nhân viên thành công!'
        ]);
    }

    public function update(Request $request)
    {
        $data   = $request->all();

        NhanVien::find($request->id)->update($data);

        return response()->json([
            'status'    =>  true,
            'message'   =>  'Đã cập nhật nhân viên thành công!'
        ]);
    }
    public function doiTrangThai(Request $request)
    {
        $nhan_vien = NhanVien::find($request->id);
        if ($nhan_vien) {
            if ($nhan_vien->tinh_trang == 1) {
                $nhan_vien->tinh_trang = 0;
            } else {
                $nhan_vien->tinh_trang = 1;
            }
            $nhan_vien->save();

            return response()->json([
                'status' => true,
                'message' => "Đổi trạng thái nhân viên thành công!"
            ]);
        } else {
            return response()->json([
                'status' => false,
                'message' => "Đã có lỗi xảy ra!"
            ]);
        }
    }
}
