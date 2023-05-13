<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
   public function index()
   {
      $saleNgay = DB::table('hoa_don')
         ->select(DB::raw("ngayTao as date"), DB::raw('SUM(tamTinh) as total'), DB::raw('COUNT(*) as sl'))
         ->groupBy('date')
         ->get();

      $endDate = now(); // Lấy ngày hiện tại
      $startDate = now()->subMonths(3); // Lấy ngày 3 tháng trước
      $saleTuan = DB::table('hoa_don')
         ->select(DB::raw("WEEK(ngayTao) as week"), DB::raw('SUM(tamTinh) as total'))
         ->whereBetween('ngayTao', [$startDate, $endDate]) // Chỉ lấy các bản ghi có ngày tạo trong khoảng thời gian cần lấy
         ->groupBy('week')
         ->get();

      $year = date('Y'); // Lấy năm hiện tại
      $saleThang = DB::table('hoa_don')
         ->select(DB::raw("MONTH(ngayTao) as month"), DB::raw('SUM(tamTinh) as total'))
         ->where(DB::raw('YEAR(ngayTao)'), '=', $year) // Chỉ lấy các bản ghi có ngày tạo trong khoảng thời gian cần lấy
         ->groupBy('month')
         ->get();

      $spHot = DB::table('hoa_don')
         ->join('chi_tiet_hd', function ($join) {
            $join->on('hoa_don.sdt', '=', 'chi_tiet_hd.sdt')
               ->on('hoa_don.maHD', '=', 'chi_tiet_hd.maHD');
         })
         ->join('san_pham','san_pham.barCode','=','chi_tiet_hd.barCode')
         ->select(DB::raw("san_pham.sanPham as sanPham"),DB::raw("chi_tiet_hd.barCode as barCode"), DB::raw('SUM(SLMua) as sl'))
         ->groupBy('barCode','sanPham')
         ->orderBy('hoa_don.ngayTao','desc')
         ->limit(10)
         ->get();
      return view('admin.trang_chu', compact('saleNgay', 'saleTuan', 'saleThang', 'spHot'));
   }
}
