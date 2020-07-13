<!-- HOME -->
<!-- rank -->
<?php 
    function Top_Dienthoai($conn,$top){       
        $qr ="
        SELECT `dien_thoai`.*
        FROM `dien_thoai` 
            LEFT JOIN `bai_viet` ON `bai_viet`.`ID_DIEN_THOAI` = `dien_thoai`.`ID_DIEN_THOAI`
        WHERE bai_viet.ID_USER IS NOT NULL
        ORDER BY DIEM_DANH_GIA DESC LIMIT $top,1
        ";
        return mysqli_query($conn,$qr);        
    }
?>
<!-- noi bat -->
<?php
    function NoiBat($conn){
        $qr ="
            SELECT `dien_thoai`.*
            FROM `dien_thoai` 
                LEFT JOIN `bai_viet` ON `bai_viet`.`ID_DIEN_THOAI` = `dien_thoai`.`ID_DIEN_THOAI`
            WHERE bai_viet.ID_USER IS NOT NULL
            ORDER BY GIA_CA_THI_TRUONG DESC LIMIT 0,10
        ";
        return mysqli_query($conn,$qr);
    }
?>
<!-- Danh sach dt -->
<?php
    function PhoneList_Count($conn){
        $qr ="
            SELECT COUNT(*) as total FROM `dien_thoai` 
            LEFT JOIN `bai_viet` ON `bai_viet`.`ID_DIEN_THOAI` = `dien_thoai`.`ID_DIEN_THOAI`
            WHERE bai_viet.ID_USER IS NOT NULL
        ";
        $count = mysqli_query($conn,$qr);
        $row = mysqli_fetch_array($count);
        return $row['total'];
    }
?>
<?php
    function PhoneList_HangSX_Count($conn,$Id_HangSX){
        $qr ="
        SELECT COUNT(*) as total FROM `dien_thoai` 
        LEFT JOIN `bai_viet` ON `bai_viet`.`ID_DIEN_THOAI` = `dien_thoai`.`ID_DIEN_THOAI`
            WHERE bai_viet.ID_USER IS NOT NULL && `ID_HANG_SAN_XUAT`=$Id_HangSX
        ";
        $count = mysqli_query($conn,$qr);
        $row = mysqli_fetch_array($count);
        return $row['total'];
    }

    function PhoneList_Gia_Count($conn,$GiaThap,$GiaCao){
        $qr ="
            SELECT COUNT(*) as total 
            FROM `dien_thoai` 
                LEFT JOIN `bai_viet` ON `bai_viet`.`ID_DIEN_THOAI` = `dien_thoai`.`ID_DIEN_THOAI`
            WHERE bai_viet.ID_USER IS NOT NULL && `GIA_CA_THI_TRUONG` BETWEEN $GiaThap and $GiaCao
        ";
        $count = mysqli_query($conn,$qr);
        $row = mysqli_fetch_array($count);
        return $row['total'];
    }
?>
<!-- phan trang -->
<?php
    function PhoneList_PhanTrang($conn, $start, $item_limit){
        $qr ="
            SELECT `dien_thoai`.*
            FROM `dien_thoai` 
                LEFT JOIN `bai_viet` ON `bai_viet`.`ID_DIEN_THOAI` = `dien_thoai`.`ID_DIEN_THOAI`
            WHERE bai_viet.ID_USER IS NOT NULL
            LIMIT $start,$item_limit 
        ";
        return mysqli_query($conn,$qr);
    }
    function PhoneList_HangSX_PhanTrang($conn,$Id_HangSX,$start, $item_limit){
        $qr ="
            SELECT `dien_thoai`.*
            FROM `dien_thoai` 
                LEFT JOIN `bai_viet` ON `bai_viet`.`ID_DIEN_THOAI` = `dien_thoai`.`ID_DIEN_THOAI`
            WHERE bai_viet.ID_USER IS NOT NULL && `ID_HANG_SAN_XUAT`=$Id_HangSX
            LIMIT $start,$item_limit 
        ";
        return mysqli_query($conn,$qr);
    }

    function PhoneList_Gia_PhanTrang($conn,$GiaThap,$GiaCao,$start, $item_limit){
        $qr ="
            SELECT `dien_thoai`.*
            FROM `dien_thoai` 
                LEFT JOIN `bai_viet` ON `bai_viet`.`ID_DIEN_THOAI` = `dien_thoai`.`ID_DIEN_THOAI`
            WHERE bai_viet.ID_USER IS NOT NULL && `GIA_CA_THI_TRUONG` BETWEEN $GiaThap and $GiaCao
            LIMIT $start,$item_limit
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

<!-- tim theo ten dt -->
<?php
    function TimTheoTenDT($conn,$tukhoa){
        $qr ="
            SELECT * FROM `dien_thoai`
            WHERE `TEN_DIEN_THOAI` REGEXP '$tukhoa'
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
    function BinhLuanList($conn,$idBV)
    {
        $qr ="
            SELECT * FROM `binh_luan`,bai_viet 
            WHERE binh_luan.ID_BAI_VIET = bai_viet.ID_BAI_VIET 
            AND bai_viet.ID_BAI_VIET = '$idBV' AND HIEN_THI_BINH_LUAN = '1'
            ORDER BY binh_luan.LUOT_LIKE DESC
        ";
        return mysqli_query($conn,$qr);
    }
    function BinhLuan2($conn,$idBV){
        $qr ="
            SELECT * FROM `binh_luan`,bai_viet 
            WHERE binh_luan.ID_BAI_VIET = bai_viet.ID_BAI_VIET 
            AND bai_viet.ID_BAI_VIET = '$idBV' AND HIEN_THI_BINH_LUAN = '1'
            ORDER BY binh_luan.LUOT_LIKE DESC LIMIT 0,2
        ";
        return mysqli_query($conn,$qr);
    }
    function BinhLuan_IDUser($conn,$ID_USER){
        $qr ="
            SELECT * FROM `binh_luan` where `ID_USER` =$ID_USER
        ";
        return mysqli_query($conn,$qr);
    }    
    //count phân loại bl
    function cmtTieuCuc($conn,$idBV){
        $qr ="
            SELECT * FROM `binh_luan`,bai_viet 
            WHERE binh_luan.ID_BAI_VIET = bai_viet.ID_BAI_VIET 
            AND bai_viet.ID_BAI_VIET = '$idBV' AND HIEN_THI_BINH_LUAN = '1' AND `PHAN_LOAI_BINH_LUAN`= 0
            ORDER BY binh_luan.LUOT_LIKE DESC
        ";
        return mysqli_query($conn,$qr);
    }

    function cmtTichCuc($conn,$idBV){
        $qr ="
            SELECT * FROM `binh_luan`,bai_viet 
            WHERE binh_luan.ID_BAI_VIET = bai_viet.ID_BAI_VIET 
            AND bai_viet.ID_BAI_VIET = '$idBV' AND HIEN_THI_BINH_LUAN = '1' AND `PHAN_LOAI_BINH_LUAN`= 1
            ORDER BY binh_luan.LUOT_LIKE DESC
        ";
        return mysqli_query($conn,$qr);
    }

    function TongCmt($conn,$idBV){
        $TongCmt = BinhLuanList($conn,$idBV);
        $count = mysqli_num_rows($TongCmt);
        return $count;
    }

    function TongTieuCuc($conn,$idBV){
        $TongTieuCuc = cmtTieuCuc($conn,$idBV);
        $count = mysqli_num_rows($TongTieuCuc);
        return $count;
    }
    
    function TongTichCuc($conn,$idBV){
        $TongTichCuc = cmtTichCuc($conn,$idBV);
        $count = mysqli_num_rows($TongTichCuc);
        return $count;
    }
    // thêm bình luận
    function Insert_cmt($conn,$idBV,$ID_USER,$TEN,$NOIDUNG,$PHAN_LOAI){
        $qr ="
            INSERT INTO `binh_luan`(`ID_BAI_VIET`, `ID_USER`, `TEN_NGUOI_BINH_LUAN`, `NOI_DUNG_BINH_LUAN`, `NGAY_BINH_LUAN`, `PHAN_LOAI_BINH_LUAN`) 
            VALUES ('$idBV','$ID_USER','$TEN','$NOIDUNG',CURDATE(),'$PHAN_LOAI')
        ";
        mysqli_query($conn,$qr);
    }
    // user_infomation
    function Get_user_infomation($conn,$ID_USER){
        $qr ="
            SELECT * FROM `user_infomation` WHERE `id_user` = $ID_USER
        ";
        return mysqli_query($conn,$qr);
    }
?>
<!-- tinh diem -->
<?php
    function Update_DiemDanhGia($conn,$idBV){
        $diem = round((TongTichCuc($conn,$idBV)/TongCmt($conn,$idBV))*10, 1); 
        $qr ="
            UPDATE `dien_thoai`,`bai_viet` SET `DIEM_DANH_GIA`= '$diem' 
            WHERE `dien_thoai`.`ID_DIEN_THOAI`= `bai_viet`.`ID_DIEN_THOAI` 
                AND `bai_viet`.ID_BAI_VIET = '$idBV'
        ";
        mysqli_query($conn,$qr);
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
<!-- Dang ky -->
<?php
    function DangkyTK($conn,$username,$password){
        $qr ="
            INSERT INTO `user`(`ID_PHAN_QUYEN`, `USER_NAME`, `PASSWORD`) VALUES ('2','$username','$password')
        ";
        mysqli_query($conn,$qr);
    }

    function Check_Username($conn,$username){
        $qr ="
            SELECT * FROM `user` WHERE `USER_NAME` = '$username'
        ";
        return mysqli_query($conn,$qr);
    }

    function Insert_User_Information($conn,$username){
        $row_users = mysqli_fetch_array(Check_Username($conn,$username));
        $qr ="
            INSERT INTO `user_infomation`(`id_user`) VALUES ('$row_users[ID_USER]')
        ";
        mysqli_query($conn,$qr);
    }
?>