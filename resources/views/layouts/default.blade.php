@php
use Illuminate\Support\Facades\Auth;
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{url('bootstrap\bootstrap-5.2.3-dist')}}\css\bootstrap.min.css">
  <link rel="stylesheet" href="{{url('resources\css')}}\produc.css">
  <link rel="shortcut icon" type="image/png" href="{{url('resources')}}\views\images\icon-cosmetics.png" />
  <script src="https://kit.fontawesome.com/830f7d44c3.js" crossorigin="anonymous"></script>
</head>

<body>
  <header>
    <div class="container-fluid">
      <div class="row align-items-center justify-content-between">
        <!-- Ảnh -->
        <img class="col-4 col-sm-3 col-md-2" src="{{url('resources')}}\views\images\NGHĨA COSMETIC STORE.gif" alt="">

        <!-- Nav -->
        <div id="manuBtnParent" class="col bg-black">
          <!-- Manu khi màn hình nhỏ -->
          <div id="manuBtn" class="dropdown" style="position: absolute; right: 50px; top: 1%">
            <button class="btn btn-primary" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="fa-solid fa-bars h4" style="margin-top: 5px;"></i>
            </button>
            <ul class="dropdown-menu">
              <li><a id="stc" class="dropdown-item" href="{{route('trangChu')}}">Trang chủ</a></li>
              <li><a id="ssp" class="dropdown-item" href="{{route('sanPham')}}">Sản phẩm</a></li>
              <li><a class="dropdown-item" href="#login">Bài viết</a></li>
              <li><a class="dropdown-item" href="#">Liên hệ</a></li>
            </ul>
          </div>
        </div>

        <!-- Manu khi màn hình lớn -->
        <nav id="manuNav" class="col nav nav-pills justify-content-center">
          <a id="tc" class="nav-link text-black" aria-current="page" href="{{route('trangChu')}}">Trang chủ</a>
          <a id="sp" class="nav-link text-black" href="{{route('sanPham')}}">Sản phẩm</a>
          <a class="nav-link text-black">Bài viết</a>
          <a class="nav-link text-black" href="#">Liên hệ</a>
        </nav>
        <script>
          document.getElementById('s{{$viTri}}').className = "dropdown-item active";
          document.getElementById('{{$viTri}}').className = "nav-link text-white active";
        </script>

        <div class="col-auto">
          @if(!(Auth::check()))
          <!-- Đăng nhập/Đăng ký -->
          <span>
            <a class="col-auto text-black text-decoration-none fs-6" href="{{route('dangNhapTK')}}">Đăng nhập</a>/
            <a class="col-auto text-black text-decoration-none fs-6" href="{{route('dangKyTK')}}">Đăng ký</a>
          </span>
          @else
          <!-- Tài khoản -->
          <span>
            <a class="col-auto text-black text-decoration-none fs-6 dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              {{Auth::user()->hoTen}}
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Tài khoản của bạn</a></li>
              <li><a class="dropdown-item" href="{{route('trangThaiHD')}}">Quản lý đơn hàng</a></li>
              <li><a class="dropdown-item" href="#">Địa chỉ giao hàng</a></li>
              <li><a class="dropdown-item" href="{{route('logout')}}">Thoát</a></li>
            </ul>
          </span>
          @endif
          <!-- Giỏ hàng -->
          <a href="{{route('gioHang')}}" type="button" class="col-auto btn position-relative rounded-circle">
            <i class="fa-solid fa-basket-shopping position-relative" style="font-size: 30px;">
              <?php
              use Illuminate\Support\Facades\DB;
              $GH_SL=DB::table('gio_hang')->sum('soLuongSP');
              ?>
              <span style="font-size: small;" class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                {{$GH_SL}}
              </span>
            </i>
          </a>
        </div>
      </div>
    </div>
  </header>

  @yield('main')

  <footer style="height: 50px;">
    <!-- Nút lên đầu trang -->
    <a id="lenDau" href="#" style="position: fixed; bottom: 50px;right: 10px; opacity: 0.25;">
      <i class="fa-solid fa-circle-chevron-up" style="font-size: 70px;"></i>
      <script>
        boil();

        function boil() {
          let x = document.getElementById('lenDau');
          x.addEventListener("mouseover", () => {
            x.style.opacity = 1
          });
          x.addEventListener("mouseleave", () => {
            x.style.opacity = 0.25
          });
        }
      </script>
    </a>

  </footer>

</body>

</html>
<script src="{{url('bootstrap\bootstrap-5.2.3-dist')}}\js\bootstrap.bundle.min.js"></script>