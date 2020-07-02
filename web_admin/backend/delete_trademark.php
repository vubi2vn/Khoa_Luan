<?php
include "connect.php";
include "trademark.php";
include "phone.php";
?>
<?php
if(isset($_GET['id']))
{
    $id_phones=select_phone_of_trademark($conn,$_GET['id']);
    foreach($id_phones as $a)
    {
        if(!delete_phone_info($conn,$a['ID_DIEN_THOAI']))
        {
            echo"<script type='text/javascript'>alert('Lỗi khi xóa cấu hình điện thoai! Hãy liên hệ kỹ thuật viên.');</script>";
            header('Location:../index.php?p=ds_hangsx');
            break;
        }else if(!delete_news_of_phone($conn,$a['ID_DIEN_THOAI']))
        {
            echo"<script type='text/javascript'>alert('Lỗi khi xóa bài viết về điện thoai! Hãy liên hệ kỹ thuật viên.');</script>";
            header('Location:../index.php?p=ds_hangsx');
            break;
        }
        else if(!delete_link_of_phone($conn,$a['ID_DIEN_THOAI']))
        {
            echo"<script type='text/javascript'>alert('Lỗi khi xóa đường dẫn về điện thoai! Hãy liên hệ kỹ thuật viên.');</script>";
            header('Location:../index.php?p=ds_dienthoai');
            
        }
        else if(!delete_phone($conn,$a['ID_DIEN_THOAI']))
        {
            echo"<script type='text/javascript'>alert('Lỗi khi xóa điện thoai! Hãy liên hệ kỹ thuật viên.');</script>";
            header('Location:../index.php?p=ds_hangsx');
            break;
        }
    }
    if(delete_trademark($conn,$_GET['id']))
    {
        echo"<script type='text/javascript'>alert('Đã xóa thành công!');</script>";
        header('Location:../index.php?p=ds_hangsx');
    }
    else
    {
        echo"<script type='text/javascript'>alert('Lỗi khi xóa hãng sản xuất! Hãy liên hệ kỹ thuật viên.');</script>";
        header('Location:../index.php?p=ds_hangsx');
    }
}
else
{
    echo"<script type='text/javascript'>alert('Đường dẫn bị lỗi! Hãy liên hệ kỹ thuật viên.');</script>";
    header('Location:../index.php?p=ds_hangsx');
}

?>