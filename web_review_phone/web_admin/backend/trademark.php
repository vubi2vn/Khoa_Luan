<?php
function get_total_record_trademark($conn)
{
    $query="select count(*) as total from hang_san_xuat";
    $sql=$conn->prepare($query);
    $sql->execute();
    $result=$sql->fetchAll();
    foreach($result as $a)
    {
        return $a['total'];
    }
}
function get_record_limit_trademark($conn,$start,$limit)
{
    $query="select * from hang_san_xuat limit $start,$limit";
    $sql=$conn->prepare($query);
    $sql->execute();
    $result=$sql->fetchAll();
    return $result;
}
function select_phone_of_trademark($conn,$id_trademark)
{
    $query="select * from dien_thoai where id_hang_san_xuat=$id_trademark";
    $sql=$conn->prepare($query);
    $sql->execute();
    $result=$sql->fetchAll();
    return $result;
}
function select_all_trademark($conn)
{
    $query="select * from hang_san_xuat";
    $sql=$conn->prepare($query);
    $sql->execute();
    $result=$sql->fetchAll();
    return $result;
}
function delete_trademark($conn,$id_trademark)
{
    try
    {
        $query="delete from hang_san_xuat where id_hang_san_xuat=:id";
        $sql=$conn->prepare($query);
        $sql->bindParam(':id',$id_trademark);
        $sql->execute();
        return true;
    }
    catch(PDOException $e)
    {
        echo "Error: " . $e->getMessage();
        return false;
    }
}

function insert_trademark($conn,$name,$country,$logo)
{
    try
    {
        $query="insert into hang_san_xuat values (null,:name,:country,:logo)";
        $sql=$conn->prepare($query);
        $sql->bindParam(':name',$name);
        $sql->bindParam(':country',$country);
        $sql->bindParam(':logo',$logo);
        $sql->execute();
        return true;
    }
    catch(PDOException $e)
    {
        echo "Error: " . $e->getMessage();
        return false;
    }
}

function update_trademark($conn,$id,$name,$country,$logo)
{
    try
    {
        $query="update hang_san_xuat set ten_hang_san_xuat=:name, quoc_gia=:country, logo_hang_sx='$logo' where id_hang_san_xuat=:id";
        if($logo=="")
        {
            $query="update hang_san_xuat set ten_hang_san_xuat=:name, quoc_gia=:country where id_hang_san_xuat=:id";
        }
        $sql=$conn->prepare($query);
        $sql->bindParam(':name',$name);
        $sql->bindParam(':country',$country);
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

