<?php
include('user/trangchu/head.php');
include('user/trangchu/menu.php');
include('model/trangsucvang.php');
include('model/trangsuckimcuong.php');
include('model/trangsucdaquy.php');
include('model/pdo.php');


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


            include('user/maintrangchu.php');
            break;

        case 'trangsucvang':
            $load_trangsucvang = load_trangsucvang();
            include('user/trangsucvang.php');
            break;
        case 'trangsuckimcuong':
            $load_trangsuckimcuong = load_trangsuckimcuong();
            include('user/trangsuckimcuong.php');
            break;
        case 'trangsucdaquy':
            $load_trangsucdaquy = load_trangsucdaquy();
            include('user/trangsucdaquy.php');
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
    include('user/maintrangchu.php');
}
include('user/trangchu/footer.php');
