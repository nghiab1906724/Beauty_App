@extends('layouts.admin')
<title>Xác nhận đơn hàng</title>
@section('main')
<form action="{{route('capNhatTrangThai')}}" method="post">
    @csrf
    <div class="bg-light" style="padding: 10px 0;">
        <!-- trạng thái -->
        <div class="container bg-white">
            <div class="row">
                <div class="col">
                    <a href="{{route('xacNhanDH',['trangThai'=>0])}}" class="btn col-auto <?php if ($trangThai == 0) echo 'btn-warning'; ?>">Tất cả</a>
                    @foreach($bangTrangThai as $tt)
                    <a href="{{route('xacNhanDH',['trangThai'=>$tt->maTT])}}" class="btn col-auto <?php if ($trangThai == $tt->maTT) echo 'btn-warning'; ?>">{{$tt->trangThai}}</a>
                    @endforeach
                </div>
                <div class="col-auto">
                    @if($trangThai==1)
                    <button class="col-auto btn btn-success">Xác nhận đơn</button>
                    <span class="col-auto btn btn-danger">Hủy đơn</span>
                    @elseif($trangThai==2)
                    <button class="col-auto btn btn-success">Giao hàng</button>
                    <span class="col-auto btn btn-danger">Hủy đơn</span>
                    @elseif($trangThai==3)
                    <button class="col-auto btn btn-success">Xác nhận thành công</button>
                    <span class="col-auto btn btn-danger">Hủy đơn</span>
                    @endif
                </div>

            </div>

        </div>
        <!-- Sản phẩm -->
        @foreach($hoaDon as $hd)
        <div class="container my-3" style="background-color: #ecf0f1;">
            <h4 class="row">{{$hd->sdt}}_{{$hd->maHD}}</h4>
            <h5 class="row text-danger">Thông tin đơn hàng</h5>
            <div class="row">
                <h6 class="col-auto" style="font-weight: 600;">{{$hd->hoTenNhan}}-{{$hd->sdtNhan}}</h6>
                <div class="col">{{$hd->dc}}</div>
            </div>
            <div class="row"><span class="col" style="font-weight: 600;">Ngày đạt hàng: {{date('d-m-Y',strtotime($hd->ngayTao))}}</span></div>
            <table class="table">
                <thead>
                    <tr>
                        <th>
                            @if($trangThai > 0 && $trangThai < 4) <input name="{{$hd->sdt}}_{{$hd->maHD}}" value="{{$trangThai}}" type="checkbox">
                                @endif
                        </th>
                        <th style="min-width: 100px">Sản phẩm</th>
                        <th style="min-width: 100px">Lô hàng</th>
                        <th style="min-width: 100px">Đơn giá</th>
                        <th style="min-width: 100px">Số lượng</th>
                        <th style="min-width: 110px">Thành tiền</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($hd->sanPham as $sp)
                    <tr>
                        <td></td>
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
                        <td>{{$sp->loHang}}</td>
                        <td>
                            <div><span>{{ number_format($sp->giaGoc*(1-$sp->phanTramDaGiam/100), 0, ',', '.') }}</span> đ</div>
                            @if($sp->phanTramDaGiam>0)
                            <div class="text-decoration-line-through" style="text-decoration: line-through;">{{ number_format($sp->giaGoc, 0, ',', '.') }} đ</div>
                            @endif
                        </td>
                        <td>{{$sp->SLMua}}</td>
                        <td><span id="tt{{$sp->barCode}}">{{ number_format($sp->giaGoc*(1-$sp->phanTramDaGiam/100)*$sp->SLMua, 0, ',', '.') }}</span> đ</td>

                    </tr>
                    @endforeach
                    <tr>
                        <td></td>
                        <td colspan="5">
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
                                    <tr>
                                        <td>Phương thức thanh toán: </td>
                                        <td>{{$hd->phuongThucTT}}</td>
                                        <td rowspan="4">
                                            <span style="color: red; align-self: center; border: solid red 2px; padding: 5px; font-size: 30px;"><?php if ($hd->trangThaiTT == 1) echo "ĐÃ THANH TOÁN";
                                                                                                                                                else echo "CHƯA THANH TOÁN"; ?></span>
                                        </td>
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
</form>
@endsection