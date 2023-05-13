<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoHangController extends Controller
{
    public function index($barCode)
    {
        if (isset($_POST['tim'])) {
            $loHang = DB::table('lo_hang')->where('lo_hang.barCode', $barCode)
                ->where('soLuongConLai', '>', '0')
                ->where('ngayNhap', '>', $_POST['ngayBD'])
                ->where('ngayNhap', '<', $_POST['ngayKT'])
                ->join('quoc_gia', 'quoc_gia.maQG', '=', 'lo_hang.noiSX')
                ->get();
        } else {
            $loHang = DB::table('lo_hang')->where('lo_hang.barCode', $barCode)
                ->where('soLuongConLai', '>', '0')
                ->join('quoc_gia', 'quoc_gia.maQG', '=', 'lo_hang.noiSX')
                ->get();
        }
        $sanPham = DB::table('san_pham')
            ->where('san_pham.barCode', $barCode)
            ->join('dong_sp', 'dong_sp.maDong', 'san_pham.maDong')
            ->get();
        $quocGia = DB::table('quoc_gia')->get();
        return view('admin.lo_hang', compact('loHang', 'sanPham', 'barCode', 'quocGia'));
    }

    public function add(Request $request)
    {
        $request->validate([
            'barCode' => 'required|digits:13',
            'maLo' => 'required',
            'ngaySX' => 'required',
            'sL' => 'required',
            'gia' => 'required'
        ]);
        $status = DB::table('lo_hang')->insert([
            'maLo' => $_POST['maLo'],
            'barCode' => $_POST['barCode'],
            'ngaySX' => $_POST['ngaySX'],
            'ngayNhap' => $_POST['ngayNhap'],
            'soLuong' => $_POST['sL'],
            'giaNhap' => $_POST['gia'],
            'maLo' => $_POST['maLo'],
            'noiSX' => $_POST['noiSX'],
            'soLuongConLai' => $_POST['sL']
        ]);
        // try {
        //     $status=DB::table('lo_hang')->insert([
        //         'maLo'=>$_POST['maLo'],
        //         'barCode'=>$_POST['barCode'],
        //         'ngaySX'=>$_POST['ngaySX'],
        //         'ngayNhap'=>$_POST['ngayNhap'],
        //         'soLuong'=>$_POST['sL'],
        //         'giaNhap'=>$_POST['gia'],
        //         'maLo'=>$_POST['maLo'],
        //         'noiSX'=>$_POST['noiSX'],
        //         'soLuongConLai'=>$_POST['sL']
        //     ]);
        // } catch (Exception $e) {
        //     $status=false;
        // }
        if ($status) session()->flash('OK', 'Thêm thành công!');
        else session()->flash('Fail', 'Thêm thất bại!');
        return redirect()->route('qLLH', ['barCode' => $_POST['barCode']]);
    }
}
