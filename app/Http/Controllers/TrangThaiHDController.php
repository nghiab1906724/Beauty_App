<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class TrangThaiHDController extends Controller
{
    public function index($trangThai = 0)
    {
        $bangTrangThai = DB::table('trang-thai_hd')->get();
        if ($trangThai == 0) $hoaDon = DB::table('hoa_don')
            ->where('sdt', Auth::user()->sdt)
            ->orderBy('ngayTao', 'desc')
            ->orderBy('maHD', 'desc')
            ->get();
        else $hoaDon = DB::table('hoa_don')
            ->where('sdt', Auth::user()->sdt)
            ->where('trangThaiHD', $trangThai)
            ->orderBy('ngayTao', 'desc')
            ->orderBy('maHD', 'desc')
            ->get();
        foreach ($hoaDon as $hd) {
            $hd->sanPham = DB::table('chi_tiet_hd')
                ->where('maHD', $hd->maHD)
                ->join('san_pham', 'san_pham.barCode', '=', 'chi_tiet_hd.barCode')
                ->join('dong_sp', 'dong_sp.maDong', '=', 'san_pham.maDong')
                ->get();
        }
        return (view('trang_thai_hd', compact('bangTrangThai', 'hoaDon', 'trangThai')));
    }

    // Dành cho Admin
    public function show($trangThai = 0)
    {
        $bangTrangThai = DB::table('trang-thai_hd')->get();
        if ($trangThai == 0) $hoaDon = DB::table('hoa_don')
            ->join('phuong_thuc_tt', 'phuong_thuc_tt.maPT', '=', 'hoa_don.pThucTT')
            ->get();
        else $hoaDon = DB::table('hoa_don')
            ->where('trangThaiHD', $trangThai)
            ->join('phuong_thuc_tt', 'phuong_thuc_tt.maPT', '=', 'hoa_don.pThucTT')
            ->orderBy('ngayTao')
            ->get();
        foreach ($hoaDon as $hd) {
            $hd->sanPham = DB::table('chi_tiet_hd')
                ->where('maHD', $hd->maHD)
                ->join('san_pham', 'san_pham.barCode', '=', 'chi_tiet_hd.barCode')
                ->join('dong_sp', 'dong_sp.maDong', '=', 'san_pham.maDong')
                ->get();
        }
        return (view('admin.xac_nhan_dh', compact('bangTrangThai', 'hoaDon', 'trangThai')));
    }

    public function capNhatTrangThai()
    {
        foreach ($_POST as $key => $val) {
            $ar = explode("_", $key);
            try {
                if ($val == 3) DB::table('hoa_don')->where('sdt', $ar[0])->where('maHD', $ar[1])->update([
                    'trangThaiHD' => $val + 1,
                    'trangThaiTT' => 1
                ]);
                if ($val < 3) DB::table('hoa_don')->where('sdt', $ar[0])->where('maHD', $ar[1])->update(['trangThaiHD' => $val + 1]);
            } catch (Exception $e) {
            }
        }
        return redirect()->back();
    }
}
