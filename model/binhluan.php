<?php

function binhluan($id) {
    $sql = "SELECT * FROM binhluan 
    JOIN khachhang on binhluan.idkh =khachhang.id_kh 
    JOIN sanphamct on binhluan.idspct = sanphamct.id_spct
    WHERE sanphamct.id_spct = $id
    ";
    return pdo_query($sql);
}
// function getidkh($id_kh) {
//   $sql = "SELECT * FROM khachhang WHERE id_kh = $id_kh";
//   return pdo_query($sql);
// }
function guibinhluan($idkh,$id_spct,$binhluan){
$sql = "INSERT INTO binhluan(idkh,idspct,noidung)
VALUES($idkh,$id_spct,'$binhluan');
";
pdo_execute($sql);
}