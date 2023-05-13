@extends('layouts.admin')
@section('main')
<title>Quản Lý Lô Hàng</title>

<?php ob_start(); ?>
@foreach($quocGia as $qg)
<option value="{{$qg->maQG}}">{{$qg->quocGia}}</option>
@endforeach
<?php $optionQG = ob_get_contents();
ob_end_clean(); ?>
@if(session('OK'))
<div class="alert alert-success alert-dismissible fade show" role="alert" style="width: fit-content; align-content: center;">
    {{session('OK')}}
    <button style="background: none;border: none;" type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><i class="fa-solid fa-xmark text-white"></i></button>
</div>
@elseif(session('Fail'))
<div class="alert alert-success alert-dismissible fade show" role="alert" style="width: fit-content; align-content: center;">
    {{session('Fail')}}
    <button style="background: none;border: none;" type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><i class="fa-solid fa-xmark text-white"></i></button>
</div>
@endif

<!-- Nhập lô mới -->
<button style="float: right;" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    <i class="fa-solid fa-plus"></i> Thêm lô hàng mới
</button>
<!-- Modal -->
<form method="post" action="{{route('addLH')}}">
    @csrf
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title fs-5" id="staticBackdropLabel">Thêm lô hàng mới</h3>
                    <button style="background: none; border: none;" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i style="font-size: x-large;" class="fa-solid fa-xmark"></i></button>
                </div>
                <div class="modal-body">

                    <div class="mb-3">
                        <label for="" class="form-label">Barcode</label>
                        <input name="barCode" type="text" class="form-control" value="<?php if ($barCode != 'QuanLyLH') echo $barCode; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Mã lô</label>
                        <input name="maLo" type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Ngày SX</label>
                        <input name="ngaySX" type="date" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Ngày nhập</label>
                        <input name="ngayNhap" type="date" class="form-control" value="{{ date('Y-m-d') }}">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Số lượng</label>
                        <input name="sL" type="number" class="form-control" min="1">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Giá nhập</label>
                        <input name="gia" type="number" class="form-control" min="1000" step="100">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Nơi sản xuất </label>
                        <select name="noiSX" class="form-select">
                            <?php echo $optionQG; ?>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                    <button type="button submit" class="btn btn-primary">Thêm</button>
                </div>
            </div>
        </div>
    </div>
</form>

<!-- Lọc -->
<h5>
    BarCode: {{$barCode}}_{{$sanPham[0]->tenDong}}
    <p>{{$sanPham[0]->sanPham}}({{$sanPham[0]->dungTich}})</p>
</h5>
<form class="form container" method="post" action="{{route('locLH',['barCode'=>$barCode])}}">
    @csrf
    <table>
        <tr class="row">
            <span class="col-auto">Ngày nhập: </span>
            <td class="col"><input class="col" type="date" name="ngayBD" id="" value="<?php echo  date('Y-m-d', strtotime('01-01-0001')); ?>"></td>
            <td>đến</td>
            <td class="col"><input class="col" type="date" name="ngayKT" id="" value="{{date('Y-m-d')}}"></td>
            <td class="col"><input class="col-auto bg-info border border-info" type="submit" name="tim" value="Tìm"></td>
        </tr>
    </table>
</form>

<table class="table">
    <thead>
        <tr>
            <th scope="col">Mã lô</th>
            <th scope="col">Ngày SX</th>
            <th scope="col">Ngày nhập</th>
            <th scope="col">Nơi sản xuất</th>
            <th scope="col">Số lượng còn lại</th>
            <th scope="col">Hạn dùng còn lại</th>
        </tr>
    </thead>
    <tbody class="table-group-divider">
        @foreach($loHang as $data)
        <?php
        $diff = abs(strtotime(date('Y-m-d')) - strtotime($data->ngaySX));
        $hsd = $sanPham[0]->hsd - floor($diff / (60 * 60 * 24));
        ?>
        @if($hsd>0)
        <form id="formLH{{$data->maLo}}" action="" method="post">
            @csrf
            <tr>
                <td scope="row">{{$data->maLo}}</td>
                <td scope="row">{{date('d-m-Y',strtotime($data->ngaySX))}}</td>
                <td scope="row">{{date('d-m-Y',strtotime($data->ngayNhap))}}</td>
                <td scope="row">{{$data->quocGia}}</td>
                <td scope="row">{{$data->soLuongConLai}}</td>
                <td scope="row">
                    @if($hsd/365>1)
                    {{intval($hsd/365)}} năm
                    @elseif($hsd/30>1)
                    {{intval($hsd/30)}} tháng
                    @else
                    {{$hsd}} ngày
                    @endif
                </td>
                <!-- <td>
                    <button onclick="editTH('{{$data->maLo}}')" type="button" class="btn" style="background-color: #f39c12;"><i class="fa-regular fa-pen-to-square"></i></button>
                    <button onclick="deleteTH('{{$data->maLo}}')" type="button" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button>
                </td> -->
            </tr>
        </form>
        @endif
        @endforeach
        <!-- <script>
            function editTH(x) {
                const myForm = document.getElementById('formTH' + x);
                myForm.action = "{{route('editTH')}}";
                myForm.submit();
            }

            function deleteTH(x) {
                if (confirm("Bạn muốn xóa thương hiệu có mã thương hiệu là " + x)) {
                    const myForm = document.getElementById('formTH' + x);
                    myForm.action = "{{route('deleteTH')}}";
                    myForm.submit();
                }
            }
        </script> -->
    </tbody>
</table>


@stop()