<?php

function loadsptheodm($iddm,$idpage) {
    // $sql = "SELECT * FROM san_pham 
    // join danh_muc 
    // ON danh_muc.id_dm=san_pham.id_dm 
    // join sanphamct 
    // ON sanphamct.idsp=san_pham.id_sp
    // WHERE danh_muc.id_dm = $iddm";
    // return pdo_query($sql);
    if ($idpage==1) {
        $sql = "SELECT * FROM san_pham 
        join danh_muc 
        ON danh_muc.id_dm=san_pham.id_dm 
        join sanphamct 
        ON sanphamct.idsp=san_pham.id_sp
        WHERE danh_muc.id_dm = $iddm LIMIT 8 OFFSET 0";
        return pdo_query($sql);
    }
    if ($idpage==2) {
        $sql = "SELECT * FROM san_pham 
        join danh_muc 
        ON danh_muc.id_dm=san_pham.id_dm 
        join sanphamct 
        ON sanphamct.idsp=san_pham.id_sp
        WHERE danh_muc.id_dm = $iddm LIMIT 8 OFFSET 9";
        return pdo_query($sql);
    }
   
}

function getiddm() {
    $sql = "SELECT * FROM danh_muc";
    return pdo_query($sql);
}


?>