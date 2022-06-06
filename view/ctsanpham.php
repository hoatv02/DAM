<head>
    <style>
        h1 {
            margin-left: 50px;
        }

        .list-detail {
            border: 1px solid #000;
            padding: 50px;
            margin: 50px 100px;
            border-radius: 10px;
        }

        .detail-product {
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-gap: 50px;
        }

        .detail-product-content {
            margin: 50px;
        }

        .detail-product-content p {
            font-size: 30px;
        }

        .prices {
            color: red;
        }

        #quantity {
            width: 150px;
            border-radius: 5px;
            border: 1px solid #000;
            padding: 5px 10px;
            box-shadow: 1px 1px 1px 1px;
        }

        .btn-submit {
            padding: 10px 20px;
            background-color: red;
            border-radius: 5px;
            border: none;
            box-shadow: 4px 4px 4px;
        }

        .btn-submit:hover {
            background-color: blue;
        }

        .detail-product-img-img {
            box-shadow: 8px 8px 8px;
            border-radius: 10px;
        }
        .sp_cungloai {
            list-style: none;
            margin: 20px 50px;
        }

        .sp_cungloai a {
            color: black;
            font-weight: 550;
        }
    </style>
</head>
<div class="contents">
<div class="list-group">
        <h1 class="title">DANH MỤC</h1>
        <?php
        foreach ($dsdm as $dm) {
            extract($dm);
            $linkdm = "index.php?act=sanpham&iddm=" . $id;
            echo '<a href="' . $linkdm . '" class="list-group-item list-group-item-action">' . $name . '</a>';
        }
        ?>
    </div>
    <div class="list-detail">
        <?php extract($onesp); ?>
        <h1><?= $name ?></h1>
        <div class="detail-product">
            <?php
            $img = $imgpath . $img;
            echo '
             <div class="detail-product-img">
                <img src="' . $img . '" width="500px" height="500px" style="margin:50px;" class="detail-product-img-img" href=""alt="...">
            </div>
            <div class="detail-product-content">
                    <h2>Tên : ' . $name . '</h2>
                    <p class="prices">Giá : ' . $price . ' VND</p>
                    <p>Mô Tả : ' . $mota . '</p>
                    <p class="prices">Trạng Thái : Còn Hàng</p>
            <input type="number" name="number-product" id="quantity" min="0" max="10" placeholder="Số lượng"> <br> <br>
            <input type="submit" class="btn-submit" value="Đặt Hàng">
            </div>
            ';

            ?>
        </div>

        <div class="detail-same-kind">
            <h1>SẢN PHẨM CÙNG LOẠI</h1>
            <?php
            foreach ($sp_cungloai as $sp_cungloai) {
                extract($sp_cungloai);
                $img = $imgpath . $img;
                $linksp = "index.php?act=ctsanpham&idsp=" . $id;
                echo '
                       <li class="sp_cungloai">
                            <img src="' . $img . '" width="80px" alt="">
                            <a href="' . $linksp . '">' . $name . '</a>
                        </li>
                    ';
            }
            ?>
        </div>
        <div class="detail-comment">
            <h1>BÌNH LUẬN</h1>
        </div>
    </div>
 
</div>