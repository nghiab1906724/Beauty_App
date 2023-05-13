<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class NSXController extends Controller
{
    public function index(){
        $data=DB::table('nsx')            
            ->join('quoc_gia', 'nsx.xuatXu','=','quoc_gia.maQG')
            ->get();
        $quocGia=DB::table('quoc_gia')->get();
        return view('admin.nha_san_xuat', compact('data','quocGia'));
    }
    public function add(Request $request ){
        $request->validate([
            'tenNSX'=>'required'
        ]);
        $status=DB::table('nsx')->insert([
            'nsx'=>strtoupper($_POST['tenNSX']),
            'xuatXu'=>$_POST['qg']
        ]);
        if($status)session()->flash('addOK','Thêm nhà sản xuất thành công!');
        else session()->flash('addFail','Thêm nhà sản xuất thất bại!');
        return redirect()->route('qLNSX');
        return redirect()->route('qLNSX');
    }
    public function edit(Request $request ){
        $request->validate([
            'tenNSX'=>'required'
        ]);
        try{
            $status=DB::table('nsx')->where('maNSX', $_POST['maNSX'])->update([
                'nsx'=>strtoupper($_POST['tenNSX']),
                'xuatXu'=>$_POST['qg'],
                'diaChi'=>$_POST['dc']
            ]);
        }catch(Exception $ex){
            $status=false;
        }
        
        if($status)session()->flash('editOK','Cập nhật thông tin nhà sản xuất thành công!');
        else session()->flash('editFail','Cập nhật thông tin nhà sản xuất thất bại!');
        return redirect()->route('qLNSX');
        return redirect()->route('qLNSX');
    }
    public function destroy(Request $request){ 
        try {
            $status = DB::table('nsx')->where('maNSX', $_POST['maNSX'])->delete();
        } catch (Exception $ex) {
            $status = false;
        }
        if($status==true)session()->flash('deleteOK','Đã xóa nhà sản xuất '.strtoupper($_POST['tenNSX']));
        else session()->flash('deleteFail','Không thể xóa nhà sản xuất '.strtoupper($_POST['tenNSX']));
        return redirect()->route('qLNSX');
        return redirect()->route('qLNSX');
    }
}
