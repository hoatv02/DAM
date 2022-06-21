<html>
<head>
    <style>
        /* .box-content {
            padding: 50px 700px;
            width: 100%;
            text-align: center;
        } */
        .contents{
            padding: 50px;
            max-width: 700px;
            margin: 0 auto;
            background-color: #5d8aa8;
        }
        /* input[type="text"] {
            width: 300px;
            padding: 10px;
            margin-bottom: 10px;
        }

        input[type="password"] {
            width: 300px;
            padding: 10px;

        } */
        .viewcart{
            display: none;
        }
    </style>
</head>

</html>
<div class="contents">
   <div>
   <h1>Đăng Nhập</h1>
   </div> <br>
    <div class="box-content">
        <?php if (isset($_SESSION['user'])) {
            extract($_SESSION['user']);
        ?>
            <div>
                <?php
                echo 'Bạn đã đăng nhập thành công !!!';
                ?>
            </div>
        <?php
        } else {
        ?>
            <!-- <form action="index.php?act=dangnhap" method="post" enctype="multipart/form-data">
                <input type="text" name="user" placeholder="Username"> <br>
                <input type="password" name="pass" placeholder="Password"> <br>
                <input type="submit" value="Đăng Nhập" name="dangnhap">
                <input type="reset" value="Nhập lại">
            </form> -->
            <form action="index.php?act=dangnhap" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <input type="text" name="user" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="username">
                </div>
                <div class="mb-3">
                    <input type="password" name="pass" class="form-control" id="exampleInputPassword1" placeholder="password">
                </div>
                <input type="submit" class="btn btn-primary" value="Đăng Nhập" name="dangnhap">
            </form>
                <?php
                if (isset($thongbao) && ($thongbao != "")) {
                    echo $thongbao;
                }
                ?>
        <?php
        }
        ?>
    </div>
</div>
<!-- 

<form action="index.php?act=dangnhap" method="post" enctype="multipart/form-data">
                        <input type="text" name="user" placeholder="Username">
                        <input type="password" name="pass" placeholder="Password">
                        <input type="submit" value="Đăng Nhập" name="dangnhap">
                        <input type="reset" value="Nhập lại">
                    </form> -->