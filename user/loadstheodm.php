<body>

    <main>
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#"><i class="ti-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="#"><?= $loadsptheodm[0]['tendm'] ?></a></li>

                </ol>
            </nav>
        </div>
        <div class="container-fluid">
            <div class="banner">
                <img src="img/KimCuong_PC.jpg" class="w-100" alt="">
            </div>
        </div>
        <div class="container">
            <div class="trangsucvang text-center mt-3">
                <h1><?= $loadsptheodm[0]['tendm'] ?></h1>

            </div>
          

            <div class="product_vang ">
                <div class="row p-3">
                    <?php foreach ($loadsptheodm as $item) : ?>
                        <div class="col-md-3 col-sm-4 col-6 add">
                            <div class="card cardto card_topsp">
                                <img src="admin/<?php echo $item['hinhanhchitiet'] ?>" alt="...">
                              
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $item['tenspchitiet']; ?></h5>
                                    <p class="price-product" style="color: #C69967; font-size: 16px;"><?php
                                                                                                        echo number_format($item['gia']);
                                                                                                        ?> VNĐ </p>

                                    <a href="?act=chitietsp&id_spct=<?php echo $item['id_spct'] ?>&id_sp=<?= $item['id_sp'] ?>" class="mt-2"><i style="color: #CC8811;">Xem chi tiết -></i></a>

                                    <div class="card-btn">
                                        <button><a href="?act=chitietsp&id_spct=<?php echo $item['id_spct'] ?>&id_sp=<?= $item['id_sp'] ?>">Thêm giỏ hàng</a></button>
                                    </div>

                                </div>
                            </div>

                        </div>
                    <?php endforeach ?>


                </div>
               
            </div>
            <div>
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        
                        <li class="page-item"><a class="page-link" href="?act=<?=$_GET['act']?>&iddm=<?=$_GET['iddm']?>&idpage=1">1</a></li>
                        <li class="page-item"><a class="page-link" href="?act=<?=$_GET['act']?>&iddm=<?=$_GET['iddm']?>&idpage=2">2</a></li>
                       
                    </ul>
                </nav>
            </div>
            <hr>
        </div>

    </main>

</body>