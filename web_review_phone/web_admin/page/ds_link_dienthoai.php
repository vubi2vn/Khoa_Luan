<?php
include "backend/phone.php";
include "backend/store.php";
?>
<?php
//Kiểm tra phân quyền
if($_SESSION["TEN_PHAN_QUYEN"]!="admin")
{
    header("Location:index.php");
}
?>
<?php

if(isset($_GET["id"]))
{
    $id_phone=$_GET["id"];
}
else
{
    header("Location:index.php");
}
?>
<?php
//Phân trang
//source:https://freetuts.net/thuat-toan-phan-trang-voi-php-va-mysql-550.html
$limit_record=7;
$current_page=isset($_GET['page']) ? $_GET['page'] : 1;
$total_record=get_total_record_phone_link($conn,$id_phone);
$total_store=get_total_record_store($conn);
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
if(isset($_POST["btn-insert-link"]))
{
    $id_store=$_POST["store_option"];
    $link=trim($_POST["txt_link"]);
    if(insert_link_phone($conn,$id_phone,$id_store,$link))
    {
        echo "<script type='text/javascript'>alert('Đã thêm link!');</script>";
        header('refresh:1');
    }
    else
    {
        echo "<script type='text/javascript'>alert('Có lỗi trong quá trình thêm!');</script>";
        header('refresh:1');
    }
}
?>

<div class="ds_hsx">
    <h5>Danh sách link điện thoại <?php ?></h5>
    <?php 
    if($total_store>$total_record)
    {
        echo'<a href="#" class="btn btn-success" data-toggle="modal" data-target="#insert-link">Thêm mới</a>'; 
    }
    ?>
    <hr/>
    <table class="table">
        
        <thead class="thead-light">
            <tr>
            <th scope="col">Tên điện thoại</th>
            <th scope="col">Tên cửa hàng</th>
            <th scope="col">Link sản phẩm</th>
            <th scope="col">Ngày cập nhật</th>
            <th scope="col">Xóa</th>
            
            </tr>
        </thead>
        <tbody>
        <?php
            $start=($current_page-1)*$limit_record;
            foreach(get_record_limit_phone_link($conn,$id_phone,$start,$limit_record) as $a)
            {
                echo '<tr>
                <th scope="row">'.$a['TEN_DIEN_THOAI'].'</th>
                <td>'.$a['TEN_CUA_HANG'].'</td>
                <td>'.$a['LINK_SAN_PHAM'].'</td>
                <td>'.date_format(date_create($a['NGAY_CAP_NHAT_LINK']),"d/m/Y").'</td>
                <td><a href="backend/delete_link.php?id_phone='.$id_phone.'&id_store='.$a['ID_CUA_HANG'].'" class="btn btn-danger">Xóa</a></td>
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
<?php include "popup/insert_link_phone.php"?>