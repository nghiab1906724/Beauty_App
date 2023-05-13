<?php

namespace App\Http\Controllers;

use App\Models\ThuongHieuModel;
use App\Models\NSXModel;
use App\Models\QuocGiaModel;
use Exception;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use PhpParser\Node\Stmt\TryCatch;

class ThuongHieuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=DB::table('thuong_hieu')
            ->join('nsx', 'thuong_hieu.maNSX','=','nsx.maNSX')
            ->join('quoc_gia', 'nsx.xuatXu','=','quoc_gia.maQG')
            ->get();
        $nsx=DB::table('nsx')->get();
        $quocGia=DB::table('quoc_gia')->get();
        return view('admin.thuong_hieu', compact('data','nsx','quocGia'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'tenTH'=>'required'
        ]);
        $status=DB::table('thuong_hieu')->insert([
            'thuongHieu'=>strtoupper($_POST['tenTH']),
            'maNSX'=>$_POST['nsx']
        ]);
        if($status)session()->flash('addOK','Thêm thương hiệu thành công!');
        else session()->flash('addFail','Thêm thương hiệu thất bại!');
        return redirect()->route('qLTH');
        return redirect()->route('qLTH');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ThuongHieuModel  $thuongHieuModel
     * @return \Illuminate\Http\Response
     */
    public function show(ThuongHieuModel $thuongHieuModel)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ThuongHieuModel  $thuongHieuModel
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,ThuongHieuModel $thuongHieuModel)
    {
        $request->validate([
            'tenTH'=>'required'
        ]);
        try{
            $status=DB::table('thuong_hieu')->where('maTH',$_POST['maTH'])->update([
                'thuongHieu'=>strtoupper($_POST['tenTH']),
                'maNSX'=>$_POST['nsx']
            ]);
        }catch(Exception $ex){
            $status=false;
        }
        if($status)session()->flash('editOK','Cập nhật thành công!');
        else session()->flash('editFail','Cập nhật thất bại!');
        return redirect()->route('qLTH');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ThuongHieuModel  $thuongHieuModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ThuongHieuModel $thuongHieuModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ThuongHieuModel  $thuongHieuModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(ThuongHieuModel $thuongHieuModel)
    {       
        try {
            $status=DB::table('thuong_hieu')->where('maTH',$_POST['maTH'])->delete();
        } catch (Exception $ex) {
            $status = false;
        }
        if($status)session()->flash('deleteOK','Xóa thành công!');
        else session()->flash('deleteFail','Không thể xóa!');
        return redirect()->route('qLTH');
    }
}
