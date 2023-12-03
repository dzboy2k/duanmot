
    <div class="container">
        <div class="order ">
            <?php foreach ($quanlydonhang as $key => $ql) { ?>
               
           
                <div class="b ">
                    <div class="z">
                        <img style="width: 75px;" src="admin/<?=$ql['hinhanhchitiet']?>" alt="">
                    </div>
                    <div class="z">
                        <p class="tensp"><?=$ql['tenspchitiet']?></p>
                        <div class="soluong d-flex">
                            <p>x</p>
                            <p><?=$ql['soluongchitiet']?></p>
                            <span class="badge bg-success p-3"><?=$ql['tentientrinh']?></span>

                        </div>
                    </div>
                    <div class="z">
                        <p class="giatien"><?=number_format($ql['giasp'])?>VND</p>
                    </div>
                </div>
           <?php } ?>
                <div class="total-money d-flex">
                    <p>Số tiền phải trả là: </p>
                    <p><?=number_format($tongtientientrinh['tongtientientrinh'])?> VND</p>
                </div>
                <div class="btn">
                    <button class="p-3">Liên hệ</button>
                    <button class="p-3">Hủy đơn hàng</button>
                </div>
           

        </div>
    </div>
