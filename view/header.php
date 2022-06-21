<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>X-Shop</title>
    <link rel="stylesheet" href="/view/css/trangChu.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>

<body>

    <div id="web">
        <header>
            <div class="top-header">
                <div class="logo">
                    <a href="index.php">
                        <ion-icon name="fast-food-outline"></ion-icon>
                    </a>
                </div>
                <ul id="menu">
                    <li class="item"><a href="index.php">Trang Chủ</a></li>
                    <li class="item"><a href="index.php?act=gioithieu">Giới Thiệu</a></li>
                    <li class="item"><a href="index.php?act=lienhe">Liên Hệ</a></li>
                    <li class="item"><a href="index.php?act=gopy">Góp Ý</a></li>
                    <li class="item"><a href="index.php?act=hoidap">Hỏi Đáp</a></li>

                </ul>
                <?php if (isset($_SESSION['user'])) {
                    extract($_SESSION['user']);
                ?>
                    <ul class="mt10">
                        <li class="item"><a href="#">Xin chào <?= $user ?>
                                <img src="https://i.pinimg.com/736x/4f/f7/a3/4ff7a3b72274bdf8d3a1694a85864fdc.jpg" alt=""></a></li>
                        <li class="item"><a href="index.php?act=qmk">Quên mật khẩu</a></li>
                        <li class="item"><a href="index.php?act=edittt">Chỉnh sửa thông tin</a></li>
                        <?php
                        if ($vaitro == 1) {
                        ?>
                            <li class="item"><a href="admin/index.php">Đăng nhập admin</a></li>
                        <?php } ?>
                        <li class="item"><a href="index.php?act=thoat">Thoát</a></li>
                    </ul>
                <?php
                } else {
                ?><div class="options">
                        <div class="contact">
                            <button><a href="index.php?act=dangky">Đăng Kí</a></button>
                        </div>
                        <div class="pages">
                            <button><a href="index.php?act=dangnhap">Đăng Nhập</a></button>

                            <!-- <label for="click" class="click-me">Đăng Nhập</label> -->
                        </div>
                    </div>
                    <!-- <form action="index.php?act=dangnhap" method="post" enctype="multipart/form-data">
                        <input type="text" name="user" placeholder="Username">
                        <input type="password" name="pass" placeholder="Password">
                        <input type="submit" value="Đăng Nhập" name="dangnhap">
                        <input type="reset" value="Nhập lại">
                    </form> -->
                    <h2 class="thongbao">
                        <?php
                        if (isset($thongbao) && ($thongbao != "")) {
                            echo $thongbao;
                        }
                        ?>
                    </h2>
                <?php
                }
                ?>
            </div>
            <div class="banner">
                <div class="intro">
                    <h1>Tiệm Bánh Hoàng Gia</h1>
                    <p>Việc bạn cần làm chỉ là thưởng cho mình một bữa ăn ngon bên bạn bè và những người thân yêu tại nhà hàng của chúng mình. Ăn những món chế biến Sữa ngọt tươi ngon xong chắc chắn bạn sẽ trở nên yêu đời hơn rất nhiều đấy ạ!!</p>
                    <div class="options">
                        <button class="item" id="explore"><a href="index.php?act=gioithieu">Giới Thiệu</a></button>
                    </div>
                </div>
            </div>
        </header>


        <!-- 
        <div class="centers">
            <input type="checkbox" name="" id="click">
            <div class="contents">
                <div class="headers">
                    <h2>Đăng Nhập</h2>
                </div>
                <form action="index.php?act=dangnhap" method="post" enctype="multipart/form-data">
                    <input type="text" name="user" placeholder="Username">
                    <input type="password" name="pass" placeholder="Password">
                    <input type="submit" value="Đăng Nhập" name="dangnhap">
                    <input type="reset" value="Nhập lại">
                </form>
                <label for="click" class="close-btn">Close</label>
                <label for="click" class="close-btns"><a href="index.php?act=dangnhap">Đăng Nhập</a></label>

            </div>
        </div> -->