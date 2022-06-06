<?php
    function insert_taikhoan($email, $user, $pass)
    {
        $sql = "INSERT INTO `taikhoan`(`user`, `password`, `email`) 
        VALUES ('$user','$pass','$email')";
        pdo_execute($sql);
    }
?>