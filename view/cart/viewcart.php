<?php
require 'global.php';
?>
<html>

<head>
    <style>
        tr,
        td,
        th {
            text-align: center;
            padding: 5px;
            border: 1px solid #000;
        }
        .btn-order {
            width: 200px;
            padding: 10px;
            text-align: center;
            margin-left: 190px;
            border-radius: 20px;
            background-color: #333;
            color: white;
            border: none;
        }

        th {
            padding: 10px;
            background-color: #333;
            color: #fff;

        }

        .boxcontent {
            text-align: center;
            padding: 20px 200px;

        }

        table {
            border: 1px solid #000;
            width: 100%;
        }

        .btn-order:last-child {
            margin-left: 10px;
        }
        .boxcontent-bill{
            margin-left: 180px;
        }
    </style>
</head>

</html>
<div class="row mb viewcart">
    <div class="">
        <h3 class="alert alert-success">GIỎ HÀNG</h3>
    </div>
    <div class="boxcontent">
        <table >
            <?php
                viewcart(1);
            ?>
        </table>
    </div>
    <div class="boxcontent-bill">
    <a href="index.php?act=bill"><input type="button" value="Đồng Ý Đặt Hàng" class="btn-order"></a>   <a href="index.php?act=deletecart"><input type="button" value="Xóa Giỏ Hàng" class="btn-order"></a>
    </div>
</div>