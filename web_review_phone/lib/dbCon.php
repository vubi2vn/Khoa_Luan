<?php 
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $databasename = "dien_thoai";
    $conn = mysqli_connect($hostname,$username,$password,$databasename);
    //mysqli_set_charset($conn, "utf8");
    mysqli_query($conn, "SET NAMES UTF8");
?>