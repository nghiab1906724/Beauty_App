<?php

namespace App\Http\Controllers;

use App\Models\ChiTietSPModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChiTietSPController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $viTri = 'sp';
        $sanPham=DB::table('san_pham')
            ->where('barCode',$id)
            ->join('dong_sp','dong_sp.maDong','=','san_pham.maDong')
            ->join('thuong_hieu','thuong_hieu.maTH','=','dong_sp.maTH')
            ->join('nsx','thuong_hieu.maNSX','=','nsx.maNSX')
            ->join('quoc_gia','nsx.xuatXu','=','quoc_gia.maQG')
            ->get();
        $sanPham=$sanPham[0];
        $sanPhamTT=DB::table('san_pham')
            ->where('maDong',$sanPham->maDong)
            ->get();
        return view('chi_tiet_sp', compact('sanPham','sanPhamTT'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ChiTietSPModel  $chiTietSPModel
     * @return \Illuminate\Http\Response
     */
    public function show(ChiTietSPModel $chiTietSPModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ChiTietSPModel  $chiTietSPModel
     * @return \Illuminate\Http\Response
     */
    public function edit(ChiTietSPModel $chiTietSPModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ChiTietSPModel  $chiTietSPModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ChiTietSPModel $chiTietSPModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ChiTietSPModel  $chiTietSPModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(ChiTietSPModel $chiTietSPModel)
    {
        //
    }
}
