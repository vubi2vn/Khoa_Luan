<?php
function select_phone_without_news($conn)
{
    $query="select * FROM dien_thoai WHERE id_dien_thoai in (SELECT id_dien_thoai from bai_viet WHERE id_user is null)";
    $sql=$conn->prepare($query);
    $sql->execute();
    $result=$sql->fetchAll();
    return $result;
}
function update_news($conn,$id_phone,$id_user,$title,$content,$name_author)
{
    try
    {
        $query="update bai_viet set id_user=:id_user, title=:title, noi_dung_bai_viet=:content, ten_tac_gia=:name, ngay_dang_bai_viet=CURDATE() where id_dien_thoai=:id_phone";
        $sql=$conn->prepare($query);
        $sql->bindParam(':id_phone',$id_phone);
        $sql->bindParam(':id_user',$id_user);
        $sql->bindParam(':title',$title);
        $sql->bindParam(':content',$content);
        $sql->bindParam(':name',$name_author);
        $sql->execute();
        return true;
    }
    catch(PDOException $e)
    {
        echo "Error: " . $e->getMessage();
        return false;
    }
}
function select_phone_by_news_id($conn,$id_news)
{
    $query="select * FROM dien_thoai WHERE id_dien_thoai in (select id_dien_thoai from bai_viet where id_bai_viet='$id_news')";
    $sql=$conn->prepare($query);
    $sql->execute();
    $result=$sql->fetchAll();
    return $result;
}
function get_total_record_news($conn,$id_user)
{
    $query="select count(*) as total from bai_viet where id_user='$id_user'";
    $sql=$conn->prepare($query);
    $sql->execute();
    $result=$sql->fetchAll();
    foreach($result as $a)
    {
        return $a['total'];
    }
}
function get_record_limit_news($conn,$id_user,$start,$limit)
{
    $query="select * from bai_viet,dien_thoai where bai_viet.id_dien_thoai=dien_thoai.id_dien_thoai and id_user='$id_user' limit $start,$limit";
    $sql=$conn->prepare($query);
    $sql->execute();
    $result=$sql->fetchAll();
    return $result;
}
function select_news($conn,$id_news)
{
    $query="select * from bai_viet where id_bai_viet='$id_news'";
    $sql=$conn->prepare($query);
    $sql->execute();
    $result=$sql->fetchAll();
    return $result;
}
?>