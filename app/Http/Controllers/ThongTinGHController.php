<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ThongTinGHController extends Controller
{
    public function trangThemDC()
    {
        return view('them_dc');
    }
    public function themDC(Request $request)
    {
        $request->validate([
            'hoTenNhan' => 'required',
            'sdtNhan' => 'required|digits:10',
            'tinh' => 'required',
            'huyen' => 'required',
            'xa' => 'required',
            'dc' => 'required'
        ]);
        try {
            if (DB::table('thong_tin_gh')->where('sdt', Auth::user()->sdt)->count() < 1) $maDC = 0;
            else $maDC = DB::table('thong_tin_gh')->where('sdt', Auth::user()->sdt)->max('maDC');
            if (isset($_POST['macDinh']) || (DB::table('thong_tin_gh')->where('sdt', Auth::user()->sdt)->count() < 1)) {
                DB::table('thong_tin_gh')->where('sdt', Auth::user()->sdt)->update(['macDinh' => 0]);
                DB::table('thong_tin_gh')->insert([
                    'sdt' => Auth::user()->sdt,
                    'maDC' => $maDC + 1,
                    'hoTenNhan' => $_POST['hoTenNhan'],
                    'sdtNhan' => $_POST['sdtNhan'],
                    'dcNhan' => "{$_POST['dc']}, {$_POST['xa']}, {$_POST['huyen']}, {$_POST['tinh']}",
                    'macDinh' => 1
                ]);
            } else {
                DB::table('thong_tin_gh')->insert([
                    'sdt' => Auth::user()->sdt,
                    'maDC' => $maDC + 1,
                    'hoTenNhan' => $_POST['hoTenNhan'],
                    'sdtNhan' => $_POST['sdtNhan'],
                    'dcNhan' => "{$_POST['dc']}, {$_POST['xa']}, {$_POST['huyen']}, {$_POST['tinh']}"
                ]);
            }
            return redirect()->route('thanhToan');
        } catch (Exception $e) {
            echo 'Thêm địa chỉ thất bại';
        }
    }

    public function taoMacDinh(Request $request)
    {
        try {
            DB::table('thong_tin_gh')->where('sdt', Auth::user()->sdt)->update(['macDinh' => 0]);
            DB::table('thong_tin_gh')->where('sdt', Auth::user()->sdt)->where('maDC', $_POST['chon'])->update(['macDinh' => 1]);
        } catch (Exception $e) {
        }
        return redirect()->route('thanhToan');
    }

    public function xoa(Request $request)
    {
        try {
            DB::table('thong_tin_gh')
                ->where('sdt', Auth::user()->sdt)
                ->where('maDC', $_POST['xoa'])
                ->where('macDinh', 0)
                ->delete();
        } catch (Exception $e) {
        }
        return redirect()->route('thanhToan');
    }
}
