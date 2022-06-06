<div class="contents">

    <div class="box-title">
        <h1>Đăng Kí Thành Viên <strong></strong></h1>
    </div>
    <div class="box-content">
        <form action="index.php?act=dangky" method="post" enctype="multipart/form-data">
            <input type="text" name="user" placeholder="Username">
            <input type="email" name="email" placeholder="Email">
            <input type="password" name="pass" placeholder="Password">
            <input type="submit" value="Đăng Ký" name="dangky">
            <input type="reset" value="Nhập lại">
        </form>
        <h2 class="thongbao"></h2>
        <?php
        if (isset($thongbao) && ($thongbao !="")) {
            echo $thongbao;
        }
        ?></h2>
    </div>

</div>

