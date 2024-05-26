<?php

namespace App\Http\Controllers;

use App\Models\SanBong;
use Illuminate\Http\Request;

class SanBongController extends Controller
{
    public function getData()
    {
        $data = SanBong::all();

        return response()->json([
            'san_bong'  =>  $data
        ]);
    }
    public function store(Request $request)
    {
        $data   =   $request->all();
        SanBong::create($data);

        return response()->json([
            'status'    =>  true,
            'message'   =>  'Đã tạo mới sân bóng thành công!'
        ]);
    }

    public function destroy($id)
    {
        SanBong::find($id)->delete();

        return response()->json([
            'status'    =>  true,
            'message'   =>  'Đã xoá sân bóng thành công!'
        ]);
    }

    public function update(Request $request)
    {
        $data   = $request->all();

        SanBong::find($request->id)->update($data);

        return response()->json([
            'status'    =>  true,
            'message'   =>  'Đã cập nhật sân bóng thành công!'
        ]);
    }
    public function doiTrangThai(Request $request)
    {
        $san_bong = SanBong::find($request->id);
        if ($san_bong) {
            if ($san_bong->tinh_trang == 1) {
                $san_bong->tinh_trang = 0;
            } else {
                $san_bong->tinh_trang = 1;
            }
            $san_bong->save();

            return response()->json([
                'status' => true,
                'message' => "Đổi trạng thái sân bóng thành công!"
            ]);
        } else {
            return response()->json([
                'status' => false,
                'message' => "Đã có lỗi xảy ra!"
            ]);
        }
    }
}
