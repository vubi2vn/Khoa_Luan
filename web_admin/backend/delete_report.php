<?php
include "connect.php";
include "report.php"
?>
<?php
if(isset($_GET['id']))
{
    if(delete_link_of_report($conn,$_GET['id']))
    {
        if(delete_report($conn,$_GET['id']))
        {
            echo"<script type='text/javascript'>alert('Đã xóa thành công!');
            window.location=\"../index.php?p=dm_baocao\";
            </script>";
        }
        else
        {
            echo"<script type='text/javascript'>alert('Lỗi khi xóa thông tin báo cáo! Hãy liên hệ kỹ thuật viên.');
            window.location=\"../index.php?p=ds_cuahang\";
            </script>";
        }

    }
    else
    {
        echo"<script type='text/javascript'>alert('Lỗi khi xóa chi tiết báo cáo! Hãy liên hệ kỹ thuật viên.');
        window.location=\"../index.php?p=ds_cuahang\";
        </script>";
    }
}
else
{
    echo"<script type='text/javascript'>alert('Đường dẫn bị lỗi! Hãy liên hệ kỹ thuật viên.')
    window.location=\"../index.php?p=ds_cuahang\";
    </script>";
}

?>