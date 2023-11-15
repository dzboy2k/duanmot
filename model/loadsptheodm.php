<?php

function loadsptheodm($iddm) {
    $sql = "SELECT * FROM san_pham WHERE id_dm = $iddm ";
    return pdo_query($sql);
}

function getiddm() {
    $sql = "SELECT * FROM danh_muc";
    return pdo_query($sql);
}


?>