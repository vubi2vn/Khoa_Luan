<?php
include "connect.php";
function update_detail_report($conn,$id_comment)
    {
        try
        {
            $query="update chi_tiet_bao_cao SET tinh_trang_giai_quyet=b'1' WHERE ID_BINH_LUAN=:id";
            $sql=$conn->prepare($query);
            $sql->bindParam(':id',$id_comment);
            $sql->execute();
            return true;
        }
        catch (Exception $e){
            return false;
        }
    }
function getID_comment($conn,$id_report)
{
    $query='select ID_BINH_LUAN from CHI_TIET_BAO_CAO where ID_CHI_TIET="'.$id_report.'"';

    $sql=$conn->prepare($query);
    $comment=null;
    $sql->execute();
    $result=$sql->fetchAll();
    if($result!=null)
    {
        foreach($result as $a)
        {
            return $a['ID_BINH_LUAN'];
        }
    }
}
function update_comment($conn,$id_comment,$hide,$class)
{
    try
    {
        $query="update binh_luan SET PHAN_LOAI_BINH_LUAN=b'".$class."',HIEN_THI_BINH_LUAN=b'".$hide."' WHERE id_binh_luan=".$id_comment;
        $sql=$conn->prepare($query);
        $sql->execute();
        return true;
    }
    catch (Exception $e){
        return false;
    }
}
function select_phone_by_comment($conn,$id_comment)
{
    $query="select id_dien_thoai from bai_viet,binh_luan where binh_luan.id_bai_viet=bai_viet.id_bai_viet and id_binh_luan='$id_comment'";
    $sql=$conn->prepare($query);
    $sql->execute();
    $result=$sql->fetchAll();
    foreach($result as $a)
    {
        return $a["id_dien_thoai"];
    }
}
function count_pos_comment($conn,$id_phone)
{
    $query="select count(*) as coun from binh_luan,bai_viet where binh_luan.id_bai_viet=bai_viet.id_bai_viet and id_dien_thoai='$id_phone' and phan_loai_binh_luan=b'1'";
    $sql=$conn->prepare($query);
    $sql->execute();
    $result=$sql->fetchAll();
    foreach($result as $a)
    {
        return $a["coun"];
    }
}
function count_all_comment($conn,$id_phone)
{
    $query="select count(*) as coun from binh_luan,bai_viet where binh_luan.id_bai_viet=bai_viet.id_bai_viet and id_dien_thoai='$id_phone' ";
    $sql=$conn->prepare($query);
    $sql->execute();
    $result=$sql->fetchAll();
    foreach($result as $a)
    {
        return $a["coun"];
    }
}
function update_phone_score($conn,$id_comment)
{
    try
    {
        $id_phone=select_phone_by_comment($conn,$id_comment);
        $pos=0;
        $all=1;
        if($id_phone!=null&&$id_phone!="")
        {
            $pos=count_pos_comment($conn,$id_phone);
            $all=count_all_comment($conn,$id_phone);
        }
        $result=((float)$pos/(float)$all)*10;
        $query="update `dien_thoai` SET `DIEM_DANH_GIA`=:result WHERE ID_DIEN_THOAI=:id";
        $sql=$conn->prepare($query);
        $sql->bindParam(':result',$result);
        $sql->bindParam(':id',$id_phone);
        $sql->execute();
        return true;
    }
    catch(PDOException $e)
    {
        return false;
    }
}
if(isset($_POST['id_report'])&&isset($_POST['hide'])&&isset($_POST['class']))
{
    $id_report=$_POST['id_report'];
    $hide=$_POST['hide'];
    $class=$_POST['class'];
    $id_comment=getID_comment($conn,$id_report);
    if(update_comment($conn,$id_comment,$hide,$class))
    {
        if(update_detail_report($conn,$id_comment))
        {
            if(update_phone_score($conn,$id_comment))
            {
                echo 'success';
            }
            else
            {
                echo 'error update score';
            }
        }
        else
        {
            echo 'error update detail report';
        }
    }
    else
    {
        echo 'error update comment';
    }
    

}
else
{
    echo 'error post';
}

            


?>