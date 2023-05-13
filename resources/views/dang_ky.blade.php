@extends('layouts.empty')
<title>Đăng ký</title>
@section('main')
<section style="background-color: darkslategrey; height: fit-content;">
    <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-12 col-xl-11">
                <div class="card text-black" style="border-radius: 25px;">
                    <div class="card-body p-md-5" >
                        <div class="row">
                            <div class="header__logo col">
                                <a href="{{route('trangChu')}}"><img style="width: 200px;" src="{{url('resources')}}\views\images\logo.jpg" alt=""></a>
                                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Đăng ký</p>
                            </div>                       

                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                <form method="post" action="{{route('register')}}" class="mx-1 mx-md-4">
                                    @csrf

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="text" id="form3Example1c" class="form-control" name="hoTen" />
                                            <label class="form-label" for="form3Example1c">Họ tên *</label>
                                            @error('hoTen')
                                            <span class="form-message text-danger">Vui lòng điền đầy đủ họ tên!</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row align-items-center mb-4">
                                    <i class="fa-solid fa-mobile-button fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="text" id="form3Example3c" class="form-control" name="sdt" />
                                            <label class="form-label" for="form3Example3c">Số điện thoại *</label>
                                            @error('sdt')
                                            <span class="form-message text-danger">Số điện thoại không đúng!</span>
                                            @enderror
                                            @if(session('DK')=='exit')
                                            <span class="form-message text-danger">Số điện thoại đã được đăng ký!</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="email" id="form3Example3c" class="form-control" name="email" />
                                            <label class="form-label" for="form3Example3c">Email (Nếu có)</label>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="password" id="form3Example4c" class="form-control" name="mk" />
                                            <label class="form-label" for="form3Example4c">Mật khẩu *</label>
                                            @error('mk')
                                            <span class="form-message text-danger">Mật khẩu phải từ 6-10 ký tự!</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="password" id="form3Example4cd" class="form-control" name="nhapLaiMK" />
                                            <label class="form-label" for="form3Example4cd">Nhập lại mật khẩu *</label>
                                            @error('nhapLaiMK')
                                            <span class="form-message text-danger">Mật khẩu nhập lại phải trùng với mật khẩu đã nhập!</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fa-solid fa-venus-mars fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <h6 class="mb-2 pb-1">Giới tính: </h6>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="gioiTinh" id="femaleGender" value="0" checked />
                                                <label class="form-check-label" for="femaleGender">Nam</label>
                                            </div>

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="gioiTinh" id="maleGender" value="1" />
                                                <label class="form-check-label" for="maleGender">Nữ</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fa-solid fa-cake-candles fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="date" id="form3Example4cd" class="form-control" name="nsinh" />
                                            <label class="form-label" for="form3Example4cd">Ngày sinh *</label>
                                            @error('nsinh')
                                            <span class="form-message text-danger">Ngày sinh không hợp lệ!</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                        <button type="button submit" class="btn btn-primary btn-lg">ĐĂNG KÝ</button>
                                    </div>
                                    <p class="text-center text-muted mt-5 mb-0">Bạn đã có tài khoản? <a href="{{route('dangNhapTK')}}" class="fw-bold text-body"><u>ĐĂNG NHẬP NGAY</u></a></p>

                                </form>

                            </div>
                            <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                                <img src="{{url('resources\views')}}\images\registerForm.jpg" class="img-fluid" alt="Sample image">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection