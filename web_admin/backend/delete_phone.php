<?php
include "connect.php";
include "phone.php"
?>
<?php
if(isset($_GET['id']))
{
    if(!delete_phone_info($conn,$_GET['id']))
    {
        echo"<script type='text/javascript'>alert('Lỗi khi xóa cấu hình điện thoai! Hãy liên hệ kỹ thuật viên.');</script>";
        header('Location:../index.php?p=ds_dienthoai');
        
    }else if(!delete_news_of_phone($conn,$_GET['id']))
    {
        echo"<script type='text/javascript'>alert('Lỗi khi xóa bài viết về điện thoai! Hãy liên hệ kỹ thuật viên.');</script>";
        header('Location:../index.php?p=ds_dienthoai');
        
    }
    else if(!delete_link_of_phone($conn,$_GET['id']))
    {
        echo"<script type='text/javascript'>alert('Lỗi khi xóa bài viết về điện thoai! Hãy liên hệ kỹ thuật viên.');</script>";
        header('Location:../index.php?p=ds_dienthoai');
        
    }
    else if(!delete_phone($conn,$_GET['id']))
    {
        echo"<script type='text/javascript'>alert('Lỗi khi xóa điện thoai! Hãy liên hệ kỹ thuật viên.');</script>";
        header('Location:../index.php?p=ds_dienthoai');
    }
    else
    {
        echo"<script type='text/javascript'>alert('Xóa điện thoại thành công');</script>";
        header('Location:../index.php?p=ds_dienthoai');
    }
}
else
{
    echo"<script type='text/javascript'>alert('Đường dẫn bị lỗi! Hãy liên hệ kỹ thuật viên.');</script>";
    header('Location:../index.php?p=ds_dienthoai');
}

?>