<?php
    $connect = mysqli_connect('localhost','root','','xshop');
    if(isset($connect)){
        echo "Connecting to";
    }else{
        echo "No connection";
    }

?>