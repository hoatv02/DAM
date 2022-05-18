<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/index.css">
    <style>
        ul li{
            display: inline-flex;
        }
        
        .headeradmin h1{
            text-align: center;
            font-size: 50px;
            background-color: antiquewhite;
            padding: 20px;
            margin: 0;
        }
        .menu ul li{
            margin-left: 30px;
        }
        .contents{
            margin-left: 500px;
            background:linear-gradient(to top , blue,red);
            width: 300px;
            text-align: center;
            border-radius: 10px;
        }
        .mb10{
            margin-bottom: 20px;
        }
        .btn_input{
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="boxcenter bile">
        <div class="row mb headeradmin"> 
            <h1>Admin</h1>
        </div>
        <div class="row mb menu">
            <ul>
                <li><a href="index.php">Trang Chủ</a></li>
                <li><a href="index.php?act=adddm">Danh Mục</a></li>
                <li><a href="index.php?act=addsp">Hàng Hóa</a></li>
                <li><a href="index.php?act=dskh">Khách Hàng</a></li>
                <li><a href="index.php?act=dsbl">Bình Luận</a></li>
                <li><a href="index.php?act=thongke">Thống Kê</a></li>
            </ul>
        </div>