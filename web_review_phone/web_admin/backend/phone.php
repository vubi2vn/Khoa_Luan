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
function select_store_havent_link($conn,$id)
{
    $query="select * FROM cua_hang_ban_le WHERE id_cua_hang not in (SELECT id_cua_hang from cung_cap WHERE id_dien_thoai=$id)";
    $sql=$conn->prepare($query);
    $sql->execute();
    $result=$sql->fetchAll();
    return $result;
}
function insert_link_phone($conn,$id_phone,$id_store,$link)
{
    try
    {
        $query="insert into cung_cap values (:id_store,:id_phone,:link,CURDATE())";
        $sql=$conn->prepare($query);
        $sql->bindParam(':id_store',$id_store);
        $sql->bindParam(':id_phone',$id_phone);
        $sql->bindParam(':link',$link);
        $sql->execute();
        return true;
    }
    catch(PDOException $e)
    {
        echo "Error: " . $e->getMessage();
        return false;
    }
}
function delete_link($conn,$id_phone,$id_store)
{
    try
    {
        $query="delete from cung_cap where id_cua_hang=:id_store and id_dien_thoai=:id_phone";
        $sql=$conn->prepare($query);
        $sql->bindParam(':id_store',$id_store);
        $sql->bindParam(':id_phone',$id_phone);
        $sql->execute();
        return true;
    }
    catch(PDOException $e)
    {
        echo "Error: " . $e->getMessage();
        return false;
    }
}
function update_phone($conn,$id,$id_trademark,$name,$price,$img)
{
    try
    {
        $query="update dien_thoai set id_hang_san_xuat=:trademark,ten_dien_thoai=:name, GIA_CA_THI_TRUONG=:price, url_hinh_anh='$img' where id_dien_thoai=:id";
        if($img==null||$img=="")
        {
            $query="update dien_thoai set id_hang_san_xuat=:trademark,ten_dien_thoai=:name, GIA_CA_THI_TRUONG=:price where id_dien_thoai=:id";
        }
        $sql=$conn->prepare($query);
        $sql->bindParam(':trademark',$id_trademark);
        $sql->bindParam(':name',$name);
        $sql->bindParam(':price',$price);
        $sql->bindParam(':id',$id);
        $sql->execute();
        return true;
    }
    catch(PDOException $e)
    {
        echo "Error: " . $e->getMessage();
        return false;
    }
}
function insert_phone($conn,$id_trademark,$name,$price,$img)
{
    try
    {
        $query="insert into dien_thoai values (null,:trademark,:name,:price,null,:img)";
        $sql=$conn->prepare($query);
        $sql->bindParam(':trademark',$id_trademark);
        $sql->bindParam(':name',$name);
        $sql->bindParam(':price',$price);
        $sql->bindParam(':img',$img);
        $sql->execute();
        return true;
    }
    catch(PDOException $e)
    {
        echo "Error: " . $e->getMessage();
        return false;
    }
}
function find_phone($conn,$name)
{
    $query="select * FROM dien_thoai WHERE ten_dien_thoai='$name'";
    $sql=$conn->prepare($query);
    $sql->execute();
    $result=$sql->fetchAll();
    foreach($result as $a)
    {
        return $a["ID_DIEN_THOAI"];
    }
}
function insert_phone_infor($conn,$name)
{
    try
    {
        $id=find_phone($conn,$name);
        $query="insert into cau_hinh_dien_thoai(id_dien_thoai) values (:id)";
        $sql=$conn->prepare($query);
        $sql->bindParam(':id',$id);
        $sql->execute();
        return true;
    }
    catch(PDOException $e)
    {
        echo "Error: " . $e->getMessage();
        return false;
    }
}
function insert_review_for_phone($conn,$name)
{
    try
    {
        $id=find_phone($conn,$name);
        $query="insert into bai_viet(id_bai_viet,id_dien_thoai) values (null,:id)";
        $sql=$conn->prepare($query);
        $sql->bindParam(':id',$id);
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

