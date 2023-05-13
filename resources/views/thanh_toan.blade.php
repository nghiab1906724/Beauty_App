@extends('layouts.empty')
<title>Thanh Toán</title>
@section('main')
@if(session('fail'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>{{session('fail')}}</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
<div class="bg-light" style="padding: 10px 0;">
    <!-- Địa chỉ -->
    <div class="container bg-white">
        <h3 class="row text-danger">Địa chỉ nhận hàng</h3>
        <div class="row">
            <h6 class="col-auto">{{$dcMD[0]->hoTenNhan}}-{{$dcMD[0]->sdtNhan}}</h6>
            <div class="col">{{$dcMD[0]->dcNhan}}</div>
            <a class="col-auto text-decoration-none" data-bs-toggle="modal" data-bs-target="#staticBackdrop" href="#">Thay Đổi</a>
        </div>
        <!-- Chọn địa chỉ -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">

                <form id="DCGH" action="{{route('taoMD')}}" method="post">
                    @csrf
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Địa Chỉ Của Tôi</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body row">
                            @foreach($dc as $dc)
                            <input class="col-auto" value="{{$dc->maDC}}" type="radio" name="chon" <?php if ($dc->macDinh == 1) echo 'checked="checked"'; ?>>

                            <div class="col">
                                <h6>{{$dc->hoTenNhan}}-{{$dc->sdtNhan}}</h6>
                                <p>{{$dc->dcNhan}}</p>
                            </div>
                            <div class="col-auto fs-12">
                                <button onclick="xoaDC(<?php echo $dc->maDC; ?>)" type="button" class="btn btn-danger">Xóa</button>
                            </div>
                            <hr>
                            @endforeach
                            <input id="inpXoa" type="hidden" name="xoa" value="">
                            <script>
                                function xoaDC(maDC) {

                                    let fr = document.getElementById('DCGH');
                                    fr.action = "<?php echo route('xoaDC'); ?>";
                                    fr.method = "post";
                                    document.getElementById('inpXoa').value = maDC;
                                    fr.submit();
                                }
                            </script>
                        </div>
                        <div>
                            <a class="btn" href="{{route('trangThemDC')}}"><i class="fa-solid fa-plus"></i> Thêm địa chỉ mới</a>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                            <button type="submit" class="btn btn-primary">Xác nhận</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Sản phẩm -->
    <div class="container my-3 bg-white">
        <h3 class="row text-success">Sản phẩm</h3>
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
                @foreach($gioHang as $sp)
                <tr>
                    <!-- Thông tin sản phẩm -->
                    <td class="row">
                        <!-- Ảnh -->
                        <div class="col-auto" style="width: 100px;">
                            <img class="img-fluid" src="{{url('resources/views/img/SanPham')}}/{{$sp->barCode}}.jpg" alt="">
                        </div>

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
                        <div><span>{{ number_format($sp->giaBan*(1-$sp->phanTramGiam/100), 0, ',', '.') }}</span> đ</div>
                    </td>
                    <td>{{$sp->soLuongSP}}</td>
                    <td><span id="tt{{$sp->barCode}}">{{ number_format($sp->giaBan*(1-$sp->phanTramGiam/100)*$sp->soLuongSP, 0, ',', '.') }}</span> đ</td>
                </tr>
                @php
                $tamTinh+=$sp->giaBan*(1-$sp->phanTramGiam/100)*$sp->soLuongSP;
                @endphp
                @endforeach
            </tbody>
        </table>
    </div>

    <form id="payMethod" action="{{route('payCOD')}}" method="post">
        @csrf
        <div class="container bg-white">
            <div class="row">
                <div class="col">
                    <h6>Phương thức thanh toán</h6>
                    @foreach($pttt as $pttt)
                    <p>
                        <input onclick="datHang(<?php echo $pttt->maPT;?>)" id="{{$pttt->maPT}}" type="radio" name="pttt" value="{{$pttt->maPT}}" <?php if($pttt->maPT==1)echo 'checked';?>>
                        <label for="{{$pttt->maPT}}">{{$pttt->phuongThucTT}}</label>
                    </p>
                    @endforeach
                    <script>
                        function datHang(x) {
                            let pForm=document.getElementById('payMethod');
                            if(x==1)pForm.action="<?php echo route('payCOD');?>";
                            else if(x==2)pForm.action="<?php echo route('payMoMo');?>";
                            else pForm.action="<?php echo route('payVNP');?>";
                        }
                    </script>
                </div>
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
                                <td><span id="tamTinh">{{ number_format($tamTinh, 0, ',', '.') }}</span> đ</td>
                            </tr>
                            <tr>
                                <td>Phí vận chuyển: </td>
                                <td><span id="vanChuyen">25.000</span> đ</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td>Tổng cộng: </td>
                                <td><span id="tongTien">{{ number_format($tamTinh+25000, 0, ',', '.') }}</span> đ</td>
                            </tr>
                            <tr>
                                <input type="hidden" name="tamTinh" value="{{$tamTinh}}">
                                <input type="hidden" name="vanChuyen" value="25000">
                                <td colspan="2"><button type="submit" style="width: 100%;" class="btn btn-success" name="redirect">ĐẶT HÀNG</button></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </form>

</div>
@endsection