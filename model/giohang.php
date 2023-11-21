<?php
function giohang($tensp,$anh,$gia,$sl,$idctsize,$idspct,$idkh,$tongtien){
    $sql="INSERT INTO `giohang`( `tensp`,`hinhanhspct`, `giasp`, `slgiohang`,tongtien ,`idchitietsizesp`, `idspct`,idkh)
     VALUES ('$tensp','$anh',$gia,$sl,$tongtien,$idctsize,$idspct,$idkh)";
     pdo_execute($sql);
}
function getgiohang($idkh){
    $sql="SELECT * FROM `giohang` 
    JOIN chitietsize ON chitietsize.id_chitietsize=giohang.idchitietsizesp 
    JOIN khachhang ON khachhang.id_kh=giohang.idkh WHERE khachhang.id_kh=$idkh;";
    return pdo_query($sql);

}
function deletegiohang($idgiohang){
    $sql="DELETE FROM `giohang` WHERE idgiohang=$idgiohang";
    pdo_execute($sql);
}
function allgiohang($idkh){
    $sql="SELECT * FROM `giohang` WHERE idkh=$idkh";
    return pdo_query($sql);

}
function tongtiencart($idkh){
   $sql="SELECT SUM(tongtien) as 'tongtien' FROM `giohang` WHERE idkh=$idkh;";
   return pdo_query_one($sql);
}
function updateslgiohang($sl,$idgiohang){

    $sql="UPDATE `giohang` SET `slgiohang`=$sl
     WHERE idgiohang=$idgiohang";
    pdo_execute($sql);

}
?>