<?php
// $getsizetheosp = getsizetheosp($_GET['id_sp']);
?>


<div class="order1">
    <div class="container mt-3 mt-md-5">
        <h2 class="text-charcoal hidden-sm-down">Đơn đặt hàng của bạn</h2>
        <!-- <h5 class="text-charcoal hidden-md-up">Đơn đặt hàng của bạn</h5> -->
        <div class="row">
            <div class="col-12">
                <div class="list-group mb-5">
                    <!-- <div class="list-group-item p-3 bg-snow" style="position: relative;">
                        <div class="row w-100 no-gutters">
                            <div class="col-6 col-md">
                                <h6 class="text-charcoal mb-0 w-100">Só thứ tự</h6>
                                <a href="" class="text-pebble mb-0 w-100 mb-2 mb-md-0">#A915AFLE4FO</a>
                            </div>
                            <div class="col-6 col-md">
                                <h6 class="text-charcoal mb-0 w-100">Ngày</h6>
                                <p class="text-pebble mb-0 w-100 mb-2 mb-md-0">Aug 5th, 2017</p>
                            </div>
                            <div class="col-6 col-md">
                                <h6 class="text-charcoal mb-0 w-100">Tổng tiền</h6>
                                <p class="text-pebble mb-0 w-100 mb-2 mb-md-0"><?= number_format($tongtientientrinh['tongtientientrinh']) ?> VND</p>
                            </div>
                            <div class="col-6 col-md">
                                <h6 class="text-charcoal mb-0 w-100">Vận huyển đến</h6>
                                <p class="text-pebble mb-0 w-100 mb-2 mb-md-0">Hà Nam</p>
                            </div>
                            <div class="col-12 col-md-3">
                                <a href="" class="btn btn-primary w-100">Xem đơn mua</a>
                            </div>
                        </div>

                    </div> -->
                    <div class="list-group-item p-3 bg-white">
                        <div class="row no-gutters">
                            <div class="col-12 col-md-9 pr-0 pr-md-3">
                                <div class="alert p-2 alert-success w-100 mb-0">
                                    <!-- <h6 class="text-green mb-0"><b>Shipped</b></h6> -->
                                    <p class="text-green hidden-sm-down mb-0">Ước tính. giao hàng từ ngày 5 tháng 8 đến ngày 9 tháng 8 năm 2017</p>
                                </div>
                            </div>
                            <div class="col-12 col-md-3">
                                <a href="" class="btn btn-secondary w-100 mb-2">Vận chuyển ... đơn hàng</a>
                            </div>
                            <?php foreach ($quanlydonhang as $item) : ?>
                                <div class="row no-gutters mt-3">
                                    <div class="col-3 col-md-1">
                                        <img class="img-fluid pr-3" src="admin/<?php echo $item['hinhanhchitiet'] ?>" alt="">
                                    </div>
                                    <div class="col-9 col-md-8 pr-0 pr-md-3">
                                        <h6 class="text-charcoal mb-2 mb-md-1">
                                            <a href="" class="text-charcoal"><?php echo $item['tenspchitiet'] ?></a>
                                        </h6>
                                        <ul class="list-unstyled text-pebble mb-2 small">

                                            <li class="">
                                                <b>Size:</b>
                                                <?php echo $item['bankinh'] ?>
                                            </li>
                                        </ul>
                                        <h6 class="text-charcoal text-left mb-0 mb-md-2">Giá:<b><?php echo number_format($item['giasp']) ?> VNĐ</b></h6>
                                    </div>
                                    <div class="col-12 col-md-3 hidden-sm-down">
                                        <a href="" class="btn btn-success w-100 mb-2"><?php echo $item['tentientrinh'] ?></a>
                                        <a href="" class="btn btn-secondary w-100">Hủy đơn hàng</a>
                                    </div>
                                </div>

                            <?php endforeach ?>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>

<div class="p-3 hidden-md-up"></div>