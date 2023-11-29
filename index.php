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
                }else{
                    $saitk='<span style="color:red">sai tài khoản hoặc mật khẩu</span>';
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
                    $upload,
                    $_POST['ngaysinh']
                );
                // header('location:?act=suatk');
                echo '<meta http-equiv="refresh" content="0;url=?act=suatk">';
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
                // var_dump($loadsptheodm);
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
            if (isset($_POST['btnbl'])) {
                $idspct = $_GET['id_spct'];
                $id_kh =  $_SESSION['id_kh'];

                guibinhluan($id_kh, $idspct, $_POST['binhluan']);
                echo '<meta http-equiv="refresh" content="0;url=?act=chitietsp&id_spct=' . $_GET['id_spct'] . '&id_sp=' . $_GET['id_sp'] . '">';
            }
            include('user/chitietsp.php');
            break;
      


            // dũng

        case 'addgiohang':
            // && isset($_SESSION['id_kh'])
            if (isset($_SESSION['id_kh'])) {
                $idspct = $_GET['idspct'];
                $idsp = $_GET['idsp'];
                $chitietsp = chitietsp($_GET['idspct']);
                // var_dump($chitietsp);
                // die;
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
                            $tongtien = $slgiohang * $giohang['giasp'];
                            updateslgiohang($slgiohang, $giohang['idgiohang'], $tongtien, intval($_POST['size']));
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

                    // echo '<meta http-equiv="refresh" content="0;url=?act=chitietsp&id_spct=' . $idspct . '&id_sp=' . $idsp . '">';

                    include('user/giohang.php');


                    // var_dump($giohang);
                }
            } else {

                echo '<meta http-equiv="refresh" content="0;url=?act=dangnhap">';
            }

            break;

        case 'cart':



            if (isset($_SESSION['id_kh'])) {

                $getgiohang = getgiohang($_SESSION['id_kh']);
                //    var_dump($getgiohang);
                //    die;
                if (isset($_POST['btncapnhatsl'])) {


                    // $checkbox = $_POST['checkbox'];
                    // $sl=$_POST['slgiohang'];
                    // echo $sl;
                    $getonegiohang = getongiohang($_POST['checkbox'],);
                    $getonegiohang['slgiohang'] = $_POST['slgiohang'];

                    echo $getonegiohang['slgiohang'];
                    //   echo $_POST['slgiohang'];
                    // foreach ($_POST['slgiohang'] as $key => $value) {
                    //                       echo $value['slgiohang'];

                    // }

                    // echo $_POST['checkbox'];
                    //    var_dump( getongiohang($_POST['checkbox']));
                    //     //     var_dump($_POST['checkbox']);
                    // // die;
                    // foreach ($getgiohang as $key => $giohang) {
                    //     // echo $_POST['checkbox'];
                    //     if ($giohang['idgiohang']==intval($_POST['checkbox'])) {
                    //         $getonegiohang=getongiohang($_POST['checkbox']);
                    //         // $getonegiohang['slgiohang']=;
                    //     //    $slgiohang=$_POST['slgiohang'];
                    //     //    echo  $slgiohang;
                    //     }else{
                    //         echo 2;
                    //     }

                    // }
                }
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
        case 'editcart':
            if (isset($_GET['idgiohang'])) {

                $getonegiohang = getongiohang($_GET['idgiohang']);
                $chitietsize = chitietsize($getonegiohang['idspct']);
                // var_dump($chitietsize);
            }
            if (isset($_POST['btncapnhatsl'])) {
                $tongtien = intval($_POST['slgiohang']) * intval($_POST['giasp']);
                updateslgiohang(intval($_POST['slgiohang']), intval($_GET['idgiohang']), $tongtien, intval($_POST['size']));
                echo '<meta http-equiv="refresh" content="0;url=?act=cart">';
            }
            include('user/capnhatsl.php');
            break;
        case 'muahang':
            // if (isset($_POST['slgiohang'])) {
            // echo $_POST['slgiohang'];
            //     var_dump(getongiohang($_GET['idgiohang']));
            // die;
            // }

            if (isset($_SESSION['id_kh'])) {
                $getkh = qltk($_SESSION['id_kh']);
                $allgiohang = allgiohang($_SESSION['id_kh']);
                $thanhtien = tongtiencart($_SESSION['id_kh']);
                if (isset($_POST['btnsubmitdm'])) {
                    if (
                        empty($_POST['username']) || empty($_POST['email'])
                        || empty($_POST['sodienthoai']) || empty($_POST['diachinhan']) || empty($_POST['option'])
                    ) {
                        $thongbao = "<span style='color:red'>Bạn phải điền đầy đủ thông tin</span>";
                    } else {
                        adddh($_POST['diachinhan'], $_POST['sodienthoai'], $_POST['option'], $_SESSION['id_kh']);
                        $getdh = getdh($_SESSION['id_kh']);
                        var_dump($getdh['id_dh']);
                        foreach ($allgiohang as $key => $giohang) {

                            addchitietdh(
                                $giohang['slgiohang'],
                                $giohang['giasp'],
                                $giohang['tongtien'],
                                $getdh['iddh'],
                                $giohang['idspct'],
                                $giohang['idchitietsizesp'],
                                intval($_POST['magiamgia'])
                            );
                            deletegiohang($giohang['idgiohang']);
                        }
                    }
                }
                // if (isset($_POST['btnsubmitsl'])) {
                //     $_SESSION['slspct'] = $_POST['soluongspct'];
                // }
            } else {
                echo '<meta http-equiv="refresh" content="0;url=?act=dangnhap">';
            }


            include('user/muahang.php');

            break;
        case 'muangay':
            if (isset($_SESSION['id_kh'])) {
                $chitietsp = chitietsp($_GET['idspct']);
                var_dump($chitietsp);
                $getkh = qltk($_SESSION['id_kh']);
                $allgiohang = allgiohang($_SESSION['id_kh']);
                $thanhtien = tongtiencart($_SESSION['id_kh']);
                // var_dump(thanhtien($_SESSION['id_kh']));
                if (isset($_POST['btnsubmitdm'])) {
                    if (
                        empty($_POST['username']) || empty($_POST['email'])
                        || empty($_POST['sodienthoai']) || empty($_POST['diachinhan']) || empty($_POST['option'])
                    ) {
                        $thongbao = "<span style='color:red'>Bạn phải điền đầy đủ thông tin</span>";
                    } else {

                        // adddh($_POST['diachinhan'], $_POST['sodienthoai'], $_POST['option'], $_SESSION['id_kh']);
                        // $getdh = getdh($_SESSION['id_kh']);
                        // var_dump($getdh['id_dh']);
                        // foreach ($allgiohang as $key => $giohang) {

                        //     addchitietdh(
                        //         $giohang['slgiohang'],
                        //         $giohang['giasp'],
                        //         $giohang['tongtien'],
                        //         $getdh['iddh'],
                        //         $giohang['idspct'],
                        //         $giohang['idchitietsizesp'],
                        //         intval($_POST['magiamgia'])
                        //     );
                        //     deletegiohang($giohang['idgiohang']);
                        // }
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
