<?php

function viewcart($del)
{
    if (isset($_SESSION['mycart'])) {


        require 'global.php';
        $tong = 0;
        $i = 0;
        if ($del == 1) {
            $xoasp_th = '<th>Thao Tác</th>';
        } else {
            $xoasp_th = '';
        }
        echo '<tr>
                <th>Hình</th>
                <th>Sản Phẩm</th>
                <th>Đơn Giá</th>
                <th>Số Lượng</th>
                <th>Thành Tiền</th>
                ' . $xoasp_th . '
            </tr>';
        foreach ($_SESSION['mycart'] as $cart) {
            $img = $imgpath . $cart[2];
            $tongtien = $cart[3] * $cart[4];
            $tong = $tong + $tongtien;

            if ($del == 1) {
                $xoasp_th = '<th>Thao Tác</th>';
                $xoasp_td = '<td><a href="index.php?act=delcart&idcart=' . $i . '"><input type="button" value="Xóa"></a></td>';
            } else {
                $xoasp_th = '';
                $xoasp_td = '';
            }
            echo '
            
            <tr >
                <td><img src="' . $img . '" height="80px" width="80px" alt=""></td>
                <td>' . $cart[1] . '</td>
                <td>' . $cart[3] . '</td>
                <td>' . $cart[4] . '</td>
                <td>' . $tongtien . 'VNĐ</td>
                ' . $xoasp_td . '
            </tr>
                ';
            $i += 1;
        }
        echo '
            <tr>
                <th colspan="4">Tổng đơn hàng</th>
                <th>' . $tong . 'VNĐ</th>
                <th></th>
            </tr>

        ';
    } else {
        echo '<tr>
                <th>Hình</th>
                <th>Sản Phẩm</th>
                <th>Đơn Giá</th>
                <th>Số Lượng</th>
                <th>Thành Tiền</th>
            </tr>';
            
        echo 'Xóa thành công';
    }
}




function bill_ctiet($listbill)
{
    require 'global.php';
    $tong = 0;
    $i = 0;
    echo '<tr>
                <th>Hình</th>
                <th>Sản Phẩm</th>
                <th>Đơn Giá</th>
                <th>Số Lượng</th>
                <th>Thành Tiền</th>
            </tr>';
    foreach ($listbill as $cart) {
        $img = $imgpath . $cart['img'];
        $tong += $cart['thanhtien'];
        echo '
            
            <tr >
                <td><img src="' . $img . '" height="40px" width="40px" alt=""></td>
                <td>' . $cart['name'] . '</td>
                <td>' . $cart['price'] . '</td>
                <td>' . $cart['soluong'] . '</td>
                <td>' . $cart['thanhtien'] . 'VNĐ</td>
            </tr>
                ';
        $i += 1;
    }
    echo '
            <tr>
                <th colspan="4">Tổng đơn hàng</th>
                <th>' . $tong . 'VNĐ</th>
            </tr>

        ';
}





function tongdonhang()
{
    $tong = 0;
    foreach ($_SESSION['mycart'] as $cart) {
        $tongtien = $cart[3] * $cart[4];
        $tong = $tong + $tongtien;
    }
    return $tong;
}
function insert_bill($name, $email, $address, $phone, $pttt, $ngaydathang, $tongdonhang)
{
    $sql = "INSERT INTO bill (bill_name,bill_email,bill_address,bill_phone,bill_pttt,bill_ngaydathang,total) 
    VALUES ('$name','$email','$address','$phone','$pttt','$ngaydathang','$tongdonhang')";
    return pdo_execute_lastInsertId($sql);
}
function insert_cart($iduser, $idpro, $img, $name, $price, $soluong, $thanhtien, $id_bill)
{
    $sql = "INSERT INTO bill (iduser,idpro,img,name,price,soluong,thanhtien,id_bill) 
    VALUES ('$iduser','$idpro','$img','$name','$price','$soluong','$thanhtien','$id_bill')";
    return pdo_execute($sql);
}

function loadone_bill($id)
{
    $sql = "SELECT * FROM bill WHERE id=" . $id;
    $bill = pdo_query_one($sql);
    return $bill;
}

function loadall_cart($id_bill)
{
    $sql = "SELECT * FROM cart WHERE id_bill=" . $id_bill;
    $bill = pdo_query($sql);
    return $bill;
}
function loadall_thongke()
{
    $sql = "SELECT danhmuc.id AS madm, danhmuc.name AS tendm, COUNT(sanpham.id) AS COUNTSP, MIN(sanpham.price) AS MINPRICE, MAX(sanpham.price) AS MAXPRICE, AVG(sanpham.price) AS AVGPRICE";
    $sql .= " FROM sanpham left JOIN danhmuc ON danhmuc.id = sanpham.iddm";
    $sql .= " GROUP BY danhmuc.id ORDER BY danhmuc.id DESC";
    $listtk = pdo_query($sql);
    return $listtk;
}
