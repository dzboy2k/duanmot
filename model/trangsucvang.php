<?php
function load_trangsucvang() {
    $sql = "SELECT * FROM san_pham WHERE id_dm = 1 ";
    return pdo_query($sql);
}
// function 
?>