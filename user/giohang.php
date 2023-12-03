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
                                        <th><input type="number" class="btncapnhatsl" giasp=<?= $giohang['giasp'] ?> idgiohang=<?= $giohang['idgiohang'] ?> value="<?= $giohang['slgiohang'] ?>">
                                        </th>
                                       
                                        <th><?= $giohang['bankinh'] ?></th>
                                        <th><?= number_format($giohang['giasp']) ?>VND</th>
                                        <th>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    let sl = document.querySelectorAll(".btncapnhatsl");
    sl.forEach(function(item) {
        item.addEventListener('change', function() {
            let id = item.getAttribute('idgiohang');
            let giasp = item.getAttribute('giasp');

            $.ajax({
                type: "GET",
                url: "?act=editcart",
                data: "idgiohang=" + id + "&sl=" + item.value + "&giasp=" + giasp,
                success: function(repon) {
                    // console.log(repon);
                }
            })
        })
    })

  
</script>