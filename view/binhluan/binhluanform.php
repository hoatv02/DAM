<?php
session_start();
require '../../model/pdo.php';
require '../../model/binhluan.php';

$idpro = $_REQUEST['idpro'];
$dsbl = loadAll_binhluan($idpro);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bình Luận</title>
    <link rel="stylesheet" href="../css//trangChu.css">
    <style>
        .row {
            padding: 20px;
            width: 100%;
        }

        .tablebl {
            border: 1px solid #000;
            margin: 20px 50px;
            padding: 30px;
        }

        /* .tablebl .titles {
            margin-left: 150px;
        } */
        .boxcontent {
            padding: 20px !important;
        }

        table {
            margin-left: 15px;
            width: 100%;
        }

        /* .searchbox {
            margin-left: 200px;
        } */
        .mb-3{
            width: 300px;
        }
    </style>
</head>

<body>
    <div class="row">
        <div class="alert alert-success">
            <h1>Bình Luận</h1>
        </div>
        <div class="alert">
            <table align="center" class="table">
                <thead class="alert-success">
                    <tr>
                        <th>Nội Dung </th>
                        <th>ID User </th>
                        <th>Ngày Bình Luận </th>
                    </tr>
                </thead>
                <?php
                foreach ($dsbl as $bl) {
                    extract($bl);
                    echo '
                    <tr border="1" >
                        <td>' . $noidung . '</td>
                        <td>' . $iduser . '</td>
                        <td>' . $ngaybinhluan . '</td>
                    </tr>
                    ';
                }

                ?>


            </table>
        </div>

        <?php
        if (isset($_SESSION['user'])) {
            extract($_SESSION['user']);
        ?>
            <div class="boxfooter searchbox">
                <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
                    <input type="hidden" name="idpro" value="<?= $idpro ?>">
                    <input type="hidden" name="iduser" value="<?= $iduser ?>">
                    <!-- <input type="text" name="comment" id=""> -->
                    <div class="mb-3">
                        <input type="text" class="form-control" name="comment">
                    </div>
                    <div class="mb-3">
                        <input type="submit" class="form-control btn btn-primary" value="Gửi bình luận" name="submit_comment">
                    </div>
                </form>
            </div>
        <?php
            if (isset($_POST['submit_comment']) && ($_POST['submit_comment'])) {
                $comment = $_POST['comment'];
                $idpro = $_POST['idpro'];
                $iduser = $_SESSION['user']['id'];
                $ngaybinhluan = date('Y-m-d H:i:s');
                insert_binhluan($comment, $iduser, $idpro, $ngaybinhluan);
                header("Location: " . $_SERVER['HTTP_REFERER']);
            }
        } else {
            echo '<p class="tb">Bạn phải đăng nhập để thực hiện chức năng này !!!</p>';
        }
        ?>
    </div>




</body>

</html>