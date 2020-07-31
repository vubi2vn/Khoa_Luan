<?php
function get_total_record_comments($conn)
{
    $query="select count(*) as total from binh_luan where id_binh_luan in (select id_binh_luan from chi_tiet_bao_cao) ";
    $sql=$conn->prepare($query);
    $sql->execute();
    $result=$sql->fetchAll();
    foreach($result as $a)
    {
        return $a['total'];
    }
}
function get_record_limit_comments($conn,$start,$limit)
{
    $query="select *,sum(if(TINH_TRANG_GIAI_QUYET!=b'1',1,0)) as coun from binh_luan,bai_viet,dien_thoai,chi_tiet_bao_cao where binh_luan.id_bai_viet=bai_viet.id_bai_viet and bai_viet.id_dien_thoai=dien_thoai.id_dien_thoai and chi_tiet_bao_cao.id_binh_luan=binh_luan.id_binh_luan group by binh_luan.id_binh_luan order by coun limit $start,$limit";
    $sql=$conn->prepare($query);
    $sql->execute();
    $result=$sql->fetchAll();
    return $result;
}
function get_total_record_detail_report($conn,$id)
{
    $query="select count(*) as total from chi_tiet_bao_cao where id_binh_luan='$id' ";
    $sql=$conn->prepare($query);
    $sql->execute();
    $result=$sql->fetchAll();
    foreach($result as $a)
    {
        return $a['total'];
    }
}
function get_record_limit_detail_report($conn,$id,$start,$limit)
{
    $query="select * from chi_tiet_bao_cao,binh_luan,bao_cao_binh_luan,user where user.id_user=chi_tiet_bao_cao.id_user and binh_luan.id_binh_luan=chi_tiet_bao_cao.id_binh_luan and bao_cao_binh_luan.id_bao_cao=chi_tiet_bao_cao.id_bao_cao and binh_luan.id_binh_luan='$id' limit $start,$limit";
    $sql=$conn->prepare($query);
    $sql->execute();
    $result=$sql->fetchAll();
    return $result;
}
function select_detail_comment($conn,$id)
{
    $query="select * from binh_luan,bai_viet,dien_thoai where binh_luan.id_bai_viet=bai_viet.id_bai_viet and bai_viet.id_dien_thoai=dien_thoai.id_dien_thoai and binh_luan.id_binh_luan='$id'";
    $sql=$conn->prepare($query);
    $sql->execute();
    $result=$sql->fetchAll();
    return $result;
}
function update_comment($conn,$id,$class,$hide)
{
    try
    {
        $query="update binh_luan set phan_loai_binh_luan=b'$class',hien_thi_binh_luan=b'$hide' where id_binh_luan=:id";
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
function update_detail_report($conn,$id)
{
    try
    {
        $query="update chi_tiet_bao_cao set tinh_trang_giai_quyet=b'1' where id_binh_luan=:id";
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
        echo "Error: " . $e->getMessage();
        return false;
    }
}
function send_notification_reporter($conn,$id_user,$phone_name,$report_date)
{
    try
    {
        $content ="Chi tiết:<br/> Bài viết về điện thoại: $phone_name,<br/> ngày báo cáo: $report_date";
        $query="insert into chi_tiet_thong_bao values(null,:id_user,1,CURDATE(),0,:content)";
        $sql=$conn->prepare($query);
        $sql->bindParam(':content',$content);
        $sql->bindParam(':id_user',$id_user);
        $sql->execute();
        return true;
    }
    catch(PDOException $e)
    {
        echo "Error: " . $e->getMessage();
        return false;
    }
}
function send_notification_commenter($conn,$id_user,$phone_name,$comment_date,$value)
{
    try
    {
        $content ="Chi tiết:<br/> Bài viết về điện thoại: $phone_name,<br/> ngày bình luận: $comment_date.<br/> Nội dung bình luận: $value<br/>";
        $query="insert into chi_tiet_thong_bao values(null,:id_user,2,CURDATE(),0,:content)";
        $sql=$conn->prepare($query);
        $sql->bindParam(':content',$content);
        $sql->bindParam(':id_user',$id_user);
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