<?php
    function get_user_info($conn,$id)
    {
        $r=[null,null,null,null,null];
        $query="Select * FROM user_infomation where id_user='$id'";
        $sql=$conn->prepare($query);
        $sql->execute();
        $result=$sql->fetchAll();
        if($sql->rowcount()==1)
        {
            foreach($result as $a)
            {
                $r[0]=$a['ho_ten_user'];
                $r[1]=$a['ngay_sinh_user'];
                $r[2]=$a['gioi_tinh_user'];
                $r[3]=$a['so_dien_thoai_user'];
                $r[4]=$a['hinh_dai_dien'];
            }
        }
        return $r;
    }
    function update_user_info($conn,$id,$name,$birth,$sex,$phone)
    {
        try{
            $query="update user_infomation SET ho_ten_user =:name , ngay_sinh_user = :birth, gioi_tinh_user = b'$sex', so_dien_thoai_user = :phone  WHERE user_infomation.id_user = :id";
            $sql=$conn->prepare($query);
            $sql->bindParam(':name',$name);
            $sql->bindParam(':birth',$birth);
            $sql->bindParam(':phone',$phone);
            $sql->bindParam(':id',$id);
            $sql->execute();
            return true;
        }
        catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
          }
    }
    function update_user_avatar($conn,$id,$url)
    {
        try{
            $query="update user_infomation SET hinh_dai_dien = :url  WHERE user_infomation.id_user = :id";
            $sql=$conn->prepare($query);
            $sql->bindParam(':url',$url);
            $sql->bindParam(':id',$id);
            $sql->execute();
            return true;
        }
        catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
          }
        
        
    }
    function check_password($conn,$user_name,$password)
    {
        $query="Select count(*) as co FROM user where user_name='$user_name' and `PASSWORD`='$password'";
        $sql=$conn->prepare($query);
        $sql->execute();
        $result=$sql->fetchAll();
        foreach($result as $a)
        {
            if($a['co']>0)
            {
                return true;
            }
            else
            {
                return false;
            }
            
        }
    }
    function change_password($conn,$user_name,$password)
    {
        try{
            $query="update `user` SET `PASSWORD`=:pw WHERE `USER_NAME`=:username";
            $sql=$conn->prepare($query);
            $sql->bindParam(':username',$user_name);
            $sql->bindParam(':pw',$password);
            $sql->execute();
            return true;
        }
        catch(PDOException $e)
        {
            echo "Error: " . $e->getMessage();
            return false;
        }
    }
?>