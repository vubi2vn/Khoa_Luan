<?php
include "backend/phone.php";
?>

<?php
//Phân trang
//source:https://freetuts.net/thuat-toan-phan-trang-voi-php-va-mysql-550.html
$limit_record=7;
$current_page=isset($_GET['page']) ? $_GET['page'] : 1;
$total_record=get_total_record_phone($conn);
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
    <h5>Danh sách điện thoại</h5>
    <a href="#" class="btn btn-success">Thêm mới</a>
    <hr/>
    <table class="table">
        
        <thead class="thead-light">
            <tr>
            <th scope="col">id</th>
            <th scope="col">Tên hãng</th>
            <th scope="col">Tên điện thoại</th>
            <th scope="col">Giá thị trường</th>
            <th scope="col">Website</th>
            <th scope="col">Cấu hình điện thoại</th>
            <th scope="col">Xóa</th>
            <th scope="col">Sửa</th>
            
            </tr>
        </thead>
        <tbody>
        <?php
            $start=($current_page-1)*$limit_record;
            foreach(get_record_limit_phone($conn,$start,$limit_record) as $a)
            {
                echo '<tr>
                <th scope="row">'.$a['ID_DIEN_THOAI'].'</th>
                <td>'.$a['TEN_HANG_SAN_XUAT'].'</td>
                <td>'.$a['TEN_DIEN_THOAI'].'</td>
                <td>'.number_format($a['GIA_CA_THI_TRUONG']).' VND</td>
                <td><a href="index.php?p=phone_link&id='.$a['ID_DIEN_THOAI'].'" >Link</a></td>
                <td><a href="" >Xem</a></td>
                <td><button class="btn btn-danger" onclick="delete_store('.$a['ID_DIEN_THOAI'].')">Xóa</button></td>
                <td><a href="#" class="btn btn-primary">Sửa</a></td>
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
            <a class="page-link" href="index.php?p=ds_dienthoai&page='.($current_page-1).'" aria-label="Previous">
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
                    echo '<li class="page-item disabled"><a class="page-link" href="index.php?p=ds_dienthoai&page='.$i.'">'.$i.'</a></li>';
                }
                else
                {
                    echo '<li class="page-item"><a class="page-link" href="index.php?p=ds_dienthoai&page='.$i.'">'.$i.'</a></li>';
                }
            }
        ?>
           
        <?php
        if ($current_page < $total_page && $total_page > 1){
            echo '<li class="page-item">
            <a class="page-link" href="index.php?p=ds_dienthoai&page='.($current_page+1).'" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
                <span class="sr-only">Next</span>
            </a>
            </li>';
        }
        ?>
            
        </ul>
    </nav>
</div>
<script>
    function delete_store(id){
        if(confirm("Tất cả thông tin về điện thoại sẽ bị xóa! Bạn vẫn muốn tiếp tục?") == true){
            window.location="backend/delete_phone.php?id="+id.toString();
        }
    }
</script>