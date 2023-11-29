<?php
$getgiohang = getgiohang($_SESSION['id_kh']);
?>

<body>
    <div class="cart-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cart-table table-responsive">
                        <!-- <form action="?act=cart" method="post"> -->
                        <table class="table table-bordered">
                            <thead>
                                <tr class="title">

                                    <th class="pro-img">Sản phẩm</th>
                                    <th class="pro-name">Tên sản phẩm</th>
                                    <th class="pro-quantity">Số lượng</th>
                                    <th class="pro-price">size</th>
                                    <th class="pro-price">Giá</th>
                                    <th class="pro-delete">Thao tác</th>
                                </tr>

                            </thead>
                            <tbody>

                                <?php foreach ($getgiohang as $key => $giohang) { ?>
                                    <tr>

                                        <th><img style="width: 120px; height: 100px;" src="admin/<?= $giohang['hinhanhspct'] ?>" alt=""></th>
                                        <th><?= $giohang['tensp'] ?></th>
                                        <th><?= $giohang['slgiohang'] ?>
                                        </th>
                                        <th><?= $giohang['bankinh'] ?></th>
                                        <th><?= number_format($giohang['giasp']) ?>VND</th>
                                        <th>
                                            <a href="?act=editcart&idgiohang=<?= $giohang['idgiohang'] ?>"><i class="fas fa-edit"></i></a>
                                            <a href="?act=deletegiohang&idgiohang=<?= $giohang['idgiohang'] ?>"><i class="fas fa-trash-alt" style="color: red;"></i></a><br>
                                        </th>

                                    </tr>
                                <?php } ?>



                            </tbody>

                        </table>

                        <!-- </form> -->
                        <div class="cart-update-option d-block d-md-flex justify-content-between">
                            <div class="apply-coupon-wrapper">

                            </div>
                            <div class="cart-update">
                                <a href="?act=muahang"> <button type="button" class="btn btn-secondary">Đặt
                                        hàng</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<script>
    // let sl=document.querySelectorAll('#btncapnhatsl');
</script>