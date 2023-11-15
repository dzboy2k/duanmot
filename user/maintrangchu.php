<main>
  <div class="container-fluid">
    <div class="banner">
      <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/SlideBanner_PC_BC.jpg" class="d-block w-100" alt="..." />
          </div>
          <div class="carousel-item">
            <img src="img/SlideBanner_PC.jpg" class="d-block w-100" alt="..." />
          </div>
          <div class="carousel-item">
            <img src="img/WD_SlideBanner_PC.jpg" class="d-block w-100" alt="..." />
          </div>
          <div class="carousel-item">
            <img src="img/SlideBanner_PC_YEN.jpg" class="d-block w-100" alt="..." />
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="video">video</div>
    <div class="her-style text-center">
      <h3>TRIỂN LÃM TRANG SỨC QUỐC TẾ VIỆT NAM 2023</h3>
      <p>
        Chạm đến tinh hoa - Nhận ngàn ưu đãi
      </p>
    </div>

    <div class="product">
      <div class="row">
        <?php foreach ($loadtrangsuckimcuong as $item) : ?>
          <div class="col-md-3 col-sm-4 col-6">
            <div class="card">
              <div class="card-img">
                <img src="admin/<?php echo $item['hinhanhchitiet']; ?>" class="card-img-top" alt="..." />
              </div>
              <div class="card-body">
                <h5 class="card-title"><?php echo $item['tenspchitiet']; ?></h5>
                <p class="price-product text-center" style="color: #C69967;"><?php echo number_format($item['gia']) ?> VNĐ </p>
                <div class="d-flex">
                  <div class="buy-product">
                    <a href="#" class="btn btn-primary mr-5 " style="background-color: gray;">Mua ngay</a>
                  </div>
                  <a href="" class=" mt-2"><i style="color: #676767;">Xem chi tiết -></i></a>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach ?>
      </div>
      <div class="btn d-flex justify-content-center m-3">
        <button type="button" class="btn btn-outline-info">Info</button>
      </div>
    </div>
    <div class="subbanner">
      <img src="/img/SubBanner_PC_1.jpg" class="w-100" alt="" />
    </div>
    <div class="most text-center m-3">
      <h3>Nhẫn cưới được ưa chuộng nhất</h3>
      <p>
        Hơn cả một thiết kế, nhẫn cưới Lộc Phúc khắc hoạ tình yêu của riêng bạn
      </p>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <img src="/img/VMP1047AMW-RG06A-hover.jpg" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">
                  Some quick example text to build on the card title and
                  make up the bulk of the card's content.
                </p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card">
              <img src="/img/VMP1047AMW-RG06A-hover.jpg" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">
                  Some quick example text to build on the card title and
                  make up the bulk of the card's content.
                </p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <img src="/img/VMP1047AMW-RG06A-hover.jpg" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">
                  Some quick example text to build on the card title and
                  make up the bulk of the card's content.
                </p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card">
              <img src="/img/VMP1047AMW-RG06A-hover.jpg" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">
                  Some quick example text to build on the card title and
                  make up the bulk of the card's content.
                </p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6">video</div>
    </div>
    <div class="bannerBTS2">
      <img src="/img/Banner_BST_2.jpg" class="w-100" alt="" />
    </div>
    <div class="new text-center">
      <h3>TRANG SỨC CAO CẤP</h3>
      <p>Thỏa sức thể hiện sự kiêu kỳ, phô diễn trọn vẹn vẻ đẹp của kim cương thiên nhiên tiêu chuẩn quốc tế GIA với giác cắt hoàn hảo nhất.</p>
    </div>
    <div class="jquery">
      <div class="row">
        <?php foreach ($loadtrangsuccaocap as $item) : ?>
          <div class="col-md-3 col-sm-4 col-6">
            <div class="card">
              <img src="admin/<?php echo $item['hinhanhchitiet'] ?>" class="card-img-top" alt="" />
              <div class="card-body">
                <h5 class="card-title"><?php echo $item['tenspchitiet']  ?></h5>
                <p class="card-text">
                  <?php echo $item['mota'] ?>
                </p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
        <?php endforeach ?>

      </div>
      <div class="btn d-flex justify-content-center m-3">
        <button type="button" class="btn btn-outline-info">Info</button>
      </div>
    </div>
  </div>
  <section class="container">

    <div class="row">
      <div class="slider-img d-flex">
        <div class="col-md-2 user">
          <img src="img/anhng1.jpg" alt="" />
        </div>
        <div class="col-md-2 user">
          <img src="img/anhng1.jpg" alt="" />
        </div>
        <div class="col-md-2 user">
          <img src="img/anhng1.jpg" alt="" />
        </div>
        <div class="col-md-2 user">
          <img src="img/anhng1.jpg" alt="" />
        </div>
        <div class="col-md-2 user">
          <img src="img/anhng1.jpg" alt="" />
        </div>
        <div class="col-md-2 user">
          <img src="img/anhng1.jpg" alt="" />
        </div>
        <div class="col-md-2 user">
          <img src="img/anhng1.jpg" alt="" />
        </div>
        <div class="col-md-2 user">
          <img src="img/anhng1.jpg" alt="" />
        </div>
        <div class="col-md-2 user">
          <img src="img/anhng1.jpg" alt="" />
        </div>
      </div>
    </div>
  </section>
  <div class="container">
    <div class="hiden-end text-center">
      <h3>TRANG SỨC CAO CẤP</h3>
      <p>
        Thỏa sức thể hiện sự kiêu kỳ, phô diễn trọn vẹn vẻ đẹp của kim cương
        thiên nhiên tiêu chuẩn quốc tế GIA với giác cắt hoàn hảo nhất.
      </p>
    </div>
    <div class="row">
      <div class="col-md-6">video</div>
      <div class="col-md-6">slide</div>
      <div class="col-12">
        <img src="/img/2_Banner_BST-_PC.jpg" class="w-100" alt="" />
      </div>
    </div>
    <div class="vong">
      <div class="row">
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-6">
              <div class="card">
                <img src="/img/VMP1047AMW-RG06A-hover.jpg" class="card-img-top" alt="..." />
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">
                    Some quick example text to build on the card title and
                    make up the bulk of the card's content.
                  </p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card">
                <img src="/img/VMP1047AMW-RG06A-hover.jpg" class="card-img-top" alt="..." />
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">
                    Some quick example text to build on the card title and
                    make up the bulk of the card's content.
                  </p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="card">
                <img src="/img/VMP1047AMW-RG06A-hover.jpg" class="card-img-top" alt="..." />
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">
                    Some quick example text to build on the card title and
                    make up the bulk of the card's content.
                  </p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card">
                <img src="/img/VMP1047AMW-RG06A-hover.jpg" class="card-img-top" alt="..." />
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">
                    Some quick example text to build on the card title and
                    make up the bulk of the card's content.
                  </p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">video</div>
      </div>
      <div class="row">
        <div class="col-md-6">video</div>
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-6">
              <div class="card">
                <img src="/img/VMP1047AMW-RG06A-hover.jpg" class="card-img-top" alt="..." />
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">
                    Some quick example text to build on the card title and
                    make up the bulk of the card's content.
                  </p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card">
                <img src="/img/VMP1047AMW-RG06A-hover.jpg" class="card-img-top" alt="..." />
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">
                    Some quick example text to build on the card title and
                    make up the bulk of the card's content.
                  </p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="card">
                <img src="/img/VMP1047AMW-RG06A-hover.jpg" class="card-img-top" alt="..." />
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">
                    Some quick example text to build on the card title and
                    make up the bulk of the card's content.
                  </p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card">
                <img src="/img/VMP1047AMW-RG06A-hover.jpg" class="card-img-top" alt="..." />
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">
                    Some quick example text to build on the card title and
                    make up the bulk of the card's content.
                  </p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-6">
              <div class="card">
                <img src="/img/VMP1047AMW-RG06A-hover.jpg" class="card-img-top" alt="..." />
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">
                    Some quick example text to build on the card title and
                    make up the bulk of the card's content.
                  </p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card">
                <img src="/img/VMP1047AMW-RG06A-hover.jpg" class="card-img-top" alt="..." />
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">
                    Some quick example text to build on the card title and
                    make up the bulk of the card's content.
                  </p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="card">
                <img src="/img/VMP1047AMW-RG06A-hover.jpg" class="card-img-top" alt="..." />
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">
                    Some quick example text to build on the card title and
                    make up the bulk of the card's content.
                  </p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card">
                <img src="/img/VMP1047AMW-RG06A-hover.jpg" class="card-img-top" alt="..." />
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">
                    Some quick example text to build on the card title and
                    make up the bulk of the card's content.
                  </p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">video</div>
      </div>
      <div class="row">
        <div class="col-md-6">video</div>
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-6">
              <div class="card">
                <img src="/img/VMP1047AMW-RG06A-hover.jpg" class="card-img-top" alt="..." />
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">
                    Some quick example text to build on the card title and
                    make up the bulk of the card's content.
                  </p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card">
                <img src="/img/VMP1047AMW-RG06A-hover.jpg" class="card-img-top" alt="..." />
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">
                    Some quick example text to build on the card title and
                    make up the bulk of the card's content.
                  </p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="card">
                <img src="/img/VMP1047AMW-RG06A-hover.jpg" class="card-img-top" alt="..." />
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">
                    Some quick example text to build on the card title and
                    make up the bulk of the card's content.
                  </p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card">
                <img src="/img/VMP1047AMW-RG06A-hover.jpg" class="card-img-top" alt="..." />
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">
                    Some quick example text to build on the card title and
                    make up the bulk of the card's content.
                  </p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="khachhang text-center">
      <h3>KHÁCH HÀNG</h3>
      <p>Nói về Lộc Phúc Fine Jewelry</p>
      <div class="row">
        <div class="col-md-4">
          <img src="img/van.png" alt="" />
        </div>
        <div class="col-md-4">
          <img src="img/kh-2.png" alt="" />
        </div>
        <div class="col-md-4">
          <img src="img/kh-3.png" alt="" />
        </div>
        <p>
          Đã mua sắm trang sức tại Lộc Phúc rất nhiều lần, mình ưng ý nhất
          là dịch vụ đặt hàng Online, nhanh chóng, an toàn và vô cùng tiện
          lợi nha.
        </p>
        <div class="icon">
          <i class="ti-star"></i><i class="ti-star"></i><i class="ti-star"></i><i class="ti-star"></i><i class="ti-star"></i>
        </div>
        <p>MR DIEM</p>
      </div>
    </div>
    <div class="new">
      <h3>TIN TỨC</h3>
      <p>ƯU ĐÃI SỰ KIỆN</p>
    </div>
    <div class="product-new">
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <img src="..." class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">
                Some quick example text to build on the card title and make
                up the bulk of the card's content.
              </p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="..." class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">
                Some quick example text to build on the card title and make
                up the bulk of the card's content.
              </p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="..." class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">
                Some quick example text to build on the card title and make
                up the bulk of the card's content.
              </p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<script>
  $('.slider-img').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    dots: true,
    //  Infinity: true,
  });
</script>