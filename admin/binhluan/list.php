<head>
    <style>
        h1 {
            text-transform: uppercase;
        }

        .rows {
            padding: 50px 300px;
        }

        table {
            text-align: center;
            width: 600px;
        }

        table th {
            padding: 10px;
        }

        .checkbox {
            width: 30px;
            padding: 20px;
            width: 50px;

        }

        .nameList {
            text-align: left;
        }

        .insubmit input {
            margin-top: 30px;
            margin-left: 10px;
            padding: 4px 12px;
            border: none;
            border-radius: 5px;
        }

        .insubmit input:hover {
            background-color: #3F45B5;
        }

        .fa-edit {
            padding: 5px;
            background-color: #3F45B5;
            border-radius: 5px;
            color: #000;
        }

        .fa-trash-alt {
            padding: 5px;
            background-color: #cc0000;
            border-radius: 5px;
            color: #000;
        }

        td {
            padding: 5px 0;
        }
    </style>
</head>
<div class="rows">
    <h3 class="alert alert-success">
        Danh Sách Bình Luận
    </h3>
    <table class="table">
        <thead class="alert-success">
            <tr>
                <th>ID</th>
                <th>Nội Dung </th>
                <th>ID User </th>
                <th>ID Pro </th>
                <th>Ngày Bình Luận </th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
             foreach ($listbinhluan as $binhluan) {
                extract($binhluan);
                $suabl = "index.php?act=suabl&id=" . $id;
                $xoabl = "index.php?act=xoabl&id=" . $id;
                echo '  <tr>
                    <td>' . $id . '</td>
                    <td class="nameList">' . $noidung . '</td>
                    <td class="nameList">' . $iduser . '</td>
                    <td class="nameList">' . $idpro . '</td>
                    <td class="nameList">' . $ngaybinhluan . '</td>
                    <td> <a href="' . $xoabl . '"><i class="fal fa-trash-alt"></i></a></td>
                </tr>';
            }
            ?>

        </tbody>
    </table>



    <!-- <div class="row alert-success">
        <h1>Danh Sách Bình Luận</h1>
    </div>
    <div class="row frmcontent">
        <div class="row mb10 frmdsloai">
            <table border="1">
                <tr>
                    <th>ID</th>
                    <th>Nội Dung </th>
                    <th>ID User </th>
                    <th>ID Pro </th>
                    <th>Ngày Bình Luận </th>
                    <th></th>
                </tr>
                <?php
                foreach ($listbinhluan as $binhluan) {
                    extract($binhluan);
                    $suabl = "index.php?act=suabl&id=" . $id;
                    $xoabl = "index.php?act=xoabl&id=" . $id;
                    echo '  <tr>
                        <td>' . $id . '</td>
                        <td class="nameList">' . $noidung . '</td>
                        <td class="nameList">' . $iduser . '</td>
                        <td class="nameList">' . $idpro . '</td>
                        <td class="nameList">' . $ngaybinhluan . '</td>
                        <td> <a href="' . $xoabl . '"><i class="fal fa-trash-alt"></i></a></td>
                    </tr>';
                }

                ?>


            </table>
        </div>
    </div> -->

</div>