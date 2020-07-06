<?php
function get_total_record_report($conn)
{
    $query="select count(*) as total from bao_cao_binh_luan";
    $sql=$conn->prepare($query);
    $sql->execute();
    $result=$sql->fetchAll();
    foreach($result as $a)
    {
        return $a['total'];
    }
}
function get_record_limit_report($conn,$start,$limit)
{
    $query="select * from bao_cao_binh_luan limit $start,$limit";
    $sql=$conn->prepare($query);
    $sql->execute();
    $result=$sql->fetchAll();
    return $result;
}
function delete_link_of_report($conn,$id_report)
{
    try
    {
        $query="delete from chi_tiet_bao_cao where id_bao_cao=:id";
        $sql=$conn->prepare($query);
        $sql->bindParam(':id',$id_report);
        $sql->execute();
        return true;
    }
    catch(PDOException $e)
    {
        echo "Error: " . $e->getMessage();
        return false;
    }
}
function delete_report($conn,$id_report)
{
    try
    {
        $query="delete from bao_cao_binh_luan where id_bao_cao=:id";
        $sql=$conn->prepare($query);
        $sql->bindParam(':id',$id_report);
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
