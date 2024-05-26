<?php

namespace App\Http\Controllers;

use App\Models\KhachHang;
use Illuminate\Http\Request;

class KhachHangController extends Controller
{
    public function dangKy(Request $request)
    {

        $check_mail = KhachHang::where('email', $request->email)->first();

        if ($check_mail) {
            return response()->json([
                'status' => false,
                'message' => "Email đã tồn tại trong hệ thống!"
            ]);
        } else {

            $data   =   $request->all();
            $data['password'] = bcrypt($request->password);

            KhachHang::create($data);

            return response()->json([
                'status' => true,
                'message' => "Đăng kí tài khoản thành công!"
            ]);
        }
    }
    public function getData()
    {
        $data = KhachHang::all();

        return response()->json([
            'khach_hang' => $data
        ]);
    }

    public function doiTrangThai(Request $request)
    {
        $khach_hang = KhachHang::find($request->id);
        if ($khach_hang) {
            if ($khach_hang->is_block == 1) {
                $khach_hang->is_block = 0;
            } else {
                $khach_hang->is_block = 1;
            }
            $khach_hang->save();

            return response()->json([
                'status' => true,
                'message' => "Đổi trạng thái tài khoản thành công!"
            ]);
        } else {
            return response()->json([
                'status' => false,
                'message' => "Đã có lỗi xảy ra!"
            ]);
        }
    }

    public function destroy($id)
    {
        KhachHang::find($id)->delete();

        return response()->json([
            'status'    =>  true,
            'message'   =>  'Đã xoá khách hàng thành công!'
        ]);
    }

    public function update(Request $request)
    {
        $data   = $request->all();
        KhachHang::find($request->id)->update($data);

        return response()->json([
            'status'    =>  true,
            'message'   =>  'Đã cập nhật khách hàng thành công!'
        ]);
    }

}
