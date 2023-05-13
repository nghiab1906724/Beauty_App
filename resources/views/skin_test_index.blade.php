<?php $viTri = ''; ?>
@extends('layouts.site')
<title>SkinTest</title>
@section('main')
<br>
<div class="container">
    <div class="row d-flex justify-content-between">
        <div class="col h3 text-danger">Kiểm tra da</div>
        <a href="{{route('testForm')}}" class="col-auto btn btn-danger">BẮT ĐẦU KIỂM TRA</a>
    </div>
    <div class="row">
    <p style="font-weight: 600; font-size: medium;">Nếu bạn đã kiểm tra, nhấn vào đây để <a href="{{route('ketQua')}}" class="btn btn-success">XEM KẾT QUẢ</a></p>
    </div>
    <br>
    <div class="row">
        <img src="{{url('resources\views\images')}}\headerImage.png" alt="" style="width: 100%; margin-bottom: 30px;">
    </div>
    <div class="row">
        <div class="col-7" style="font-weight: bold;">
            <p style="font-weight: 600; font-size: medium;">Bài test da chỉ gồm 6 câu hỏi cần thiết để xác định chính xác hiện trạng da của bạn.</p>
            <p style="font-weight: 600; font-size: medium">Bài test da sẽ xác định chính xác tình trạng da của bạn hiện tại và đưa ra liệu trình phù hợp để bạn chăm sóc da tốt hơn.</p>
            <p style="font-weight: 600; font-size: medium">Chỉ cần mất chút thời gian, chỉ cần làm 1 lần, bạn sẽ không bao giờ còn phải hỏi vấn đề thực sự của da mình? Cách xử lý triệt để? v.v..</p>
            <a href="{{route('testForm')}}" class="col-auto btn btn-danger">BẮT ĐẦU KIỂM TRA</a>
        </div>
        <div class="col">
            <span>Thời gian</span>
            <p style="font-weight: 600; font-size: medium;">1-3 phút</p>
            <span>Cách thức</span>
            <p style="font-weight: 600; font-size: medium;">Tick vào câu trả lời phù hợp với bạn.</p>
            <span>Chi phí</span>
            <p style="font-weight: 600; font-size: medium;">Miễn phí</p>
        </div>

    </div>
</div>
@endsection