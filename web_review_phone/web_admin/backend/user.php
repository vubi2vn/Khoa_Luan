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
    function get_total_record_user($conn)
    {
        $query="select count(*) as total from user";
        $sql=$conn->prepare($query);
        $sql->execute();
        $result=$sql->fetchAll();
        foreach($result as $a)
        {
            return $a['total'];
        }
    }
    function get_record_limit_user($conn,$id,$start,$limit)
    {
        $query="select * from user,phan_quyen where user.id_phan_quyen=phan_quyen.id_phan_quyen and id_user!=$id order by id_user asc limit $start,$limit";
        $sql=$conn->prepare($query);
        $sql->execute();
        $result=$sql->fetchAll();
        return $result;
    }
    function check_username($conn,$user_name)
    {
        $query="select * from user where user_name='$user_name'";
        $sql=$conn->prepare($query);
        $sql->execute();
        $result=$sql->fetchAll();
        foreach($result as $a)
        {
            return $a['ID_USER'];
        }
    }
    function insert_user($conn,$username,$password,$id_author)
    {
        try{
            $query="insert into user values (null,:phanquyen,:username,:pass,1)";
            $sql=$conn->prepare($query);
            $sql->bindParam(':phanquyen',$id_author);
            $sql->bindParam(':username',$username);
            $sql->bindParam(':pass',$password);
            $sql->execute();
            return true;
        }
        catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
          }
    }
    function insert_user_info($conn,$username)
    {
        try{
            $id=check_username($conn,$username);
            $query="insert into user_infomation(id_user) values ($id)";
            $sql=$conn->prepare($query);
            $sql->execute();
            return true;
        }
        catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
          }
    }
    function update_access_user($conn,$id,$access,$author)
    {
        try{
            $query="update user set id_phan_quyen='$author', truy_cap=b'$access' where id_user='$id'";
            $sql=$conn->prepare($query);
            $sql->execute();
            return true;
        }
        catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
    }

?>