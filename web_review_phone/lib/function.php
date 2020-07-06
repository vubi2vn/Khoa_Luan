<!-- rank -->
<?php 
    function Top1_Dienthoai($conn){       
        $qr ="
            SELECT * FROM `dien_thoai` ORDER BY GIA_CA_THI_TRUONG DESC LIMIT 0,1
        ";
        return mysqli_query($conn,$qr);        
    }

    function Top2_Dienthoai($conn){       
        $qr ="
            SELECT * FROM `dien_thoai` ORDER BY GIA_CA_THI_TRUONG DESC LIMIT 1,1
        ";
        return mysqli_query($conn,$qr);        
    }

    function Top3_Dienthoai($conn){       
        $qr ="
            SELECT * FROM `dien_thoai` ORDER BY GIA_CA_THI_TRUONG DESC LIMIT 2,1
        ";
        return mysqli_query($conn,$qr);        
    }

    function Top4_Dienthoai($conn){       
        $qr ="
            SELECT * FROM `dien_thoai` ORDER BY GIA_CA_THI_TRUONG DESC LIMIT 3,1
        ";
        return mysqli_query($conn,$qr);        
    }
?>
<!-- noi bat -->
<?php
    function NoiBat($conn){
        $qr ="
            SELECT * FROM `dien_thoai` 
            ORDER BY GIA_CA_THI_TRUONG DESC LIMIT 0,10
        ";
        return mysqli_query($conn,$qr);
    }
?>
<!-- Danh sach dt -->
<?php
    function PhoneList($conn){
        $qr ="
            SELECT * FROM `dien_thoai` 
        ";
        return mysqli_query($conn,$qr);
    }
?>
<!-- phan trang -->
<?php
    function PhoneList_PhanTrang($conn, $start, $limit){
        $qr ="
            SELECT * FROM `dien_thoai` LIMIT $start,$limit 
        ";
        return mysqli_query($conn,$qr);
    }
?>
<!-- ds dien thoai theo dieu kien -->
<?php
    function PhoneList_HangSX($conn,$Id_HangSX){
        $qr ="
        SELECT * FROM `dien_thoai` WHERE `ID_HANG_SAN_XUAT`=$Id_HangSX
        ";
        return mysqli_query($conn,$qr);
    }

    function PhoneList_Gia($conn,$GiaThap,$GiaCao){
        $qr ="
            SELECT * FROM `dien_thoai` WHERE `GIA_CA_THI_TRUONG` BETWEEN $GiaThap and $GiaCao
        ";
        return mysqli_query($conn,$qr);
    }
?>
<!-- tim kiem -->
<?php
    function DanhSachHangSX($conn){
        $qr ="
            SELECT * FROM `hang_san_xuat`
        ";
        return mysqli_query($conn,$qr);
    }


?>
<!-- Chi tiet -->
<?php
    function ChonTheoID($conn,$id){
        $qr ="
            SELECT * FROM `dien_thoai`
            Where `ID_DIEN_THOAI` = $id
        ";
        return mysqli_query($conn,$qr);
    }
    function CuaHangBanLe($conn,$idCH)
    {
        $qr ="
            SELECT * FROM `cua_hang_ban_le`
            Where `ID_CUA_HANG` = $idCH
        ";
        return mysqli_query($conn,$qr);
    }

    function LinkNCC($conn,$idDT,$idCH){
        $qr ="
            SELECT * FROM `cung_cap`
            Where `ID_DIEN_THOAI` = $idDT and `ID_CUA_HANG` = $idCH
        ";
        return mysqli_query($conn,$qr);
    }

    function ChiTietCauHinh($conn,$idDT){
        $qr ="
            SELECT * FROM `cau_hinh_dien_thoai`
            Where `ID_DIEN_THOAI` = $idDT
        ";
        return mysqli_query($conn,$qr);
    }

    function BaiVietTheoIdDT($conn,$idDT){
        $qr ="
            SELECT * FROM `bai_viet`
            Where `ID_DIEN_THOAI` = $idDT
        ";
        return mysqli_query($conn,$qr);
    }

    
    function NDBaiViet($conn,$idBV){
        $qr ="
            SELECT * FROM `noi_dung_bai_viet`
            Where `ID_BAI_VIET` = $idBV

        ";
        return mysqli_query($conn,$qr);
    }
?>
<!-- binh luan -->
<?php
    function BinhLuanList($conn){
        $qr ="
            SELECT * FROM `binh_luan`;
        ";
        return mysqli_query($conn,$qr);
    }

    function BinhLuan2($conn){
        $qr ="
            SELECT * FROM `binh_luan` limit 0,2;
        ";
        return mysqli_query($conn,$qr);
    }
    function BinhLuan_IDUser($conn,$ID_USER){
        $qr ="
            SELECT * FROM `binh_luan`
        ";
        return mysqli_query($conn,$qr);
    }

    
    function TongCmt($conn){
        $qr ="
            SELECT COUNT(*) as tongcmt FROM `binh_luan`
        ";
        $TongCmt = mysqli_query($conn,$qr);
        $row = mysqli_fetch_array($TongCmt);
        return $row['tongcmt'];
    }

    //count phân loại bl
    function TongTieuCuc($conn){
        $qr ="
            SELECT COUNT(*) as TongTieuCuc FROM `binh_luan` WHERE `PHAN_LOAI_BINH_LUAN`=0
        ";
        $TongTieuCuc = mysqli_query($conn,$qr);
        $row = mysqli_fetch_array($TongTieuCuc);
        return $row['TongTieuCuc'];
    }
    
    function TongTichCuc($conn){
        $qr ="
            SELECT COUNT(*) as TongTichCuc FROM `binh_luan` WHERE `PHAN_LOAI_BINH_LUAN`=1
        ";
        
        $TongTichCuc = mysqli_query($conn,$qr);
        $row = mysqli_fetch_array($TongTichCuc);
        return $row['TongTichCuc'];
    }
?>
<!-- header -->
<?php
    function HangSanXuatTop7($conn){
        $qr ="
            SELECT * FROM `hang_san_xuat` LIMIT 0,7
        ";
        return mysqli_query($conn,$qr);
    }
?>

<!-- Login -->
<?php
    function Login($conn,$username,$password){
    $qr ="
        SELECT * FROM `user` WHERE `USER_NAME` = '$username' AND `PASSWORD`='$password'
    ";
    return mysqli_query($conn,$qr);
}
?>