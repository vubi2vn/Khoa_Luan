<?php
// Phân trang
    $item_limit = 20;
    $page_Index=isset($_GET['page']) ? $_GET['page'] : 1;
    //$url_now = $_SERVER['REQUEST_URI'];
    $url_now ='index.php?p=danhsachdt';
    $start = ($page_Index - 1) *$item_limit;
    
    
// Phân loại
    if (isset($_GET['Id_HangSX'])){      
        $Id_HangSX = $_GET["Id_HangSX"];
        $url_now ='index.php?p=danhsachdt&Id_HangSX'.$Id_HangSX.'';
        $PhoneList = PhoneList_HangSX_PhanTrang($conn,$Id_HangSX, $start, $item_limit);
        $Total_Item = PhoneList_HangSX_Count($conn,$Id_HangSX);
    }
    else if (isset($_GET["GiaThap"])&&isset($_GET["GiaCao"])){      
        $GiaThap = $_GET["GiaThap"];
        $GiaCao = $_GET["GiaCao"];
        $url_now ='index.php?p=danhsachdt&GiaThap='.$GiaThap.'&GiaCao='.$GiaCao.'';
        $PhoneList = PhoneList_Gia_PhanTrang($conn,$GiaThap,$GiaCao, $start, $item_limit);
        $Total_Item = PhoneList_Gia_Count($conn,$GiaThap,$GiaCao);
    }
    else{
        $PhoneList = PhoneList_PhanTrang($conn, $start, $item_limit);
        $Total_Item = PhoneList_Count($conn);
    }

    $total_page = ceil($Total_Item/$item_limit);
?>



<div class="navigat"> 
    <a href = "index.php?p=danhsachdt">Danh sách điện thoại</a>
</div>
<div class="timkiem">
    <div class="timkiem-logo clr">
        <?php
        $DanhSachHangSX = DanhSachHangSX($conn);
        while($row_DanhSachHangSX = mysqli_fetch_array($DanhSachHangSX)) {
        ?>
            <a class = "" href="?p=danhsachdt&Id_HangSX=<?php echo $row_DanhSachHangSX['ID_HANG_SAN_XUAT'];?>">
                <img alt="logo cua hang sx" class="" src="lib/images/<?php echo $row_DanhSachHangSX['LOGO_HANG_SX'];?>">
            </a>
        <?php } ?>
    </div>
    <div class="timkiem-gia clr">
        Chọn mức giá: 
        <a href="?p=danhsachdt&GiaThap=0&GiaCao=2000000">Dưới 2 triệu</a>
        <a href="?p=danhsachdt&GiaThap=2000000&GiaCao=4000000">Từ 2-4 triệu</a>
        <a href="?p=danhsachdt&GiaThap=4000000&GiaCao=7000000">Từ 4-7 triệu</a>
        <a href="?p=danhsachdt&GiaThap=7000000&GiaCao=13000000">Từ 7-13 triệu</a>
        <a href="?p=danhsachdt&GiaThap=13000000&GiaCao=99000000">Trên 13 triệu</a>
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
    <a class="phone-list-item" href="?p=chitiet&idDT=<?php echo $row['ID_DIEN_THOAI'];?>">
        <img src="web_admin/<?php echo $row['URL_HINH_ANh'];?>" alt="phone image">
        <div class="desc">
            <h5><?php echo $row['TEN_DIEN_THOAI'];?></h5>
            <p><?php echo number_format($row['GIA_CA_THI_TRUONG']);?>đ</p>
        </div>
    </a>
    <?php
        }
    ?>       
</div>
<div class="center clr">
    <nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
        <?php
        if($page_Index > 1){
            {
                echo '<li class="page-item">
                 <a class="page-link" href="'.$url_now.'&page=1" aria-label="Previous">
                     <span aria-hidden="true">&laquo;</span>
                     <span class="sr-only">Previous</span>
                 </a>
                 </li>';
             }
        }
        ?>
        <?php 
            
            for($i = 1; $i<= $total_page; $i++)
            if($i==$page_Index)
            {   
                echo '<li class="page-item disabled"><a class="page-link" href="'.$url_now.'&page='.$i.'">'.$i.'</a></li>' ;
            }   
            else
            {
                echo '<li class="page-item"><a class="page-link" href="'.$url_now.'&page='.$i.'">'.$i.'</a></li>' ;
            }     
        ?>

        <?php
            if ($page_Index < $total_page){
                echo '<li class="page-item">
                <a class="page-link" href="'.$url_now.'&page='.$total_page.'" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">Next</span>
                </a>
                </li>';
            }
        ?>
    </ul>
    </nav>
   
</div> 