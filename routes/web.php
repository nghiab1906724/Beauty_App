<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@index')->name('trangChu');
Route::get('/SanPham', 'SanPhamController@index')->name('sanPham');
Route::get('/SanPham/ThuongHieu/{th}', 'SanPhamController@locThuongHieu')->name('locThuongHieu');
Route::get('/SanPham/Loai/{loai}', 'SanPhamController@locLoai')->name('locLoai');
Route::get('/GioiThieu', 'GioiThieuController@index')->name('gioiThieu');

Route::get('/SanPham/{id}', 'ChiTietSPController@index')->name('chiTietSP');

Route::get('/GioHang', 'GioHangController@index')->name('gioHang')->middleware('auth');
Route::post('/GioHang/ThemSP', 'GioHangController@add')->name('addGioHang')->middleware('auth');
Route::post('/GioHang/CapNhat', 'GioHangController@update')->name('updateGioHang');
Route::post('/GioHang/Xoa', 'GioHangController@delete')->name('deleteGH');
Route::post('/GioHang/DatHang', 'GioHangController@datHang')->name('datHang');

Route::get('/ThongTinGH/Them', 'ThongTinGHController@trangThemDC')->middleware('auth')->name('trangThemDC');
Route::post('/ThongTinGH/ThemDC', 'ThongTinGHController@themDC')->middleware('auth')->name('themDC');
Route::post('/ThongTinGH/TaoMD', 'ThongTinGHController@taoMacDinh')->middleware('auth')->name('taoMD');
Route::post('/ThongTinGH/XoaDC', 'ThongTinGHController@xoa')->middleware('auth')->name('xoaDC');

Route::get('/TrangThaiHD/{tt}', 'TrangThaiHDController@index')->middleware('auth')->name('trangThaiHD');

Route::get('/ThanhToan', 'ThanhToanController@index')->name('thanhToan')->middleware('auth');
Route::post('/HoaDon/PayCOD', 'HoaDonController@payCOD')->name('payCOD')->middleware('auth');
Route::post('/HoaDon/PayMoMo', 'HoaDonController@payMoMo')->name('payMoMo')->middleware('auth');
Route::post('/HoaDon/PayVNP', 'HoaDonController@payVNP')->name('payVNP')->middleware('auth');
Route::get('/HoaDon/EndPayVNP', 'HoaDonController@endPayVNP')->name('endPayVNP')->middleware('auth');
Route::get('/HoaDon/EndPayMoMo', 'HoaDonController@endPayMoMo')->name('endPayMoMo')->middleware('auth');
Route::get('/Thanks', 'HoaDonController@thanks')->name('thanks')->middleware('auth');

Route::get('/DangKy', 'TaiKhoanController@trangDK')->name('dangKyTK');
Route::post('/DangKy', 'TaiKhoanController@dangKy')->name('register');
Route::get('/DangNhap', 'TaiKhoanController@trangDN')->name('dangNhapTK');
Route::post('/DangNhap', 'TaiKhoanController@dangNhap')->name('login');
Route::get('/DangXuat', 'TaiKhoanController@dangXuat')->name('logout');
Route::get('/LienHe', 'LienHeController@index')->name('lienHe');

Route::get('/TestDa', 'SkinTestController@index')->name('testDa')->middleware('auth');
Route::get('/TestDa/Form', 'SkinTestController@show')->name('testForm')->middleware('auth');
Route::post('/TestDa/ThucThi', 'SkinTestController@thucThi')->name('thucThi')->middleware('auth');
Route::get('/TestDa/KetQua', 'SkinTestController@ketQua')->name('ketQua')->middleware('auth');

Route::group(['prefix'=>'admin', 'middleware' => ['checkAdmin']], function(){
    Route::get('/', 'DashboardController@index')->name('admin');
    Route::get('/ThuongHieu', 'ThuongHieuController@index')->name('qLTH');
    Route::post('/ThuongHieu/add', 'ThuongHieuController@store')->name('addTH');
    Route::post('/ThuongHieu/edit', 'ThuongHieuController@edit')->name('editTH');
    Route::post('/ThuongHieu/delete', 'ThuongHieuController@destroy')->name('deleteTH');

    Route::get('/NhaSanXuat', 'NSXController@index')->name('qLNSX');
    Route::post('/NhaSanXuat/add', 'NSXController@add')->name('addNSX');
    Route::post('/NhaSanXuat/edit', 'NSXController@edit')->name('editNSX');
    Route::post('/NhaSanXuat/delete', 'NSXController@destroy')->name('deleteNSX');

    Route::get('/SanPham', 'SanPhamController@show')->name('qLSP');
    Route::get('/SanPhamDenHan', 'SanPhamController@denHan')->name('sPDenHan');
    Route::get('/SanPham/ThemSP', 'SanPhamController@trangThemSP')->name('trangThemSP');
    Route::post('/SanPham/add', 'SanPhamController@add')->name('addSP');
    Route::post('/SanPham/km', 'SanPhamController@khuyenMai')->name('capNhatKM');

    Route::get('/DongSP', 'DongSPController@index')->name('dongSP');
    Route::post('/DongSP/add', 'DongSPController@add')->name('addDongSP');
    Route::post('/DongSP/edit', 'DongSPController@edit')->name('editDongSP');
    Route::post('/DongSP/delete', 'DongSPController@destroy')->name('deleteDongSP');

    Route::get('/LoHang/{barCode}', 'LoHangController@index')->name('qLLH');
    Route::post('/LocLoHang/{barCode}', 'LoHangController@index')->name('locLH');
    Route::post('/LoHang/add', 'LoHangController@add')->name('addLH');

    Route::get('/TrangThaiHD/XacNhan/{trangThai}', 'TrangThaiHDController@show')->name('xacNhanDH');
    Route::post('/TrangThaiHD//CapNhat', 'TrangThaiHDController@capNhatTrangThai')->name('capNhatTrangThai');
});

