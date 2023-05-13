<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ashion Template">
    <meta name="keywords" content="Ashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liên Hệ</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{url('resources/views/css')}}/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="{{url('bootstrap\bootstrap-5.2.3-dist')}}\css\bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="{{url('resources/views/css')}}/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="{{url('resources/views/css')}}/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="{{url('resources/views/css')}}/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="{{url('resources/views/css')}}/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="{{url('resources/views/css')}}/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="{{url('resources/views/css')}}/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="{{url('resources/views/css')}}/style.css" type="text/css">
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
            <a href="#">Đăng nhập</a>
            <a href="#">Đăng ký</a>
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-3 col-lg-2">
                    <div class="header__logo">
                        <a href="{{route('trangChu')}}"><img style="width: 150px;" src="{{url('resources')}}\views\images\NGHĨA COSMETIC STORE.gif" alt=""></a>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li><a class="text-decoration-none" href="{{route('trangChu')}}">Trang chủ</a></li>
                            <!-- <li><a href="#">Women’s</a></li>
                            <li><a href="#">Men’s</a></li> -->
                            <li><a class="text-decoration-none" href="{{route('sanPham')}}">Sản phẩm</a></li>
                            <!-- <li><a class="text-decoration-none" href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="./product-details.html">Product Details</a></li>
                                    <li><a href="./shop-cart.html">Shop Cart</a></li>
                                    <li><a href="./checkout.html">Checkout</a></li>
                                    <li><a href="./blog-details.html">Blog Details</a></li>
                                </ul>
                            </li> -->
                            <li class="active"><a class="text-decoration-none" href="{{route('lienHe')}}">Liên hệ</a></li>
                            <li><a class="text-decoration-none" href="{{route('gioiThieu')}}">Giới thiệu</a></li>
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
                            <li><a href="{{route('gioHang')}}"><span class="icon_bag_alt"></span>
                                    <div class="tip">2</div>
                                </a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="canvas__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Contact Section Begin -->
    <section class="contact spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="contact__content">
                        <div class="contact__address">
                            <h5>Thông tin liên hệ</h5>
                            <ul>
                                <li>
                                    <h6><i class="fa fa-map-marker"></i> Địa chỉ</h6>
                                    <p>3/2, Xuân Khánh, Ninh Kiều, Cần Thơ</p>
                                </li>
                                <li>
                                    <h6><i class="fa fa-phone"></i> Điện thoại</h6>
                                    <p><span>0123456789</span><span>0124456789</span></p>
                                </li>
                                <li>
                                    <h6><i class="fa fa-headphones"></i> Hỗ trợ</h6>
                                    <p>Support.nghiashop@gmail.com</p>
                                </li>
                            </ul>
                        </div>
                        <div class="contact__form">
                            <h5>Để lại lời nhắn cho shop</h5>
                            <form action="#">
                                <input type="text" placeholder="Họ và tên">
                                <input type="text" placeholder="Số điện thoại của bạn">
                                <input type="text" placeholder="Email của bạn">
                                <textarea placeholder="Lời nhắn cho shop"></textarea>
                                <button type="submit" class="site-btn">Gửi ngay</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="contact__map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3928.8415183216944!2d105.77061529999999!3d10.029933699999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a0895a51d60719%3A0x9d76b0035f6d53d0!2zxJDhuqFpIGjhu41jIEPhuqduIFRoxqE!5e0!3m2!1svi!2s!4v1680161683432!5m2!1svi!2s" height="780" style="border:0" allowfullscreen="">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-7">
                    <div class="footer__about">
                        <div class="footer__logo">
                            <a href="./index.html"><img src="{{url('resources/views/img')}}/logo.png" alt=""></a>
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
    <script src="{{url('resources/views/js')}}/bootstrap.min.js"></script>
    <script src="{{url('resources/views/js')}}/jquery.magnific-popup.min.js"></script>
    <script src="{{url('resources/views/js')}}/jquery-ui.min.js"></script>
    <script src="{{url('resources/views/js')}}/mixitup.min.js"></script>
    <script src="{{url('resources/views/js')}}/jquery.countdown.min.js"></script>
    <script src="{{url('resources/views/js')}}/jquery.slicknav.js"></script>
    <script src="{{url('resources/views/js')}}/owl.carousel.min.js"></script>
    <script src="{{url('resources/views/js')}}/jquery.nicescroll.min.js"></script>
    <script src="{{url('resources/views/js')}}/main.js"></script>

    <script src="{{url('bootstrap\bootstrap-5.2.3-dist')}}\js\bootstrap.bundle.min.js"></script>
</body>

</html>