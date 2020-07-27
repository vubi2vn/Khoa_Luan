<?php
include "connect.php";
function check_password($conn,$user_name,$password)
    {
        $query="Select count(*) as co FROM user where user_name='$user_name' and `PASSWORD`='$password'";
        $sql=$conn->prepare($query);
        $sql->execute();
        $result=$sql->fetchAll();
        foreach($result as $a)
        {
            if((int)$a['co']>0)
            {
                return true;
            }
            else
            {
                return false;
            }
            
        }
    }
if(isset($_POST['user_name'])&&isset($_POST['user_name'])&&isset($_POST['user_name']))
{
    $user_name=$_POST['user_name'];
    $password=$_POST['new_pass'];
    $oldpassword=$_POST['old_pass'];
    $md=md5($password);
    $old=md5($oldpassword);

    if(!check_password($conn,$user_name,$old))
    {
        echo "wrongpass";
    }
    else
    {
        try
        {
            $query="update `user` SET `PASSWORD`=:pw WHERE `USER_NAME`=:username";
            $sql=$conn->prepare($query);
            $sql->bindParam(':username',$user_name);
            $sql->bindParam(':pw',$md);
            $sql->execute();
            echo 'success';
        }
        catch (Exception $e){
            echo $e;
        }

    }
}
else
{
    echo 'error post';
}

            


?>