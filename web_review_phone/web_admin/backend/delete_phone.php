<?php
include "connect.php";
include "phone.php"
?>
<?php
if(isset($_GET['id']))
{
    if(!delete_phone_info($conn,$_GET['id']))
    {
        echo"<script type='text/javascript'>alert('Lỗi khi xóa cấu hình điện thoai! Hãy liên hệ kỹ thuật viên.');
        window.location=\"../index.php?p=ds_dienthoai\";
        </script>";
        
    }else if(!delete_news_of_phone($conn,$_GET['id']))
    {
        echo"<script type='text/javascript'>alert('Không thể xóa bài viết đã tương tác! Hãy liên hệ kỹ thuật viên.');
        window.location=\"../index.php?p=ds_dienthoai\";
        </script>";
        
    }
    else if(!delete_link_of_phone($conn,$_GET['id']))
    {
        echo"<script type='text/javascript'>alert('Lỗi khi xóa link điện thoai! Hãy liên hệ kỹ thuật viên.');
        window.location=\"../index.php?p=ds_dienthoai\";
        </script>";
        
    }
    else if(!delete_phone($conn,$_GET['id']))
    {
        echo"<script type='text/javascript'>alert('Lỗi khi xóa điện thoai! Hãy liên hệ kỹ thuật viên.');
        window.location=\"../index.php?p=ds_dienthoai\";
        </script>";
    }
    else
    {
        echo"<script type='text/javascript'>alert('Xóa điện thoại thành công');
        window.location=\"../index.php?p=ds_dienthoai\";
        </script>";
    }
}
else
{
    echo"<script type='text/javascript'>alert('Đường dẫn bị lỗi! Hãy liên hệ kỹ thuật viên.');
    window.location=\"../index.php?p=ds_dienthoai\";
    </script>";
}

?>