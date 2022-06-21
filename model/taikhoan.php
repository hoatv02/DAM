<?php
function insert_taikhoan($email, $user, $pass,$vaitro)
{
    $sql = "INSERT INTO `taikhoan`(`user`, `password`, `email`,`vaitro`) 
        VALUES ('$user','$pass','$email','$vaitro')";
    pdo_execute($sql);
}

function check_user($user, $pass)
{
    $sql = "SELECT * FROM taikhoan WHERE user='" . $user . "' AND password='" . $pass . "'";
    $sp = pdo_query_one($sql);
    return $sp;
}
function check_email($email)
{
    $sql = "SELECT * FROM taikhoan WHERE email='" . $email . "'";
    $sp = pdo_query_one($sql);
    return $sp;
}
function  update_taikhoan($id, $user, $email, $phone, $pass, $address)
{
    $sql = "UPDATE `taikhoan` SET `user`='" . $user . "',`password`='" . $pass . "',
    `email`='" . $email . "',`address`='" . $address . "',`phone`='" . $phone . "' WHERE id=" . $id;

    pdo_execute($sql);
}
function loadAll_taikhoan()
{
    $sql = "SELECT * FROM taikhoan ORDER BY id DESC";
    $listtaikhoan = pdo_query($sql);
    return $listtaikhoan;
}
function delete_taikhoan($id)
{
    $sql = "DELETE FROM taikhoan WHERE id =" . $id;
    pdo_execute($sql);
}