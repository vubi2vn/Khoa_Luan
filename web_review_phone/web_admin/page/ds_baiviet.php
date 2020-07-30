<?php
include "backend/news.php";
?>
<?php
//Kiểm tra phân quyền
if($_SESSION["TEN_PHAN_QUYEN"]!="tacgia")
{
    header("Location:index.php");
}
?>
<?php
//Phân trang
//source:https://freetuts.net/thuat-toan-phan-trang-voi-php-va-mysql-550.html
$limit_record=7;
$current_page=isset($_GET['page']) ? $_GET['page'] : 1;
$total_record=get_total_record_news($conn,$_SESSION["ID_USER"]);
$total_record=$total_record>0?$total_record:1;
$total_page=ceil($total_record/$limit_record);
if($current_page>$total_page)
{
    $current_page=$total_page;
}
else if ($current_page < 1){
    $current_page = 1;
}
?>
<div class="ds_hsx">
    <h5>Danh sách bài viết của bạn</h5>
    <table class="table">
        
        <thead class="thead-light">
            <tr>
            <th scope="col">id bài viết</th>
            <th scope="col">Điện thoại</th>
            <th scope="col">Nội dung</th>
            <th scope="col">Sửa</th>
            
            </tr>
        </thead>
        <tbody>
        <?php
            $start=($current_page-1)*$limit_record;
            foreach(get_record_limit_news($conn,$_SESSION["ID_USER"],$start,$limit_record) as $a)
            {
                echo '<tr>
                <th scope="row">'.$a['ID_BAI_VIET'].'</th>
                <td>'.$a['TEN_DIEN_THOAI'].'</td>
                <td><a href="index.php?p=noidung_baiviet&news_id='.$a['ID_BAI_VIET'].'" class="btn btn-success">Xem</a></td>
                <td><a href="index.php?p=capnhat_baiviet&news_id='.$a['ID_BAI_VIET'].'" class="btn btn-primary">Sửa</a></td>
                </tr>';
            }
        ?>
            
            
        </tbody>
    </table>
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
        <?php
        if($total_page>1 && $current_page>1)
        {
           echo '<li class="page-item">
            <a class="page-link" href="index.php?p=ds_hangsx&page='.($current_page-1).'" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only">Previous</span>
            </a>
            </li>';
        }
        ?>
        <?php
            for($i=1; $i<=$total_page;$i++)
            {
                if($i==$current_page)
                {
                    echo '<li class="page-item disabled"><a class="page-link" href="index.php?p=ds_baiviet&page='.$i.'">'.$i.'</a></li>';
                }
                else
                {
                    echo '<li class="page-item"><a class="page-link" href="index.php?p=ds_baiviet&page='.$i.'">'.$i.'</a></li>';
                }
            }
        ?>
           
        <?php
        if ($current_page < $total_page && $total_page > 1){
            echo '<li class="page-item">
            <a class="page-link" href="index.php?p=ds_hangsx&page='.($current_page+1).'" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
                <span class="sr-only">Next</span>
            </a>
            </li>';
        }
        ?>
            
        </ul>
    </nav>
</div>
