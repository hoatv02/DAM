<?php
if (is_array($sanpham)) {
    extract($sanpham);
}
$hinhpath = "../upload/" . $img;
if (is_file($hinhpath)) {
    $hinhAnh = "<img src='.$hinhpath.' height='80'>";
} else {
    $hinhAnh = "No photto";
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
            margin-top: 30px;
            margin-left: 500px;
            display: inline-block;
        }


        .input2 input,.input2 select,.input2 textarea {
            margin-left: 16px;
            width: 300px;
        }

        .ibsubmit input {
            height: 35px;
            margin-left: 15px;
            width: 200px;
            background-color: #fff;
            border: none;
            margin-top: 20px;
            border-radius: 5px;
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
        <form action="index.php?act=updateSp" method="post" enctype="multipart/form">
        Danh mục <br>
            <div class="row mb10 input2">
                <select name="iddm" id="">
                    <option value="0" selected>Tất cả</option>
                    <?php
                    foreach ($listdanhmuc as $danhmuc) {
                        extract($danhmuc);
                        if ($iddm == $id) {
                            echo '<option value="' . $id . '" selected>' . $name . '</option>';
                        } else {
                            echo '<option value="' . $id . '" >' . $name . '</option>';
                        }
                    }
                    ?>
                </select>
            </div>Tên sản phẩm <br>
            <div class="row mb10 input2">

                <input type="text" name="tensp" id="" value="<?= $name ?>">
            </div> Giá sản phẩm <br>
            <div class="row mb10 input2">

                <input type="text" name="giasp" id="" value="<?= $price ?>">
            </div>
            Hình Ảnh <br>
            <div class="row mb10 input2">

                <input type="file" name="hinhAnh" id="">
                <?= $hinhAnh ?>
            </div>
            Mô tả <br>
            <div class="row mb10 input2">
                <textarea type="text" name="mota" id="" value="<?= $mota ?>"></textarea>
            </div>
            <div class="row mb10 ibsubmit">
                <input type="hidden" name="id" value="<?= $id ?>">
                <input type="submit" value="Cập Nhật" name="capnhats">
                <input type="reset" value="Nhập Lại">
                <a href="index.php?act=listsp"><input type="button" value="Danh Sách"></a>
            </div>
            <?php
            if (isset($thongBao) && $thongBao != "") {
                echo $thongBao;
            }
            ?>
        </form>
    </div>
</div>