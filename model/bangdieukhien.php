<?php 
function tongsp(){
    $sql="SELECT COUNT(*) AS 'slsp' FROM `sanphamct`;";
    return pdo_query_one($sql);
}
function tongkh(){
    $sql="SELECT COUNT(*) AS 'tongkh' FROM `khachhang`;";
    return pdo_query_one($sql);
    
}
// function tongsldh(){
//     $sql="SELECT COUNT(*) AS 'tongdh' FROM `donhang`;";
//     return pdo_query_one($sql);
// }
?>