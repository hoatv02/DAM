<div class="contents">
    
    <div class="box-title"><h1>SẢN PHẨM <strong><?=$tendm?></strong></h1></div>
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
                <li class="product ' . $mr . '">
                        <div class="product_img">
                           <a href="'.$linksp.'"> <img src="' . $hinhAnh . '" alt=""></a>
                        </div>
                        <div class="names">
                            <a href="'.$linksp.'">Tên :' . $name . '</a>
                        </div>

                        <div class="price">' . $price . 'VND</div>
                        <div class="mota">' . $mota . '</div>
                        <div class="order"><a href="'.$linksp.'">Chi tiết</a></div>
                    </li>
                    ';
                $i += 1;
            }
        ?>
    </div>
</div>