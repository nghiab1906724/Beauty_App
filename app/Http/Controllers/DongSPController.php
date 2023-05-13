<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DongSPController extends Controller
{
    public function index(){
        $data=DB::table('dong_sp')
        ->join('loai_sp', 'dong_sp.maLoai','=','loai_sp.maLoai')
        ->join('thuong_hieu', 'dong_sp.maTH','=','thuong_hieu.maTH')
        ->get();
    $loaiSP=DB::table('loai_sp')->get();
    $thuongHieu=DB::table('thuong_hieu')->get();
    return view('admin.dong_sp', compact('data','loaiSP','thuongHieu'));
    }
    public function add(Request $request){
        $request->validate([
            'tenDong'=>'required',
            'hsd' => 'required|numeric|min:1'
        ]);
        try{
            $status=DB::table('dong_sp')->insert([
                'tenDong'=>$_POST['tenDong'],
                'hsd'=>$_POST['hsd'],
                'maLoai'=>$_POST['loai'],
                'maTH'=>$_POST['thuongHieu']
            ]);
        }catch(Exception $ex){
            $status=false;
        }
        if($status)session()->flash('OK','Thêm thành công!');
        else session()->flash('Fail','Thêm thất bại!');
        return redirect()->route('dongSP');
    }
    public function edit(Request $request){
        $request->validate([
            'tenDong'=>'required',
            'hsd' => 'required|numeric|min:1'
        ]);
        try{
            $status=DB::table('dong_sp')->where('maDong',$_POST['maDong'])->update([
                'tenDong'=>$_POST['tenDong'],
                'hsd'=>$_POST['hsd'],
                'maLoai'=>$_POST['loai'],
                'maTH'=>$_POST['thuongHieu']
            ]);
        }catch(Exception $ex){
            $status=false;
        }
        if($status)session()->flash('OK','Cập nhật thành công!');
        else session()->flash('Fail','Cập nhật thất bại!');
        return redirect()->route('dongSP');
    }
    public function destroy(Request $request){
        return redirect()->route('dongSP');
    }
}
