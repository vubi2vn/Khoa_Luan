
<?php
$birth="";
$sex="";
$phone="";
$id=$_SESSION["ID_USER"];
$rs=get_user_info($conn,$id);
if($rs!=[null,null,null,null])
{
        $name=$rs["0"];
        $birth=$rs["1"];
        $phone=$rs["3"];
        if($rs["2"]==true)
        {
            $sex="Nam";
        }
        else
        {
            $sex="Nữ";
        }
        if($rs[4]!=null)
        {
            $avatar=$rs[4];
        }
    
}

?>

<?php
// Đổi thông tin tài khoản
if(isset($_POST["btn-submit-user"]))
{
    $name=trim($_POST['txt_user_name']);
    $birth=$_POST['txt_birthday'];
    $sex=$_POST['gioitinh'];
    $phone=$_POST['txt_phone'];
    if (update_user_info($conn,$id,$name,(string)$birth,$sex,$phone))
    {
        echo "<script type='text/javascript'>alert('Cập nhật thành công!');</script>";
        header('refresh:1');
    }
    else
    {
        echo "<script type='text/javascript'>alert('Cập nhật thất bại!);</script>";
    }
}
?>

<?php
//Upload hình
if(isset($_POST["btn_submit_avatar"]))
{
    include "backend/uploadIMG.php" ;
    if ($url!="")
    {
        if(update_user_avatar($conn,$id,$url))
        {
            echo "<script type='text/javascript'>alert('Cập nhật ảnh đại diện thành công!');</script>";
            header('refresh:1');
        }
    }
    else
    {
        echo "<script type='text/javascript'>alert('Cập nhật ảnh đại diện thất bại!\n".$err."');</script>";
    }
}

?>
<div class="info-user">
    <h5>Thông tin tài khoản</h5>
    <div class="row">
        <div class="col-4">
            <div class="user-image">
            <a href="#" data-toggle="modal" data-target="#change_avatar">
                <img src="<?php echo $avatar ?>" alt="avatar" class="rounded-circle user-avatar">
            </a>
            </div>
            <ul class="list-group">
                <a href="#" class="list-group-item list-group-item-action" data-toggle="modal" data-target="#change_info_user" ><i class="fas fa-user"></i> Cập nhật thông tin</a>
                <a href="#" class="list-group-item list-group-item-action" data-toggle="modal" data-target="#change_avatar"><i class="fas fa-portrait"></i> Đổi ảnh đại diện</a>
                <a href="#" class="list-group-item list-group-item-action" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-key"></i> Đổi mật khẩu</a>
                <a href="#" class="list-group-item list-group-item-action" data-toggle="modal" data-target="#log_out"><i class="fas fa-sign-out-alt"></i> Đăng xuất</a>
            </ul>
        </div>
        <div class="col">
            <div class="user-information">
                <ul class="list-group">
                    <li class="list-group-item" style="border-top:none;border-left:none;border-right:none"><div class="user-info-left">Họ và tên:</div> <div class="user-info-right"><?php echo $name ?></div></li>
                    <li class="list-group-item" style="border-top:none;border-left:none;border-right:none"><div class="user-info-left">Ngày sinh:</div> <div class="user-info-right"><?php echo $birth ?></div></li>
                    <li class="list-group-item" style="border-top:none;border-left:none;border-right:none"><div class="user-info-left">Giới tính:</div> <div class="user-info-right"><?php echo $sex ?></div></li>
                    <li class="list-group-item" style="border-top:none;border-left:none;border-right:none"><div class="user-info-left">Số điện thoại:</div> <div class="user-info-right"><?php echo $phone ?></div></li>
                    <li class="list-group-item" style="border-top:none;border-left:none;border-right:none"><div class="user-info-left">Email:</div> <div class="user-info-right">Admin</div></li>
                </ul>
            </div>
        </div>
    </div>
    <?php include "popup/change_info_user.php" ?>
    <?php include "popup/change_avatar.php" ?>
</div>