<?php
require 'model/pdo.php';
require 'model/danhmuc.php';
require 'model/sanpham.php';
require 'model/taikhoan.php';

require 'view/header.php';
require 'global.php';
$spNew = loadAll_sanpham_home();
$dsdm = loadAll_danhmuc();
$dstop3 = loadAll_sanpham_top3();
if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case 'sanpham':
            if (isset($_POST['tk']) && ($_POST['tk'] != "")) {
                $tk = $_POST['tk'];
            } else {
                $tk = "";
            }
            if (isset($_GET['iddm']) && ($_GET['iddm'] > 0)) {
                $iddm = $_GET['iddm'];
            } else {
                $iddm = 0;
            }
            $dssp = loadAll_sanpham($tk, $iddm);
            $tendm = load_tendm($iddm);
            require 'view/sanpham.php';
            break;
        case 'ctsanpham':
            if (isset($_GET['idsp']) && ($_GET['idsp'] > 0)) {
                $id = $_GET['idsp'];
                $onesp = loadOne_sanpham($id);
                extract($onesp);
                $sp_cungloai = load_sanpham_cungloai($id, $iddm);
                require 'view/ctsanpham.php';
            } else {
                require 'view/home.php';
            }

            break;
        case 'gioithieu':
            require 'view/gioithieu.php';
            break;
        case 'lienhe':
            require 'view/lienhe.php';
            break;
        case 'dangky':
            if (isset($_POST['dangky']) && ($_POST['dangky'])) {
                $email = $_POST['email'];
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                insert_taikhoan($email, $user, $pass);
                $thongbao ="Bạn đã đăng ký thành công !!! Vui lòng đăng nhập thực hiện chức năng bình luận hoặc đặt hàng !!!";
            }
            require 'view/taikhoan/dangky.php';
            break;
        default:
            require 'view/home.php';
            break;
    }
} else {
    require 'view/home.php';
}
require 'view/footer.php';
