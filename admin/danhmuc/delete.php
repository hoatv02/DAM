<?php
    $connect = mysqli_connect("localhost","root","","xshop");
    $id = (int)$_GET['act'];
    $sql = "DELETE FROM danhmuc WHERE `id` = '$id'";
    $result = mysqli_query($connect,$sql);
?>