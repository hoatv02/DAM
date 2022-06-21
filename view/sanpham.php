<html>

<head>
    <style>
        .contents .box-title {
            padding: 30px;
        }

        .product {
            list-style: none;
        }

        .product img {
            border-radius: 5px;
            width: 100% !important;
            height: 300px;
        }

        .product {
            border: 1px solid #000;
            border-radius: 10px;
            box-shadow: 2px 2px 2px #333;
            width: 300px;
            padding: 0;
            margin: 0;
            margin-left: 30px;
            padding: 10px;
            margin-bottom: 20px;
            background: rgb(217, 220, 226);

            

        }
        .product a{
            color: #000;
        }
        #list-commons {
            text-align: center;
            color: #000;
            font-weight: none;
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
        }
        .viewcart{
            display: none;
        }
    </style>
</head>

</html>
<!-- <div class="contents">

    <div class="box-title">
        <h1>Sản Phẩm <?= $tendm ?></h1>
    </div>
    <div class="box-content">

        <?php
        $i = 0;
        foreach ($dssp as $sp) {
            extract($sp);
            $linksp = "index.php?act=ctsanpham&idsp=" . $id;
            $hinhAnh = $imgpath . $img;
            if (($i == 2) || ($i == 5) || ($i == 8) || ($i == 11)) {
                $mr = "";
            } else {
                $mr = "mr";
            }
            echo '
               <ul class="ul-product">
                    <li class="product ' . $mr . '">
                        <div class="product_img">
                            <a href="' . $linksp . '"> <img src="' . $hinhAnh . '" alt=""></a>
                        </div>
                        <div class="names">
                            <a href="' . $linksp . '">Tên :' . $name . '</a>
                        </div>

                        <div class="price">' . $price . 'VND</div>
                        <div class="mota">' . $mota . '</div>
                        <div class="order"><a href="' . $linksp . '">Chi tiết</a></div>
                    </li>
               </ul>
                    ';
            $i += 1;
        }
        ?>
    </div>
</div> -->


<content>

    <div class="list-group">
        <h1 class="title">DANH MỤC</h1>
        <div class="search">
            <!-- <form action="index.php?act=sanpham" method="POST" enctype="multipart/form-data">
                <input type="text" name="tk" id="">
                <input type="submit" class="btn btn-primary" name="search" id="search" value="Search">
            </form> -->
            <form action="index.php?act=sanpham" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <input type="text" class="form-control" name="tk">
                </div>
                <input type="submit" class="btn btn-primary" name="search" id="search" value="Tìm kiếm">

            </form>


        </div>
        <?php
        foreach ($dsdm as $dm) {
            extract($dm);
            $linkdm = "index.php?act=sanpham&iddm=" . $id;
            echo '<a href="' . $linkdm . '" class="list-group-item list-group-item-action">' . $name . '</a>';
        }
        ?>
    </div>
    <div class="container">
        <h1 class="title">Sản Phẩm <?= $tendm ?></h1>
        <ul id="list-commons">
            <?php
            $i = 0;
            foreach ($dssp as $sp) {
                extract($sp);
                $linksp = "index.php?act=ctsanpham&idsp=" . $id;
                $hinhAnh = $imgpath . $img;
                if (($i == 2) || ($i == 5) || ($i == 8) || ($i == 11)) {
                    $mr = "";
                } else {
                    $mr = "mr";
                }
                echo '
                    <li class="product ' . $mr . '">
                        <div class="product_img">
                            <a href="' . $linksp . '"> <img src="' . $hinhAnh . '" alt=""></a>
                        </div>
                        <div class="names">
                            <a href="' . $linksp . '">Tên :' . $name . '</a>
                        </div>

                        <div class="price">' . $price . 'VND</div>
                        <div class="mota">' . $mota . '</div>
                        <div class="order"><a href="' . $linksp . '">Chi tiết</a></div>
                    </li>
                    ';
                $i += 1;
            }
            ?>
        </ul>

    </div>
</content>