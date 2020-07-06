<?php
function get_total_record_store($conn)
{
    $query="select count(*) as total from cua_hang_ban_le";
    $sql=$conn->prepare($query);
    $sql->execute();
    $result=$sql->fetchAll();
    foreach($result as $a)
    {
        return $a['total'];
    }
}
function get_record_limit_store($conn,$start,$limit)
{
    $query="select * from cua_hang_ban_le limit $start,$limit";
    $sql=$conn->prepare($query);
    $sql->execute();
    $result=$sql->fetchAll();
    return $result;
}
function delete_link_of_store($conn,$id_store)
{
    try
    {
        $query="delete from cung_cap where id_cua_hang=:id";
        $sql=$conn->prepare($query);
        $sql->bindParam(':id',$id_store);
        $sql->execute();
        return true;
    }
    catch(PDOException $e)
    {
        echo "Error: " . $e->getMessage();
        return false;
    }
}
function delete_store($conn,$id_store)
{
    try
    {
        $query="delete from cua_hang_ban_le where id_cua_hang=:id";
        $sql=$conn->prepare($query);
        $sql->bindParam(':id',$id_store);
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