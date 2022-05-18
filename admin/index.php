<?php
    include 'header.php';
    if(isset($_GET['act'])){
        $act = $_GET['act'];
        switch($act){
            case 'adddm':
                if(isset($_POST['themmoi']) && ($_POST['themmoi'])){
                    $tenLoai = $_POST['tenLoai'];
                    $sql = "INSERT INTO `danhmuc`(`name`) VALUES ('$tenLoai')";
                    $connect = mysqli_connect('localhost','root','','xshop');
                    mysqli_query($connect,$sql);
                    $thongbao = "Thêm thành công";
                }
                include 'danhmuc/add.php';
                break;
            case 'listdm':
                    $sql = "SELECT * FROM danhmuc ORDER BY name";
                    $connect = mysqli_connect('localhost','root','','xshop');
                    mysqli_query($connect,$sql);
                include 'danhmuc/list.php';
                break;
            case 'dskh':
                include 'danhmuc/add.php';
                break;
            case 'dsbl':
                include 'danhmuc/add.php';
                break;
            case 'thongke':
                include 'danhmuc/add.php';
                break;
                                
                default :
                include "home.php";
                break; 
        }
    }else{
        include 'home.php';
    }
    include 'footer.php';
