<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class GioHangController extends Controller
{
    public function index()
    {
        $gioHang = DB::table('gio_hang')
            ->where('sdt', Auth::user()->sdt)
            ->join('san_pham', 'san_pham.barCode', '=', 'gio_hang.barCode')
            ->join('dong_sp', 'dong_sp.maDong', '=', 'san_pham.maDong')
            ->get();
        return (view('gio_hang', compact('gioHang')));
    }
    //Thêm sản phẩm vào giỏ hàng
    public function add()
    {
        try {
            DB::table('gio_hang')->insert([
                'sdt' => Auth::user()->sdt,
                'barCode' => $_POST['barCode'],
                'soLuongSP' => $_POST['sl']
            ]);
            session()->flash('addGH', 'OK');
        } catch (Exception $e) {
            try {
                DB::table('gio_hang')->where('sdt', Auth::user()->sdt)->where('barCode', $_POST['barCode'])->update([
                    'soLuongSP' => DB::raw('soLuongSP + ' . $_POST['sl'])
                ]);
                session()->flash('addGH', 'OK');
            } catch (Exception $e) {
                session()->flash('addGH', 'fail');
            }
        }
        if (isset($_POST['mua'])) return redirect()->route('gioHang');
        else return redirect()->back();
    }

    //Cập nhật giỏ hàng
    public function update()
    {
        $barCode = DB::table('gio_hang')->where('sdt', Auth::user()->sdt)->select('barCode')->get();
        foreach ($barCode as $row) {
            $barCode = $row->barCode;
            try {
                DB::table('gio_hang')->where('barCode', $barCode)->where('sdt', Auth::user()->sdt)
                    ->update([
                        'soLuongSP' => $_POST['sl' . $barCode],
                        'chon' => +isset($_POST['chon' . $barCode])
                    ]);
            } catch (Exception $e) {
                echo 'Giỏ hàng chưa được cập nhật';
                break;
            }
        }
        return redirect()->route('gioHang');
    }
    public function delete()
    {
        try {
            DB::table('gio_hang')
                ->where('sdt', Auth::user()->sdt)
                ->where('barCode', $_POST['barCode'])
                ->delete();
        } catch (Exception $e) {
        }
        return redirect()->route('gioHang');
    }

    public function datHang()
    {
        $barCode = DB::table('gio_hang')->where('sdt', Auth::user()->sdt)->select('barCode')->get();
        foreach ($barCode as $row) {
            $barCode = $row->barCode;
            try {
                DB::table('gio_hang')->where('barCode', $barCode)->where('sdt', Auth::user()->sdt)
                    ->update([
                        'soLuongSP' => $_POST['sl' . $barCode],
                        'chon' => +isset($_POST['chon' . $barCode])
                    ]);
            } catch (Exception $e) {
                echo 'Giỏ hàng chưa được cập nhật';
                break;
            }
        }
        if (DB::table('thong_tin_gh')->where('sdt', Auth::user()->sdt)->count() < 1) return redirect()->route('trangThemDC');
        return redirect()->route('thanhToan');
    }
}
