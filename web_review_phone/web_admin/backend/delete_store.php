<?php
include "connect.php";
include "store.php"
?>
<?php
if(isset($_GET['id']))
{
    if(delete_link_of_store($conn,$_GET['id']))
    {
        if(delete_store($conn,$_GET['id']))
        {
            echo"<script type='text/javascript'>alert('Đã xóa thành công!');
            window.location=\"../index.php?p=ds_cuahang\";
            </script>";
        }
        else
        {
            echo"<script type='text/javascript'>alert('Lỗi khi xóa thông tin cửa hàng! Hãy liên hệ kỹ thuật viên.');
            window.location=\"../index.php?p=ds_cuahang\";
            </script>";
        }

    }
    else
    {
        echo"<script type='text/javascript'>alert('Lỗi khi xóa đường dẫn link! Hãy liên hệ kỹ thuật viên.');
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