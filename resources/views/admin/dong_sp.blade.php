@extends('layouts.admin')
@section('main')
<title>Quản Lý Dòng Sản Phẩm</title>

<?php ob_start(); ?>
@foreach($thuongHieu as $th)
<option value="{{$th->maTH}}">{{$th->thuongHieu}}</option>
@endforeach
<?php $optionTH = ob_get_contents();
ob_end_clean(); ?>
<?php ob_start(); ?>
@foreach($loaiSP as $loai)
<option value="{{$loai->maLoai}}">{{$loai->loai}}</option>
@endforeach
<?php $optionLoai = ob_get_contents();
ob_end_clean(); ?>

<!-- Thêm dòng sp mới -->
<button style="float: right;" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    <i class="fa-solid fa-plus"></i> Thêm dòng sản phẩm mới
</button>
<!-- Modal -->
<form method="post" action="{{route('addDongSP')}}">
    @csrf
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title fs-5" id="staticBackdropLabel">Thêm dòng sản phẩm mới</h3>
                    <button style="background: none; border: none;" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i style="font-size: x-large;" class="fa-solid fa-xmark"></i></button>
                </div>
                <div class="modal-body">

                    <div class="mb-3">
                        <label for="" class="form-label">Tên dòng</label>
                        <input autocomplete="off" name="tenDong" type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Loại </label>
                        <select name="loai" class="form-select">
                            <?php echo $optionLoai; ?>
                        </select>
                        <label for="" class="form-label">Thương hiệu </label>
                        <select name="thuongHieu" class="form-select">
                            <?php echo $optionTH; ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Hạn sử dụng (ngày)</label>
                        <input autocomplete="off" name="hsd" type="number" class="form-control" min="1">
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
@error('tenDong')
<div class="alert alert-warning alert-dismissible fade show" role="alert" style="width: fit-content; align-content: center;">
    Vui lòng điền tên dòng
    <button style="background: none;border: none;" type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
</div>
@enderror
@error('hsd')
<div class="alert alert-warning alert-dismissible fade show" role="alert" style="width: fit-content; align-content: center;">
    Hạn sử dụng phải là một số lớn hơn 0
    <button style="background: none;border: none;" type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
</div>
@enderror
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
@endif

<table class="table">
    <thead>
        <tr>
            <th scope="col">Mã dòng</th>
            <th scope="col">Dòng sản phẩm</th>
            <th scope="col">Thương hiệu</th>
            <th scope="col">Loại sản phẩm</th>
            <th scope="col">Hạn sử dụng (ngày)</th>
            <th></th>
        </tr>
    </thead>
    <tbody class="table-group-divider">
        @foreach($data as $data)
        <form id="formDongSP{{$data->maDong}}" action="" method="post">
            @csrf
            <tr>
                <th scope="row">{{$data->maDong}}</th>
                <input style="display: none;" type="text" name="maDong" id="" value="{{$data->maDong}}">
                <td>
                    <textarea spellcheck="false" name="tenDong" id="" cols="50" rows="2">{{$data->tenDong}}</textarea>
                </td>
                <td>
                    <select name="thuongHieu" class="form-select">
                        <option value="{{$data->maTH}}" selected>{{$data->thuongHieu}}</option>
                        <?php echo $optionTH; ?>
                    </select>
                </td>
                <td>
                    <select name="loai" class="form-select">
                        <option value="{{$data->maLoai}}" selected>{{$data->loai}}</option>
                        <?php echo $optionLoai; ?>
                    </select>
                </td>
                <td>
                    <input type="number" name="hsd" id="" value="{{$data->hsd}}">
                </td>
            </tr>
            <tr>
                <td colspan="5" align="right">
                    <button onclick="editDongSP('{{$data->maDong}}')" type="button" class="btn" style="background-color: #f39c12;"><i class="fa-regular fa-pen-to-square"></i></button>
                    <button onclick="deleteDongSP('{{$data->maDong}}')" type="button" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button>
                </td>
            </tr>
        </form>
        @endforeach
        <script>
            function editDongSP(x) {
                const myForm = document.getElementById('formDongSP' + x);
                myForm.action = "{{route('editDongSP')}}";
                myForm.submit();
            }

            function deleteDongSP(x) {
                if (confirm("Bạn muốn xóa dòng sản phẩm có mã là " + x)) {
                    const myForm = document.getElementById('formDongSP' + x);
                    myForm.action = "{{route('deleteDongSP')}}";
                    myForm.submit();
                }
            }
        </script>
    </tbody>
</table>
@stop()