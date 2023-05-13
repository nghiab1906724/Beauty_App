<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class TaiKhoanController extends Controller
{
    public function index(){
        
    }
    public function trangDK(){
        return view('dang_ky');
    }
    public function dangKy(Request $request){
        session()->flash('DK', 'fail');
        $request->validate([
            'hoTen'=>'required',
            'sdt'=>'required|digits:10',
            'mk'=>'required|min:6|max:10',
            'nhapLaiMK'=>'required|same:mk',
            'nsinh'=>'required|date|before:today'
        ]);
        try{
            $station=DB::table('tai_khoan')->insert([
                'hoTen'=>$_POST['hoTen'],
                'sdt'=>$_POST['sdt'],
                'mk'=>md5($_POST['mk']),
                'gioiTinh'=>$_POST['gioiTinh'],
                'ngaySinh'=>$_POST['nsinh'],
                'email'=>$_POST['email']
            ]);
        }catch(Exception $e){
            $station=false;
        }        
        if($station){
            session()->flash('DK', 'success');
            return redirect()->route('dangNhapTK');
        }
        else session()->flash('DK', 'exit');
        return redirect()->route('dangKyTK');
    }
    public function trangDN(){
        Session::put('url', url()->previous());
        return view('dang_nhap');
    }
    public function dangNhap(Request $request){
        $request->validate([            
            'sdt'=>'required|digits:10',
            'mk'=>'required|min:6|max:10'            
        ]);
        if(Auth::attempt(['sdt'=>$request['sdt'], 'password'=>$request['mk']])){  
            if(Auth::user()->loaiTK==0)return redirect()->route('admin');      
            return redirect()->intended();            
        }else {
            return redirect()->route('dangNhapTK')->with('DN','fail');
        }
    }
    public function dangXuat(){
        Auth::logout();
        return redirect()->route('trangChu');
    }
}
