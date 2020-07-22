<?php
include "connect.php";

$user_name=$_POST['user_name'];
$password=$_POST['password'];
$md5=md5($password);
$query="select count(*) as total from user where user_name='$user_name' and password='$md5'";
    $sql=$conn->prepare($query);
    $sql->execute();
    $result=$sql->fetchAll();
    foreach($result as $a)
    {
        if($a['total']==1)
        {
            echo "success";
        }
        else
        {
            echo "error";
        }
    }
?>