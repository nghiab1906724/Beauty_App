<?php $viTri = 'sanPham'; ?>
@extends('layouts.site')
<title>Sản phẩm</title>
@section('main')
<div>
  <img src="{{url('resources\views\images')}}\headerImage.png" alt="" style="width: 100%; margin-bottom: 30px;">
</div>
<!-- Shop Section Begin -->
<section class="shop spad">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-3">
        <div class="shop__sidebar">

          <div class="sidebar__categories">
            <div class="section-title">
              <h4>Lọc theo loại</h4>
            </div>
            <div class="categories__accordion">
              <div class="accordion" id="accordionExample">
                @foreach($danhMuc as $dm)
                <div class="card">
                  <div class="card-heading">
                    <a data-toggle="collapse" data-target="#collapse{{$dm->maDM}}">{{$dm->danhMuc}}</a>
                  </div>
                  <div id="collapse{{$dm->maDM}}" class="collapse" data-parent="#accordionExample">
                    <div class="card-body">
                      <ul>
                        @foreach($dm->loai as $loai)
                        <li><a class="text-decoration-none" href="{{route('locLoai',['loai'=>$loai->maLoai])}}">{{$loai->loai}}</a></li>
                        @endforeach
                      </ul>
                    </div>
                  </div>
                </div>
                @endforeach

              </div>
            </div>
          </div>

          <!-- Lọc theo giá -->
          <!-- <div class="sidebar__filter">
            <div class="section-title">
              <h4>Lọc theo giá</h4>
            </div>
            <div class="filter-range-wrap">
              <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content" data-min="33" data-max="99"></div>
              <div class="range-slider">
                <div class="price-input">
                  <p>Price:</p>
                  <input type="text" id="minamount">
                  <input type="text" id="maxamount">
                </div>
              </div>
            </div>
            <a href="#">Filter</a>
          </div> -->

          <!-- Lọc theo thương hiệu -->
          <div class="sidebar__categories">
            <div class="section-title">
              <h4>Lọc theo thương hiệu</h4>
            </div>
            <ul class="form-select" style="height: 50vh; overflow-y: scroll;" multiple aria-label="multiple select example">
              @foreach($thuongHieu as $th)
              <li><a class="text-black text-decoration-none" style="font-size: 14px; font-weight: 500;" href="{{route('locThuongHieu',['th'=>$th->maTH])}}">{{$th->thuongHieu}}</a></li>
              @endforeach
            </ul>
          </div>

        </div>
      </div>

      <div class="col-lg-9 col-md-9">
        <div class="row g-3  row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1">

          @foreach($sanPham as $sp)
          <div class="col">
            <a class="col card text-center text-decoration-none text-black" href="{{route('chiTietSP', ['id'=>$sp->barCode])}}">
              <img class="card-img-top border-bottom-0" src="{{url('resources/views/img/SanPham')}}/{{$sp->barCode}}.jpg" alt="">
              <hr style="width: 100%;">
              <div class="card-body">
                <!-- Định dạng cho tên sản phẩm -->
                <h5 class="card-title text-uppercase tenSP" style="height: 100px;">
                  @if(strlen($sp->sanPham) > 40)
                  @php $tam = substr($sp->sanPham, 0, 40); @endphp
                  {{ substr($tam, 0, strrpos($tam, ' ')) }}...
                  @else
                  {{ $sp->sanPham }}
                  @endif
                </h5>
                <div class="row align-items-center" style="min-height: 60px;">
                  <span class="col btn text-bg-primary d-block text-uppercase rounded-5" style="font-size: 16px;">{{$sp->loai}}</span>
                </div>
                <br>
                <div style="min-height: 50px;">
                  @if($sp->phanTramGiam>0)
                  <div class="width_common block_price space_bottom_3">
                    <span class="text-decoration-line-through">{{ number_format($sp->giaBan, 0, ',', '.') }} đ</span>
                    <span class="badge bg-danger text-wrap">{{$sp->phanTramGiam}}%</span>
                  </div>
                  @endif
                  <span class="h5">{{ number_format($sp->giaBan*(1-$sp->phanTramGiam/100), 0, ',', '.') }} đ</span>
                </div>
              </div>
            </a>
          </div>
          @endforeach

          <div class="col-lg-12 text-center">
            <div class="pagination__option">
              <a href="#">1</a>
              <a href="#">2</a>
              <a href="#">3</a>
              <a href="#"><i class="fa fa-angle-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Shop Section End -->
@stop()