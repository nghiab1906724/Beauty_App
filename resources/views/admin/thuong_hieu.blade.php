@extends('layouts.admin')
@section('main')
<title>Quản Lý Thương Hiệu</title>

<?php ob_start(); ?>
@foreach($nsx as $nsx)
<option value="{{$nsx->maNSX}}">{{$nsx->nsx}}</option>
@endforeach
<?php $optionNSX = ob_get_contents();
ob_end_clean(); ?>


<!-- Thêm thương hiệu mới -->
<button style="float: right;" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    <i class="fa-solid fa-plus"></i> Thêm thương hiệu mới
</button>
<!-- Modal -->
<form method="post" action="{{route('addTH')}}">
    @csrf
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title fs-5" id="staticBackdropLabel">Thêm thương hiệu mới</h3>
                    <button style="background: none; border: none;" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i style="font-size: x-large;" class="fa-solid fa-xmark"></i></button>
                </div>
                <div class="modal-body">

                    <div class="mb-3">
                        <label for="" class="form-label">Thương hiệu</label>
                        <input name="tenTH" type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Chủ sở hữu </label>
                        <select name="nsx" class="form-select">
                            <?php echo $optionNSX; ?>
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
@error('tenTH')
<div class="alert alert-warning alert-dismissible fade show" role="alert" style="width: fit-content; align-content: center;">
    Vui lòng điền tên thương hiệu
    <button style="background: none;border: none;" type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
</div>
@enderror
@if(session('editOK'))
<div class="alert alert-success alert-dismissible fade show" role="alert" style="width: fit-content; align-content: center;">
    {{session('editOK')}}
    <button style="background: none;border: none;" type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><i class="fa-solid fa-xmark text-white"></i></button>
</div>
@elseif(session('editFail'))
<div class="alert alert-warning alert-dismissible fade show" role="alert" style="width: fit-content; align-content: center;">
    {{session('editFail')}}
    <button style="background: none;border: none;" type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
</div>
@endif
@if(session('addOK'))
<div class="alert alert-success alert-dismissible fade show" role="alert" style="width: fit-content; align-content: center;">
    {{session('addOK')}}
    <button style="background: none;border: none;" type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><i class="fa-solid fa-xmark text-white"></i></button>
</div>
@elseif(session('addFail'))
<div class="alert alert-warning alert-dismissible fade show" role="alert" style="width: fit-content; align-content: center;">
    {{session('addFail')}}
    <button style="background: none;border: none;" type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
</div>
@endif
@if(session('deleteOK'))
<div class="alert alert-success alert-dismissible fade show" role="alert" style="width: fit-content; align-content: center;">
    {{session('deleteOK')}}
    <button style="background: none;border: none;" type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><i class="fa-solid fa-xmark text-white"></i></button>
</div>
@elseif(session('deleteFail'))
<div class="alert alert-warning alert-dismissible fade show" role="alert" style="width: fit-content; align-content: center;">
    {{session('deleteFail')}}
    <button style="background: none;border: none;" type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
</div>
@endif

<table class="table">
    <thead>
        <tr>
            <th scope="col">Mã thương hiệu</th>
            <th scope="col">Thương hiệu</th>
            <th scope="col">Chủ thương hiệu</th>
            <th scope="col">Xuất xứ thương hiệu</th>
        </tr>
    </thead>
    <tbody class="table-group-divider">
        @foreach($data as $data)
        <form id="formTH{{$data->maTH}}" action="" method="post">
            @csrf
            <tr>
                <th scope="row">{{$data->maTH}}</th>
                <input style="display: none;" type="text" name="maTH" id="" value="{{$data->maTH}}">
                <td><input type="text" name="tenTH" id="" value="{{$data->thuongHieu}}"></td>
                <td><select name="nsx" class="form-select">
                        <option value="{{$data->maNSX}}" selected>{{$data->nsx}}</option>
                        <?php echo $optionNSX; ?>
                    </select></td>
                <td>{{$data->quocGia}}</td>
                <td>
                    <button onclick="editTH('{{$data->maTH}}')" type="button" class="btn" style="background-color: #f39c12;"><i class="fa-regular fa-pen-to-square"></i></button>
                    <button onclick="deleteTH('{{$data->maTH}}')" type="button" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button>
                </td>
            </tr>
        </form>
        @endforeach
        <script>
            function editTH(x) {
                const myForm = document.getElementById('formTH' + x);
                myForm.action = "{{route('editTH')}}";
                myForm.submit();
            }

            function deleteTH(x) {
                if (confirm("Bạn muốn xóa thương hiệu có mã thương hiệu là "+x)) {
                    const myForm = document.getElementById('formTH' + x);
                    myForm.action = "{{route('deleteTH')}}";
                    myForm.submit();
                }
            }
        </script>
    </tbody>
</table>


@stop()