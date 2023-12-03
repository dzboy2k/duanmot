<?php 
function getmuahangtheospct($idspct){
$sql="SELECT * FROM `sanphamct` WHERE id_spct=$idspct";
return pdo_query_one($sql);
}
function getdh($id_kh){
    $sql="SELECT MAX(donhang.id_dh) AS 'iddh',donhang.* FROM `donhang` WHERE idkh=$id_kh";
    return pdo_query_one($sql);
}
function getmagiamgia(){
    $sql="SELECT * FROM `giamgia`";
    return pdo_query($sql);
}
function thanhtien(){

}
function adddh($diachinhan,$sodienthoai,$pttt,$idkh,$idtientrinh){
    $sql="INSERT INTO `donhang`( `diachinhan`, `sodienthoai`, `phuongthuctt`, `idkh`,idtientrinh) 
    VALUES ('$diachinhan','$sodienthoai','$pttt',$idkh,$idtientrinh)";
    pdo_execute($sql);
}
function addchitietdh($slchitiet,$giasp,$tongtien,$iddh,$idspct,$idchitietsize,$magiamgia){
    $sql="INSERT INTO `chitietdonhang`
    ( `soluongchitiet`, `giasp`, `tongtien`, `iddh`, `idspct`,idchitietsize,idmagiamgia) 
    VALUES ($slchitiet,$giasp,$tongtien,$iddh,$idspct,$idchitietsize,$magiamgia)";
    pdo_execute($sql);
    
}
?>