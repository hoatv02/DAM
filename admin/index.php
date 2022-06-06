<?php
require '../model/danhmuc.php';
require '../model/sanpham.php';
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
                $thongBao = "Thêm Thành Công !!!";
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
                $thongBao = "Cập Nhật Thành Công !!!";
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
                $thongBao = "Thêm Thành Công !!!";
            }
            $listdanhmuc = loadAll_danhmuc();
            require 'sanpham/add.php';
            break;
        case 'listsp':
            if (isset($_POST['listok']) && $_POST['listok']) {
                $tk = $_POST['tk'];
                $iddm = $_POST['iddm'];
            }else{
                $tk ='';
                $iddm=0;
            }
            $listdanhmuc = loadAll_danhmuc();
            $listsanpham = loadAll_sanpham($tk,$iddm);
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
                $id= $_POST['id'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['giasp'];
                $mota = $_POST['mota'];
                // $hinhAnh = $_FILES['hinhAnh']['name'];
                // $target_dir = "../upload/";
                // $target_file = $target_dir . basename($_FILES['hinhAnh']['name']);
                // move_uploaded_file($_FILES['hinhAnh']['tmp_name'], $target_file);
                update_sanpham($id, $tensp,$giasp/*,$hinhAnh*/,$mota,$iddm);
                $thongBao = "Cập Nhật Thành Công !!!";
            }
            $listdanhmuc = loadAll_danhmuc();
            $listsanpham = loadAll_sanpham("",0);
            require 'sanpham/list.php';
            break;
        default:
            require 'content.php';
            break;
    }
} else {
    require 'content.php';
}
require 'footer.php';
