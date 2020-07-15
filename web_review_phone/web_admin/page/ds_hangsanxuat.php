<?php
include "backend/trademark.php";
?>
<?php
//Kiểm tra phân quyền
if($_SESSION["TEN_PHAN_QUYEN"]!="admin")
{
    header("Location:index.php");
}
?>
<?php
//Phân trang
//source:https://freetuts.net/thuat-toan-phan-trang-voi-php-va-mysql-550.html
$limit_record=5;
$current_page=isset($_GET['page']) ? $_GET['page'] : 1;
$total_record=get_total_record_trademark($conn);
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
// Thêm hãng sản xuất mới
if(isset($_POST["btn_submit_avatar"]))
{
    
    $trademark=trim($_POST["txt_trademark"]);
    $country=trim($_POST["txt_country"]);
    include "backend/uploadIMG.php";
    if(insert_trademark($conn,$trademark,$country,$url))
    {
        echo "<script type='text/javascript'>alert('Đã thêm hãng sản xuất!');</script>";
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
if(isset($_POST["btn_submit"]))
{
    $id_trademark=$_POST["txt_idtrademark"];
    $ntrademark=trim($_POST["txt_ntrademark"]);
    $ncountry=trim($_POST["txt_ncountry"]);
    include "backend/uploadIMG.php";
    if(update_trademark($conn,$id_trademark,$ntrademark,$ncountry,$url))
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
    <h5>Danh sách hãng sản xuất</h5>
    <a href="#" class="btn btn-success" data-toggle="modal" data-target="#insert-trademark">Thêm mới</a>
    <hr/>
    <table class="table">
        
        <thead class="thead-light">
            <tr>
            <th scope="col">id</th>
            <th scope="col">Logo</th>
            <th scope="col">Tên hãng</th>
            <th scope="col">Quốc gia</th>
            <th scope="col">Xóa</th>
            <th scope="col">Sửa</th>
            
            </tr>
        </thead>
        <tbody>
        <?php
            $start=($current_page-1)*$limit_record;
            foreach(get_record_limit_trademark($conn,$start,$limit_record) as $a)
            {
                echo '<tr>
                <th scope="row">'.$a['ID_HANG_SAN_XUAT'].'</th>
                <td> <img src="'.$a['LOGO_HANG_SX'].'" alt="logo" style="max-height:50px;" /></td>
                <td>'.$a['TEN_HANG_SAN_XUAT'].'</td>
                <td>'.$a['QUOC_GIA'].'</td>
                <td><button class="btn btn-danger" onclick="delete_trademark('.$a['ID_HANG_SAN_XUAT'].')">Xóa</button></td>
                <td><button class="btn btn-primary" data-toggle="modal" data-target="#update-trademark"
                     data-id="'.$a['ID_HANG_SAN_XUAT'].'"
                     data-name="'.$a['TEN_HANG_SAN_XUAT'].'"
                     data-country="'.$a['QUOC_GIA'].'">Sửa
                </button></td>
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
<?php include "popup/insert_trademark.php";
include "popup/update_trademark.php";

?>
<script>
    function delete_trademark(id){
        if(confirm("Tất cả thông tin về hãng sản xuất này sẽ bị xóa! Bạn vẫn muốn tiếp tục?") == true){
            window.location="backend/delete_trademark.php?id="+id.toString();
        }
    }
    $('#update-trademark').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)
    var id = button.data('id')
    var name = button.data('name')
    var country = button.data('country')
    var modal = $(this)
    document.getElementById("txt_id_trademark").value = String(id)
    document.getElementById("txt_ntrademark").value = String(name)
    document.getElementById("txt_ncountry").value = String(country)
    })
</script>