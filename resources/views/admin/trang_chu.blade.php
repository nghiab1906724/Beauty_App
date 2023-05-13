@extends('layouts.admin')
<title>Trang Chủ Quản Lý</title>
@section('main')
<div class="content">
    <div class="container-fluid">
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <button class="nav-link active" id="saleNgay-tab" data-bs-toggle="tab" data-bs-target="#saleNgay" type="button" role="tab" aria-controls="saleNgay" aria-selected="true">Doanh thu theo ngày</button>
                <button class="nav-link" id="saleTuan-tab" data-bs-toggle="tab" data-bs-target="#saleTuan" type="button" role="tab" aria-controls="saleTuan" aria-selected="false">Doanh thu theo tuần</button>
                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Doanh thu theo tháng</button>
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <!-- Sale ngày -->
            <div class="tab-pane fade show active" id="saleNgay" role="tabpanel" aria-labelledby="saleNgay-tab" tabindex="0">
                <div class="row">
                    <div class="card col-12">
                        <div class="card-header border-0">
                            <div class="d-flex justify-content-between">
                                <h3 class="card-title">Biểu đồ doanh thu</h3>
                                <a href="javascript:void(0);">Xem báo cáo</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <!-- /.d-flex -->

                            <div class="position-relative mb-4">
                                <canvas id="sales-ngay" height="100"></canvas>
                            </div>
                            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                            <?php
                            $lab = [];
                            $da = [];
                            foreach ($saleNgay as $sl) {
                                $lab[] =  $sl->date;
                                $da[] = $sl->total;
                            }
                            ?>

                            <script>
                                const saleNgay = document.getElementById('sales-ngay');

                                new Chart(saleNgay, {
                                    type: 'bar',
                                    data: {
                                        labels: <?php echo "['" . implode("','", $lab) . "']"; ?>,
                                        datasets: [{
                                            label: 'Doanh thu',
                                            data: <?php echo "[" . implode(',', $da) . "]"; ?>,
                                            backgroundColor: '#1abc9c', // thêm màu nền xanh
                                            borderWidth: 1
                                        }]
                                    },
                                    options: {
                                        scales: {
                                            y: {
                                                beginAtZero: true
                                            }
                                        }
                                    }
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sale tuần -->
            <div class="tab-pane fade" id="saleTuan" role="tabpanel" aria-labelledby="saleTuan-tab" tabindex="0">
                <div class="row">
                    <div class="card col-12">
                        <div class="card-header border-0">
                            <div class="d-flex justify-content-between">
                                <h3 class="card-title">Biểu đồ doanh thu</h3>
                                <a href="javascript:void(0);">Xem báo cáo</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex">
                                <p class="d-flex flex-column">
                                    <span>Doanh thu những tuần qua</span>
                                </p>
                                <p class="ml-auto d-flex flex-column text-right">
                                    <span class="text-success">
                                        <i class="fas fa-arrow-up"></i> 33.1%
                                    </span>
                                    <span class="text-muted">So với tuần trước</span>
                                </p>
                            </div>
                            <!-- /.d-flex -->

                            <div class="position-relative mb-4">
                                <canvas id="sales-tuan" height="200"></canvas>
                            </div>
                            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                            <?php
                            $lab = [];
                            $da = [];
                            foreach ($saleTuan as $sl) {
                                $lab[] = $sl->week;
                                $da[] = $sl->total;
                            }

                            ?>

                            <script>
                                const saleTuan = document.getElementById('sales-tuan');

                                new Chart(saleTuan, {
                                    type: 'bar',
                                    data: {
                                        labels: <?php echo "['Tuần " . implode("','Tuần ", $lab) . "']"; ?>,
                                        datasets: [{
                                            label: 'Doanh thu',
                                            data: <?php echo "[" . implode(',', $da) . "]"; ?>,
                                            backgroundColor: '#1abc9c', // thêm màu nền xanh
                                            borderWidth: 1
                                        }]
                                    },
                                    options: {
                                        scales: {
                                            y: {
                                                beginAtZero: true
                                            }
                                        }
                                    }
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sale tháng -->
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
                <div class="row">
                    <div class="card col-12">
                        <div class="card-header border-0">
                            <div class="d-flex justify-content-between">
                                <h3 class="card-title">Báo cáo doanh thu</h3>
                                <a href="javascript:void(0);">Xem báo cáo</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex">
                                <p class="d-flex flex-column">
                                    <span>Doanh thu những tháng qua</span>
                                </p>
                                <p class="ml-auto d-flex flex-column text-right">
                                    <span class="text-success">
                                        <i class="fas fa-arrow-up"></i> 33.1%
                                    </span>
                                    <span class="text-muted">So với tháng trước</span>
                                </p>
                            </div>
                            <!-- /.d-flex -->

                            <div class="position-relative mb-4">
                                <canvas id="sales-thang" height="200"></canvas>
                            </div>
                            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                            <?php
                            $lab = [];
                            $da = [];
                            foreach ($saleThang as $sl) {
                                $lab[] = $sl->month;
                                $da[] = $sl->total;
                            }

                            ?>

                            <script>
                                const saleThang = document.getElementById('sales-thang');

                                new Chart(saleThang, {
                                    type: 'bar',
                                    data: {
                                        labels: <?php echo "['Tháng " . implode("','Tháng ", $lab) . "']"; ?>,
                                        datasets: [{
                                            label: 'Doanh thu',
                                            data: <?php echo "[" . implode(',', $da) . "]"; ?>,
                                            backgroundColor: '#1abc9c', // thêm màu nền xanh
                                            borderWidth: 1
                                        }]
                                    },
                                    options: {
                                        scales: {
                                            y: {
                                                beginAtZero: true
                                            }
                                        }
                                    }
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header border-0">
                        <div class="d-flex justify-content-between">
                            <h3 class="card-title">Top bán chạy</h3>
                            <a href="javascript:void(0);">Xem báo cáo</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <!-- Biểu đồ-->

                        <div class="position-relative mb-4">
                            <canvas id="sp_hot" height="200"></canvas>
                        </div>
                        <?php
                        $lab = [];
                        $da = [];
                        foreach ($spHot as $sp) {
                            $lab[] = $sp->sanPham;
                            $da[] = $sp->sl;
                        }

                        ?>

                        <script>
                            const spHot = document.getElementById('sp_hot');

                            new Chart(spHot, {
                                type: 'bar',
                                data: {
                                    labels: <?php echo "['" . implode("','", $lab) . "']"; ?>,
                                    datasets: [{
                                        label: 'Bán chạy',
                                        data: <?php echo "[" . implode(',', $da) . "]"; ?>,
                                        backgroundColor: '#e67e22', // thêm màu nền
                                        borderWidth: 1
                                    }]
                                },
                                options: {
                                    indexAxis: 'y',
                                    scales: {
                                        y: {
                                            beginAtZero: true,
                                            display: false // Hide Y axis labels
                                        }
                                    }
                                }
                            });
                        </script>
                    </div>
                </div>
                <!-- /.card -->

                <div class="card">
                    <div class="card-header border-0">
                        <h3 class="card-title">Products</h3>
                        <div class="card-tools">
                            <a href="#" class="btn btn-tool btn-sm">
                                <i class="fas fa-download"></i>
                            </a>
                            <a href="#" class="btn btn-tool btn-sm">
                                <i class="fas fa-bars"></i>
                            </a>
                        </div>
                    </div>
                    <div class="card-body table-responsive p-0">
                        <table class="table table-striped table-valign-middle">
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Sales</th>
                                    <th>More</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <img src="dist/img/default-150x150.png" alt="Product 1" class="img-circle img-size-32 mr-2">
                                        Some Product
                                    </td>
                                    <td>$13 USD</td>
                                    <td>
                                        <small class="text-success mr-1">
                                            <i class="fas fa-arrow-up"></i>
                                            12%
                                        </small>
                                        12,000 Sold
                                    </td>
                                    <td>
                                        <a href="#" class="text-muted">
                                            <i class="fas fa-search"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="dist/img/default-150x150.png" alt="Product 1" class="img-circle img-size-32 mr-2">
                                        Another Product
                                    </td>
                                    <td>$29 USD</td>
                                    <td>
                                        <small class="text-warning mr-1">
                                            <i class="fas fa-arrow-down"></i>
                                            0.5%
                                        </small>
                                        123,234 Sold
                                    </td>
                                    <td>
                                        <a href="#" class="text-muted">
                                            <i class="fas fa-search"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="dist/img/default-150x150.png" alt="Product 1" class="img-circle img-size-32 mr-2">
                                        Amazing Product
                                    </td>
                                    <td>$1,230 USD</td>
                                    <td>
                                        <small class="text-danger mr-1">
                                            <i class="fas fa-arrow-down"></i>
                                            3%
                                        </small>
                                        198 Sold
                                    </td>
                                    <td>
                                        <a href="#" class="text-muted">
                                            <i class="fas fa-search"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="dist/img/default-150x150.png" alt="Product 1" class="img-circle img-size-32 mr-2">
                                        Perfect Item
                                        <span class="badge bg-danger">NEW</span>
                                    </td>
                                    <td>$199 USD</td>
                                    <td>
                                        <small class="text-success mr-1">
                                            <i class="fas fa-arrow-up"></i>
                                            63%
                                        </small>
                                        87 Sold
                                    </td>
                                    <td>
                                        <a href="#" class="text-muted">
                                            <i class="fas fa-search"></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col-md-6 -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header border-0">
                        <div class="d-flex justify-content-between">
                            <h3 class="card-title">Số lượng đơn hàng theo ngày</h3>
                            <a href="javascript:void(0);">Xem báo cáo</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <!-- Sale ngay -->
                        <div class="card-body">
                            
                            <!-- /.d-flex -->

                            <div class="position-relative mb-2">
                                <canvas id="sales-hd" height="200"></canvas>
                            </div>
                            <?php
                            $lab = [];
                            $da = [];
                            foreach ($saleNgay as $sl) {
                                $lab[] =  $sl->date;
                                $da[] = $sl->sl;
                            }
                            ?>

                            <script>
                                const saleHD = document.getElementById('sales-hd');

                                new Chart(saleHD, {
                                    type: 'line',
                                    data: {
                                        labels: <?php echo "['" . implode("','", $lab) . "']"; ?>,
                                        datasets: [{
                                            label: 'Số lượng đơn hàng',
                                            data: <?php echo "[" . implode(',', $da) . "]"; ?>,
                                            backgroundColor: '#2980b9', // thêm màu nền
                                            borderWidth: 2,
                                            borderColor: '#2980b9'
                                        }]
                                    },
                                    options: {
                                        scales: {
                                            y: {
                                                beginAtZero: true
                                            }
                                        }
                                    }
                                });
                            </script>
                        </div>
                    </div>
                </div>
                <!-- /.card -->

                <div class="card">
                    <div class="card-header border-0">
                        <h3 class="card-title">Online Store Overview</h3>
                        <div class="card-tools">
                            <a href="#" class="btn btn-sm btn-tool">
                                <i class="fas fa-download"></i>
                            </a>
                            <a href="#" class="btn btn-sm btn-tool">
                                <i class="fas fa-bars"></i>
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center border-bottom mb-3">
                            <p class="text-success text-xl">
                                <i class="ion ion-ios-refresh-empty"></i>
                            </p>
                            <p class="d-flex flex-column text-right">
                                <span class="font-weight-bold">
                                    <i class="ion ion-android-arrow-up text-success"></i> 12%
                                </span>
                                <span class="text-muted">CONVERSION RATE</span>
                            </p>
                        </div>
                        <!-- /.d-flex -->
                        <div class="d-flex justify-content-between align-items-center border-bottom mb-3">
                            <p class="text-warning text-xl">
                                <i class="ion ion-ios-cart-outline"></i>
                            </p>
                            <p class="d-flex flex-column text-right">
                                <span class="font-weight-bold">
                                    <i class="ion ion-android-arrow-up text-warning"></i> 0.8%
                                </span>
                                <span class="text-muted">SALES RATE</span>
                            </p>
                        </div>
                        <!-- /.d-flex -->
                        <div class="d-flex justify-content-between align-items-center mb-0">
                            <p class="text-danger text-xl">
                                <i class="ion ion-ios-people-outline"></i>
                            </p>
                            <p class="d-flex flex-column text-right">
                                <span class="font-weight-bold">
                                    <i class="ion ion-android-arrow-down text-danger"></i> 1%
                                </span>
                                <span class="text-muted">REGISTRATION RATE</span>
                            </p>
                        </div>
                        <!-- /.d-flex -->
                    </div>
                </div>
            </div>
            <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection