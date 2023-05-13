<?php $viTri = 'trangChu'; ?>
@extends('layouts.site')
<title>Trang Chủ</title>
@section('main')
<a href="{{route('testDa')}}" class="btn btn-danger" style="position: absolute; right: 50; top: 60; font-weight: bold;">TEST DA NHANH</a>
<!-- Banner start -->
<div id="carouselExampleAutoplaying" class="carousel slide container-fluid" data-bs-ride="carousel">
    <div class="carousel-inner row">
        <div class="carousel-item active">
            <img src="{{url('resources/views/img')}}/banner/banner-1.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="{{url('resources/views/img')}}/banner/banner-2.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="{{url('resources/views/img')}}/banner/banner-5.jpg" class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<!-- Banner end -->

<!-- Danh mục start -->

<!-- Danh mục end -->

<!-- Categories Section Begin -->
<!-- <section class="categories">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 p-0">
                <div class="categories__item categories__large__item set-bg" data-setbg="{{url('resources/views/img')}}/categories/category-1.jpg">
                    <div class="categories__text">
                        <h1>Women’s fashion</h1>
                        <p>Sitamet, consectetur adipiscing elit, sed do eiusmod tempor incidid-unt labore
                            edolore magna aliquapendisse ultrices gravida.</p>
                        <a href="#">Shop now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 p-0">
                        <div class="categories__item set-bg" data-setbg="{{url('resources/views/img')}}/categories/category-2.jpg">
                            <div class="categories__text">
                                <h4>Men’s fashion</h4>
                                <p>358 items</p>
                                <a href="#">Shop now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 p-0">
                        <div class="categories__item set-bg" data-setbg="{{url('resources/views/img')}}/categories/category-3.jpg">
                            <div class="categories__text">
                                <h4>Kid’s fashion</h4>
                                <p>273 items</p>
                                <a href="#">Shop now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 p-0">
                        <div class="categories__item set-bg" data-setbg="{{url('resources/views/img')}}/categories/category-4.jpg">
                            <div class="categories__text">
                                <h4>Cosmetics</h4>
                                <p>159 items</p>
                                <a href="#">Shop now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 p-0">
                        <div class="categories__item set-bg" data-setbg="{{url('resources/views/img')}}/categories/category-5.jpg">
                            <div class="categories__text">
                                <h4>Accessories</h4>
                                <p>792 items</p>
                                <a href="#">Shop now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- Categories Section End -->

<!-- Danh mục start -->
<section class="product spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div class="section-title">
                    <h4>Danh mục bạn quan tâm</h4>
                </div>
            </div>
        </div>
        <div class="row property__gallery row-cols-5">
            <div class="col">
                <a class="text-decoration-none" href="{{route('locLoai',['loai'=>14])}}">
                    <div class="product__item">
                        <img src="{{url('resources/views/img')}}/categories/dm-1.jpg" alt="">
                        <h6 class="text-center text-uppercase fw-semibold">Chống nắng</h6>
                    </div>
                </a>

            </div>
            <div class="col">
                <a class="text-decoration-none" href="{{route('locLoai',['loai'=>1])}}">
                    <div class="product__item">
                        <img src="{{url('resources/views/img')}}/categories/dm-2.jpg" alt="">
                        <h6 class="text-center text-uppercase fw-semibold">Sữa rửa mặt</h6>
                    </div>
                </a>
            </div>
            <div class="col">
                <a class="text-decoration-none" href="{{route('locLoai',['loai'=>8])}}">
                    <div class="product__item">
                        <img src="{{url('resources/views/img')}}/categories/dm-3.jpg" alt="">
                        <h6 class="text-center text-uppercase fw-semibold">Dưỡng ẩm</h6>
                    </div>
                </a>
            </div>
            <div class="col">
                <a class="text-decoration-none" href="{{route('locLoai',['loai'=>2])}}">
                    <div class="product__item">
                        <img src="{{url('resources/views/img')}}/categories/dm-4.jpg" alt="">
                        <h6 class="text-center text-uppercase fw-semibold">Tẩy trang</h6>
                    </div>
                </a>
            </div>
            <div class="col">
                <a class="text-decoration-none" href="{{route('locLoai',['loai'=>1])}}">
                    <div class="product__item">
                        <img src="{{url('resources/views/img')}}/categories/dm-5.jpg" alt="">
                        <h6 class="text-center text-uppercase fw-semibold">Xịt khoáng</h6>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- Danh mục end -->

<!-- Thương hiệu start -->
<section class="product spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div class="section-title">
                    <h4>Thương hiệu nổi bật</h4>
                </div>
            </div>
        </div>
        <div class="row property__gallery row-cols-4">
            <a class="text-decoration-none" href="{{route('locThuongHieu',['th'=>11])}}">
                <div class="col">
                    <div class="product__item">
                        <img src="{{url('resources/views/img')}}/brand/brand-1.jpg" alt="">
                    </div>
                </div>
            </a>
            <a class="text-decoration-none" href="{{route('locThuongHieu',['th'=>7])}}">
                <div class="col">
                    <div class="product__item">
                        <img src="{{url('resources/views/img')}}/brand/brand-2.jpg" alt="">
                    </div>
                </div>
            </a>
            <a class="text-decoration-none" href="{{route('locThuongHieu',['th'=>10])}}">
                <div class="col">
                    <div class="product__item">
                        <img src="{{url('resources/views/img')}}/brand/brand-3.jpg" alt="">
                    </div>
                </div>
            </a>
            <a class="text-decoration-none" href="{{route('locThuongHieu',['th'=>18])}}">
                <div class="col">
                    <div class="product__item">
                        <img src="{{url('resources/views/img')}}/brand/brand-4.jpg" alt="">
                    </div>
                </div>
            </a>
            <a class="text-decoration-none" href="{{route('locThuongHieu',['th'=>22])}}">
                <div class="col">
                    <div class="product__item">
                        <img src="{{url('resources/views/img')}}/brand/brand-5.jpg" alt="">
                    </div>
                </div>
            </a>
            <a class="text-decoration-none" href="{{route('locThuongHieu',['th'=>15])}}">
                <div class="col">
                    <div class="product__item">
                        <img src="{{url('resources/views/img')}}/brand/brand-6.jpg" alt="">
                    </div>
                </div>
            </a>
            <a class="text-decoration-none" href="{{route('locThuongHieu',['th'=>16])}}">
                <div class="col">
                    <div class="product__item">
                        <img src="{{url('resources/views/img')}}/brand/brand-7.jpg" alt="">
                    </div>
                </div>
            </a>
            <a class="text-decoration-none" href="{{route('locThuongHieu',['th'=>8])}}">
                <div class="col">
                    <div class="product__item">
                        <img src="{{url('resources/views/img')}}/brand/brand-8.jpg" alt="">
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>
<!-- Thương hiệu end -->

<!-- Product Section Begin -->
<section class="product spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div class="section-title">
                    <h4>sản phẩm nổi bật</h4>
                </div>
            </div>
        </div>
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

        </div>
    </div>
</section>
<!-- Product Section End -->

<!-- Services Section Begin -->
<section class="services spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="services__item">
                    <i class="fa fa-car"></i>
                    <h6>Free Shipping</h6>
                    <p>For all oder over $99</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="services__item">
                    <i class="fa fa-money"></i>
                    <h6>Money Back Guarantee</h6>
                    <p>If good have Problems</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="services__item">
                    <i class="fa fa-support"></i>
                    <h6>Online Support 24/7</h6>
                    <p>Dedicated support</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="services__item">
                    <i class="fa fa-headphones"></i>
                    <h6>Payment Secure</h6>
                    <p>100% secure payment</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Services Section End -->

<!-- Instagram Begin -->
<!-- <div class="instagram">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                <div class="instagram__item set-bg" data-setbg="{{url('resources/views/img')}}/instagram/insta-1.jpg">
                    <div class="instagram__text">
                        <i class="fa fa-instagram"></i>
                        <a href="#">@ ashion_shop</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                <div class="instagram__item set-bg" data-setbg="{{url('resources/views/img')}}/instagram/insta-2.jpg">
                    <div class="instagram__text">
                        <i class="fa fa-instagram"></i>
                        <a href="#">@ ashion_shop</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                <div class="instagram__item set-bg" data-setbg="{{url('resources/views/img')}}/instagram/insta-3.jpg">
                    <div class="instagram__text">
                        <i class="fa fa-instagram"></i>
                        <a href="#">@ ashion_shop</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                <div class="instagram__item set-bg" data-setbg="{{url('resources/views/img')}}/instagram/insta-4.jpg">
                    <div class="instagram__text">
                        <i class="fa fa-instagram"></i>
                        <a href="#">@ ashion_shop</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                <div class="instagram__item set-bg" data-setbg="{{url('resources/views/img')}}/instagram/insta-5.jpg">
                    <div class="instagram__text">
                        <i class="fa fa-instagram"></i>
                        <a href="#">@ ashion_shop</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                <div class="instagram__item set-bg" data-setbg="{{url('resources/views/img')}}/instagram/insta-6.jpg">
                    <div class="instagram__text">
                        <i class="fa fa-instagram"></i>
                        <a href="#">@ ashion_shop</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- Instagram End -->
@endsection