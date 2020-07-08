<?php
function select_phone_without_news($conn)
{
    $query="select * FROM dien_thoai WHERE id_dien_thoai not in (SELECT id_dien_thoai from bai_viet WHERE id_user=null)";
    $sql=$conn->prepare($query);
    $sql->execute();
    $result=$sql->fetchAll();
    return $result;
}
?>