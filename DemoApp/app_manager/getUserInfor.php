<?php
include "connect.php";
class user{
    function user($id,$name,$image)
    {
        $this->ID=$id;
        $this->NAME=$name;
        $this->IMAGE=$image;
    }
}
$nguoidung=null;
if(isset($_GET["user_name"]))
{
$user_name=trim($_GET['user_name']);
$query="select * from user_infomation,user where user.id_user=user_infomation.id_user and user_name='$user_name'";
    $sql=$conn->prepare($query);
    $sql->execute();
    $result=$sql->fetchAll();
    if($result!=null)
    {
        foreach($result as $a)
        {
            $nguoidung=new user ($a['ID_USER'],$a['ho_ten_user'],$a['hinh_dai_dien']);
        }
    }
echo json_encode($nguoidung) ;  
}

?>