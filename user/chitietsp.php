<?php
$getsizetheosp = getsizetheosp($_GET['id_sp']);

?>

<body>
    <div class="detail-product-main">

        <div class="container">
            <div class="row">

                <div class="col-lg-5">
                    <div class="product-img w-100">
                        <img class="w-100" src="admin/<?php echo $chitietsp['hinhanhchitiet']; ?>" alt="">
                    </div>
                    <!-- <div class="slick-slider mt-5 d-flex">

                        <div class="btn-img">
                            <img src="/img/DBC0014BRW.WR20A-thumbnail.jpg" alt="">
                        </div>
                        <div class="btn-img ">
                            <img src="/img/DBC0014BRW.WR20A-thumbnail.jpg" alt="">
                        </div>
                        <div class="btn-img ">
                            <img src="/img/DBC0014BRW.WR20A-thumbnail.jpg" alt="">
                        </div>
                        <div class="btn-img ">
                            <img src="/img/DBC0014BRW.WR20A-thumbnail.jpg" alt="">
                        </div>

                    </div> -->

                </div>
                <div class="col-lg-7">
                    <form method="post" action="?act=addgiohang&idspct=<?=$_GET['id_spct']?>&idsp=<?=$_GET['id_sp']?>" >
                        <div class="product-info">
                            <div class="product-name display-6">
                                <p><?php echo $chitietsp['tenspchitiet']; ?></p>
                            </div>
                            <div class="product-feedback mt-4">
                                <div style="display:flex">
                                    <div class="icon-start">
                                        <i class="ti-star"></i>
                                        <i class="ti-star"></i>
                                        <i class="ti-star"></i>
                                        <i class="ti-star"></i>
                                        <i class="ti-star"></i>
                                    </div>

                                    <div class="product-review"><span class="product-rating">74</span> đánh giá</div>
                                </div>
                            </div>
                            <div class="product-price  mt-4">
                                <p><?php echo number_format($chitietsp['gia']); ?> VND</p>
                            </div>
                            <div class="pro-text  mt-4">
                                <p>Mô tả:<?php echo $chitietsp['mota']; ?></p>
                            </div>
                            <div class="product-size d-flex my-4">
                                <div class="mr-5 d-flex size">
                                    <h6 class="option-title">Size:</h6>
                                    <select class="nice-select" name="size">

                                        <?php foreach ($getsizetheosp as $key => $value) { ?>
                                            <option value="<?= $value['id_chitietsize'] ?>"><?= $value['bankinh'] ?>
                                            </option>

                                        <?php } ?>

                                    </select>
                                </div>
                                <div class="action_link">
                                    <a class="size-a" href="/huong-dan-do-size">Hướng dẫn do size <i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                            <div class="quantity-cart-box  align-items-center ">
                                <h6 class="option-title ">Số lượng:</h6>
                                <input type="number" name="soluong" value="1" min="1">
                                <div class="action_link mt-5">
                                    <button class="btn btn-secondary" name="btngiohang" > Thêm
                                        giỏ hàng</button>
                                    <button name="btnmuangay" class="btn btn-secondary"> Mua ngay</button>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>

            </div>
            <div class="comment mt-5 ">
                <form action="?act=chitietsp&id_spct=<?php echo $chitietsp['id_spct'] ?>&id_sp=<?php echo $_GET['id_sp'] ?>" method="POST">

                    <input type="text" class="input__field input__field--top__down" placeholder="Nhập bình luận" style="border: none;" name="binhluan">
                    <button type="submit" name="btnbl">Gửi bình
                        luận</button>
                </form>

            </div>
            <table>
                <?php foreach ($binhluan as $bl) : ?>

                    <div class="contain-commen pt-5">
                        <div class="pt-2"><?php echo $bl['tenkh']; ?></div>
                        <div class="pt-2"> <img style="width: 75px; height: 75px;" src="admin/<?php echo $bl['hinhanhchitiet'] ?>" alt=""></div>
                        <div class="pt-2"><?php echo $bl['noidung']; ?></div>
                    </div>


                <?php endforeach ?>
            </table>

        </div>
    </div>

    <div class="related-product mt-5">
        <div class="related-product-title text-center">
            <h3 class="m-5"> SẢN PHẨM CÙNG LOẠI</h3>
        </div>
        <div class="container">

            <div class="row">
                <?php foreach ($loadspcungloai as $item) : ?>
                    <div class="col-md-3  col-sm-4 col-6">
                        <div class="card">
                            <img src="admin/<?php echo $item['hinhanhchitiet']  ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $item['tenspchitiet'];  ?></h5>
                                <p class="price-product" style="color: #C69967; font-size: 16px;"><?php
                                                                                                    echo number_format($item['gia']);
                                                                                                    ?> VNĐ </p>


                                <a href="" class="mt-2"><i style="color: #CC8811;">Xem chi tiết -></i></a>
                                <div class="card-btn">
                                    <button><a href="">Thêm giỏ hàng</a></button>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>

        </div>
    </div>


</body>
