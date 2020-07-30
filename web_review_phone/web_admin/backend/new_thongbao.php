<?php
function get_total_record_thongbaos($conn,$id_user)
{
    $query="select count(*) as total from chi_tiet_thong_bao where ID_USER = '$id_user'";
    $sql=$conn->prepare($query);
    $sql->execute();
    $result=$sql->fetchAll();
    foreach($result as $a)
    {
        return $a['total'];
    }
}
function get_record_limit_thongbaos($conn,$id_user,$start,$limit)
{
    $query="select * from chi_tiet_thong_bao where ID_USER = '$id_user' limit $start,$limit";
    $sql=$conn->prepare($query);
    $sql->execute();
    $result=$sql->fetchAll();
    return $result;
}

function thongbao_xemchua($conn,$id_user)
{
    $query="select count(*) as total from chi_tiet_thong_bao where ID_USER = '$id_user' And DA_XEM = 0 ";
    $sql=$conn->prepare($query);
    $sql->execute();
    $result=$sql->fetchAll();
    foreach($result as $a)
    {
        if($a['total']>0)
            return true;
        return false;
    }
}

function update_dadoc($conn,$id_user,$id_thongbao)
{
    try
    {
        $query="update chi_tiet_thong_bao set DA_XEM=1 where ID_USER=:id_user and ID_THONG_BAO=:id_thongbao";
        $sql=$conn->prepare($query);
        $sql->bindParam(':id_user',$id_user);
        $sql->bindParam(':id_thongbao',$id_thongbao);
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