@php
$viTri='sanPham';
@endphp
@extends('layouts.site')
@section('main')
<title>Giỏ hàng</title>
<div class="container-fluid">
    <h3 class="row my-3">Giỏ hàng của bạn</h3>
    @if(count($gioHang)!=0)
    <div class="row">
        <!-- Giỏ hàng -->
        <div class="col-12 col-md-8">
            <form id="gioHang" action="{{route('updateGioHang')}}" method="post">
                <button type="submit" class="btn btn-success">CẬP NHẬT GIỎ HÀNG</button>
                @csrf
                <table class="table">
                    <thead>
                        <tr>
                            <th>Chọn</th>
                            <th style="min-width: 100px">Sản phẩm</th>
                            <th style="min-width: 100px">Giá tiền</th>
                            <th style="min-width: 100px">Số lượng</th>
                            <th style="min-width: 110px">Thanh toán</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($gioHang as $sp)
                        <tr>
                            <td><input class="chon" onchange="tamTinh()" id="check{{$sp->barCode}}" type="checkbox" name="chon{{$sp->barCode}}" <?php if ($sp->chon) echo 'checked'; ?>></td>

                            <!-- Thông tin sản phẩm -->
                            <td class="row">
                                <!-- Ảnh -->
                                <a class="col-auto" style="width: 100px;" href="{{route('chiTietSP', ['id'=>$sp->barCode])}}">
                                    <img class="img-fluid" src="{{url('resources/views/img/SanPham')}}/{{$sp->barCode}}.jpg" alt="">
                                </a>

                                <!-- Sản phẩm -->
                                <div class="col">
                                    {{$sp->tenDong}}

                                    <!-- Form xóa -->
                                    <div>
                                        <input type="hidden" name="barCode" value="{{$sp->barCode}}">
                                    <button onclick="xoa()" class="btn fs-6 fw-bold"><i class="fa-solid fa-xmark"></i> Xóa</button>
                                    </div>

                                    <!-- Quà tặng -->
                                    <!-- <div>
                                        <h6>Quà tặng:</h6>
                                        <ul>
                                            <li class="row">
                                                <div class="col-auto" style="width: 70px;">
                                                    <img class="img-fluid" src="https://media.hasaki.vn/catalog/product/f/a/facebook-dynamic-mat-na-foodaholic-hyaluronic-acid-cap-am-da-tang-23ml_img_80x80_d200c5_fit_center.jpg" alt="">
                                                </div>
                                                <div class="col">
                                                    Mặt Nạ Foodaholic Hyaluronic Acid Cấp Ẩm Đa Tầng 23ml
                                                    <div>Trị giá: 10,000 ₫</div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div> -->

                                </div>
                            </td>

                            <td>
                                @if($sp->phanTramGiam>0)
                                <div class="text-decoration-line-through">{{ number_format($sp->giaBan, 0, ',', '.') }} đ</div>
                                @endif
                                <div><span>{{ number_format($sp->giaBan*(1-$sp->phanTramGiam/100), 0, ',', '.') }}</span> đ</div>
                            </td>
                            <td><input oninput="thanhToan(this.value, <?php echo $sp->giaBan*(1-$sp->phanTramGiam/100); ?>, <?php echo $sp->barCode; ?>)" style="width: 60px;" type="number" name="sl{{$sp->barCode}}" value="{{$sp->soLuongSP}}" min="1"></td>
                            <td><span id="tt{{$sp->barCode}}">{{ number_format($sp->giaBan*(1-$sp->phanTramGiam/100)*$sp->soLuongSP, 0, ',', '.') }}</span> đ</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </form>
        </div>

        <!-- Hóa đơn -->
        <div class="col">
            <table class="table table-borderless border">
                <thead>
                    <tr>
                        <th colspan="2">Hóa đơn của bạn</th>
                    </tr>
                </thead>
                <tbody class="border-bottom border-top border-2 border-success">
                    <tr>
                        <td>Tạm tính: </td>
                        <td><span id="tamTinh"></span> đ</td>
                    </tr>
                    <tr>
                        <td>Giảm giá: </td>
                        <td><span id="giamGia">0</span> đ</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td>Tổng cộng: </td>
                        <td><span id="tongTien"></span> đ</td>
                    </tr>
                    <tr>
                        <td colspan="2"><button onclick="datHang()" id="btnDH" style="width: 100%;" class="btn btn-danger">TIẾN HÀNH ĐẶT HÀNG</button></td>
                    </tr>
                </tfoot>
            </table>
        </div>
        <script>
            addEventListener('load', tamTinh);    

            function thanhToan(sl, gia, sp) {
                document.getElementById('tt' + sp).innerHTML = (sl * gia).toLocaleString('vi-VN', {
                    minimumFractionDigits: 0,
                    maximumFractionDigits: 0
                }).replace(/,/g, ".");
                tamTinh();
            }

            function tamTinh() {
                let t = document.getElementsByClassName('chon');
                let sum = 0;
                for (let i = 0; i < t.length; i++)
                    if (t[i].checked) {
                        sum += parseInt(document.getElementById(t[i].id.replace('check', 'tt')).innerHTML.replaceAll('.', ''));

                    }
                document.getElementById('tamTinh').innerHTML = sum.toLocaleString('vi-VN', {
                    minimumFractionDigits: 0,
                    maximumFractionDigits: 0
                }).replace(/,/g, ".");
                hoaDon();
            }

            function hoaDon() {
                let tamTinh = parseInt(document.getElementById('tamTinh').innerHTML.replaceAll('.', ''));
                let giamGia = parseInt(document.getElementById('giamGia').innerHTML.replaceAll('.', ''));
                document.getElementById('tongTien').innerHTML = (tamTinh - giamGia).toLocaleString('vi-VN', {
                    minimumFractionDigits: 0,
                    maximumFractionDigits: 0
                }).replace(/,/g, ".");
            }

            function datHang() {
                let myForm = document.getElementById('gioHang');
                myForm.action = "{{ route('datHang') }}";
                myForm.method = "POST";
                myForm.submit();
            };
            function xoa() {
                let myForm = document.getElementById('gioHang');
                myForm.action = "{{ route('deleteGH') }}";
                myForm.method = "POST";
                myForm.submit();
            };
        </script>
    </div>
    @endif
</div>

@stop()