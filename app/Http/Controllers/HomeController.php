<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        // Lấy sản phẩm nổi bật
        $sanPham=DB::table('san_pham')
            ->join('dong_sp','dong_sp.maDong','=','san_pham.maDong')
            ->join('loai_sp','loai_sp.maLoai','=','dong_sp.maLoai')
            ->orderBy('phanTramGiam','desc')
            ->get();
        return view('trang_chu', compact('sanPham'));
    }
}
