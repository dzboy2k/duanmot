<?php 
function nhanvien(){
    $sql="SELECT * FROM `ceo` JOIN nhanvien ON nhanvien.id_ceo=ceo.id_ceo;";
    return pdo_query($sql);
}

function updatemk($id,$matkhau){
$sql="UPDATE `nhanvien` SET `matkhau`='$matkhau' WHERE id_nv=$id";
pdo_execute($sql);
}
function updatemkceo($id,$matkhauceo){
    $sql="UPDATE `ceo` SET `mk`='$matkhauceo' WHERE id_ceo=$id";
    pdo_execute($sql);
    }


?>