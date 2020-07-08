<?php
include "backend/report.php";
?>

<?php
//Phân trang
//source:https://freetuts.net/thuat-toan-phan-trang-voi-php-va-mysql-550.html
$limit_record=7;
$current_page=isset($_GET['page']) ? $_GET['page'] : 1;
$total_record=get_total_record_report($conn);
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
//Thêm danh mục báo cáo mới
if(isset($_POST["btn-insert-report"]))
{
    $report=trim($_POST["txt_report"]);
    $describe=trim($_POST["txt_describe"]);
    if(insert_report($conn,$report,$describe))
    {
        echo "<script type='text/javascript'>alert('Đã thêm danh mục báo cáo mới!');</script>";
        header('refresh:1');
    }
    else
    {
        echo "<script type='text/javascript'>alert('Có lỗi trong quá trình thêm!');</script>";
        header('refresh:1');
    }
}
?>
<?php
//Cập nhật hãng sản xuất
if(isset($_POST["btn-update-report"]))
{
    $id_report=$_POST["txt_idreport"];
    $nreport=trim($_POST["txt_nreport"]);
    $ndescribe=trim($_POST["txt_ndescribe"]);
    if(update_report($conn,$id_report,$nreport,$ndescribe))
    {
        echo "<script type='text/javascript'>alert('Cập nhật thành công!');</script>";
        header('refresh:1');
    }
    else
    {
        echo "<script type='text/javascript'>alert('Có lỗi trong quá trình cập nhật!');</script>";
        header('refresh:1');
    }
}
?>

<div class="ds_hsx">
    <h5>Danh mục báo cáo</h5>
    <a href="#" class="btn btn-success" data-toggle="modal" data-target="#insert-report">Thêm mới</a>
    <hr/>
    <table class="table">
        
        <thead class="thead-light">
            <tr>
            <th scope="col">id</th>
            <th scope="col">Tên báo cáo</th>
            <th scope="col">Mô tả</th>
            <th scope="col">Xóa</th>
            <th scope="col">Sửa</th>
            
            </tr>
        </thead>
        <tbody>
        <?php
            $start=($current_page-1)*$limit_record;
            foreach(get_record_limit_report($conn,$start,$limit_record) as $a)
            {
                echo '<tr>
                <th scope="row">'.$a['ID_BAO_CAO'].'</th>
                <td>'.$a['LOAI_BAO_CAO'].'</td>
                <td>'.$a['MO_TA_BAO_CAO'].'</td>
                <td><button class="btn btn-danger" onclick="delete_report('.$a['ID_BAO_CAO'].')">Xóa</button></td>
                <td><a href="#" class="btn btn-primary" data-toggle="modal" data-target="#update-report"
                data-id="'.$a['ID_BAO_CAO'].'"
                data-name="'.$a['LOAI_BAO_CAO'].'"
                data-describe="'.$a['MO_TA_BAO_CAO'].'">Sửa</a></td>
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
                    echo '<li class="page-item disabled"><a class="page-link" href="index.php?p=ds_hangsx&page='.$i.'">'.$i.'</a></li>';
                }
                else
                {
                    echo '<li class="page-item"><a class="page-link" href="index.php?p=ds_hangsx&page='.$i.'">'.$i.'</a></li>';
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
<?php include "popup/insert_report.php";
include "popup/update_report.php";
?>
<script>
    function delete_report(id){
        if(confirm("Tất cả thông tin về danh mục báo cáo này sẽ bị xóa! Bạn vẫn muốn tiếp tục?") == true){
            window.location="backend/delete_report.php?id="+id.toString();
        }
    }
    $('#update-report').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)
    var id = button.data('id')
    var name = button.data('name')
    var describe = button.data('describe')
    var modal = $(this)
    document.getElementById("txt_id_report").value = String(id)
    document.getElementById("txt_nreport").value = String(name)
    document.getElementById("txt_ndescribe").value = String(describe)
    })
</script>