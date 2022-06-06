<?php
if (is_array($dm)) {
    extract($dm);
}
?>

<head>
    <style>
        h1 {
            margin-bottom: 50px;
            text-transform: uppercase;
        }

        h5 {
            margin-top: 10px;
            text-transform: uppercase;
        }

        .rows {
            margin-top: 50px;
            margin-left: 500px;
            display: inline-block;
        }

        .mb10s input {
            width: 300px;
            /* border: 1px solid black; */
            border: none;
            border-radius: 5px;
            margin-left: 20px;
            margin-bottom: 20px;
            padding: 13px;
        }

        .input2 input {
            margin-left: 16px;
        }

        .ibsubmit input {
            height: 24px;
            margin-left: 10px;
            width: 200px;
            background-color: #fff;
            border: none;
            border-radius: 5px;
            margin-bottom: 50px;
        }

        .ibsubmit input:hover {
            background-color: #3F45B5;
        }
    </style>
</head>
<div class="rows">
    <div class="row title">
        <h1> Cập nhật lại hàng hóa</h1>
    </div>
    <div class="row content">
        <form action="index.php?act=updatedm" method="post" enctype="multipart/form">
            <div class="row mb10 mb10s">
                <h5>Mã loại</h5>
                <input type="text" name="maLoai" id="" disabled>
            </div>
            <div class="row mb10 mb10s input2">
                <h5>Tên loại</h5>
                <input type="text" name="tenLoai" id="" value="<?php if (isset($name) && ($name != "")) echo $name ?>">
            </div>
            <div class="row mb10 ibsubmit">
                <input type="hidden" name="id" value="<?php if (isset($id) && ($id > 0)) echo $id ?>">
                <input type="submit" value="Cập Nhật" name="capnhat">
                <input type="reset" value="Nhập Lại">
                <a href="index.php?act=listdm"><input type="button" value="Danh Sách"></a>
            </div>
            <?php
            if (isset($thongBao) && $thongBao != "") {
                echo $thongBao;
            }
            ?>
        </form>
    </div>
</div>