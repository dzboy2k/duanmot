<?php 
 $getgiohang=getgiohang($_SESSION['id_kh']);
?>
<body>
    <div class="cart-main ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cart-table table-responsive">
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
                                    <th><img style="width: 120px; height: 100px;" src="admin/<?=$giohang['hinhanhspct']?>"
                                            alt=""></th>
                                  <th><?=$giohang['tensp']?></th>
                                  <th><?=$giohang['slgiohang']?></th>
                                  <th><?=$giohang['bankinh']?></th>
                                  <th><?=number_format($giohang['giasp'])?>VND</th>
                                  <th><a href="?act=deletegiohang&idgiohang=<?=$giohang['idgiohang']?>">xóa</a></th>
                                  </tr>
                                <?php } ?>
                                
                                <tr>
                                    <th colspan="6"> <button type="button" class="pro-add btn btn-secondary">Thêm sản
                                            phẩm</button></th>
                                </tr>
                            </tbody>

                        </table>


                        <div class="cart-update-option d-block d-md-flex justify-content-between">
                            <div class="apply-coupon-wrapper">

                            </div>
                            <div class="cart-update">
                               <a href="?act=muahangformcart"> <button type="button" class="btn btn-secondary">Đặt hàng</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>