<?php
//Đổi mật khẩu
if(isset($_POST["btn_change_pw"]))
{
    $opass=$_POST["old-pass"];
    $npass=$_POST["new-pass"];
    $rpass=$_POST["re-pass"];
    $user_name=$_SESSION["USER_NAME"];
    if($opass==""||$opass==null)
    {
        echo '<script>alert("Mật khẩu không được bỏ trống");</script>';
    }
    else if($npass==""||$npass==null)
    {
        echo '<script>alert("Mật khẩu mới không được bỏ trống");</script>';
    }
    else if(strlen($npass)<8||strlen($npass)>20)
    {
        echo '<script>alert("Mật khẩu mới phải từ 8 đến 20 ký tự");</script>';
    }
    else if($npass!=$rpass)
    {
        echo '<script>alert("Xác nhận mật khẩu chưa chính xác");</script>';
    }
    else if(!check_password($conn,$user_name,md5($opass)))
    {
        echo '<script>alert("Mật khẩu cũ chưa chính xác'.md5($opass).'");</script>';
    }
    else if(change_password($conn,$user_name,md5($npass)))
    {
        echo '<script>alert("Đổi mật khẩu thành công!");</script>';
    }
    else
    {
        echo '<script>alert("Xảy ra lỗi trong quá trình thay đổi");</script>';
    }
}

?>
<div class="change-pass">
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5>Đổi mật khẩu</h5>
        </div>
        <div class="modal-body">
            <form method="post" name="changePW-form" required>
                <div class="form-group">
                    <input type="password" name="old-pass" class="form-control"  placeholder="Mật khẩu hiện tại">
                </div>
                <div class="form-group">
                    <input type="password" name="new-pass" class="form-control"  placeholder="Mật khẩu mới">
                </div>
                <div class="form-group">
                    <input type="password" name="re-pass" class="form-control"  placeholder="Xác nhận mật khẩu">
                </div>
            
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
            <input type="submit" class="btn btn-primary" name="btn_change_pw" value="Xác nhận" />
        </div>
        </div>
        </form>
    </div>
    </div>

</div>