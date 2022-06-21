<html>

<head>
    <style>
        .boxtitle {
            margin-left: 200px;
        }

        .viewcart {
            display: none;
        }

        .mr {
            padding: 50px 100px;
        }
    </style>
</head>

</html>
<div class="row mb">
    <div class="mr">
        <form action="index.php?act=billconfirm" method="post" enctype="multipart/form-data">
            <div class="mb">
                <div class="alert alert-success">Thông Tin Đặt Hàng</div>
                <div class="boxcontent">

                    <?php
                    if (isset($_SESSION['user'])) {
                        $user = $_SESSION['user']['user'];
                        $address = $_SESSION['user']['address'];
                        $email = $_SESSION['user']['email'];
                        $phone = $_SESSION['user']['phone'];
                    } else {
                        $user = "";
                        $address = "";
                        $email = "";
                        $phone = "";
                    }
                    ?>
                    <table class="table">
                        <thead class="alert-success">
                            <tr>
                                <td>Người Đặt Hàng</td>
                                <td>
                                    <div class="mb-3">
                                        <input type="text" class="form-control" style="width:200px;" ; value="<?= $user ?>" name="user">
                                    </div>
                                </td>
                            </tr>
                        </thead>
                        <thead class="alert-success">
                            <tr>
                                <td>Địa chỉ</td>
                                <td>
                                    <div class="mb-3">
                                        <input type="text" class="form-control" style="width:200px;" ; value="<?= $address ?>" name="address">
                                    </div>
                                </td>
                            </tr>
                        </thead>
                        <thead class="alert-success">
                            <tr>
                                <td>Email</td>
                                <td>
                                    <div class="mb-3">
                                        <input type="text" class="form-control" style="width:200px;" ; value="<?= $email ?>" name="email">
                                    </div>
                                </td>
                            </tr>
                        </thead>
                        <thead class="alert-success">
                            <tr>
                                <td>Điện Thoại</td>
                                <td>
                                    <div class="mb-3">
                                        <input type="text" class="form-control" style="width:200px;" ; value="<?= $phone ?>" name="phone">
                                    </div>
                                </td>
                            </tr>
                        </thead>

                    </table>
                </div>
            </div>
            <div class="mb">

                <div class="boxcontent">
                    <div class="alert alert-success">Phương thức thanh toán</div>
                    <table class="table">
                        <thead class=" alert-success">
                            <tr>
                                <td><input type="radio" name="pttt" id="" checked value="1"> Trả Tiền Khi Thanh Toán</td>
                                <td><input type="radio" name="pttt" id="" value="2"> Chuyển Khoản Ngân Hàng</td>
                                <td><input type="radio" name="pttt" id="" value="3"> Thanh Toán Online</td>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
            <div class="mb">
                <div class="alert alert-success">Thông Tin Giỏ Hàng</div>
                <div class="boxcontent">
                    <table class="table">
                        <?php
                        viewcart(0);
                        ?>
                    </table>
                </div>
            </div>
            <div>
                <!-- <input type="submit" value="Đồng Ý Đặt Hàng" name="donydathang"> -->
                <div class="mb-3">
                    <input type="submit" class="form-control btn btn-dark" value="Đồng Ý Đặt Hàng" name="donydathang">
                </div>
            </div>
        </form>
    </div>
</div>