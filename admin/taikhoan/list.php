<head>
    <style>
        h1 {
            text-transform: uppercase;
        }

        .rows {
            width: 100%;
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
        <!-- <div class="row frmtitle">
            <h1>Danh Sách Tài Khoản</h1>
        </div>
        <div class="row frmcontent">
            <div class="row mb10 frmdsloai">
                <table border="1">
                    <tr>
                        <th>Mã Tài Khoản</th>
                        <th>UserName </th>
                        <th>Password </th>
                        <th>Email </th>
                        <th>Address </th>
                        <th>Phone </th>
                        <th>Vai trò </th>
                        <th></th>
                    </tr>
                    <?php
                    foreach ($listtaikhoan as $taikhoan) {
                        extract($taikhoan);
                        $xoatk = "index.php?act=xoatk&id=" . $id;
                        echo '  <tr>
                            <td>' . $id . '</td>
                            <td class="nameList">' . $user . '</td>
                            <td class="nameList">' . $password . '</td>
                            <td class="nameList">' . $email . '</td>
                            <td class="nameList">' . $address . '</td>
                            <td class="nameList">' . $phone . '</td>
                            <td class="nameList">' . $vaitro . '</td>
                            <td>  <a href="' . $xoatk . '"><i class="fal fa-trash-alt"></i></a></td>
                        </tr>';
                    }

                    ?>


                </table> -->
            <h3 class="alert alert-success">
                Danh Sách Tài Khoản
            </h3>
            <table class="table">
                <thead class="alert-success">
                    <tr>
                    <th>Mã Tài Khoản</th>
                    <th>UserName </th>
                    <th>Password </th>
                    <th>Email </th>
                    <th>Address </th>
                    <th>Phone </th>
                    <th>Vai trò </th>
                    <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($listtaikhoan as $taikhoan) {
                        extract($taikhoan);
                        $xoatk = "index.php?act=xoatk&id=" . $id;
                        echo '  <tr>
                            <td>' . $id . '</td>
                            <td class="nameList">' . $user . '</td>
                            <td class="nameList">' . $password . '</td>
                            <td class="nameList">' . $email . '</td>
                            <td class="nameList">' . $address . '</td>
                            <td class="nameList">' . $phone . '</td>
                            <td class="nameList">' . $vaitro . '</td>
                            <td>  <a href="' . $xoatk . '"><i class="fal fa-trash-alt"></i></a></td>
                        </tr>';
                    }
                    ?>

                </tbody>
            </table>
        </div>
    </div>

    <script>
        function CheckAll(x) {
            var allInputs = document.getElementsByName(x.name);
            for (var i = 0, max = allInputs.length; i < max; i++) {
                if (allInputs[i].type == 'checkbox')
                    if (x.checked == true)
                        allInputs[i].checked = true;
                    else
                        allInputs[i].checked = false;
            }
        }
    </script>
</div>