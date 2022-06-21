<html>

<head>
    <style>
        .thongbao {
            color: red;
        }
        .contents{
            padding: 50px;
            max-width: 700px;
            margin: 0 auto;
            background-color: #5d8aa8;
        }
        .viewcart{
            display: none;
        }
    </style>
</head>

</html>
<div class="contents">

    <div class="box-title">
        <h1>Đăng Kí Thành Viên <strong></strong></h1>
    </div>


    <div class="box-content">
        <!-- <form action="index.php?act=dangky" method="post" enctype="multipart/form-data">
            <input type="text" name="user" placeholder="Username">
            <input type="email" name="email" placeholder="Email">
            <input type="password" name="pass" placeholder="Password">
            Vai Trò <br>
            Người dùng : <input type="radio" name="vaitro" value="0"> <br>
            Admin <input type="radio" name="vaitro" value="1"><br>
            <input type="submit" value="Đăng Ký" name="dangky">

            <input type="reset" value="Nhập lại">
        </form> -->
        <form action="index.php?act=dangky" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">User Name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="user">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="pass">
            </div>
            <div class="input-group-text">
                Người dùng<input class="form-check-input mt-0" type="radio" value="0" aria-label="Checkbox for following text input" name="vaitro"> Admin<input class="form-check-input mt-0" type="radio" name="vaitro" value="1" aria-label="Checkbox for following text input">
            </div><br>
            <input type="submit" class="btn btn-primary" name="dangky" value="Đăng Ký">
        </form>

        <h2 class="thongbao"></h2>
        <?php
        if (isset($thongbao) && ($thongbao != "")) {
            echo $thongbao;
        }
        ?></h2>
    </div>

</div>