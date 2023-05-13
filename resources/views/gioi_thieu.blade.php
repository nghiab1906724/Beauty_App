<?php $viTri = 'gioiThieu'; ?>
@extends('layouts.site')
<title>Giới thiệu</title>
@section('main')
<br>
<div class="container">
    <div class="row justify-content-center">
        <h5 class="col-auto text-uppercase" style="font-weight: 600;">nghia Beauty - trang mua sắm tiện lợi</h5>
    </div>
    <br>
    <div class="row">
        <p class="col-auto text-success fs-6 rounded-2" style="font-weight: 500; background-color: #dff9fb;">
            <span style="font-weight: bold;">Nghia Beauty</span> là một trang web kinh doanh mỹ phẩm trực tuyến ấn tượng, mang đến cho khách hàng một trải nghiệm mua sắm thú vị và đầy tiện lợi.
            Với nhiều sản phẩm chất lượng và đa dạng từ các thương hiệu nổi tiếng, <span style="font-weight: bold;">Nghia Beauty</span> luôn cố gắng đáp ứng mọi nhu cầu làm đẹp của khách hàng,
            không chỉ giúp bạn sở hữu được những sản phẩm phù hợp với giá hợp túi tiền mà còn đem đến sự yên tâm và tiện lợi nhất khi mua sắm trực tuyến, mang lại cuộc sống tốt đẹp hơn.
        </p>
    </div>
    <br>
    <div class="row g-3">
        <div class="card col">
            <div class="row justify-content-center"><img style="width: 140px;" src="{{url('resources/views/img')}}/camket/camket-1.jpg" class="card-img-top" alt="..."></div>
            <div class="card-body">
                <p class="card-text text-center">Cam kết cung cấp các sản phẩm chính hãng từ các thương hiệu nổi tiếng.</p>
            </div>
        </div>
        <div class="card col" style="width: 18rem;">
            <div class="row justify-content-center"><img style="width: 140px;" src="{{url('resources/views/img')}}/camket/camket-2.jpg" class="card-img-top" alt="..."></div>
            <div class="card-body">
                <p class="card-text text-center">Cam kết bảo mật thông tin khách hàng.</p>
            </div>
        </div>
        <div class="card col" style="width: 18rem;">
            <div class="row justify-content-center"><img style="width: 140px;" src="{{url('resources/views/img')}}/camket/camket-3.jpg" class="card-img-top" alt="..."></div>
            <div class="card-body">
                <p class="card-text text-center">Cam kết tư vấn và hỗ trợ quý khách kịp thời, nhiệt tình theo đúng các quy định của pháp luật và chuẩn mực đạo đức nghề nghiệp.</p>
            </div>
        </div>
        <div class="card col" style="width: 18rem;">
            <div class="row justify-content-center"><img style="width: 200px;" src="{{url('resources/views/img')}}/camket/camket-4.jpg" class="card-img-top" alt="..."></div>
            <div class="card-body">
                <p class="card-text text-center">Cam kết vận hành tốc độ giao hàng nhanh vượt trội nhằm rút ngắn tối đa thời gian khách hàng nhận được sản phẩm.</p>
            </div>
        </div>
    </div>
</div>
@endsection