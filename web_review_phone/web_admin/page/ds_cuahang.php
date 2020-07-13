<?php
include "backend/store.php";

?>

<?php
//Phân trang
//source:https://freetuts.net/thuat-toan-phan-trang-voi-php-va-mysql-550.html
$limit_record=5;
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

<?php
//Thêm cửa hàng mới
if(isset($_POST["btn_submit_avatar"]))
{
    $name=$_POST["txt_store_name"];
    $link=$_POST["txt_link"];
    if($name==""||$name==null)
    {
        echo "<script type='text/javascript'>alert('Tên cửa hàng không được để trống!');</script>";
        header('refresh:1');
    }
    else
    {
        include "backend/uploadIMG.php";
        if(insert_store($conn,$name,$link,$url))
        {
            echo "<script type='text/javascript'>alert('Thêm cửa hàng thành công!');</script>";
            header('refresh:1');
        }
        else
        {
            echo "<script type='text/javascript'>alert('Có lỗi trong quá trình thêm! Vui lòng liên hệ nhân viên kỹ thuật!');</script>";
            header('refresh:1');
        }
    } 
}
?>
<?php
//Cập nhật cửa hàng
if(isset($_POST["btn_submit"]))
{
    $id=$_POST["txt_store_id"];
    $name=trim($_POST["txt_nstore_name"]);
    $link=trim($_POST["txt_nlink"]);
    if($name==""||$name==null)
    {
        echo "<script type='text/javascript'>alert('Tên cửa hàng không được để trống!');</script>";
        header('refresh:1');
    }
    else
    {
        include "backend/uploadIMG.php";
        if(update_store($conn,$id,$name,$link,$url))
        {
            echo "<script type='text/javascript'>alert('Cập nhật hàng thành công!');</script>";
            header('refresh:1');
        }
        else
        {
            echo "<script type='text/javascript'>alert('Có lỗi trong quá trình cập nhật! Vui lòng liên hệ nhân viên kỹ thuật!');</script>";
            header('refresh:1');
        }
    } 
}
?>
<div class="ds_cuahang">
    <h5>Danh sách cửa hàng</h5>
    <a href="#" class="btn btn-success" data-toggle="modal" data-target="#insert-store">Thêm mới</a>
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
                <td><img src="'.$a['LOGO_CUA_HANG'].'" alt="logo" style="width:70px"></td>
                <td>'.$a['TEN_CUA_HANG'].'</td>
                <td><a href="'.$a['LINK_WEBSITE_CUA_HANG'].'">'.$a['LINK_WEBSITE_CUA_HANG'].'</a></td>
                <td><button class="btn btn-danger" onclick="delete_store('.$a['ID_CUA_HANG'].')">Xóa</button></td>
                <td><a href="#" class="btn btn-primary" data-toggle="modal" data-target="#update-store"
                data-id="'.$a['ID_CUA_HANG'].'"
                data-name="'.$a['TEN_CUA_HANG'].'"
                data-link="'.$a['LINK_WEBSITE_CUA_HANG'].'"
                >Sửa</a></td>
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
<?php include "popup/insert_store.php";
include "popup/update_store.php"
?>
<script>
    function delete_store(id){
        if(confirm("Tất cả thông tin về cửa hàng sẽ bị xóa! Bạn vẫn muốn tiếp tục?") == true){
            window.location="backend/delete_store.php?id="+id.toString();
        }
    }
    $('#update-store').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)
    var id = button.data('id')
    var name = button.data('name')
    var describe = button.data('link')
    var modal = $(this)
    document.getElementById("txt_store_id").value = String(id)
    document.getElementById("txt_nstore_name").value = String(name)
    document.getElementById("txt_nlink").value = String(describe)
    })
</script>