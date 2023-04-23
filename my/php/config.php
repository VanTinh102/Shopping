<?php
    $servername="localhost";
    $username="root";
    $password="";
    $database="manager";

    $mysqli = mysqli_connect($servername,$username,$password,$database);
    if($mysqli){
        echo("đang nhap thanh cong");
    } else {
        echo("đang nhap khong cong");
    }
?>