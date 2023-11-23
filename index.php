<?php
session_start();
include('model/pdo.php');
include('model/dangkyanddnusser.php');
include('model/loadsptheodm.php');
include('model/find.php');
include('model/qltk.php');
include('model/loadsptrangchu.php');
include('model/loadsp.php');
include('model/muahang.php');
include('model/giohang.php');
include('model/binhluan.php');
include('model/qlkh.php');
include('model/search.php');




include('user/trangchu/head.php');
include('user/trangchu/menu.php');

if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
            // nguyệt
        case 'trangchu':

            $loadtrangsuccaocap = loadtrangsuccaocap();
            $loadtrangsuckimcuong = loadtrangsuckimcuong();
            $loadspsale = loadspsale();
            $loaddm = loaddm();
            $loadsptheoluotxem = loadsptheoluotxem();
            $loadkhachhang = load_kh();
            if (isset($_POST['btnsearch'])) {
                $loadspsale = search($_POST['ten']);
                $loaddm = search($_POST['ten']);
                $loadsptheoluotxem = search($_POST['ten']);
            }



            include('user/maintrangchu.php');
        
            break;
        case 'dangky':
            if (isset($_POST['btnsubmit'])) {

                $upload = "admin/upload_img/" . time() . $_FILES['avatar']['name'];
                move_uploaded_file($_FILES['avatar']['tmp_name'], $upload);
                $dangky = dangky(
                    $_POST['ten'],
                    $_POST['email'],
                    $_POST['phone'],
                    $_POST['address'],
                    $_POST['pass'],

                    $upload
                );
            }

            include('user/dangky.php');
            break;
        case 'dangnhap':
            if (isset($_POST['btnsubmit'])) {
                $dangnhap = dangnhap($_POST['email'], $_POST['mk']);
                if ($dangnhap) {
                    $_SESSION['emailkh'] = $dangnhap['email'];
                    $_SESSION['id_kh'] = $dangnhap['id_kh'];
                    // header('location:?act=trangchu');
                    echo '<meta http-equiv="refresh" content="0;url=?act=trangchu">';
                }
            }
            include('user/dangnhap.php');
            break;
        case 'dangxuat':
            if (isset($_SESSION['emailkh'])) {
                unset($_SESSION['emailkh']);
                unset($_SESSION['id_kh']);
                // header('location:?act=trangchu');
                echo '<meta http-equiv="refresh" content="0;url=?act=trangchu">';
            }
            break;

        case 'suatk':
            $gettk = qltk($_SESSION['id_kh']);
            // var_dump($gettk);
            if (isset($_POST['inputsubmit'])) {
                $upload = "admin/upload_img/" . time() . $_FILES['anhkh']['name'];
                move_uploaded_file($_FILES['anhkh']['tmp_name'], $upload);
                updatetk(
                    $_SESSION['id_kh'],
                    $_POST['tenkh'],
                    $_POST['email'],
                    $_POST['sdt'],
                    $_POST['diachi'],
                    $_POST['matkhau'],
                    $_POST['tentk'],
                    $upload
                );
                // header('location:?act=suatk');
                echo '<meta http-equiv="refresh" content="0;url=?act=suatk&data=accounts">';
            }
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

        case 'trangsucvang':
            $loaisp = loaisp($_GET['iddm']);
            $listgioitinh = getgt();
            $getsize = getsize();
            $getgia = getgia();

            if (isset($_GET['idpage'])) {
                $loadsptheodm = loadsptheodm($_GET['iddm'], $_GET['idpage']);
            } else {
                $loadsptheodm = loadsptheodm($_GET['iddm'], 1);
            }

            include('user/loadstheodm.php');
            break;
        case 'trangsuckimcuong':
            $loaisp = loaisp($_GET['iddm']);
            $listgioitinh = getgt();
            if (isset($_GET['idpage'])) {
                $loadsptheodm = loadsptheodm($_GET['iddm'], $_GET['idpage']);
                var_dump($loadsptheodm);
            } else {
                $loadsptheodm = loadsptheodm($_GET['iddm'], 1);
            }
            // var_dump($loadsptheodm);
            include('user/loadstheodm.php');
            break;
        case 'trangsucngoctrai':

            if (isset($_GET['idpage'])) {
                $loadsptheodm = loadsptheodm($_GET['iddm'], $_GET['idpage']);
            } else {
                $loadsptheodm = loadsptheodm($_GET['iddm'], 1);
            }
            include('user/loadstheodm.php');
            break;
        case 'chitietsp':
            $chitietsp = chitietsp($_GET['id_spct']);
            $loadspcungloai = loadspcungloai($_GET['id_sp'], $_GET['id_spct']);
            $binhluan = binhluan($_GET['id_spct']);
           if(isset($_POST['btnbl'])) {
            $idspct = $_GET['id_spct'];
            $id_kh =  $_SESSION['id_kh'];
          
            guibinhluan($id_kh,$idspct,$_POST['binhluan']);
            echo '<meta http-equiv="refresh" content="0;url=?act=chitietsp&id_spct='.$_GET['id_spct'].'&id_sp='.$_GET['id_sp'].'">';
            
           }
            include('user/chitietsp.php');  
            break;
     
          
     
            // dũng

        case 'addgiohang':
            // && isset($_SESSION['id_kh'])
            if (isset($_SESSION['id_kh'])) {
                $chitietsp = chitietsp($_GET['idspct']);

                $check = 0;
                if (isset($_POST['btngiohang'])) {
                    $allgiohang = allgiohang($_SESSION['id_kh']);

                    foreach ($allgiohang as $key => $giohang) {
                        if (
                            $chitietsp['tenspchitiet'] === $giohang['tensp'] && intval($_POST['size']) == $giohang['idchitietsizesp']
                            && $_SESSION['id_kh'] == $giohang['idkh']
                        ) {
                            $check = 1;
                            $slgiohang = intval($_POST['soluong']) + $giohang['slgiohang'];
                            updateslgiohang($slgiohang, $giohang['idgiohang']);
                        }
                    }

                    if ($check == 0) {
                        $giohang = giohang(
                            $chitietsp['tenspchitiet'],
                            $chitietsp['hinhanhchitiet'],
                            $chitietsp['gia'],
                            intval($_POST['soluong']),
                            intval($_POST['size']),
                            intval($_GET['idspct']),
                            $_SESSION['id_kh'],
                            floatval(($chitietsp['gia'] * intval($_POST['soluong'])))

                        );
                        // $slgiohang = demslgiohang($_SESSION['id_kh']);

                    }


                    // var_dump($giohang);
                }
                // sẽ không lấy đc size và số lượng và gán mặc định là 1.
                else {
                    $allgiohang = allgiohang($_SESSION['id_kh']);

                    foreach ($allgiohang as $key => $giohang) {
                        // if ($giohang['idchitietsizesp']==1) {
                        //     echo "adfdf";
                        //     die;
                        // }
                        // // echo $giohang['idchitietsizesp'];
                        // // die;
                        if (
                            $chitietsp['tenspchitiet'] === $giohang['tensp'] && $giohang['idchitietsizesp'] == 4
                            && $_SESSION['id_kh'] == $giohang['idkh']
                        ) {
                            $check = 1;
                            $slgiohang = $giohang['slgiohang'] + 1;
                            updateslgiohang($slgiohang, $giohang['idgiohang']);
                        }
                    }

                    if ($check == 0) {
                        $size = getsizetheosp($chitietsp['idsp']);

                        $giohang = giohang(
                            $chitietsp['tenspchitiet'],
                            $chitietsp['hinhanhchitiet'],
                            $chitietsp['gia'],
                            1,
                            $size[0]['id_chitietsize'],
                            intval($_GET['idspct']),
                            $_SESSION['id_kh'],
                            floatval(($chitietsp['gia'] * 1))

                        );
                    }
                }
            } else {

                echo '<meta http-equiv="refresh" content="0;url=?act=dangnhap">';
            }
            include('user/giohang.php');

            break;
        case 'cart':
            if (isset($_SESSION['id_kh'])) {
                include('user/giohang.php');
            } else {
                echo '<meta http-equiv="refresh" content="0;url=?act=dangnhap">';
            }

            break;
        case 'deletegiohang':
            if (isset($_GET['idgiohang'])) {
                deletegiohang($_GET['idgiohang']);
                // header('location:?act=cart');
                echo '<meta http-equiv="refresh" content="0;url=?act=cart">';
            }
            break;
        case 'muahang':
            if (isset($_GET['id_spct'])) {
                $getmuahang = getmuahangtheospct($_GET['id_spct']);
                $size = getsizetheosp($getmuahang['idsp']);
                // var_dump($size);
                // die;
                if (isset($_SESSION['id_kh'])) {
                    $getkh = qltk($_SESSION['id_kh']);
                    // var_dump($getkh);
                    $_SESSION['slspct'] = 1;
                    if (isset($_POST['btnsubmitsl'])) {
                        $_SESSION['slspct'] = $_POST['soluongspct'];
                    }
                    if (isset($_POST['btnsubmitdm'])) {
                        adddh($_POST['diachinhan'], $_POST['sodienthoai'], $_POST['option'], $_SESSION['id_kh']);
                        $getdh = getdh($_SESSION['id_kh']);
                        addchitietdh(
                            intval($_POST['soluongspct']),
                            floatval($_POST['gia']),
                            floatval($_POST['thanhtien']),
                            $getdh['id_dh'],
                            intval($_GET['id_spct']),
                            $size[0]['id_chitietsize'],
                            intval($_POST['magiamgia'])
                        );
                    }
                } else {
                    $_SESSION['slspct'] = 1;
                    if (isset($_POST['btnsubmitsl'])) {
                        $_SESSION['slspct'] = $_POST['soluongspct'];
                    }
                    if (isset($_POST['btnsubmitdm'])) {
                        addkhkhimuahang($_POST['username'], $_POST['email'], $_POST['sodienthoai']);
                        // die;
                        $getmaxidkh = getkhmax();
                        $_SESSION['id_khkhongdangky'] = $getmaxidkh['id_kh'];
                        // var_dump($getmaxidkh);
                        // die;
                        adddh($_POST['diachinhan'], $_POST['sodienthoai'], $_POST['option'], $_SESSION['id_khkhongdangky']);
                        $getdh = getdh($_SESSION['id_khkhongdangky']);
                        addchitietdh(
                            intval($_POST['soluongspct']),
                            floatval($_POST['gia']),
                            floatval($_POST['thanhtien']),
                            $getdh['id_dh'],
                            intval($_GET['id_spct']),
                            $size[0]['id_chitietsize'],

                            intval($_POST['magiamgia'])
                        );
                    }
                }
            }

            include('user/muahang.php');

            break;
        case 'muahangformcart':
            if (isset($_SESSION['id_kh'])) {
                $getkh = qltk($_SESSION['id_kh']);
                $allgiohang = allgiohang($_SESSION['id_kh']);
                $thanhtien = tongtiencart($_SESSION['id_kh']);
                // var_dump(thanhtien($_SESSION['id_kh']));
                if (isset($_POST['btnsubmitdm'])) {
                    adddh($_POST['diachinhan'], $_POST['sodienthoai'], $_POST['option'], $_SESSION['id_kh']);
                    $getdh = getdh($_SESSION['id_kh']);
                    // var_dump($getdh);
                    // die;
                    foreach ($allgiohang as $key => $giohang) {
                        addchitietdh(
                            $giohang['slgiohang'],
                            $giohang['giasp'],
                            $giohang['tongtien'],
                            $getdh['id_dh'],
                            $giohang['idspct'],
                            $giohang['idchitietsizesp'],
                            intval($_POST['magiamgia'])
                        );
                        deletegiohang($giohang['idgiohang']);
                        echo "<script>alert('Mua thành công')</script>";
                    }


                    // die;
                }
            }
            include('user/muahangformcart.php');

            break;
        case 'tintuc':
            include('user/tintuc.php');

            break;
    }
} else {
    $loadtrangsuccaocap = loadtrangsuccaocap();
    $loadtrangsuckimcuong = loadtrangsuckimcuong();
    $loadspsale = loadspsale();
    $loaddm = loaddm();
    $loadkhachhang = load_kh();

    $loadsptheoluotxem = loadsptheoluotxem();

    include('user/maintrangchu.php');
}
include('user/trangchu/footer.php');
