<?php
    try
    {
        $options = array(
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION );
        $conn= new PDO("mysql:host=localhost;dbname=dien_thoai",'root','',$options);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e){
        echo "<script type='text/javascript'>alert('Kết nối gặp sự cố!');</script>";

    }
?>