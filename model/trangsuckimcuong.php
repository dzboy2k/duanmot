<?php

function load_trangsuckimcuong() {
    $sql = "SELECT * FROM san_pham WHERE id_dm = 2 ";
    return pdo_query($sql);
}

?>