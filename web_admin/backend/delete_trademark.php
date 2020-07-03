
<?php
include "connect.php";
include "trademark.php";
include "phone.php";
?>
<?php
if(isset($_GET['id']))
{
    $id_phones=select_phone_of_trademark($conn,$_GET['id']);
    if($id_phones->rowCount()>0)
    {
        echo"<script type='text/javascript'>alert('Hãng sản xuất này vẫn còn dữ liệu về điện thoại.\n
                                 Hãy xóa dữ liệu điện thoại và thực hiện lại thao tác.');
                                window.location=\"../index.php?p=ds_hangsx\";
             </script>";
        
    }
    else if(delete_trademark($conn,$_GET['id']))
    {
        echo"<script type='text/javascript'>alert('Đã xóa thành công!');
        window.location=\"../index.php?p=ds_hangsx\";
        </script>";
    }
    else
    {
        echo"<script type='text/javascript'>alert('Lỗi khi xóa hãng sản xuất! Hãy liên hệ kỹ thuật viên.');
        window.location=\"../index.php?p=ds_hangsx\";
        </script>";
    }
}
else
{
    echo"<script type='text/javascript'>alert('Đường dẫn bị lỗi! Hãy liên hệ kỹ thuật viên.');
    window.location=\"../index.php?p=ds_hangsx\";
    </script>";
    
}

?>
