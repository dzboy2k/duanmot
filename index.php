<?php
include('model/pdo.php');
include('user/trangchu/head.php');


include('user/trangchu/menu.php');
include('model/loadsptheodm.php');
include('model/find.php');
include('model/loadsptrangchu.php');


$getiddm = getiddm();
// var_dump($getiddm);
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
            // nguyệt
        case 'dangky':
            include('user/dangky.php');
            break;
        case 'dangnhap':
            include('user/dangnhap.php');
            break;
        case 'suatk':
            include('user/suatk.php');
            break;
        case 'lienhe':
            include('user/lienhe.php');
            break;
        case 'gioithieu':
            include('user/gioithieu.php');

            break;
        case 'quenmk':
            include('user/quenmk.php');
            # code...
            break;
            // trang
        case 'trangchu':
            $loadtrangsuccaocap=loadtrangsuccaocap();
            $loadtrangsuckimcuong=loadtrangsuckimcuong();
            // var_dump($loadtrangsuckimcuong);
            // $loadsptheodm = loadsptheodm($iddm);
            include('user/maintrangchu.php');
            break;

        case 'trangsucvang':
            $iddm=$_GET['iddm'];
            $loadsptheodm = loadsptheodm($iddm);
            include('user/loadstheodm.php');
            break;
        case 'trangsuckimcuong':
            $iddm=$_GET['iddm'];
            $loadsptheodm = loadsptheodm($iddm);
            include('user/loadstheodm.php');
            break;
        case 'trangsucdaquy':
            $iddm=$_GET['iddm'];
            $loadsptheodm = loadsptheodm($iddm);
            include('user/loadstheodm.php');
            break;
        case 'chitietsp':
            include('user/chitietsp.php');
            break;
            // dũng

        case 'giohang':
            include('user/giohang.php');

            break;
        case 'muahang':
            include('user/muahang.php');

            break;
        case 'tintuc':
            include('user/tintuc.php');

            break;
    }
} else {
    $loadtrangsuccaocap=loadtrangsuccaocap();
            $loadtrangsuckimcuong=loadtrangsuckimcuong();
    include('user/maintrangchu.php');
}
include('user/trangchu/footer.php');
