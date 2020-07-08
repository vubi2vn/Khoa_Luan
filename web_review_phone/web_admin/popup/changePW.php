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
    <div class="modal fade" id="changePW" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5>Đổi mật khẩu</h5>
        </div>
        <div class="modal-body">
            <form method="post" name="changePW-form" required>
                <div class="form-group">
                    <input type="password" name="old-pass" id="old-pass" class="form-control" onkeyup="checkpass()" onblur="checkpass()" placeholder="Mật khẩu hiện tại">
                    <small id="check_pass"></small>
                </div>
                <div class="form-group">
                    <input type="password" name="new-pass" id="new-pass" class="form-control" onkeyup="checknewpass()" placeholder="Mật khẩu mới">
                    <small id="check_new_pass"></small>
                </div>
                <div class="form-group">
                    <input type="password" name="re-pass" id="re-pass" class="form-control"  onkeyup="checkrepass()" placeholder="Xác nhận mật khẩu">
                    <small id="check_re_pass"></small>
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
<script>
    function checkpass(){
        var x,y;
        x = document.getElementById("old-pass").value;
        if(x.length==0)
        {
            y="Mật khẩu không được để trống!";
            document.getElementById("check_pass").style.color = 'red';
        }
        else
        {
            y="Mật khẩu hợp lệ!"
            document.getElementById("check_pass").style.color = 'green';
        }
        document.getElementById("check_pass").innerHTML = y;
    }
    function checknewpass(){
        var x,y;
        x = document.getElementById("new-pass").value;
        if(x.length<8||x.length>20)
        {
            y="Mật khẩu phải từ 8 đến 20 ký tự!";
            document.getElementById("check_new_pass").style.color = 'red';
        }
        else
        {
            y="Mật khẩu hợp lệ!"
            document.getElementById("check_new_pass").style.color = 'green';
        }
        document.getElementById("check_new_pass").innerHTML = y;
    }
    function checkrepass(){
        var x,y,z;
        x = document.getElementById("new-pass").value;
        z=document.getElementById("re-pass").value;
        if(x!=z)
        {
            y="Mật khẩu chưa trùng khớp!";
            document.getElementById("check_re_pass").style.color = 'red';
        }
        else
        {
            y="Mật khẩu đã trùng khớp!"
            document.getElementById("check_re_pass").style.color = 'green';
        }
        document.getElementById("check_re_pass").innerHTML = y;
    }

</script>