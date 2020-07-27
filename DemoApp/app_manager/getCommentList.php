<?php
include "connect.php";
class comment{
    function comment($id,$date_comment,$date_report,$status,$phone)
    {
        $this->ID=$id;
        $this->DATE_COMMENT=$date_comment;
        $this->DATE_REPORT=$date_report;
        $this->STATUS=$status;
        $this->PHONE=$phone;
    }
}
$condition=$_GET['condition'];
$check=$_GET['check'];
$mang=[];
$query='select ID_CHI_TIET,NGAY_BINH_LUAN,NGAY_BAO_CAO,TINH_TRANG_GIAI_QUYET,TEN_DIEN_THOAI from binh_luan,chi_tiet_bao_cao,dien_thoai,bai_viet WHERE chi_tiet_bao_cao.ID_BINH_LUAN=binh_luan.ID_BINH_LUAN and binh_luan.ID_BAI_VIET=bai_viet.ID_BAI_VIET and dien_thoai.ID_DIEN_THOAI=bai_viet.ID_DIEN_THOAI and (chi_tiet_bao_cao.id_user LIKE "%'.$condition.'%" or binh_luan.ID_USER LIKE "%'.$condition.'%" OR TEN_NGUOI_BINH_LUAN LIKE "%'.$condition.'%" OR binh_luan.ID_BINH_LUAN LIKE "%'.$condition.'%") ORDER BY TINH_TRANG_GIAI_QUYET ASC';
if($check==0)
{
    $query='select ID_CHI_TIET,NGAY_BINH_LUAN,NGAY_BAO_CAO,TINH_TRANG_GIAI_QUYET,TEN_DIEN_THOAI from binh_luan,chi_tiet_bao_cao,dien_thoai,bai_viet WHERE chi_tiet_bao_cao.ID_BINH_LUAN=binh_luan.ID_BINH_LUAN and binh_luan.ID_BAI_VIET=bai_viet.ID_BAI_VIET and dien_thoai.ID_DIEN_THOAI=bai_viet.ID_DIEN_THOAI and TINH_TRANG_GIAI_QUYET= 0 and(chi_tiet_bao_cao.id_user LIKE "%'.$condition.'%" or binh_luan.ID_USER LIKE "%'.$condition.'%" OR TEN_NGUOI_BINH_LUAN LIKE "%'.$condition.'%" OR binh_luan.ID_BINH_LUAN LIKE "%'.$condition.'%") ORDER BY TINH_TRANG_GIAI_QUYET ASC';
}
if($check==1)
{
    $query='select ID_CHI_TIET,NGAY_BINH_LUAN,NGAY_BAO_CAO,TINH_TRANG_GIAI_QUYET,TEN_DIEN_THOAI from binh_luan,chi_tiet_bao_cao,dien_thoai,bai_viet WHERE chi_tiet_bao_cao.ID_BINH_LUAN=binh_luan.ID_BINH_LUAN and binh_luan.ID_BAI_VIET=bai_viet.ID_BAI_VIET and dien_thoai.ID_DIEN_THOAI=bai_viet.ID_DIEN_THOAI and TINH_TRANG_GIAI_QUYET= 1 and(chi_tiet_bao_cao.id_user LIKE "%'.$condition.'%" or binh_luan.ID_USER LIKE "%'.$condition.'%" OR TEN_NGUOI_BINH_LUAN LIKE "%'.$condition.'%" OR binh_luan.ID_BINH_LUAN LIKE "%'.$condition.'%") ORDER BY TINH_TRANG_GIAI_QUYET ASC';
}
$sql=$conn->prepare($query);
$sql->execute();
$result=$sql->fetchAll();
if($result!=null)
{
    foreach($result as $a)
    {
        $mang[]=new comment($a['ID_CHI_TIET'],date_format(date_create($a['NGAY_BINH_LUAN']),"d-m-Y"),date_format(date_create($a['NGAY_BAO_CAO']),"d-m-Y"),$a['TINH_TRANG_GIAI_QUYET'],$a['TEN_DIEN_THOAI']);
    }
}
echo json_encode($mang) ;  
?>