<?php
require 'global.php';
?>

<head>
    <style>
        .a h1 {
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
            display: inline-flex;
            flex-wrap: wrap;
            margin: 20px 50px;
            border: 1px solid #000;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 8px 8px 8px;

        }

        .sp_cungloai:hover {
            background-color: red;
        }

        .sp_cungloai a {
            color: black;
            font-weight: 550;
        }

        .showimg {
            border-radius: 5px;
        }

        .viewcart {
            display: none;
        }
    </style>
</head>
<div class="contents">
    <div class="list-detail">
        <?php extract($onesp); ?>
        <h1><?= $name ?></h1>
        <div class="detail-product">
            <?php
            $img = $imgpath . $img;
            echo '
             <div class="detail-product-img">
                <img src="' . $img . '" width="600px" height="600px" style="margin:50px;" class="detail-product-img-img" href=""alt="...">
            </div>
            <div class="detail-product-content">
                    <h2>T??n : ' . $name . '</h2>
                    <p class="prices">Gi?? : ' . $price . ' VND</p>
                    <p>M?? T??? : ' . $mota . '</p>
                    <p class="prices">Tr???ng Th??i : C??n H??ng</p>
                    <br> <br>
            <form action="index.php?act=addtocart" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="' . $id . '">
                            <input type="hidden" name="name" value="' . $name . '">
                            <input type="hidden" name="img" value="' . $img . '">
                            <input type="hidden" name="price" value="' . $price . '">';
            ?>    
            <?php
             if (isset($_SESSION['user'])) {
                extract($_SESSION['user']);
                        echo '<input class="order btn-submit" type="submit" name="addtocart" value="?????t h??ng">';
             } else{
                echo '<input class="order btn-submit" type="button" name="" value="?????t h??ng"><br>'; 
                echo "<br><h3>B???n ph???i ????ng nh???p ????? th???c hi???n ch???c n??ng n??y !!!</h3> ";
                
             }  
             echo ' </form>';
            ?>
            <!-- <?php
            if (isset($_SESSION['user'])) {
                extract($_SESSION['user']);
                echo '<form action="index.php?act=addtocart" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="' . $id . '">
                <input type="hidden" name="name" value="' . $name . '">
                <input type="hidden" name="img" value="' . $img . '">
                <input type="hidden" name="price" value="' . $price . '">
                <input class="order btn-submit" type="submit" name="addtocart" value="?????t h??ng">
                </form>';
            } else {
                echo "<br><h3>B???n ph???i ????ng nh???p ????? th???c hi???n ch???c n??ng n??y !!!</h3> ";
            }
            ?> -->
        </div>
        <h1 class="a">S???N PH???M C??NG LO???I</h1>
        <br>
        <div class="detail-same-kind">
            <?php
            foreach ($sp_cungloai as $sp_cungloai) {
                extract($sp_cungloai);
                $img = $imgpath . $img;
                $linksp = "index.php?act=ctsanpham&idsp=" . $id;
                echo '
                       <li class="sp_cungloai">
                       <a href="' . $linksp . '"> <img src="' . $img . '" width="80px" height="80px" alt="" class="showimg" > </a><br>
                            <a href="' . $linksp . '">' . $name . '</a>
                        </li>
                    ';
            }
            ?>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script>
            $(document).ready(function() {
                $("#binhluan").load("view/binhluan/binhluanform.php", {
                    idpro: <?= $id ?>
                });
            });
        </script>


    </div>
    <div id="binhluan">
        <h1 class="title">B??NH LU???N</h1>

    </div>
</div>