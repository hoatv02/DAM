<head>
    <style>
         
        .nameList{
            text-align: left;
        }
        .rows{
            padding: 50px 300px;
        }
        .insubmit input{
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
            width: 120px;
        }
        
        
    </style>
</head>
<div class="rows">
    <div class=" alert alert-success">
        <h3>Danh Sách Loại Hàng</h3>
    </div>
    <div class=" ">
        <div class="">
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
            <table border="1" class="table">
                <br>
                <thead class="alert-success">
                <tr>
                    <th>Mã Loại</th>
                    <th>Tên sản phẩm</th>
                    <th>Giá sản phẩm</th>
                    <th>Hình ảnh</th>
                    <th>Mô tả</th>
                    <th></th>
                </tr>
                </thead>
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
                        <td>' . $id . '</td>
                        <td>' . $name . '</td>
                        <td>' . $price . '</td>
                        <td>' . $hinhAnh . '</td>
                        <td>' . $mota . '</td>
                                              <td class="updatedelete"><a href="' . $suaSP . '"><i class="fal fa-edit"></i></a>    <a href="' . $xoaSP . '"><i class="fal fa-trash-alt"></i></a></td>
                    </tr>';
                }

                ?>


            </table>
        </div>
    </div>
    <div class="row mb10 insubmit">
        <a href="index.php?act=addsp"><input type="button" value="Nhập Thêm"></a>
    </div>
</div>