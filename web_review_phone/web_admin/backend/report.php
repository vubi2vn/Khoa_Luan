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
function insert_report($conn,$report,$describe)
{
    try
    {
        $query="insert into bao_cao_binh_luan values (null,:report,:describe)";
        $sql=$conn->prepare($query);
        $sql->bindParam(':report',$report);
        $sql->bindParam(':describe',$describe);
        $sql->execute();
        return true;
    }
    catch(PDOException $e)
    {
        echo "Error: " . $e->getMessage();
        return false;
    }
}

function update_report($conn,$id,$report,$describe)
{
    try
    {
        $query="update bao_cao_binh_luan set loai_bao_cao=:report, mo_ta_bao_cao=:describe where id_bao_cao=:id";
        $sql=$conn->prepare($query);
        $sql->bindParam(':report',$report);
        $sql->bindParam(':describe',$describe);
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
function count_report_havent_resolved($conn)
{
    $query="select count(*) as total from binh_luan WHERE ID_BINH_LUAN in (select ID_BINH_LUAN from chi_tiet_bao_cao WHERE TINH_TRANG_GIAI_QUYET!=1)";
    $sql=$conn->prepare($query);
    $sql->execute();
    $result=$sql->fetchAll();
    foreach($result as $a)
    {
        return $a['total'];
    }
}
?>
