<html>
    <head>
        <style>
            .viewcart{
                display: none;
            }
        </style>
    </head>
</html>
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
        <h1 class="title">Top 3 sản phẩm yêu thích</h1>
        <ul id="list-common">
            <?php
            foreach ($dstop3 as $dstop3s) {
                extract($dstop3s);
                $linksp = "index.php?act=ctsanpham&idsp=" . $id;
                $img = $imgpath . $img;
                echo '<li class="item">
                    <div class="circle">
                    <img src="' . $img . '" alt="">
                    </div> <br>
                    <a href="' . $linksp . '" class="name">' . $name . '</a>
                    <p class="intro">' . $mota . '
                    </p>
                    <a class="order" href="' . $linksp . '">Chi tiết</a>
                </li>';
            }
            ?>
        </ul>

    </div>
    <div class="container-fluid">
        <h1 class="title">Sản Phẩm Của Chúng Tôi</h1>
        <ul id="list-products">
            <?php
            $i = 0;
            foreach ($spNew as $sp) {
                extract($sp);
                $linksp = "index.php?act=ctsanpham&idsp=" . $id;
                $hinhAnh = $imgpath . $img;
                if (($i == 2) || ($i == 5) || ($i == 8)) {
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
                        <form action="index.php?act=addtocart" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="' . $id . '">
                            <input type="hidden" name="name" value="' . $name . '">
                            <input type="hidden" name="img" value="' . $img . '">
                            <input type="hidden" name="price" value="' . $price . '">
                            
                            <input class="order" type="submit" name="addtocart" value="Thêm vào giỏ hàng">

                        </form>
                    </li>
                    ';
                $i += 1;
            }
            ?>
        </ul>
    </div>
</content>