<?php
session_start();
require 'model/pdo.php';
require 'model/danhmuc.php';
require 'model/sanpham.php';
require 'model/taikhoan.php';
require 'model/cart.php';
require 'view/header.php';
require 'global.php';

if (!isset($_SESSION['mycart'])) $_SESSION['mycart'] = [];

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
            if (isset($_POST['dangky'])) {
                $email = $_POST['email'];
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $vaitro = $_POST['vaitro'];
                insert_taikhoan($email, $user, $pass, $vaitro);
                $thongbao = "Bạn đã đăng ký thành công !!! Vui lòng đăng nhập thực hiện chức năng bình luận hoặc đặt hàng !!!";
            }
            require 'view/taikhoan/dangky.php';
            break;
        case 'dangnhap':
            if (isset($_POST['dangnhap'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $checkuser = check_user($user, $pass);
                if (is_array($checkuser)) {
                    $_SESSION['user'] = $checkuser;
                } else {
                    $thongbao = "Tài khoản không tồn tại !!! Vui lòng kiểm tra hoặc đăng kí !!!";
                }
            }
            require 'view/dangnhap.php';

            break;
        case 'edittt':
            if (isset($_POST['capnhat'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $phone = $_POST['phone'];
                $id = $_POST['id'];
                update_taikhoan($id, $user, $email, $phone, $pass, $address);
                $_SESSION['user'] = check_user($user, $pass);
            }
            require 'view/taikhoan/edittt.php';

            break;
        case 'qmk':
            if (isset($_POST['guiemail'])) {
                $email = $_POST['email'];
                $checkemail = check_email($email);
                if (is_array($checkemail)) {
                    $thongbao = "Mật khẩu của bạn là :" . $checkemail['password'] . "";
                } else {
                    $thongbao = "Email này không tồn tại !!";
                }
            }
            require 'view/taikhoan/qmk.php';
            break;
        case 'thoat':
            session_unset();
            break;
        case 'addtocart':
            if (isset($_POST['addtocart'])) {
                $id = $_POST['id'];
                $name = $_POST['name'];
                $img = $_POST['img'];
                $price = $_POST['price'];
                $soluong = 1;
                $tongtien = $soluong * $price;
                $spadd = [$id, $name, $img, $price, $soluong, $tongtien];
                array_push($_SESSION['mycart'], $spadd);
            }
            require 'view/cart/viewcart.php';
            break;
        case 'delcart':
            if (isset($_GET['idcart'])) {
                array_splice($_SESSION['mycart'], $_GET['idcart'], 1);
            } else {
                $_SESSION['mycart'] = [];
            }
            require 'view/cart/viewcart.php';
            break;
        case 'bill':
            require 'view/cart/bill.php';
            break;

        case 'billconfirm':
            if (isset($_POST['donydathang'])) {
                $name = $_POST['user'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $phone = $_POST['phone'];
                $pttt = $_POST['pttt'];
                $ngaydathang = date('Y-m-d H:i:s');
                $tongdonhang = tongdonhang();

                $id_bill = insert_bill($name, $email, $address, $phone, $pttt, $ngaydathang, $tongdonhang);
                // insert into bảng cart: lấy dữ liệu từ session my_cart và cái idbill:

                foreach ($_SESSION['mycart'] as $cart) {
                    insert_cart($_SESSION['user']['id'], $cart[0], $cart[2], $cart[1], $cart[3], $cart[5], $cart[5], $id_bill);
                }

                $_SESSION['cart'] = [];
            }
            $bill = loadone_bill($id_bill);
            $billctiet = loadall_cart($id_bill);
            require 'view/cart/billconfirm.php';
            break;
        case 'deletecart':
            // $deletecart = delete_cart($id);
            unset($_SESSION['mycart']);
            require 'view/cart/viewcart.php';
            break;
        default:
            require 'view/home.php';
            break;
    }
} else {
    require 'view/home.php';
}
require 'view/footer.php';
