<?php
    if (isset($_GET['Id_HangSX'])){
        $Id_HangSX = $_GET["Id_HangSX"];
        $PhoneList = PhoneList_HangSX($conn,$Id_HangSX);
    }
    else if (isset($_GET["GiaThap"])&&isset($_GET["GiaCao"])){
        $GiaThap = $_GET["GiaThap"];
        $GiaCao = $_GET["GiaCao"];
        $PhoneList = PhoneList_Gia($conn,$GiaThap,$GiaCao);
    }
    else{
        $PhoneList = PhoneList($conn);
    }
?>



<div class="navigat">
    Danh sách điện thoại
</div>
<div class="timkiem">
    <div class="timkiem-logo clr">
        <?php
        $DanhSachHangSX = DanhSachHangSX($conn);
        while($row_DanhSachHangSX = mysqli_fetch_array($DanhSachHangSX)) {
        ?>
            <a class = "" href="?p=danhsachdt&&Id_HangSX=<?php echo $row_DanhSachHangSX['ID_HANG_SAN_XUAT'];?>">
                <img alt="logo cua hang sx" class="" src="lib/images/<?php echo $row_DanhSachHangSX['LOGO_HANG_SX'];?>">
            </a>
        <?php } ?>
    </div>
    <div class="timkiem-gia clr">
        Chọn mức giá: 
        <a href="?p=danhsachdt&&GiaThap=0&&GiaCao=2000000">Dưới 2 triệu</a>
        <a href="?p=danhsachdt&&GiaThap=2000000&&GiaCao=4000000">Từ 2-4 triệu</a>
        <a href="?p=danhsachdt&&GiaThap=4000000&&GiaCao=7000000">Từ 4-7 triệu</a>
        <a href="?p=danhsachdt&&GiaThap=7000000&&GiaCao=13000000">Từ 7-13 triệu</a>
        <a href="?p=danhsachdt&&GiaThap=13000000&&GiaCao=99000000">Trên 13 triệu</a>
    </div>
</div>
<div class="phone-list">
    
    <?php
        if(mysqli_num_rows($PhoneList)==0)
        {
            echo "Không có sản phẩm bạn muốn tìm";
        }
        while($row = mysqli_fetch_array($PhoneList)) {
    ?>  
    <a class="phone-list-item" href="?p=chitiet&&idDT=<?php echo $row['ID_DIEN_THOAI'];?>">
        <img src="lib/images/<?php echo $row['URL_HINH_ANh'];?>" alt="phone image">
        <div class="desc">
            <h5><?php echo $row['TEN_DIEN_THOAI'];?></h5>
            <p><?php echo number_format($row['GIA_CA_THI_TRUONG']);?>đ</p>
        </div>
    </a>
    <?php
        }
    ?>   
    <div class="center clr">
        <a href="?p=danhsachdt" type="button" class="btn btn-primary">1</a>
    </div>
        
</div>