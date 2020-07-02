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
?>
