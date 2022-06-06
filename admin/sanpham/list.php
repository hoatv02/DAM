<head>
    <style>
         h1{
            text-transform: uppercase;
        }
        .rows{
            margin-left: 500px;
            margin-top: 50px;
        }
        table{
            margin-top: 20px;
            text-align: center;
            width: 600px;
        }
        table th{
            padding: 10px;
            background-color: #5d8aa8;
        }
        .checkbox{
            padding: 20px;
            width: 50px;

        }
        .nameList{
            text-align: left;
        }
        .insubmit input{
            margin-top: 30px;
            margin-left: 10px;
            padding: 4px 12px;
            border: none;
            border-radius: 5px;
        }
        .insubmit input:hover{
            background-color: #3F45B5;
        }
        .fa-edit{
            padding: 5px;
            background-color: #3F45B5;
            border-radius: 5px;
            color: #000;
        }
        .fa-trash-alt{
            padding: 5px;
            background-color: #cc0000;
            border-radius: 5px;
            color: #000;
        } 
        td{
            padding: 5px 0;
        }
        .form input,form select{
            height: 30px;
            border: none;
            border-radius: 5px;
        }
        .updatedelete{
            padding: 10px;
        }
        /* .frmdsloai{
            display: grid;
            grid-template-columns: 1fr 1fr;

        } */
    </style>
</head>
<div class="rows">
    <div class="row frmtitle">
        <h1>Danh Sách Loại Hàng</h1>
    </div>
    <div class="row frmcontent">
        <div class="row mb10 frmdsloai">
            <form action="index.php?act=listsp" method="post" enctype="multipart/form-data" class="form insubmit">
                <input type="text" name="tk" placeholder="Tìm kiếm sản phẩm">
                <select name="iddm" id="">
                    <option value="0" selected>Tất cả</option>
                    <?php
                    foreach ($listdanhmuc as $danhmuc) {
                        extract($danhmuc);
                        echo '<option value="' . $id . '">' . $name . '</option>';
                    }
                    ?>
                </select>
                <input type="submit" name="listok" value="Search">
            </form>
            <table border="1">
                <tr>
                    <th></th>
                    <th>Mã Loại</th>
                    <th>Tên sản phẩm</th>
                    <th>Giá sản phẩm</th>
                    <th>Hình ảnh</th>
                    <th>Mô tả</th>
                    <th></th>
                </tr>
                <?php
                foreach ($listsanpham as $sanpham) {
                    extract($sanpham);
                    $suaSP = "index.php?act=suaSP&id=" . $id;
                    $xoaSP = "index.php?act=xoaSP&id=" . $id;
                    $hinhpath = "../upload/".$img;
                    if (is_file($hinhpath)) {
                        $hinhAnh = "<img src='". $hinhpath ."' height='80'>";
                    } else {
                        $hinhAnh = "No photto";
                    }
                    echo '  <tr>
                        <td><input type="checkbox" name="" id=""></td>
                        <td>' . $id . '</td>
                        <td>' . $name . '</td>
                        <td>' . $price . '</td>
                        <td>' . $hinhAnh . '</td>
                        <td>' . $mota . '</td>
s                        <td class="updatedelete"><a href="' . $suaSP . '"><i class="fal fa-edit"></i></a>    <a href="' . $xoaSP . '"><i class="fal fa-trash-alt"></i></a></td>
                    </tr>';
                }

                ?>


            </table>
        </div>
    </div>
    <div class="row mb10 insubmit">
        <input type="button" value="Chọn Tất Cả">
        <input type="button" value="Bỏ Chọn Tất Cả">
        <input type="button" value="Xóa Các Mục Đã Chọn">
        <a href="index.php?act=addsp"><input type="button" value="Nhập Thêm"></a>
    </div>
</div>