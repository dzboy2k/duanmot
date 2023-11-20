<?php 
function getmuahangtheospct($idspct){
$sql="SELECT * FROM `sanphamct` WHERE id_spct=$idspct";
return pdo_query_one($sql);
}
function getdh($id_kh){
    $sql="SELECT * FROM `donhang` WHERE idkh=$id_kh";
    return pdo_query_one($sql);
}
function getmagiamgia(){
    $sql="SELECT * FROM `giamgia`";
    return pdo_query($sql);
}
function thanhtien(){

}
function adddh($diachinhan,$sodienthoai,$pttt,$idkh){
    $sql="INSERT INTO `donhang`( `diachinhan`, `sodienthoai`, `phuongthuctt`, `idkh`) 
    VALUES ('$diachinhan','$sodienthoai','$pttt',$idkh)";
    pdo_execute($sql);
}
function addchitietdh($slchitiet,$giasp,$tongtien,$iddh,$idspct,$magiamgia){
    $sql="INSERT INTO `chitietdonhang`
    ( `soluongchitiet`, `giasp`, `tongtien`, `iddh`, `idspct`,idmagiamgia) 
    VALUES ($slchitiet,$giasp,$tongtien,$iddh,$idspct,$magiamgia)";
    pdo_execute($sql);
    
}
?>