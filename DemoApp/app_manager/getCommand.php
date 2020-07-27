<?php
include "connect.php";
class comment{
    function comment($name,$content,$report_type,$date_comment,$date_report,$phone,$id,$hide,$class,$status)
    {
        $this->COMMENT_NAME=$name;
        $this->COMMENT_CONTENT=$content;
        $this->REPORT_TYPE=$report_type;
        $this->DATE_COMMENT=$date_comment;
        $this->DATE_REPORT=$date_report;
        $this->PHONE=$phone;
        $this->ID_REPORT_USER=$id;
        $this->HIDE=$hide;
        $this->CLASS=$class;
        $this->STATUS=$status;
        
    }
}
$id=$_GET['ID'];
$query='select TEN_NGUOI_BINH_LUAN,NOI_DUNG_BINH_LUAN,LOAI_BAO_CAO,NGAY_BINH_LUAN,NGAY_BAO_CAO,TEN_DIEN_THOAI,chi_tiet_bao_cao.ID_USER,HIEN_THI_BINH_LUAN,PHAN_LOAI_BINH_LUAN,TINH_TRANG_GIAI_QUYET
from binh_luan,bao_cao_binh_luan,chi_tiet_bao_cao,bai_viet,dien_thoai
WHERE binh_luan.ID_BINH_LUAN=chi_tiet_bao_cao.ID_BINH_LUAN and bao_cao_binh_luan.ID_BAO_CAO=chi_tiet_bao_cao.ID_BAO_CAO and binh_luan.ID_BAI_VIET=bai_viet.ID_BAI_VIET and bai_viet.ID_DIEN_THOAI=dien_thoai.ID_DIEN_THOAI and ID_CHI_TIET="'.$id.'"';

$sql=$conn->prepare($query);
$comment=null;
$sql->execute();
$result=$sql->fetchAll();
if($result!=null)
{
    foreach($result as $a)
    {
        $comment=new comment($a['TEN_NGUOI_BINH_LUAN'],
        $a['NOI_DUNG_BINH_LUAN'],
        $a['LOAI_BAO_CAO'],
        date_format(date_create($a['NGAY_BINH_LUAN']),"d-m-Y"),
        date_format(date_create($a['NGAY_BAO_CAO']),"d-m-Y"),$a['TEN_DIEN_THOAI'],$a['ID_USER'],
        $a['HIEN_THI_BINH_LUAN'],$a['PHAN_LOAI_BINH_LUAN'],$a['TINH_TRANG_GIAI_QUYET']);
    }
}
echo json_encode($comment) ;  
?>