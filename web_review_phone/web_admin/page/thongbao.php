
<?php
$limit_record=5;
$current_page=isset($_GET['page']) ? $_GET['page'] : 1;
$total_record=get_total_record_thongbaos($conn,$_SESSION["ID_USER"]);
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
<?php
// update đã đọc
if(isset($_POST["btn-da-doc"]))
{
    update_dadoc($conn,$_SESSION["ID_USER"],$_POST['id_thongbao']);
    header('refresh:1');
}
?>
<div class="thongbao">
    <h5>Danh sách thông báo</h5>
    <hr/>
    <table class="table">
        <thead class="thead-light">
            <tr>
            <th scope="col">ID thông báo</th>
            <th scope="col">Ngày nhận</th>
            <th scope="col">Nội dung</th>
            <th scope="col">Đã xem</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $start=($current_page-1)*$limit_record;
            foreach(get_record_limit_thongbaos($conn,$_SESSION["ID_USER"],$start,$limit_record) as $a)
            {
                echo '<form class="form" method = "POST">
                <tr>
                <th scope="row">'.$a['ID_THONG_BAO'].'</th>
                <td>'.$a['NGAY_GUI_THONG_BAO'].'</td>
                <td>'.$a['NOI_DUNG_KHAC'].'</td>
                <td><input class="form-control" type="text" name="id_thongbao" id="id_thongbao" value="'.$a['ID_THONG_BAO'].'" hidden/>';
                if($a['DA_XEM']==0)
                {
                    echo '<button class="btn btn-primary" type="submit" name="btn-da-doc">Đánh dấu đã đọc</button>';
                }
                else
                {
                    echo '<button class="btn btn-primary" disabled>Đã đọc</button>';
                }
                echo '</td></form>';
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
            <a class="page-link" href="index.php?p=thongbao&page='.($current_page-1).'" aria-label="Previous">
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
                    echo '<li class="page-item disabled"><a class="page-link" href="index.php?p=thongbao&page='.$i.'">'.$i.'</a></li>';
                }
                else
                {
                    echo '<li class="page-item"><a class="page-link" href="index.php?p=thongbao&page='.$i.'">'.$i.'</a></li>';
                }
            }
        ?>
           
        <?php
        if ($current_page < $total_page && $total_page > 1){
            echo '<li class="page-item">
            <a class="page-link" href="index.php?p=thongbao&page='.($current_page+1).'" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
                <span class="sr-only">Next</span>
            </a>
            </li>';
        }
        ?>
            
        </ul>
    </nav>
</div>