@extends('layouts.admin')
<title>Thêm Sản Phẩm</title>
@section('main')
@if(count($errors))
<div class="alert alert-warning alert-dismissible fade show" role="alert" style="width: fit-content; align-content: center;">
Có lỗi xảy ra, vui lòng kiểm tra lại thông tin
<button style="background: none;border: none;" type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
</div>
<div class="alert alert-warning alert-dismissible fade show" role="alert" style="width: fit-content; align-content: center;">
    Các trường không được để trống
    <br>
    Điền thông tin vào các trường phải chính xác
    <br>
    BarCode không được trùng với các sản phẩm đã có        
</div>
@endif
@if(session('OK'))
<div class="alert alert-success alert-dismissible fade show" role="alert" style="width: fit-content; align-content: center;">
    {{session('OK')}}
    <button style="background: none;border: none;" type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><i class="fa-solid fa-xmark text-white"></i></button>
</div>
@elseif(session('Fail'))
<div class="alert alert-warning alert-dismissible fade show" role="alert" style="width: fit-content; align-content: center;">
    {{session('Fail')}}    
    <button style="background: none;border: none;" type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
</div>
<div class="alert alert-warning alert-dismissible fade show" role="alert" style="width: fit-content; align-content: center;">
    Các trường không được để trống
    <br>
    Điền thông tin vào các trường phải chính xác
    <br>
    BarCode không được trùng với các sản phẩm đã có        
</div>
@endif
<form action="{{route('addSP')}}" method="post" class="container">
@csrf
    <div class="row">
        <label class="col-2" for="">Dòng Sản Phẩm </label>
        <select name="maDong" class="col-5">
            @foreach($dongSP as $dongSP)
            <option value="{{$dongSP->maDong}}">{{$dongSP->tenDong}}</option>
            @endforeach
        </select>
        <a class="col-10" href="{{route('dongSP')}}">Cập nhật dòng sản phẩm</a>
    </div>
    <br>
    <div class="row">
        <label class="col-2" for="">Barcode</label>
        <input autocomplete="off" class="col-5" type="text" name="barCode" id="">
    </div>
    <br>
    <div class="row">
        <label class="col-2" for="">Tên sản phẩm</label>
        <input autocomplete="off" class="col" type="text" name="tenSP" id="">
    </div>
    <br>
    <div class="row">
        <label class="col-2" for="">Dung tích</label>
        <input autocomplete="off" class="col-2" type="text" name="dungTich" id="">

    </div>
    <br>
    <div class="row">
        <label class="col-2" for="">Giá bán</label>
        <input autocomplete="off" class="col-2" type="number" name="gia" min="1000" step="100">

    </div>
    <br>
    <div class="row">
        <label class="col-2" for="">Phần trăm giảm</label>
        <input autocomplete="off" class="col-2" type="number" name="giam" min="1" max="100">

    </div>
    <br>
    <div class="row justify-content-end">
        <label class="col-2" for="">Thành phần</label>
        <textarea class="col-10" name="thanhPhan" id="" cols="" rows="5"></textarea>
    </div>
    <br>
    <div class="row justify-content-end">
        <label class="col-2" for="">Đặc tính</label>
        <textarea class="col-10" name="dacTinh" id="" cols="" rows="5"></textarea>
    </div>
    <br>
    <div class="row justify-content-end">
        <label class="col-2" for="">Công dụng</label>
        <textarea class="col-10" name="congDung" id="" cols="" rows="10"></textarea>
    </div>
    <br>
    <div class="row justify-content-end">
        <label class="col-2" for="">Cách dùng</label>
        <textarea class="col-10" name="cachDung" id="" cols="" rows="10"></textarea>
    </div>
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
    <button type="button submit" class="btn btn-primary">Thêm</button>
</form>
@stop()