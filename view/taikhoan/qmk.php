<html>

<head>
    <style>
        .contents {
            max-width: 100%;
            text-align: center;
            padding: 100px 500px;
        }

        .box-detail {
            border: 1px solid #000;
            padding: 40px;
            box-shadow: 2px 4px 8px;
            border-radius: 20px;
        }

        .box-title {
            text-shadow: 3px 4px 8px;
        }
    </style>
</head>

</html>
<div class="contents">

    <div class="box-detail">
        <div class="box-title">
            <h1>LẤY LẠI MẬT KHẨU</h1>
        </div>
        <div class="box-content">
            <!-- <form action="index.php?act=qmk" method="post" enctype="multipart/form-data">
                <input type="email" name="email" placeholder="Email"><br>
                <input type="submit" value="Gửi" name="guiemail">
                <input type="reset" value="Nhập lại">
            </form> -->

            <form action="index.php?act=qmk" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <input type="reset" class="btn btn-primary" value="Nhập Lại">
                <input type="submit" class="btn btn-primary" value="Gửi" name="guiemail">
            </form>
            <br>

            <?php
            if (isset($thongbao) && ($thongbao != "")) {
                echo $thongbao;
            }
            ?></h2>
        </div>
    </div>

</div>