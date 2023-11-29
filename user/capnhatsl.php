<main class="app-content container">
                <h3 class="tile-title">Sửa số lượng giỏ hàng</h3>
                <div class="tile-body">
                
                    <form class="row" action="?act=editcart&idgiohang=<?= $_GET['idgiohang'] ?>" method="post" enctype="multipart/form-data">
                       
                        <div class="form-group col-md-4">
                            <label class="control-label">Tên sản phẩm</label>
                            <input class="form-control" value="<?php echo $getonegiohang['tensp']; ?>" type="text" name="hoten" readonly>
                        </div>
                        <div class="form-group col-md-4">
                            <label class="control-label">Giá sản phẩm</label>
                            <input class="form-control" value="<?php echo $getonegiohang['giasp']; ?>" type="text" name="giasp" readonly>

                        </div>
                        <div class="form-group col-md-4">
                            <label class="control-label">Ảnh sản phẩm</label>

                            <img width="75px" src="admin/<?php echo $getonegiohang['hinhanhspct']; ?>" alt="">

                            
                        </div>
                        <div class="form-group col-md-4">
                            <label class="control-label">size sản phẩm</label>
                            <select  class="form-control" name="size" id="">
                                <option value="<?= $getonegiohang['idchitietsizesp']?>"><?= $getonegiohang['bankinh']?></option>
                                <?php foreach ($chitietsize as $key => $size) { 
                                    
                                    if ($size['id_chitietsize']!==$getonegiohang['idchitietsizesp']) { ?>
                                      <option value="<?=$size['id_chitietsize']?>"><?=$size['bankinh']?></option>
                                      <?php } ?>
                               <?php } ?>
                            </select>

                        </div>
                        <div class="form-group col-md-4">
                            <label class="control-label">số lượng sản phẩm</label>
                            <input class="form-control" value="<?php echo $getonegiohang['slgiohang']; ?>" type="number" name="slgiohang" >

                        </div>
                        



                        <button class="btn btn-save col-md-6" type="submit" name="btncapnhatsl">Sửa</button>

                    </form>
                </div>

</main>