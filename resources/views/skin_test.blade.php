<?php $viTri = ''; ?>
@extends('layouts.empty')
<title>Test Da</title>
@section('main')
<section class="h-100" style="background-color: #ffcccc;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col">
                <div class="card card-registration my-4">
                    <div class="row g-0"  style="height: 500px;">
                        <div class="col-xl-5 d-none d-xl-block">
                            <img src="{{url('resources\views')}}\images\registerForm.jpg" alt="Sample photo" class="img-fluid" style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
                        </div>
                        <div class="col-xl-7">
                            <div class="card-body p-md-5 text-black">
                                <nav>
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#cau1" type="button" role="tab" aria-controls="cau1" aria-selected="true">Câu 1</button>
                                        <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#cau2" type="button" role="tab" aria-controls="cau2" aria-selected="false">Câu 2</button>
                                        <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#cau3" type="button" role="tab" aria-controls="cau3" aria-selected="false">Câu 3</button>
                                        <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#cau4" type="button" role="tab" aria-controls="cau4" aria-selected="false">Câu 4</button>
                                        <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#cau5" type="button" role="tab" aria-controls="cau5" aria-selected="false">Câu 5</button>
                                        <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#cau6" type="button" role="tab" aria-controls="cau6" aria-selected="false">Câu 6</button>
                                    </div>
                                </nav>
                                <form action="{{route('thucThi')}}" method="post">
                                    @csrf
                                    <!-- Tab -->
                                    <div class="tab-content" id="nav-tabContent">
                                        <!-- Tab 1 -->
                                        <div class="tab-pane fade show active" id="cau1" role="tabpanel" aria-labelledby="cau1-tab" tabindex="0">
                                            <!-- Câu hỏi -->
                                            <div class="h4 text-danger">Hãy chọn đáp án đúng với da của bạn hiện tại</div>
                                            <!-- Đáp án -->
                                            <div class="row g-3">
                                                <label for="c1" style="font-weight: 500;"><input type="radio" name="dau_kho" id="c1" value="k"> Luôn cảm giác khô ráp, căng, sần sùi và nhìn có vẻ xỉn màu, không đổ dầu ở thời tiết bình thường. Mùa khô lạnh thường cảm thấy châm chích hoặc thậm chí là bong tróc, đỏ da, khô rát.</label>
                                            </div>
                                            <div class="row g-3">
                                                <label for="c2" style="font-weight: 500;"><input type="radio" name="dau_kho" id="c2" value="t"> Các vùng chữ T (trán, cằm và mũi) có thể là một chút dầu, nhưng nhìn chung độ dầu và độ ẩm cân bằng và da không quá nhờn hoặc quá khô.</label>
                                            </div>
                                            <div class="row g-3">
                                                <label for="c2" style="font-weight: 500;"><input type="radio" name="dau_kho" id="c2" value="dt"> Các vùng chữ T (trán, cằm và mũi) đỗ nhiều dầu, lỗ chân lông to, nhưng vùng má khô hơn</label>
                                            </div>
                                            <div class="row g-3">
                                                <label for="c2" style="font-weight: 500;"><input type="radio" name="dau_kho" id="c2" value="d"> Thường xuyên đổ dầu toàn bộ khuôn mặt. Luôn có cảm giác nhờn và bóng, kể cả mùa khô lạnh cũng có hiện tượng đổ dầu</label>
                                            </div>
                                        </div>
                                        <!-- Tab 2 -->
                                        <div class="tab-pane fade" id="cau2" role="tabpanel" aria-labelledby="cau2-tab" tabindex="0">
                                            <!-- Câu hỏi -->
                                            <div class="h4 text-danger">Hãy chọn đáp án đúng với da của bạn hiện tại</div>
                                            <!-- Đáp án -->
                                            <div class="row g-3">
                                                <label for="c1" style="font-weight: 500;"><input type="radio" name="nhay_cam" id="c1" value="1"> Da mỏng, nhìn rõ mạch máu</label>
                                            </div>
                                            <div class="row g-3">
                                                <label for="c2" style="font-weight: 500;"><input type="radio" name="nhay_cam" id="c2" value="1"> Dễ bị mẩn, đỏ khi dính nước mưa, đi nắng, stress, du lịch…</label>
                                            </div>
                                            <!-- <div class="row g-3">
                                                <label for="c2" style="font-weight: 500;"><input type="radio" name="nhay_cam" id="c2" value="1"> Da dễ bị dị ứng với thực phẩm, đồ uống (thuốc, hải sản, đồ cay nóng, sản phẩm hoặc thực phẩm chứa cồn)</label>
                                            </div> -->
                                            <div class="row g-3">
                                                <label for="c2" style="font-weight: 500;"><input type="radio" name="nhay_cam" id="c2" value="1"> Dễ bị kích ứng với mỹ phẩm, thuốc bôi, sản phẩm có mùi, màu hoặc cồn gây mụn nước li ti, ngứa, nóng bừng, khô rát…</label>
                                            </div>
                                            <div class="row g-3">
                                                <label for="c2" style="font-weight: 500;"><input type="radio" name="nhay_cam" id="c2" value="1"> Da đã từng được chuẩn đoán mắc phải các vấn đề như: rosacea, demodex, viêm da tiếp xúc, viêm da cơ địa, viêm da tiết bã, chàm…</label>
                                            </div>
                                            <div class="row g-3">
                                                <label for="c1" style="font-weight: 500;"><input type="radio" name="nhay_cam" id="c1" value="0"> Không bị vấn đề nào kể trên</label>
                                            </div>
                                        </div>
                                        <!-- Tab 3 -->
                                        <div class="tab-pane fade" id="cau3" role="tabpanel" aria-labelledby="cau3-tab" tabindex="0">
                                            <!-- Câu hỏi -->
                                            <div class="h4 text-danger">Hãy chọn đáp án đúng với da của bạn hiện tại</div>
                                            <!-- Đáp án -->
                                            <div class="row g-3">
                                                <label for="c1" style="font-weight: 500;"><input type="radio" name="mun" id="c1" value="1"> Mụn đầu đen hoặc/và mụn ẩn hoặc/và sợi bã nhờn</label>
                                            </div>
                                            <div class="row g-3">
                                                <label for="c2" style="font-weight: 500;"><input type="radio" name="mun" id="c2" value="2"> 1-5 nốt viêm sưng, đặc biệt nổi khi đến chu kì</label>
                                            </div>
                                            <div class="row g-3">
                                                <label for="c2" style="font-weight: 500;"><input type="radio" name="mun" id="c2" value="2"> Mụn viêm đỏ kết hợp với mụn viêm sưng rải rác khoảng 15-20 nốt</label>
                                            </div>
                                            <div class="row g-3">
                                                <label for="c2" style="font-weight: 500;"><input type="radio" name="mun" id="c2" value="2"> Mụn viêm sưng, đỏ và có cả ổ mụn nang, mụn bọc toàn khuôn mặt</label>
                                            </div>
                                            <div class="row g-3">
                                                <label for="c1" style="font-weight: 500;"><input type="radio" name="mun" id="c1" value="0"> Không bị vấn đề nào kể trên</label>
                                            </div>
                                        </div>
                                        <!-- Tab 4 -->
                                        <div class="tab-pane fade" id="cau4" role="tabpanel" aria-labelledby="cau4-tab" tabindex="0">
                                            <!-- Câu hỏi -->
                                            <div class="h4 text-danger">Hãy chọn đáp án đúng với da của bạn hiện tại</div>
                                            <!-- Đáp án -->
                                            <div class="row g-3">
                                                <label for="c1" style="font-weight: 500;"><input type="radio" name="sac_to" id="c1" value="1"> Cảm thấy da không đều màu, xỉn màu</label>
                                            </div>
                                            <div class="row g-3">
                                                <label for="c2" style="font-weight: 500;"><input type="radio" name="sac_to" id="c2" value="2"> Nhiều thâm mụn</label>
                                            </div>
                                            <div class="row g-3">
                                                <label for="c2" style="font-weight: 500;"><input type="radio" name="sac_to" id="c2" value="2"> Tàn nhang</label>
                                            </div>
                                            <div class="row g-3">
                                                <label for="c2" style="font-weight: 500;"><input type="radio" name="sac_to" id="c2" value="2"> Đốm nâu, đồi mồi</label>
                                            </div>
                                            <div class="row g-3">
                                                <label for="c1" style="font-weight: 500;"><input type="radio" name="sac_to" id="c1" value="2"> Nám nông/ sâu/ hỗn hợp</label>
                                            </div>
                                            <div class="row g-3">
                                                <label for="c1" style="font-weight: 500;"><input type="radio" name="sac_to" id="c1" value="2"> Bớt sắc tố</label>
                                            </div>
                                            <div class="row g-3">
                                                <label for="c1" style="font-weight: 500;"><input type="radio" name="sac_to" id="c1" value="0"> Không gặp vấn đề nào kể trên</label>
                                            </div>
                                        </div>
                                        <!-- Tab 5 -->
                                        <div class="tab-pane fade" id="cau5" role="tabpanel" aria-labelledby="cau5-tab" tabindex="0">
                                            <!-- Câu hỏi -->
                                            <div class="h4 text-danger">Hãy chọn đáp án đúng với da của bạn hiện tại</div>
                                            <!-- Đáp án -->
                                            <div class="row g-3">
                                                <label for="c1" style="font-weight: 500;"><input type="radio" name="lao_hoa" id="c1" value="0"> Da săn chắc, không xuất hiện nếp nhăn kể cả khi cử động như cười, nhướn mày, cau mày</label>
                                            </div>
                                            <div class="row g-3">
                                                <label for="c2" style="font-weight: 500;"><input type="radio" name="lao_hoa" id="c2" value="2"> Da kém săn chắc, có xuất hiện rãnh cười hoặc nọng cằm</label>
                                            </div>
                                            <div class="row g-3">
                                                <label for="c2" style="font-weight: 500;"><input type="radio" name="lao_hoa" id="c2" value="1">  Nếp nhăn chỉ xuất hiện rõ mỗi khi có cử động trên gương mặt như cười, cau mày, nhướng mày,..</label>
                                            </div>
                                            <div class="row g-3">
                                                <label for="c2" style="font-weight: 500;"><input type="radio" name="lao_hoa" id="c2" value="2"> Có một vài nếp nhăn nông ở các vùng thường cử động: cau mày, trán, đuôi mắt, khóe miệng,...</label>
                                            </div>
                                            <div class="row g-3">
                                                <label for="c1" style="font-weight: 500;"><input type="radio" name="lao_hoa" id="c1" value="3"> Có nếp nhăn rõ rệt ở nhiều vùng cùng lúc như đuôi mắt, trán, rãnh cười</label>
                                            </div>                                           
                                        </div>
                                        <!-- Tab 6 -->
                                        <div class="tab-pane fade" id="cau6" role="tabpanel" aria-labelledby="cau6-tab" tabindex="0">
                                            <!-- Câu hỏi -->
                                            <div class="h4 text-danger">Lỗ chân lông to, nhất là vùng đầu mũi/má?</div>
                                            <!-- Đáp án -->
                                            <div class="row g-3">
                                                <label for="c1" style="font-weight: 500;"><input type="radio" name="chan_long" id="c1" value="1"> Có</label>
                                            </div>
                                            <div class="row g-3">
                                                <label for="c2" style="font-weight: 500;"><input type="radio" name="chan_long" id="c2" value="0"> Không</label>
                                            </div>    
                                            <button type="submit" style="margin-top: 100px;" class="btn btn-danger">KẾT THÚC KIỂM TRA</button>                                                                                   
                                        </div>


                                    </div>

                                </form>




                                <!-- <div class="d-flex justify-content-end pt-3">
                                    <button type="button" class="btn btn-light btn-lg">Reset all</button>
                                    <button type="button" class="btn btn-warning btn-lg ms-2">Submit form</button>
                                </div> -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<style>
    /* .card-registration .select-input.form-control[readonly]:not([disabled]) {
        font-size: 1rem;
        line-height: 2.15;
        padding-left: .75em;
        padding-right: .75em;
    }

    .card-registration .select-arrow {
        top: 13px;
    } */
</style>
<!-- <div class="container-fluid">
    <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Câu 1</button>
            <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Câu 2</button>
        </div>
    </nav>
    <form action="" method="post">
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                <div class="h5 text-danger">Da mặt của bạn hiện tại thế nào?</div>
                <div>
                    <input type="radio" name="dau_kho" id="c1">
                    <label for="c1">Thường xuyên đổ dầu toàn bộ khuôn mặt. Luôn có cảm giác nhờn và bóng, kể cả mùa khô lạnh cũng có hiện tượng đổ dầu</label>
                </div>
            </div>
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">...</div>
        </div>
    </form>
</div> -->
@endsection