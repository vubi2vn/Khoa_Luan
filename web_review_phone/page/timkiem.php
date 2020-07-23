<?php
// Phân trang
    $item_limit = 15;
    $page_Index=isset($_GET['page']) ? $_GET['page'] : 1;
    //$url_now = $_SERVER['REQUEST_URI'];
    $url_now ='index.php?p=timkiem';
    $start = ($page_Index - 1) *$item_limit;
    $key = " ";

    if (isset($_GET['key']))
    {
        $key = $_GET['key'];
    }
    $PhoneList = TimTheoTenDT($conn,$key);
    $Total_Item = mysqli_num_rows(TimTheoTenDT($conn,$key));
    $total_page = ceil($Total_Item/$item_limit);
?>

<div class="navigat"> 
    <a href = "index.php?p=danhsachdt">Danh sách điện thoại</a>
</div>

<div class="phone-list">
    
    <?php
        echo '<div style="height: 50px; font-size: large; padding: 10px">Tìm thấy <strong>'.$Total_Item.'</strong> kết quả. Từ khóa: <strong>'.$key.'</strong></div>';
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