<?php
function insert_sanpham($tensp, $price, $mota, $hinhAnh, $iddm)
{
    $sql = "INSERT INTO `sanpham`(`name`,`price`,`img`,`mota`,`iddm`) VALUES ('$tensp','$price','$mota','$hinhAnh','$iddm')";
    pdo_execute($sql);
}
function delete_sanpham($id)
{
    $sql = "DELETE FROM sanpham WHERE id =" . $id;
    pdo_execute($sql);
}
function loadAll_sanpham($tk = "", $iddm = 0)
{
    $sql = "SELECT * FROM sanpham WHERE 1";
    if ($tk != '') {
        $sql .= " AND name like '%" . $tk . "%'";
    }
    if ($iddm > 0) {
        $sql .= " AND iddm ='" . $iddm . "'";
    }
    $sql .= " ORDER BY id DESC";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function loadAll_sanpham_home()
{
    $sql = "SELECT * FROM sanpham WHERE 1 ORDER BY id DESC LIMIT 0,9";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function loadOne_sanpham($id)
{
    $sql = "SELECT * FROM sanpham WHERE id=" . $id;
    $sp = pdo_query_one($sql);
    return $sp;
}
function load_tendm($iddm){
    if ($iddm > 0) {
        $sql = "SELECT * FROM danhmuc WHERE id=" . $iddm;
        $dm = pdo_query_one($sql);
        extract($dm);
        return $name;
    } else {
        return "";
    }
}

function  update_sanpham($id, $tensp, $giasp, $mota, $iddm)
{
    // if($hinhAnh!=''){/
    $sql = "UPDATE sanpham SET iddm='" . $iddm . "',name='" . $tensp . "',price='" . $giasp . "',mota='" . $mota . "' WHERE id=" . $id;
    // ,img='" . $hinhAnh . "'
    // }else{
    // $sql = "UPDATE sanpham SET iddm='" . $iddm . "',name='" . $tensp . "',price='" . $giasp . "',mota='" . $mota . "' WHERE id='".$id;


    // }
    pdo_execute($sql);
}
function loadAll_sanpham_top3()
{
    $sql = "SELECT * FROM sanpham WHERE 1 ORDER BY luotxem DESC LIMIT 0,3";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function load_sanpham_cungloai($id, $iddm)
{
    $sql = "SELECT * FROM sanpham WHERE iddm=" . $iddm . " AND id <>" . $id;
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
