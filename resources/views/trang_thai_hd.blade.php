@extends('layouts.site')
<title>Đơn hàng của tôi</title>
@section('main')
<?php $viTri = ''; ?>
<div class="bg-light" style="padding: 10px 0;">
    <!-- trạng thái -->
    <div class="container bg-white">
        <div class="row justify-content-evenly">
            <a href="{{route('trangThaiHD',['tt'=>0])}}" class="btn col-auto <?php if ($trangThai == 0) echo 'btn-warning'; ?>">Tất cả</a>
            @foreach($bangTrangThai as $tt)
            <a href="{{route('trangThaiHD',['tt'=>$tt->maTT])}}" class="btn col-auto <?php if ($trangThai == $tt->maTT) echo 'btn-warning'; ?>">{{$tt->trangThai}}</a>
            @endforeach
        </div>
        <!-- Chọn địa chỉ -->

    </div>
    <!-- Sản phẩm -->
    @foreach($hoaDon as $hd)
    <div class="container my-3 bg-white">
        <h3 class="row text-success">{{date('d-m-Y',strtotime($hd->ngayTao))}}</h3>
        <table class="table">
            <thead>
                <tr>
                    <th style="min-width: 100px">Sản phẩm</th>
                    <th style="min-width: 100px">Đơn giá</th>
                    <th style="min-width: 100px">Số lượng</th>
                    <th style="min-width: 110px">Thành tiền</th>
                </tr>
            </thead>
            <tbody>
                @php
                $tamTinh=0;
                @endphp
                @foreach($hd->sanPham as $sp)
                <tr>
                    <!-- Thông tin sản phẩm -->
                    <td class="row">
                        <!-- Ảnh -->
                        <a class="col-auto" style="width: 100px;" href="{{route('chiTietSP', ['id'=>$sp->barCode])}}">
                            <img class="img-fluid" src="{{url('resources/views/img/SanPham')}}/{{$sp->barCode}}.jpg" alt="">
                        </a>

                        <!-- Sản phẩm -->
                        <div class="col">
                            {{$sp->tenDong}}

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
                        <div><span>{{ number_format($sp->giaGoc*(1-$sp->phanTramDaGiam/100), 0, ',', '.') }}</span> đ</div>
                        @if($sp->phanTramDaGiam>0)
                        <div class="text-decoration-line-through">{{ number_format($sp->giaGoc, 0, ',', '.') }} đ</div>
                        @endif
                    </td>
                    <td>{{$sp->SLMua}}</td>
                    <td><span id="tt{{$sp->barCode}}">{{ number_format($sp->giaGoc*(1-$sp->phanTramDaGiam/100)*$sp->SLMua, 0, ',', '.') }}</span> đ</td>

                </tr>
                @endforeach
                <tr>
                    <td></td>
                    <td colspan="3">
                        <table class="table table-borderless border border-success">
                            <tbody>
                                <tr>
                                    <td>Tạm tính: </td>
                                    <td><span id="tamTinh">{{ number_format($hd->tamTinh, 0, ',', '.') }}</span> đ</td>
                                </tr>
                                <tr>
                                    <td>Phí vận chuyển: </td>
                                    <td><span id="vanChuyen">{{ number_format($hd->phiVC, 0, ',', '.') }}</span> đ</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td>Tổng cộng: </td>
                                    <td><span id="tongTien">{{ number_format($hd->tamTinh+$hd->phiVC, 0, ',', '.') }}</span> đ</td>
                                </tr>
                            </tfoot>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    @endforeach
</div>
@endsection