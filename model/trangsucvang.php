<?php
function load_trangsucvang() {
    $sql = "SELECT * FROM sanpham ";
    return pdo_query($sql);
}
?>