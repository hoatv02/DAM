<head>
    <style>
        h1 {
            text-transform: uppercase;
        }

        .rows {
            margin-top: 50px;
            margin-left: 500px;
        }
        input,select,textarea{
            margin-left: 15px;
            width: 200px;
            border: none;border-radius: 5px;
        }
        .insubmit input {
            height: 40px;
            margin-left: 10px;
            width: 200px;
            background-color: #fff;
            border: none;
            border-radius: 5px;
            margin-bottom: 50px;
            margin-top: 30px;
        }

        .insubmit input:hover {
            background-color: #3F45B5;
        }
    </style>
</head>
<div class="rows">
    <div class="row title">
        <h1> Thêm mới sản phẩm</h1>
    </div>
    <div class="row content">
        <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
            Danh mục<br>
            <div class="row mb10">

                <select name="iddm" id="">
                    <?php
                    foreach ($listdanhmuc as $danhmuc) {
                        extract($danhmuc);
                        echo '<option value="' . $id . '">' . $name . '</option>';
                    }
                    ?>
                </select>
            </div>Tên sản phẩm <br>
            <div class="row mb10">

                <input type="text" name="tensp" id="">
            </div>Giá sản phẩm <br>
            <div class="row mb10">

                <input type="text" name="giasp" id="">
            </div>
            Hình Ảnh <br>

            <div class="row mb10">
                <input type="file" name="hinhAnh" id="">
            </div>
            Mô tả <br>

            <div class="row mb10">
                <textarea type="text" name="mota" id=""></textarea>
            </div>
            <div class="row mb10 insubmit">
                <input type="submit" value="Thêm mới" name="themmoi">
                <input type="reset" value="Nhập lại">
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