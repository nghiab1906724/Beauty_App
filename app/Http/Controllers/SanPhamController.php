<?php

namespace App\Http\Controllers;

use Exception;
use GuzzleHttp\BodySummarizer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use stdClass;

class SanPhamController extends Controller
{
    public function index()
    {
        // Lấy danh mục lọc
        $rows = DB::table('danh_muc')
            ->join('loai_sp', 'loai_sp.maDM', '=', 'danh_muc.maDM')
            ->get();
        $danhMuc = [];
        $object = new stdClass();
        $object->maDM = $rows[0]->maDM;
        $object->danhMuc = $rows[0]->danhMuc;
        foreach ($rows as $row) {
            if ($object->maDM != $row->maDM) {
                $danhMuc[] = $object;
                $object = new stdClass();
                $object->maDM = $row->maDM;
                $object->danhMuc = $row->danhMuc;
            }
            if (isset($row->maDM)) unset($row->maDM);
            if (isset($row->danhMuc)) unset($row->danhMuc);
            $object->loai[] = $row;
        }
        $danhMuc[] = $object;
        //Lấy thương hiệu lọc
        $thuongHieu = DB::table('thuong_hieu')
            ->get();
        // Lấy sản phẩm hiển thị
        $sanPham = DB::table('san_pham')
            ->join('dong_sp', 'dong_sp.maDong', '=', 'san_pham.maDong')
            ->join('loai_sp', 'loai_sp.maLoai', '=', 'dong_sp.maLoai')
            ->get();
        return view('san_pham', compact('thuongHieu', 'danhMuc', 'sanPham'));
    }

    public function locThuongHieu($th)
    {
        // Lấy danh mục lọc
        $rows = DB::table('danh_muc')
            ->join('loai_sp', 'loai_sp.maDM', '=', 'danh_muc.maDM')
            ->get();
        $danhMuc = [];
        $object = new stdClass();
        $object->maDM = $rows[0]->maDM;
        $object->danhMuc = $rows[0]->danhMuc;
        foreach ($rows as $row) {
            if ($object->maDM != $row->maDM) {
                $danhMuc[] = $object;
                $object = new stdClass();
                $object->maDM = $row->maDM;
                $object->danhMuc = $row->danhMuc;
            }
            if (isset($row->maDM)) unset($row->maDM);
            if (isset($row->danhMuc)) unset($row->danhMuc);
            $object->loai[] = $row;
        }
        $danhMuc[] = $object;
        //Lấy thương hiệu lọc
        $thuongHieu = DB::table('thuong_hieu')
            ->get();
        // Lấy sản phẩm hiển thị
        $sanPham = DB::table('san_pham')
            ->join('dong_sp', 'dong_sp.maDong', '=', 'san_pham.maDong')
            ->join('loai_sp', 'loai_sp.maLoai', '=', 'dong_sp.maLoai')
            ->where('dong_sp.maTH', $th)
            ->get();
        return view('san_pham', compact('thuongHieu', 'danhMuc', 'sanPham'));
    }

    public function locLoai($loai)
    {
        // Lấy danh mục lọc
        $rows = DB::table('danh_muc')
            ->join('loai_sp', 'loai_sp.maDM', '=', 'danh_muc.maDM')
            ->get();
        $danhMuc = [];
        $object = new stdClass();
        $object->maDM = $rows[0]->maDM;
        $object->danhMuc = $rows[0]->danhMuc;
        foreach ($rows as $row) {
            if ($object->maDM != $row->maDM) {
                $danhMuc[] = $object;
                $object = new stdClass();
                $object->maDM = $row->maDM;
                $object->danhMuc = $row->danhMuc;
            }
            if (isset($row->maDM)) unset($row->maDM);
            if (isset($row->danhMuc)) unset($row->danhMuc);
            $object->loai[] = $row;
        }
        $danhMuc[] = $object;
        //Lấy thương hiệu lọc
        $thuongHieu = DB::table('thuong_hieu')
            ->get();
        // Lấy sản phẩm hiển thị
        $sanPham = DB::table('san_pham')
            ->join('dong_sp', 'dong_sp.maDong', '=', 'san_pham.maDong')
            ->join('loai_sp', 'loai_sp.maLoai', '=', 'dong_sp.maLoai')
            ->where('loai_sp.maLoai', $loai)
            ->get();
        return view('san_pham', compact('thuongHieu', 'danhMuc', 'sanPham'));
    }

    // Dành cho Admin
    public function trangThemSP()
    {
        $dongSP = DB::table('dong_sp')->get();
        return view('admin.them_sp', compact('dongSP'));
    }
    public function add(Request $request)
    {
        $request->validate([
            'maDong' => 'required',
            'barCode' => 'required',
            'gia' => 'required',
            'giam' => 'required',
            'tenSP' => 'required',
            'dacTinh' => 'required',
            'dungTich' => 'required',
            'thanhPhan' => 'required',
            'congDung' => 'required',
            'cachDung' => 'required'
        ]);
        try {
            $status = DB::table('san_pham')->insert([
                'maDong' => $_POST['maDong'],
                'barCode' => $_POST['barCode'],
                'sanPham' => $_POST['tenSP'],
                'giaBan' => $_POST['gia'],
                'phanTramGiam' => $_POST['giam'],
                'dacTinh' => $_POST['dacTinh'],
                'dungTich' => $_POST['dungTich'],
                'linkAnh' => url('resources\views\img\SanPham') . "/{$_POST['barCode']}",
                'thanhPhan' => $_POST['thanhPhan'],
                'congDung' => $_POST['congDung'],
                'cachDung' => $_POST['cachDung']
            ]);
        } catch (Exception $ex) {
            $status = false;
        }
        if ($status) session()->flash('OK', 'Thêm thành công!');
        else session()->flash('Fail', 'Thêm thất bại!');
        return redirect()->route('trangThemSP');
    }
    public function show()
    {
        $sp = DB::table('san_pham')
            ->join('dong_sp', 'dong_sp.maDong', '=', 'san_pham.maDong')
            ->join('loai_sp', 'loai_sp.maLoai', '=', 'dong_sp.maLoai')
            ->join('thuong_hieu', 'dong_sp.maTH', '=', 'thuong_hieu.maTH')
            ->leftJoin(DB::raw('(SELECT lo_hang.barCode, COUNT(*) hethan FROM lo_hang 
            JOIN san_pham ON lo_hang.barCode=san_pham.barCode 
            JOIN dong_sp on san_pham.maDong=dong_sp.maDong 
            WHERE dong_sp.hsd-datediff(CURRENT_DATE(),lo_hang.ngaySX)<dong_sp.hsd/2 GROUP BY lo_hang.barCode) AS lo_hang'), 'san_pham.barCode', '=', 'lo_hang.barCode')
            ->leftJoin(DB::raw('(SELECT san_pham.barCode, SUM(lo_hang.soLuongConLai) sl FROM san_pham
                JOIN lo_hang ON san_pham.barCode = lo_hang.barCode
                GROUP BY san_pham.barCode) AS lo'), 'san_pham.barCode', '=', 'lo.barCode')
            ->select('san_pham.*', 'dong_sp.*', 'loai_sp.*', 'thuong_hieu.*', 'lo.sl', 'lo_hang.hethan')
            ->orderBy('lo_hang.hethan', 'DESC')
            ->get();

        return view('admin.san_pham', compact('sp'));
    }

    public function denHan()
    {
        $sp = DB::table('lo_hang')
            ->join('san_pham', 'san_pham.barCode', '=', 'lo_hang.barCode')
            ->join('dong_sp', 'dong_sp.maDong', '=', 'san_pham.maDong')
            ->get();

        return view('admin.sp_den_han', compact('sp'));
    }

    public function khuyenMai()
    {
        try {
            DB::table('san_pham')->where('barCode', $_POST['barCode'])->update(['phanTramGiam' => $_POST['giam']]);
        } catch (Exception $e) {
        }

        return redirect()->back();
    }
}
