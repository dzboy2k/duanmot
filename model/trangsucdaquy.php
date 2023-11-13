<?php
function load_trangsucdaquy() {
    $sql = "SELECT * FROM san_pham WHERE id_dm = 3 ";
    return pdo_query($sql);
}
?>