<?php
function getgt()
{
        $sql = "SELECT * FROM `gioitinh`";
        return pdo_query($sql);
}
function getsize($id_size)
{
        $sql = "SELECT * FROM `danh_muc` JOIN san_pham ON san_pham.id_dm=danh_muc.id_dm 
JOIN size ON size.id_size=san_pham.id_sp JOIN chitietsize
 ON chitietsize.idsize=size.id_size WHERE size.id_size=$id_size;";
        return pdo_query($sql);
}
function getgia()
{
}
function loaisp($iddm)
{
        $sql = "SELECT * FROM `danh_muc` JOIN san_pham ON san_pham.id_dm=danh_muc.id_dm where san_pham.id_dm=$iddm";
        return pdo_query($sql);
}
