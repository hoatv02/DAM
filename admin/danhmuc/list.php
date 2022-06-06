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
            text-align: center;
            width: 600px;
        }
        table th{
            padding: 10px;
            background-color: #5d8aa8;
        }
        .checkbox{
            width: 30px;
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
        } td{
            padding: 5px 0;
        }
    </style>
</head>
<div class="rows">
    <div class="row frmtitle">
        <h1>Danh Sách Loại Hàng</h1>
    </div>
    <div class="row frmcontent">
        <div class="row mb10 frmdsloai">
            <table border="1">
                <tr>
                    <th class="checkbox"></th>
                    <th>Mã Loại</th>
                    <th>Tên Loại</th>
                    <th></th>
                </tr>
                <?php
                foreach ($listdanhmuc as $danhmuc) {
                    extract($danhmuc);
                    $suaDm = "index.php?act=suaDm&id=".$id;
                    $xoaDm = "index.php?act=xoaDm&id=".$id;
                    echo '  <tr>
                        <td><input type="checkbox" name="" id="" class="checkbox"></td>
                        <td>' . $id . '</td>
                        <td class="nameList">' . $name . '</td>
                        <td><a href="'.$suaDm.'"><i class="fal fa-edit"></i></a>    <a href="'.$xoaDm.'"><i class="fal fa-trash-alt"></i></a></td>
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
        <a href="index.php?act=adddm"><input type="button" value="Nhập Thêm"></a>
    </div>
</div>