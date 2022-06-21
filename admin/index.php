<?php
require '../model/danhmuc.php';
require '../model/sanpham.php';
require '../model/taikhoan.php';
require '../model/binhluan.php';
require '../model/cart.php';
require '../model/pdo.php';
require 'header.php';

if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {

            // ===========Danh Mục==============
        case 'adddm':
            if (isset($_POST['themmoi']) && $_POST['themmoi']) {
                $tenLoai = $_POST['tenLoai'];
                insert_danhmuc($tenLoai);
                $thongbao = "Thêm Thành Công !!!";
            }
            require 'danhmuc/add.php';
            break;
        case 'listdm':

            $listdanhmuc = loadAll_danhmuc();
            require 'danhmuc/list.php';
            break;

        case 'xoaDm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_danhmuc($_GET['id']);
            }
            $sql = "SELECT * FROM danhmuc ORDER BY id DESC";
            $listdanhmuc = pdo_query($sql);
            require 'danhmuc/list.php';
            break;

        case 'suaDm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $dm = loadOne_danhmuc($_GET['id']);
            }
            require 'danhmuc/update.php';
            break;
        case 'updatedm':
            if (isset($_POST['capnhat']) && $_POST['capnhat']) {
                $tenLoai = $_POST['tenLoai'];
                $id = $_POST['id'];
                update_danhmuc($id, $tenLoai);
                $thongbao = "Cập Nhật Thành Công !!!";
            }
            $listdanhmuc = loadAll_danhmuc();
            require 'danhmuc/list.php';
            break;
            // =============Sản Phẩm============


        case 'addsp':
            if (isset($_POST['themmoi']) && $_POST['themmoi']) {
                $iddm = $_POST['iddm'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['giasp'];
                $mota = $_POST['mota'];
                $hinhAnh = $_FILES['hinhAnh']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES['hinhAnh']['name']);
                move_uploaded_file($_FILES['hinhAnh']['tmp_name'], $target_file);
                insert_sanpham($tensp, $giasp, $hinhAnh, $mota, $iddm);
                $thongbao = "Thêm Thành Công !!!";
            }
            $listdanhmuc = loadAll_danhmuc();
            require 'sanpham/add.php';
            break;
        case 'listsp':
            if (isset($_POST['listok']) && $_POST['listok']) {
                $tk = $_POST['tk'];
                $iddm = $_POST['iddm'];
            } else {
                $tk = '';
                $iddm = 0;
            }
            $listdanhmuc = loadAll_danhmuc();
            $listsanpham = loadAll_sanpham($tk, $iddm);
            require 'sanpham/list.php';
            break;

        case 'xoaSP':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_sanpham($_GET['id']);
            }
            $sql = "SELECT * FROM sanpham ORDER BY id DESC";
            $listsanpham = pdo_query($sql);
            require 'sanpham/list.php';
            break;

        case 'suaSP':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $sanpham = loadOne_sanpham($_GET['id']);
            }
            $listdanhmuc = loadAll_danhmuc();

            require 'sanpham/update.php';
            break;
        case 'updateSp':
            if (isset($_POST['capnhats']) && ($_POST['capnhats'])) {
                $iddm = $_POST['iddm'];
                $id = $_POST['id'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['giasp'];
                $mota = $_POST['mota'];
                // $hinhAnh = $_FILES['hinhAnh']['name'];
                // $target_dir = "../upload/";
                // $target_file = $target_dir . basename($_FILES['hinhAnh']['name']);
                // move_uploaded_file($_FILES['hinhAnh']['tmp_name'], $target_file);
                update_sanpham($id, $tensp, $giasp/*,$hinhAnh*/, $mota, $iddm);
                $thongbao = "Cập Nhật Thành Công!!!";
            }
            $listdanhmuc = loadAll_danhmuc();
            $listsanpham = loadAll_sanpham("", 0);
            require 'sanpham/list.php';
            break;
        // ===============KHÁCH HÀNG =========================
        case 'xoatk':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_taikhoan($_GET['id']);
            }
            $sql = "SELECT * FROM taikhoan ORDER BY id DESC";
            $listtaikhoan = pdo_query($sql);
            require 'taikhoan/list.php';
            break;
        case 'dskh':
            $listtaikhoan = loadAll_taikhoan();
            require 'taikhoan/list.php';
            break;
        // ===============KHÁCH HÀNG =========================
        case 'xoabl':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_binhluan($_GET['id']);
            }
            $sql = "SELECT * FROM binhluan ORDER BY id DESC";
            $listbinhluan = pdo_query($sql);
            require 'binhluan/list.php';
            break;
        case 'dsbl':
            $listbinhluan = loadAll_binhluan(0);
            require 'binhluan/list.php';
            break;
        // ===============THỐNG KÊ =============
        case 'thongke':
            $listthongke = loadall_thongke();
            require 'thongke/list.php';
            break;
        case 'bieudo':
            $listthongke = loadall_thongke();
            require 'thongke/bieudo.php';
            break;
        default:
            require 'content.php';
            break;
        
    }
} else {
    require 'content.php';
}
require 'footer.php';
