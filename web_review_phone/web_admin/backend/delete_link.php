<?php 
include "connect.php";
include "phone.php";
?>
<?php
if(isset($_GET['id_phone'])&&isset($_GET['id_store']))
{
    if(delete_link($conn,$_GET['id_phone'],$_GET['id_store']))
    {
        echo"<script type='text/javascript'>alert('Xóa link thành công!.');
        window.location=\"../index.php?p=phone_link&id=".$_GET['id_phone']."\";
        </script>";
    }
    else
    {
        echo"<script type='text/javascript'>alert('Lỗi khi xóa chi tiết báo cáo! Hãy liên hệ kỹ thuật viên.');
        https://fptshop.com.vn/dien-thoai/oppo-a92	
        </script>";
    }
}
else
{
    echo"<script type='text/javascript'>alert('Đường dẫn bị lỗi! Hãy liên hệ kỹ thuật viên.')
    window.location=\"../index.php?p=phone_link&id=".$_GET['id_phone']."\";
    </script>";
}

?>