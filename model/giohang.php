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
function demslgiohang($idkh){
    $sql="SELECT COUNT(*) AS 'slgiohang' FROM `giohang` WHERE idkh=$idkh;";
    return pdo_query_one($sql);
}
function deletegiohang($idgiohang){
    $sql="DELETE FROM `giohang` WHERE idgiohang=$idgiohang";
    pdo_execute($sql);
}
function allgiohang($idkh){
    $sql="SELECT * FROM `giohang` 
    JOIN chitietsize ON chitietsize.id_chitietsize=giohang.idchitietsizesp
     WHERE idkh=$idkh";
    return pdo_query($sql);

}
function tongtiencart($idkh){
   $sql="SELECT SUM(tongtien) as 'tongtien' FROM `giohang` WHERE idkh=$idkh;";
   return pdo_query_one($sql);
}
function updateslgiohang($sl,$idgiohang,$tongtien,$size){

    $sql="UPDATE `giohang` SET `slgiohang`=$sl,tongtien=$tongtien,idchitietsizesp=$size
     WHERE idgiohang=$idgiohang";
    pdo_execute($sql);

}
function chitietsize($idspct){
    $sql="SELECT * FROM `giohang` 
    JOIN sanphamct on sanphamct.id_spct=giohang.idspct 
    JOIN  san_pham ON san_pham.id_sp=sanphamct.idsp 
    JOIN size ON size.id_size=san_pham.id_size 
    JOIN chitietsize ON chitietsize.idsize=size.id_size where idspct=$idspct";
    return pdo_query($sql);
}
function getongiohang($idgiohang){
    $sql="SELECT * FROM `giohang` JOIN chitietsize ON chitietsize.id_chitietsize=giohang.idchitietsizesp  WHERE idgiohang=$idgiohang";
    return pdo_query_one($sql);
}
?>