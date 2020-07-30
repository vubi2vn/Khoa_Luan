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
$limit_record=7;
$current_page=isset($_GET['page']) ? $_GET['page'] : 1;
$total_record=get_total_record_user($conn);
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
//Thêm người dùng mới
if(isset($_POST['btn-insert-user']))
{
    $user=trim($_POST['txt_username']);
    $pass=$_POST['txt_password'];
    $repass=$_POST['txt_repassword'];
    $id_author=$_POST['user_athour_option'];
    $id_user=check_username($conn,$user);
    if($user==""||$user==null||strlen($user)>50)
    {
        echo "<script type='text/javascript'>alert('Tên đăng nhập không được để trống!');</script>";
        header('refresh:1');
    }
    else if(strlen($pass)<8||strlen($pass)>20)
    {
        echo "<script type='text/javascript'>alert('Mật khẩu không hợp lệ!');</script>";
        header('refresh:1');
    }
    else if($pass!=$repass)
    {
        echo "<script type='text/javascript'>alert('Xác nhận mật khẩu chưa chính xác!');</script>";
        header('refresh:1');
    }
    else if($id_user!=null)
    {
        echo "<script type='text/javascript'>alert('Tên đăng nhập bị trùng! Tạo tài khoản thất bại');</script>";
        header('refresh:1');
    }
    else if(insert_user($conn,$user,$pass,$id_author))
    {
        if(insert_user_info($conn,$user))
        {
            echo "<script type='text/javascript'>alert('Tạo tài khoản thành công!');</script>";
            header('refresh:1');
        }
        else
        {
            echo "<script type='text/javascript'>alert('Xảy ra lỗi khi tạo thông tin tài khoản! Hãy liên hệ kỹ thuật viên');</script>";
            header('refresh:1');
        }
    }
    else
    {
        echo "<script type='text/javascript'>alert('Xảy ra lỗi khi tạo tài khoản! Tạo tài khoản thất bại');</script>";
        header('refresh:1');
    }
}
?>

<?php
//Cập nhật quyền truy cập
if(isset($_POST["btn-update-user"]))
{
    $id=$_POST["txt_id_user"];
    $id_author=$_POST["user_athour_option"];
    $access=$_POST["user_access"];
    if(update_access_user($conn,$id,$access,$id_author))
    {
        echo "<script type='text/javascript'>alert('Cập nhật tài khoản thành công!');</script>";
        header('refresh:1');
    }
    else
    {
        echo "<script type='text/javascript'>alert('Đã xảy ra lỗi trong quá trình cập nhật! Hãy liên hệ kỹ thuật viên');</script>";
        header('refresh:1');
    }
}
?>
<div class="ds_hsx">
    <h5>Danh sách người dùng <?php ?></h5>
    <a href="#" class="btn btn-success" data-toggle="modal" data-target="#insert-user">Thêm mới</a>
    
    <hr/>
    <table class="table">
        
        <thead class="thead-light">
            <tr>
            <th scope="col">ID người dùng</th>
            <th scope="col">Phân quyền</th>
            <th scope="col">Tên đăng nhập</th>
            <th scope="col">Tên người dùng</th>
            <th scope="col">Truy cập</th>
            <th scope="col">Sửa</th>
            
            </tr>
        </thead>
        <tbody>
        <?php
            $start=($current_page-1)*$limit_record;
            foreach(get_record_limit_user($conn,$_SESSION['ID_USER'],$start,$limit_record) as $a)
            {
                $truycap=$a['TRUY_CAP']==0?'Không':'Có';
                $tc=$a['TRUY_CAP']==1?1:0;
                echo '<tr>
                <th scope="row">'.$a['ID_USER'].'</th>
                <td>'.$a['TEN_PHAN_QUYEN'].'</td>
                <td>'.$a['USER_NAME'].'</td>
                <td>'.$a['ho_ten_user'].'</td>
                <td>'.$truycap.'</td>
                <td><a href="#" class="btn btn-primary" data-toggle="modal" data-target="#update-user"
                    data-id="'.$a['ID_USER'].'"
                    data-access="'.$tc.'"
                    data-author="'.$a['ID_PHAN_QUYEN'].'">Sửa</a></td>
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
            <a class="page-link" href="index.php?p=ds_nguoidung&page='.($current_page-1).'" aria-label="Previous">
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
                    echo '<li class="page-item disabled"><a class="page-link" href="index.php?p=ds_nguoidung&page='.$i.'">'.$i.'</a></li>';
                }
                else
                {
                    echo '<li class="page-item"><a class="page-link" href="index.php?p=ds_nguoidung&page='.$i.'">'.$i.'</a></li>';
                }
            }
        ?>
           
        <?php
        if ($current_page < $total_page && $total_page > 1){
            echo '<li class="page-item">
            <a class="page-link" href="index.php?p=ds_nguoidung&page='.($current_page+1).'" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
                <span class="sr-only">Next</span>
            </a>
            </li>';
        }
        ?>
            
        </ul>
    </nav>
</div>
<?php
include "popup/insert_user.php";
include "popup/update_user.php"; 
?>

<script>
    $('#update-user').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)
    var id = button.data('id')
    var access = button.data('access')
    var authour = button.data('author')
    var modal = $(this)
    document.getElementById("txt_id_user").value = String(id)
    modal.find('#user_access').val(access)
    modal.find('#user_athour_option').val(authour)
    })
</script>