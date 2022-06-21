<html>

<head>
    <style>
        .thongbao {
            color: red;
        }
        .abc{
            display: grid;
            grid-template-columns: 1fr 1fr;
            background-color: #5d8aa8;
            width: 100%;
            padding: 30px 200px;
        }
        .abc img{
            width: 100%;
        }
        .viewcart {
            display: none;
        }
        .formdttt{
            width:700px;
        }
        .b{
            float: right;
        }
    </style>
</head>

</html>
<div class="contents">
    <div class="box-title abc">
        <h1>Cập Nhật Tài Khoản <strong></strong></h1>
    </div>
    <div class="box-content abc">
        <div class="abcd">
        <?php
        if (isset($_SESSION['user']) && is_array($_SESSION['user'])) {
            extract($_SESSION['user']);
        }
        ?>
        <form action="index.php?act=edittt" method="post" enctype="multipart/form-data" class="formdttt">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">User Name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="user" value="<?= $user ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" id="exampleInputEmail1" value="<?= $email ?>" aria-describedby="emailHelp" value="<?= $email ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="pass" value="<?= $password ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Address</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="address" value="<?= $address ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Phone</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="phone" value="<?= $phone ?>">
            </div>
            <div class="mb-3">
                <input type="hidden" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="id" value="<?= $id ?>">
            </div>
            <div class="mb-3">
                <input type="submit" class="form-control btn btn-primary" id="exampleInputEmail1" aria-describedby="emailHelp" name="capnhat">
            </div>
            <div class="mb-3">
                <input type="reset" class="form-control btn btn-primary" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <!-- <input type="text" name="user" placeholder="Username" value="<?= $user ?>">
            <input type="email" name="email" placeholder="Email" value="<?= $email ?>">
            <input type="password" name="pass" placeholder="Password" value="<?= $password ?>">
            <input type="text" name="address" placeholder="Address" value="<?= $address ?>">
            <input type="text" name="phone" placeholder="Phone" value="<?= $phone ?>">
            <input type="hidden" name="id" value="<?= $id ?>">
            <input type="submit" value="Cập nhật" name="capnhat">
            <input type="reset" value="Nhập lại"> -->
        </form>
        <h2 class="thongbao"></h2>
        <?php
        if (isset($thongbao) && ($thongbao != "")) {
            echo $thongbao;
        }
        ?></h2>
        </div> <div class="b">
        <img src="http://foodphoto.vn/wp-content/uploads/2018/06/chup-hinh-banh-8.jpg" alt="">
    </div>
    </div>
   
</div>