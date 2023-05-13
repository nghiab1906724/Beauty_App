<?php $viTri = 'sanPham' ?>
@extends('layouts.site')
<title>Chi Tiết Sản Phẩm</title>
@section('main')
<main>
    <!-- giới thiệu -->
    <div class="container-fluid">
        <div class="row justify-content-center">
            <!-- ảnh -->
            <div class="col-12 col-md-4">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="false">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{url('resources/views/img/SanPham')}}/{{$sanPham->barCode}}.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Thông tin mua -->
            <div class="col">
                <table>
                    <tr>
                        <td class="col fs-3">
                            <span>{{$sanPham->tenDong}}({{$sanPham->dungTich}})</span>
                            <span>{{$sanPham->sanPham}}</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="h2 text-danger"><span>{{ number_format($sanPham->giaBan*(1-$sanPham->phanTramGiam/100), 0, ',', '.') }} đ</span>
                                @if($sanPham->phanTramGiam>0)
                                <!-- giắ gốc -->
                                <del class="h5">{{ number_format($sanPham->giaBan, 0, ',', '.') }} đ</del>
                                <!-- Phần trăm giảm -->
                                <span class="badge bg-success h5">-{{$sanPham->phanTramGiam}}%</span>
                                @endif
                        </td>
                    </tr>
                    <tr>
                        <td><h6>Sản phẩm tương tự:</h6></td>
                    </tr>
                    <tr>
                        <td><div class="row">
                            @foreach($sanPhamTT as $sptt)
                            @php
                            if($sptt->barCode===$sanPham->barCode){
                            $spSelect='border-info border-2';
                            }
                            else $spSelect='';
                            @endphp
                            <a class="col-1 mx-1 text-decoration-none text-black border {{$spSelect}}" href="{{route('chiTietSP', ['id'=>$sptt->barCode])}}">
                                <img class="col-12" src="{{url('resources/views/img/SanPham')}}/{{$sptt->barCode}}.jpg" alt="">
                                <span>{{$sptt->dungTich}}</span>
                            </a>
                            @endforeach
                        </div></td>
                    </tr>
                </table>
                <br>

                <!-- Form đặt hàng -->
                <form action="{{route('addGioHang')}}" method="post">
                    @csrf
                    <div>
                        <label class="h6">Số lượng:</label>
                        <input name="sl" type="number" style="width: 10%; padding-left: 10px;" min="1" max="50" value="1">
                    </div>
                    <br>
                    <input type="hidden" name="barCode" value="{{$sanPham->barCode}}">
                    <!-- Nút mua -->
                    <div>
                        <button name="mua" class="btn btn-success">Mua hàng ngay</button>
                        <button name="them" style="background-color: #d35400;" class="btn text-white"><i class="fas fa-cart-plus"></i> Thêm vào giỏ hàng</button>
                    </div>
                </form>

            </div>
        </div>
    </div>


    <div class="container">
        <!-- Công dụng sản phẩm -->
        <div class="row">
            <h3 class="text-center">Thông tin chi tiết</h3>
            <h6>Công dụng sản phẩm</h6>
            <p>
                @php
                $congDung= preg_split('/\n|\r|\r\n/', $sanPham->congDung, -1, PREG_SPLIT_NO_EMPTY);
                @endphp
            <ul style="margin-left: 20px;">
                @foreach($congDung as $congDung)
                <li>{{$congDung}}</li>
                @endforeach
            </ul>
            </p>
        </div>
        <!-- Thông số sản phẩm -->
        <div class="row">
            <h6>Thông số sản phẩm</h6>
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <td class="table-light">Barcode</td>
                        <td id='barCode'>{{$sanPham->barCode}}</td>
                    </tr>
                    <tr>
                        <td class="table-light">Thương Hiệu</td>
                        <td>{{$sanPham->thuongHieu}}</td>
                    </tr>
                    <tr>
                        <td class="table-light">Xuất xứ thương hiệu</td>
                        <td>{{$sanPham->quocGia}}</td>
                    </tr>
                    <tr>
                        <td class="table-light">Nơi sản xuất</td>
                        <td>Việt Nam</td>
                    </tr>
                    <tr>
                        <td class="table-light">Hạn sử dụng</td>
                        @if($sanPham->hsd>365)
                        <td>{{$sanPham->hsd/365}} năm</td>
                        @elseif($sanPham->hsd>30)
                        <td>{{$sanPham->hsd/30}} tháng</td>
                        @else
                        <td>{{$sanPham->hsd}} ngày</td>
                        @endif
                    </tr>
                    <tr>
                        <td class="table-light">Ngày sản xuất&Số lô</td>
                        <td>Xem trên bao bì</td>
                    </tr>
                    <tr>
                        <td class="table-light">Dung tích</td>
                        <td>{{$sanPham->dungTich}}</td>
                    </tr>
                    <tr>
                        <td class="table-light">Loại da</td>
                        <td>Da dầu</td>
                    </tr>
                    <tr>
                        <td class="table-light">Vấn đề da</td>
                        <td>Da dầu, lỗ chân lông to</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- Thành phần -->
        <div class="row">
            <h6>Thành phần sản phẩm</h6>
            <p>
                {{$sanPham->thanhPhan}}
            </p>
        </div>
        <!-- Thành phần -->
        <div class="row">
            <h6>Hướng dẫn sử dụng</h6>
            <p>
                @php
                $cachDung= preg_split('/\n|\r|\r\n/', $sanPham->cachDung, -1, PREG_SPLIT_NO_EMPTY);
                @endphp
            <ul style="margin-left: 20px;">
                @foreach($cachDung as $cachDung)
                <li>{{$cachDung}}</li>
                @endforeach
            </ul>
            </p>
        </div>
        <!-- Bảo quản -->
        <div class="row">
            <h6>Bảo quản</h6>
            <p>
                Bảo quản sản phẩm ở nơi khô thoáng, tránh ánh nắng trực tiếp.
            </p>
        </div>
    </div>
</main>
@stop()