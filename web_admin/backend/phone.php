<?php
function get_total_record_phone($conn)
{
    $query="select count(*) as total from dien_thoai";
    $sql=$conn->prepare($query);
    $sql->execute();
    $result=$sql->fetchAll();
    foreach($result as $a)
    {
        return $a['total'];
    }
}
function get_record_limit_phone($conn,$start,$limit)
{
    $query="select * from dien_thoai,hang_san_xuat where dien_thoai.id_hang_san_xuat=hang_san_xuat.id_hang_san_xuat limit $start,$limit";
    $sql=$conn->prepare($query);
    $sql->execute();
    $result=$sql->fetchAll();
    return $result;
}
function get_total_record_phone_link($conn,$id_phone)
{
    $query="select count(*) as total from dien_thoai,cung_cap where dien_thoai.id_dien_thoai=cung_cap.id_dien_thoai and 
            dien_thoai.id_dien_thoai='$id_phone' group by dien_thoai.id_dien_thoai";
    $sql=$conn->prepare($query);
    $sql->execute();
    $result=$sql->fetchAll();
    foreach($result as $a)
    {
        return $a['total'];
    }
}
function get_record_limit_phone_link($conn,$id_phone,$start,$limit)
{
    $query="select * from dien_thoai,cung_cap,cua_hang_ban_le where dien_thoai.id_dien_thoai=cung_cap.id_dien_thoai and 
    cung_cap.id_cua_hang = cua_hang_ban_le.id_cua_hang and dien_thoai.id_dien_thoai='$id_phone' limit $start,$limit";
    $sql=$conn->prepare($query);
    $sql->execute();
    $result=$sql->fetchAll();
    return $result;
}
function delete_phone_info($conn,$id_phone)
{
    try
    {
        $query="delete from cau_hinh_dien_thoai where id_dien_thoai=:id";
        $sql=$conn->prepare($query);
        $sql->bindParam(':id',$id_phone);
        $sql->execute();
        return true;
    }
    catch(PDOException $e)
    {
        echo "Error: " . $e->getMessage();
        return false;
    }
}
function delete_link_of_phone($conn,$id_phone)
{
    try
    {
        $query="delete from cung_cap where id_dien_thoai=:id";
        $sql=$conn->prepare($query);
        $sql->bindParam(':id',$id_phone);
        $sql->execute();
        return true;
    }
    catch(PDOException $e)
    {
        echo "Error: " . $e->getMessage();
        return false;
    }
}
function delete_news_of_phone($conn,$id_phone)
{
    try
    {
        $query="update bai_viet set id_dien_thoai=null where id_dien_thoai=:id";
        $sql=$conn->prepare($query);
        $sql->bindParam(':id',$id_phone);
        $sql->execute();
        return true;
    }
    catch(PDOException $e)
    {
        echo "Error: " . $e->getMessage();
        return false;
    }
}
function delete_phone($conn,$id_phone)
{
    try
    {
        $query="delete from dien_thoai where id_dien_thoai=:id";
        $sql=$conn->prepare($query);
        $sql->bindParam(':id',$id_phone);
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