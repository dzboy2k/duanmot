<?php
function loadspsale() {
    $sql = "SELECT * FROM sanphamct JOIN san_pham ON san_pham.id_sp = sanphamct.idsp WHERE dacbiet > 0 ";
   return pdo_query($sql);
}
function loaddm() {
    $sql = "SELECT * FROM danh_muc";
    return pdo_query($sql);
}
function loadsptheoluotxem() {
    $sql = "SELECT * FROM sanphamct JOIN san_pham ON san_pham.id_sp = sanphamct.idsp ORDER BY luotxem DESC LIMIT 12";
    return pdo_query($sql);
}
function chitietsp($id_spct){
    $sql = "SELECT * FROM sanphamct WHERE id_spct = $id_spct";
    return pdo_query_one($sql);
}
?>