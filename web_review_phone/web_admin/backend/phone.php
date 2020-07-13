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
function delete_likes_of_comment($conn,$id_comments)
{
    try
    {
        $query="delete from lich_su_like where id_binh_luan=:id";
        $sql=$conn->prepare($query);
        $sql->bindParam(':id',$id_comments);
        $sql->execute();
        return true;
    }
    catch(PDOException $e)
    {
        echo "Error: " . $e->getMessage();
        return false;
    }
}
function delete_reports_of_comment($conn,$id_comments)
{
    try
    {
        $query="delete from chi_tiet_bao_cao where id_binh_luan=:id";
        $sql=$conn->prepare($query);
        $sql->bindParam(':id',$id_comments);
        $sql->execute();
        return true;
    }
    catch(PDOException $e)
    {
        echo "Error: " . $e->getMessage();
        return false;
    }
}
function select_news_of_phone($conn,$id_phone)
{
    $query="select * FROM bai_viet WHERE id_dien_thoai='$id_phone' ";
    $sql=$conn->prepare($query);
    $sql->execute();
    $result=$sql->fetchAll();
    foreach($result as $a)
    {
        return $a["ID_BAI_VIET"];
    }
}
function select_comments_of_news($conn,$id_news)
{
    $query="select * FROM binh_luan WHERE id_bai_viet='$id_news' ";
    $sql=$conn->prepare($query);
    $sql->execute();
    $result=$sql->fetchAll();
    return $result;
}
function delete_comments_of_news($conn,$id_news)
{
    try
    {
        $query="delete from binh_luan where id_bai_viet=:id";
        $sql=$conn->prepare($query);
        $sql->bindParam(':id',$id_news);
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
        $id_news=select_news_of_phone($conn,$id_phone);
        if($id_news!=null)
        {
            $comments=select_comments_of_news($conn,$id_news);
            if($comments!=null)
            {
                foreach($comments as $c)
                {
                    delete_reports_of_comment($conn,$c["ID_BINH_LUAN"]);
                    delete_likes_of_comment($conn,$c["ID_BINH_LUAN"]);
                }
            }
            delete_comments_of_news($conn,$id_news);
        }
        $query="delete from bai_viet where id_dien_thoai=:id";
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
function select_phone_detail($conn,$id)
{
    $query="select * FROM cau_hinh_dien_thoai WHERE id_dien_thoai='$id'";
    $sql=$conn->prepare($query);
    $sql->execute();
    $result=$sql->fetchAll();
    foreach($result as $a)
    {
        return $a;
    }
}
function update_phone_info($conn,$id,$info)
{
    try
    {
        $query="update `cau_hinh_dien_thoai` SET `DO_PHAN_GIAI_MAN_HINH`=:dpg,`CONG_NGHE_MAN_HINH`=:cnmh,`KICH_THUOC_MAN_HINH`=:ktmh,`DO_PHAN_GIAI_CAMERA_TRUOC`=:camtrc,`DO_PHAN_GIAI_CAMERA_SAU`=:camsau,`QUAY_PHIM`=:quayphim,
        `CHIPSET`=:cpu,`TOC_DO_CPU`=:tocdo,`CHIP_DO_HOA_GPU`=:gpu,`RAM`=:ram,`ROM`=:rom,`THE_NHO_NGOAI`=:thenho,`CHAT_LIEU`=:chatlieu,`KICH_THUOC_DIEN_THOAI`=:ktdt,`TRONG_LUONG_DIEN_THOAI`=:trongluong,`DUNG_LUONG_PIN`=:dungluong,`LOAI_PIN`=:loaipin,`CONG_NGHE_PIN`=:cnpin,`SIM`=:sim,`WIFI`=:wifi,`BLUETOOTH`=:bluetooth,`CONG_KET_NOI_SAC`=:congsac,`JACK_TAI_NGHE`=:tainghe WHERE `ID_DIEN_THOAI`=:id";
        $sql=$conn->prepare($query);
        $sql->bindParam(':id',$id);
        $sql->bindParam(':dpg',$info["DO_PHAN_GIAI_MAN_HINH"]);
        $sql->bindParam(':cnmh',$info["CONG_NGHE_MAN_HINH"]);
        $sql->bindParam(':ktmh',$info["KICH_THUOC_MAN_HINH"]);
        $sql->bindParam(':camtrc',$info["DO_PHAN_GIAI_CAMERA_TRUOC"]);
        $sql->bindParam(':camsau',$info["DO_PHAN_GIAI_CAMERA_SAU"]);
        $sql->bindParam(':quayphim',$info["QUAY_PHIM"]);
        $sql->bindParam(':cpu',$info["CHIPSET"]);
        $sql->bindParam(':tocdo',$info["TOC_DO_CPU"]);
        $sql->bindParam(':gpu',$info["CHIP_DO_HOA_GPU"]);
        $sql->bindParam(':ram',$info["RAM"]);
        $sql->bindParam(':rom',$info["ROM"]);
        $sql->bindParam(':thenho',$info["THE_NHO_NGOAI"]);
        $sql->bindParam(':chatlieu',$info["CHAT_LIEU"]);
        $sql->bindParam(':ktdt',$info["KICH_THUOC_DIEN_THOAI"]);
        $sql->bindParam(':trongluong',$info["TRONG_LUONG_DIEN_THOAI"]);
        $sql->bindParam(':dungluong',$info["DUNG_LUONG_PIN"]);
        $sql->bindParam(':loaipin',$info["LOAI_PIN"]);
        $sql->bindParam(':cnpin',$info["CONG_NGHE_PIN"]);
        $sql->bindParam(':sim',$info["SIM"]);
        $sql->bindParam(':wifi',$info["WIFI"]);
        $sql->bindParam(':bluetooth',$info["BLUETOOTH"]);
        $sql->bindParam(':congsac',$info["CONG_KET_NOI_SAC"]);
        $sql->bindParam(':tainghe',$info["JACK_TAI_NGHE"]);
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

