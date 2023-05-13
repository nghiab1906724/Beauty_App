<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ashion Template">
    <meta name="keywords" content="Ashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <title>Ashion | Template</title> -->
    <link rel="shortcut icon" type="image/png" href="{{url('resources')}}\views\images\icon-cosmetics.png" />
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{url('bootstrap\bootstrap-5.2.3-dist')}}\css\bootstrap.min.css" type="text/css">
    <!-- <link rel="stylesheet" href="{{url('resources\css')}}/bootstrap.min.css" type="text/css"> -->
    <link rel="stylesheet" href="{{url('resources\css')}}\produc.css">
    <link rel="stylesheet" href="{{url('resources/views/css')}}/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="{{url('resources/views/css')}}/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="{{url('resources/views/css')}}/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="{{url('resources/views/css')}}/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="{{url('resources/views/css')}}/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="{{url('resources/views/css')}}/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="{{url('resources/views/css')}}/style.css" type="text/css">

    <script src="https://kit.fontawesome.com/830f7d44c3.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__close">+</div>
        <ul class="offcanvas__widget">
            <li><span class="icon_search search-switch"></span></li>
            <li><a href="#"><span class="icon_heart_alt"></span>
                    <div class="tip">2</div>
                </a></li>
            <li><a href="#"><span class="icon_bag_alt"></span>
                    <div class="tip">2</div>
                </a></li>
        </ul>
        <div class="offcanvas__logo">
            <a href="./index.html"><img src="{{url('resources/views/img')}}/logo.png" alt=""></a>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__auth">
            @if(!(Auth::check()))
            <a href="{{route('dangNhapTK')}}">Đăng nhập</a>
            <a href="{{route('dangKyTK')}}">Đăng ký</a>
            @else
            <!-- Tài khoản -->
            <span>
                <a class="col-auto text-black text-decoration-none fs-6 dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    {{Auth::user()->hoTen}}
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{route('thanks')}}">Tài khoản của bạn</a></li>
                    <li><a class="dropdown-item" href="{{route('trangThaiHD',['tt'=>0])}}">Quản lý đơn hàng</a></li>
                    <li><a class="dropdown-item" href="#">Địa chỉ giao hàng</a></li>
                    <li><a class="dropdown-item" href="{{route('logout')}}">Thoát</a></li>
                </ul>
            </span>
            @endif
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-3 col-lg-2">
                    <div class="header__logo">
                        <a href="{{route('trangChu')}}"><img style="width: 200px;" src="{{url('resources')}}\views\images\logo.jpg" alt=""></a>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li class="<?php if ($viTri == 'trangChu') echo 'active'; ?>"><a class="text-decoration-none" href="{{route('trangChu')}}">Trang chủ</a></li>
                            <!-- <li><a href="#">Women’s</a></li>
                            <li><a href="#">Men’s</a></li> -->
                            <li class="<?php if ($viTri == 'sanPham') echo 'active'; ?>"><a class="text-decoration-none" href="{{route('sanPham')}}">Sản phẩm</a></li>
                            <!-- <li><a class="text-decoration-none" href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="./product-details.html">Product Details</a></li>
                                    <li><a href="./shop-cart.html">Shop Cart</a></li>
                                    <li><a href="./checkout.html">Checkout</a></li>
                                    <li><a href="./blog-details.html">Blog Details</a></li>
                                </ul>
                            </li> -->
                            <li><a class="text-decoration-none" href="{{route('lienHe')}}">Liên hệ</a></li>
                            <li class="<?php if ($viTri == 'gioiThieu') echo 'active'; ?>"><a class="text-decoration-none" href="{{route('gioiThieu')}}">Giới thiệu</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-4">
                    <div class="header__right row justify-content-end">
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
                                    <li><a class="dropdown-item" href="{{route('thanks')}}">Tài khoản của bạn</a></li>
                                    <li><a class="dropdown-item" href="{{route('trangThaiHD',['tt'=>0])}}">Quản lý đơn hàng</a></li>
                                    <li><a class="dropdown-item" href="#">Địa chỉ giao hàng</a></li>
                                    <li><a class="dropdown-item" href="{{route('logout')}}">Thoát</a></li>
                                </ul>
                            </span>
                            @endif
                        </div>
                        <ul class="header__right__widget col-auto">
                            <li><span class="icon_search search-switch"></span></li>
                            <!-- <li><a href="#"><span class="icon_heart_alt"></span>
                                    <div class="tip">2</div>
                                </a></li> -->
                            <li><a class=" text-decoration-none" href="{{route('gioHang')}}"><span class="icon_bag_alt"></span>
                                    <!-- <div class="tip">2</div> -->
                                </a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="canvas__open" style="padding: 5px;">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->
    @yield('main')
    <!-- Footer Section Begin -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-7">
                    <div class="footer__about">
                        <div class="footer__logo">
                            <a href="{{route('trangChu')}}"><img style="width: 200px;" src="{{url('resources')}}\views\images\logo.jpg" alt=""></a>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            cilisis.</p>
                        <div class="footer__payment">
                            <a href="#"><img src="{{url('resources/views/img')}}/payment/payment-1.png" alt=""></a>
                            <a href="#"><img src="{{url('resources/views/img')}}/payment/payment-2.png" alt=""></a>
                            <a href="#"><img src="{{url('resources/views/img')}}/payment/payment-3.png" alt=""></a>
                            <a href="#"><img src="{{url('resources/views/img')}}/payment/payment-4.png" alt=""></a>
                            <a href="#"><img src="{{url('resources/views/img')}}/payment/payment-5.png" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-5">
                    <div class="footer__widget">
                        <h6>Quick links</h6>
                        <ul>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Blogs</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">FAQ</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4">
                    <div class="footer__widget">
                        <h6>Account</h6>
                        <ul>
                            <li><a href="#">My Account</a></li>
                            <li><a href="#">Orders Tracking</a></li>
                            <li><a href="#">Checkout</a></li>
                            <li><a href="#">Wishlist</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8 col-sm-8">
                    <div class="footer__newslatter">
                        <h6>NEWSLETTER</h6>
                        <form action="#">
                            <input type="text" placeholder="Email">
                            <button type="submit" class="site-btn">Subscribe</button>
                        </form>
                        <div class="footer__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    <div class="footer__copyright__text">
                        <p>Copyright &copy; <script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
                    </div>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Search Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search End -->

    <!-- Js Plugins -->
    <script src="{{url('resources/views/js')}}/jquery-3.3.1.min.js"></script>
    <script src="{{url('bootstrap\bootstrap-5.2.3-dist')}}\js\bootstrap.bundle.min.js"></script>
    <script src="{{url('resources/views/js')}}/bootstrap.min.js"></script>
    <script src="{{url('resources/views/js')}}/jquery.magnific-popup.min.js"></script>
    <script src="{{url('resources/views/js')}}/jquery-ui.min.js"></script>
    <script src="{{url('resources/views/js')}}/mixitup.min.js"></script>
    <script src="{{url('resources/views/js')}}/jquery.countdown.min.js"></script>
    <script src="{{url('resources/views/js')}}/jquery.slicknav.js"></script>
    <script src="{{url('resources/views/js')}}/owl.carousel.min.js"></script>
    <script src="{{url('resources/views/js')}}/jquery.nicescroll.min.js"></script>
    <script src="{{url('resources/views/js')}}/main.js"></script>
</body>

</html>