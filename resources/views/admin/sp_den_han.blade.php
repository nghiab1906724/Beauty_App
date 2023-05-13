@extends('layouts.admin')
<title>Quản Lý Sản Phẩm</title>
@section('main')
<a class="btn btn-primary" href="{{route('qLSP')}}">Tất Cả Sản Phẩm</a>
<br> <br>
<!-- Tìm kiếm -->
<div><input type="search" name="tim" id="tim" placeholder="Barcode"><button onclick="search()" style="background-color: cornflowerblue; color: white;">Tìm</button></div>
<script>
    function search() {
        let searchValue = document.getElementById("tim").value; // lấy giá trị của ô tìm kiếm
        let spDivs = document.querySelectorAll(".bar"); // lấy tất cả các thẻ div có class là "bar"

        spDivs.forEach(function(div) {
            let spCode = div.innerText; // lấy mã sản phẩm trong thẻ div
            if (spCode.includes(searchValue)) { // kiểm tra xem mã sản phẩm có chứa giá trị tìm kiếm không
                div.style.backgroundColor = "yellow"; // đánh dấu thẻ div tìm thấy bằng màu nền vàng
                let distanceFromTop = div.getBoundingClientRect().top; // tính khoảng cách từ đỉnh màn hình đến đỉnh thẻ div
                let windowHeight = window.innerHeight; // lấy chiều cao của màn hình
                let scrollAmount = distanceFromTop - windowHeight / 2; // tính khoảng cách cần cuộn để đưa thẻ div vào giữa màn hình

                window.scrollTo({
                    top: scrollAmount,
                    behavior: "smooth" // cuộn màn hình một cách mượt mà
                });
            }
        });
    }
</script>

<table class="table">
    <thead>
        <tr>
            <th scope="col">Sản phẩm</th>
            <th scope="col">Giá bán</th>
            <th scope="col">Lô hàng</th>
            <th scope="col">Hạn dùng</th>
            <th scope="col">Số lượng tồn</th>
            <th>Thao táctác</th>
        </tr>
    </thead>
    <tbody>
        @foreach($sp as $sp)
        <?php
        $diff = strtotime($sp->ngaySX) + $sp->hsd * 24 * 60 * 60;
        $hsd = date('d-m-Y', $diff);
        ?>
        <tr>
            <td>
                <div>
                    <img src="{{url('resources/views/img/SanPham')}}/{{$sp->barCode}}.jpg" alt="" style="width: 80px;">
                    <div class="bar" style="font-weight: 600;">{{$sp->barCode}}</div>
                </div>
                <p>{{$sp->tenDong}} - {{$sp->sanPham}}({{$sp->dungTich}})</p>
            </td>
            <td>
                <span><span>{{ number_format($sp->giaBan*(1-$sp->phanTramGiam/100), 0, ',', '.') }} đ</span>
                    @if($sp->phanTramGiam>0)
                    <!-- giắ gốc -->
                    <del>{{ number_format($sp->giaBan, 0, ',', '.') }} đ</del>
                    <!-- Phần trăm giảm -->
                    <span class="badge bg-success h5">-{{$sp->phanTramGiam}}%</span>
                    @endif
                    <div>
                        <!-- Button trigger modal -->
                        <button type="button" style="background: none; border: none; color: #26de81; font-weight: 600;" data-bs-toggle="modal" data-bs-target="#km{{$sp->barCode}}">
                            Khuyến mại
                        </button>
                    </div>
            </td>
            <td>{{$sp->maLo}}</td>
            <td>{{$hsd}}</td>
            <td>{{$sp->soLuongConLai}}</td>
            <td>
                <div><a style="font-size: 20px;" href="{{route('qLLH',['barCode'=>$sp->barCode])}}"><i class="fa-solid fa-truck"></i></a></div>
                
                <div><a style="font-size: 20px; color: #26de81;" href=""><i style="margin-top: 10px;" class="fa-solid fa-pen-to-square"></i></a></div>

                <div><a style="font-size: 20px; color: brown;" href=""><i style="margin-top: 10px;" class="fa-solid fa-trash"></i></a></div>
            </td>
        </tr>
        <!-- Modal -->
        <form method="post" action="{{route('capNhatKM')}}">
            @csrf
            <div class="modal fade" id="km{{$sp->barCode}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="km{{$sp->barCode}}Label" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="modal-title fs-5" id="km{{$sp->barCode}}Label">Cập nhật khuyến mại</h3>
                            <button style="background: none; border: none;" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i style="font-size: x-large;" class="fa-solid fa-xmark"></i></button>
                        </div>
                        <div class="modal-body">

                            <div class="mb-3">
                                <label for="" class="form-label">BarCode</label>
                                <input name="barCode" type="text" class="form-control" value="{{$sp->barCode}}" required>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Phần trăm giảm</label>
                                <input name="giam" type="number" class="form-control" required min="0" value="{{$sp->phanTramGiam}}">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                            <button type="button submit" class="btn btn-primary">Cập nhật</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        @endforeach
    </tbody>
</table>
@stop()