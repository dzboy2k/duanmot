<body>
    <div class="detail-product-main">

        <div class="container">
            <div class="row">
               
                <div class="col-lg-5">
                    <div class="product-img w-100">
                        <img class="w-100" src="admin/<?php echo $chitietsp['hinhanhchitiet']; ?>" alt="">
                    </div>
                    <div class="slick-slider mt-5 d-flex">

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

                    </div>

                </div>
                <div class="col-lg-7">
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
                            <p><?php echo number_format($chitietsp['gia']) ; ?> VND</p>
                        </div>
                        <div class="pro-text  mt-4">
                        <p><?php echo $chitietsp['mota']; ?></p>
                        </div>  
                        <div class="product-size d-flex my-4">
                            <div class="mr-5 d-flex size">
                            <h6 class="option-title">Size:</h6>
                            <select class="nice-select">
                                <option>Chọn kích cỡ</option>
                                <option>0</option>
                            </select>
                            </div>
                            <div class="action_link">
                                <a class="size-a" href="/huong-dan-do-size">Hướng dẫn do size <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                        <div class="quantity-cart-box  align-items-center ">
                            <h6 class="option-title ">Số lượng:</h6>
                            <input type="number" min="0"> 
                            <div class="action_link mt-5">
                                <button class="btn btn-secondary " id="submit" type="submit">Thêm giỏ hàng</button>
                                <button class="btn btn-secondary " id="submit" type="submit">Mua ngay</button>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
    </div>

    <div class="related-product mt-5">
        <div class="related-product-title text-center">
            <h3> SẢN PHẨM CÙNG LOẠI</h3>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-3  col-sm-4 col-6">
                    <div class="card">
                        <img src="/img/VMP1047AMW-RG06A-hover.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3  col-sm-4 col-6">
                    <div class="card">
                        <img src="/img/VMP1047AMW-RG06A-hover.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3  col-sm-4 col-6">
                    <div class="card">
                        <img src="/img/VMP1047AMW-RG06A-hover.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3  col-sm-4 col-6">
                    <div class="card">
                        <img src="/img/VMP1047AMW-RG06A-hover.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>