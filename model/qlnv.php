<?php 
 function listnv(){
    $sql="SELECT*FROM nhanvien";
    return pdo_query($sql);
 }

 function addnv($hoten,$tendangnhap,$ngaysinh,$target_file ,$email,$sdt,$diachi,$vaitro,$luong,$id_ceo){
    $sql = "INSERT INTO nhanvien(hoten,tendangnhap,ngaysinh,hinh_anhnv,email,sdt,diachi,vaitro,luong,id_ceo)
     VALUES('$hoten','$tendangnhap','$ngaysinh','$target_file ','$email','$sdt','$diachi','$vaitro',$luong,$id_ceo)";
     pdo_execute($sql);
 }
 function ceo() {
   $sql = "SELECT * FROM ceo ";
   $result =  pdo_query($sql);
   return $result;
 }
 function getone_nv($id_nv){
   $sql = "SELECT * FROM nhanvien WHERE id_nv=$id_nv";
  $result =  pdo_query_one($sql);
  return $result;
 }
function modalnv($hoten,$tendangnhap,$ngaysinh,$target_file,$email,$sdt,$diachi,$vaitro,$luong,$id_nv){
   $sql = "UPDATE nhanvien SET hoten='$hoten',tendangnhap='$tendangnhap',ngaysinh='$ngaysinh',hinhanhnv='$target_file',email='$email',
   sdt='$sdt',diachi='$diachi',vaitro='$vaitro',luong=$luong 
   WHERE id_nv = $id_nv
   ";
   pdo_execute($sql);
}
 function deletenv($id_nv) {
   $sql = "DELETE FROM nhanvien WHERE id_nv = $id_nv";
   pdo_execute($sql);
 }
