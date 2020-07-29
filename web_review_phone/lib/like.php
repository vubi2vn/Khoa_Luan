<?php
include "dbCon.php"
include "function.php"
if(isset($_POST['idcmt'])&&isset($_POST['iduser']))
{
    if(like_cmt($conn,$_POST['id'],$_POST['iduser']))
    {
        echo 'true';
    }
}
?>