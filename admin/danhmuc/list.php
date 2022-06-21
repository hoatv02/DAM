<head>
    <style>
        h1{
            text-transform: uppercase;
        }
        .rows{
            padding: 50px 300px;
            text-align: center;
        }
       
        table th{
            padding: 10px;
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
        .mloai{
            width: 100px;
        }
    </style>
</head>
<div class="rows">
    <div class="alert alert-success">
        <h1>Danh Sách Loại Hàng</h1>
    </div>
    <div class="">
        <div class="">
            <table border="1" class="table">
               <thead class="alert-success">
               <tr>
                    <th class="mloai">Mã Loại</th>
                    <th>Tên Loại</th>
                    <th></th>
                </tr>
               </thead>
                <?php
                foreach ($listdanhmuc as $danhmuc) {
                    extract($danhmuc);
                    $suaDm = "index.php?act=suaDm&id=".$id;
                    $xoaDm = "index.php?act=xoaDm&id=".$id;
                    echo '  <tr>
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
        <a href="index.php?act=adddm"><input type="button" value="Nhập Thêm"></a>
    </div>
</div>