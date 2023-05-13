<?php $viTri = ''; ?>
@extends('layouts.site')
<title>SkinTest</title>
@section('main')
<br>
<div class="container">
    <div class="row d-flex justify-content-between">
        <div class="col h3 text-danger">Tình trạng da của bạn</div>
    </div>
    <br>

    @if(count($loaiDa)>0)
    <div class="row">
        <img src="{{url('resources\views\images')}}\headerImage.png" alt="" style="width: 100%; margin-bottom: 30px;">
    </div>
    <div class="row">
        <h3 class="col-auto bg-danger rounded-5" style="color: white; ">{{$loaiDa[0]->loaiDa}}</h3>
    </div>
    <br>
    <?php
    $dacDiem = explode("\r\n", $loaiDa[0]->dacDiem);
    $loiKhuyen = explode("\r\n", $loaiDa[0]->loiKhuyen);
    ?>
    <div class="row">
        <div class="col-12" style="font-weight: bold;">
            <p><span class="h3 bg-info text-white rounded-5" style="padding: 5px;">Đặc điểm da</span></p>
            @foreach($dacDiem as $dd)
            <p style="font-weight: 600; font-size: medium;">{{$dd}}</p>
            @endforeach
        </div>
        <div class="col-12">
            <p><span class="h3 bg-info text-white rounded-5" style="padding: 5px;">Lời khuyên</span></p>
            @foreach($loiKhuyen as $lk)
            <p style="font-weight: 600; font-size: medium;">{{$lk}}</p>
            @endforeach
        </div>
        <div class="col-12">
            <p><span class="h3 bg-info text-white rounded-5" style="padding: 5px;">Các sản phẩm gợi ý</span></p>
            <div class="row property__gallery row-cols-5 d-flex justify-content-evenly">
                @foreach($sp as $sp)
                <div class="col">
                    <a class="text-decoration-none" href="{{route('chiTietSP', ['id'=>$sp->barCode])}}">
                        <div class="product__item">
                            <img src="{{url('resources/views/img/SanPham')}}/{{$sp->barCode}}.jpg" alt="">
                            <!-- <h6 class="text-center text-uppercase fw-semibold">Chống nắng</h6> -->
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    @else
    <div class="row d-flex justify-content-center">
        <p class="col-12 h3 text-primary text-opacity-75 text-center">Bạn chưa thực hiện kiểm tra da</p>
        <a class="col-auto btn btn-danger rounded-5" href="{{route('testDa')}}" style="font-size: 32px; font-weight: 500;">KIỂM TRA DA NGAY</a>
    </div>
    @endif
</div>
</div>
@endsection