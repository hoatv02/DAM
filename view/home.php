<content>
    <div class="search">
        <form action="index.php?act=sanpham" method="POST" enctype="multipart/form-data">
            <input type="text" name="tk" id="">
            <input type="submit" name="search" id="search" value="Search">
        </form>
    </div>
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
            <!-- <li class="item">
                <div class="circle">
                    <img src="https://i.pinimg.com/736x/f1/b4/70/f1b47063babcec636e8261a3e365436d--pokemon-pokemon-pokemon-stuff.jpg" alt="">

                </div>
                <div class="name">Bánh Kem</div>
                <p class="intro">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti corporis
                </p>
                <button class="order">Đặt Mua</button>
            </li>
            <li class="item">
                <div class="circle">
                    <img src="https://wall.vn/wp-content/uploads/2019/11/hinh-nen-pokemon-24.jpg" alt="">

                </div>
                <div class="name">Bánh Kem</div>
                <p class="intro">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti corporis
                </p>
                <button class="order">Đặt Mua</button>
            </li>
            <li class="item">
                <div class="circle">
                    <img src="http://anhdepbonphuong.com/wp-content/uploads/2016/08/hinh-anh-pokemon-tien-hoa-mega-huyen-thoai-2.jpg" alt="">
                </div>
                <div class="name">Bánh Kem</div>
                <p class="intro">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti corporis
                </p>
                <button class="order">Đặt Mua</button>
            </li> -->
        </ul>

    </div>
    <div class="container">
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
                        <div class="order"><a href="' . $linksp . '">Chi tiết</a></div>
                    </li>
                    ';
                $i += 1;
            }
            ?>
        </ul>
    </div>
</content>