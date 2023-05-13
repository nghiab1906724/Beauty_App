<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Type\Integer;

class SkinTestController extends Controller
{
    public function index()
    {
        return view('skin_test_index');
    }
    public function show()
    {
        return view('skin_test');
    }
    public function thucThi(Request $request)
    {
        $request->validate([
            'nhay_cam' => 'required',
            'dau_kho' => 'required',
            'mun' => 'required',
            'sac_to' => 'required',
            'lao_hoa' => 'required',
            'chan_long' => 'required'
        ]);
        $dau_T = 0;
        $dau_U = 0;
        switch ($_POST['dau_kho']) {
            case 't':
                $dau_T = 1;
                $dau_U = 1;
                break;
            case 'k':
                $dau_T = 0;
                $dau_U = 0;
                break;
            case 'd':
                $dau_T = 2;
                $dau_U = 2;
                break;
            case 'dt':
                $dau_T = 2;
                $dau_U = 0;
                break;
            default:
                $dau_T = 1;
                $dau_U = 1;
                break;
        }

        // Chuyển đổi mảng thành một chuỗi JSON
        $json_array = json_encode([$_POST['nhay_cam'], $dau_T, $dau_U, $_POST['chan_long'], $_POST['mun'], $_POST['sac_to'], $_POST['lao_hoa']]);

        $python = `Python resources\Python\SkinTest.py "$json_array"`;
        $id = intval($python[1]);
        DB::table('tai_khoan')->where('sdt', Auth::user()->sdt)->update(['loaiDa'=>$id]);
        return redirect()->route('ketQua');
    }

    public function ketQua()
    {
        $loaiDa = DB::table('tai_khoan')->where('sdt', Auth::user()->sdt)
            ->join('loai_da', 'tai_khoan.loaiDa', '=', 'loai_da.ID')
            ->select(['*'])
            ->get();
        $sp=DB::table('sp_loai_da')->where('loaiDa',$loaiDa[0]->ID)->get();
        return view('skin_test_result', compact('loaiDa','sp'));
    }
}
