<?php
include "backend/store.php";
?>

<?php
//Phân trang
//source:https://freetuts.net/thuat-toan-phan-trang-voi-php-va-mysql-550.html
$limit_record=7;
$current_page=isset($_GET['page']) ? $_GET['page'] : 1;
$total_record=get_total_record_store($conn);
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
<div class="ds_cuahang">
    <h5>Danh sách cửa hàng</h5>
    <a href="#" class="btn btn-success">Thêm mới</a>
    <hr/>
    <table class="table">
        
        <thead class="thead-light">
            <tr>
            <th scope="col">id</th>
            <th scope="col">Logo</th>
            <th scope="col">Tên cửa hàng</th>
            <th scope="col">Link website</th>
            <th scope="col">Xóa</th>
            <th scope="col">Sửa</th>
            
            </tr>
        </thead>
        <tbody>
        <?php
            $start=($current_page-1)*$limit_record;
            foreach(get_record_limit_store($conn,$start,$limit_record) as $a)
            {
                echo '<tr>
                <th scope="row">'.$a['ID_CUA_HANG'].'</th>
                <td><img src="'.$a['LO_CUA_HANG'].'" alt="logo" style="width:50px"></td>
                <td>'.$a['TEN_CUA_HANG'].'</td>
                <td><a href="'.$a['LINK_WEBSITE_CUA_HANG'].'">'.$a['LINK_WEBSITE_CUA_HANG'].'</a></td>
                <td><button class="btn btn-danger" onclick="delete_store('.$a['ID_CUA_HANG'].')">Xóa</button></td>
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
            <a class="page-link" href="index.php?p=ds_cuahang&page='.($current_page-1).'" aria-label="Previous">
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
                    echo '<li class="page-item disabled"><a class="page-link" href="index.php?p=ds_cuahang&page='.$i.'">'.$i.'</a></li>';
                }
                else
                {
                    echo '<li class="page-item"><a class="page-link" href="index.php?p=ds_cuahang&page='.$i.'">'.$i.'</a></li>';
                }
            }
        ?>
           
        <?php
        if ($current_page < $total_page && $total_page > 1){
            echo '<li class="page-item">
            <a class="page-link" href="index.php?p=ds_cuahang&page='.($current_page+1).'" aria-label="Next">
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
        if(confirm("Tất cả thông tin về cửa hàng sẽ bị xóa! Bạn vẫn muốn tiếp tục?") == true){
            window.location="backend/delete_store.php?id="+id.toString();
        }
    }
</script>