<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ThanhToanController extends Controller
{
    public function index()
    {
        $gioHang = DB::table('gio_hang')
            ->where('chon', '1')
            ->where('sdt', Auth::user()->sdt)
            ->join('san_pham', 'san_pham.barCode', '=', 'gio_hang.barCode')
            ->join('dong_sp', 'dong_sp.maDong', '=', 'san_pham.maDong')
            ->get();
        $dc = DB::table('thong_tin_gh')
            ->where('sdt', Auth::user()->sdt)
            ->orderBy('macDinh', 'desc')
            ->get();
        $dcMD = DB::table('thong_tin_gh')
            ->where('sdt', Auth::user()->sdt)->where('macDinh', 1)
            ->get();
        $pttt = DB::table('phuong_thuc_tt')
            ->get();
        return (view('thanh_toan', compact('gioHang', 'dc', 'dcMD','pttt')));
    }
}
