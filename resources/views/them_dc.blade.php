@extends('layouts.empty')
<title>Thêm địa chỉ</title>
@section('main')
<!-- <form action="" method="post">
    <input type="text" name="hoTenNhan" id="" placeholder="Vui lòng nhập họ và tên">
    <input type="text" name="sdtNhan" id="" placeholder="Số điện thoại nhận hàng">
    <div>
        <select class="form-select form-select-sm mb-3" id="city" aria-label=".form-select-sm">
            <option value="" selected>Chọn tỉnh thành</option>
        </select>

        <select class="form-select form-select-sm mb-3" id="district" aria-label=".form-select-sm">
            <option value="" selected>Chọn quận huyện</option>
        </select>

        <select class="form-select form-select-sm" id="ward" aria-label=".form-select-sm">
            <option value="" selected>Chọn phường xã</option>
        </select>
    </div>
</form> -->

<form class="container" style="position: relative; top: 50px;" action="{{route('themDC')}}" method="post">
    @csrf
    <h1>Thêm địa chỉ</h1>
    <!-- 2 column grid layout with text inputs for the first and last names -->
    <div class="row mb-4">

        <!-- Họ và tên người nhận -->
        <div class="form-outline mb-4">
            <input name="hoTenNhan" type="text" id="form6Example3" class="form-control" placeholder="Vui lòng nhập họ và tên" />
            @error('hoTenNhan')
            <span class="form-message text-danger">Vui lòng nhập họ tên!</span>
            @enderror
        </div>

        <!-- Số điện thoại nhận -->
        <div class="form-outline mb-4">
            <input name="sdtNhan" type="text" id="form6Example4" class="form-control" placeholder="Vui lòng nhập số điện thoại" />
            @error('sdtNhan')
            <span class="form-message text-danger">Số điện thoại không đúng!</span>
            @enderror
        </div>

        <!-- Tỉnh thành -->
        <div class="form-outline mb-4">
            <!-- <input type="email" id="form6Example5" class="form-control" /> -->
            <select name="tinh" class="form-select form-select-sm mb-3" id="city" aria-label=".form-select-sm">
                <option value="" selected>Chọn tỉnh thành</option>
            </select>
            <select name="huyen" class="form-select form-select-sm mb-3" id="district" aria-label=".form-select-sm">
                <option value="" selected>Chọn quận huyện</option>
            </select>
            <select name="xa" class="form-select form-select-sm" id="ward" aria-label=".form-select-sm">
                <option value="" selected>Chọn phường xã</option>
            </select>
            @error('xa')
            <span class="form-message text-danger">Vui lòng chọn địa chỉ!</span>
            @enderror
        </div>

        <!-- Number input -->
        <div class="form-outline mb-4">
            <input name="dc" type="text" id="form6Example6" class="form-control" placeholder="Địa chỉ cụ thể" />
            @error('dc')
            <span class="form-message text-danger">Vui lòng nhập địa chỉ cụ thể!</span>
            @enderror
        </div>

        <!-- Checkbox -->
        <div class="form-check d-flex justify-content-center mb-4">
            <input name="macDinh" class="form-check-input me-2" type="checkbox" value="" id="form6Example8" checked />
            <label class="form-check-label" for="form6Example8"> Chọn làm địa chỉ mặc định? </label>
        </div>

        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block mb-4">Thêm địa chỉ</button>
</form>

<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
<script>
    var citis = document.getElementById("city");
    var districts = document.getElementById("district");
    var wards = document.getElementById("ward");
    var Parameter = {
        url: "https://raw.githubusercontent.com/kenzouno1/DiaGioiHanhChinhVN/master/data.json",
        method: "GET",
        responseType: "application/json",
    };
    var promise = axios(Parameter);
    promise.then(function(result) {
        renderCity(result.data);
    });

    function renderCity(data) {
        for (const x of data) {
            citis.options[citis.options.length] = new Option(x.Name, x.Name);
        }
        citis.onchange = function() {
            district.length = 1;
            ward.length = 1;
            if (this.value != "") {
                const result = data.filter(n => n.Name === this.value);

                for (const k of result[0].Districts) {
                    district.options[district.options.length] = new Option(k.Name, k.Name);
                }
            }
        };
        district.onchange = function() {
            ward.length = 1;
            const dataCity = data.filter((n) => n.Name === citis.value);
            if (this.value != "") {
                const dataWards = dataCity[0].Districts.filter(n => n.Name === this.value)[0].Wards;

                for (const w of dataWards) {
                    wards.options[wards.options.length] = new Option(w.Name, w.Name);
                }
            }
        };
    }
</script>
@endsection