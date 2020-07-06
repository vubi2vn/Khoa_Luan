<?php
if(isset($_POST["btnLogin"]))
{
    $username = $_POST["username"];
    $password = $_POST["password"];
    $qr ="
    SELECT * FROM `user`,`phan_quyen` WHERE user.USER_NAME = '$username' AND user.PASSWORD='$password' AND user.ID_PHAN_QUYEN = phan_quyen.ID_PHAN_QUYEN
    ";
    $user = mysqli_query($conn,$qr);
    if(mysqli_num_rows($user)==1)
    {
        $row_users = mysqli_fetch_array($user);
        $_SESSION["ID_USER"] = $row_users["ID_USER"];
        $_SESSION["ID_PHAN_QUYEN"] = $row_users["ID_PHAN_QUYEN"];
        $_SESSION["USER_NAME"] = $row_users["USER_NAME"]; 
        $_SESSION["TEN_PHAN_QUYEN"] = $row_users["TEN_PHAN_QUYEN"];  
        header('Location:index.php?p=home'); 
    }
    else
    {
        echo "<script type='text/javascript'>alert('Sai tài khoản hoặc mật khẩu!');</script>";
    }
}
?>

<div class="container-dangnhap center">
    <img src="images/logo.png" alt="logo">
    <div class="tab-content" id="pills-tabContent">
        <!-- dang nhap -->
        <div class="tab-pane fade show active" id="pills-dangnhap" role="tabpanel" aria-labelledby="tab-dangnhap">
            <h3>Đăng nhập</h3>
            <p>Nhập thông tin</p>
            <div class="sign-in left">
                <form id="login-form" class="form" method = "POST">                       
                    <div class="form-group">
                        <label>Tên đăng nhập</label><br>
                        <input type="text" name="username" id="username" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Mật khẩu</label><br>
                        <input type="password" name="password" id="password" class="form-control">
                    </div>
                    <div class="right">
                        <button name="btnLogin" type="submit" class="btn btn-primary">Xác nhận</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- tao tai khoan -->
        <div class="tab-pane fade" id="pills-taotaikhoan" role="tabpanel" aria-labelledby="tab-taotaikhoan">
            <h3>Tạo tài khoản</h3>
            <div class="sign-in left">
            <form id="login-form" class="form">                       
                <div class="form-group">
                    <label>Tên đăng nhập</label><br>
                    <input type="text" name="new-username" id="new-username" class="form-control">
                </div>
                <div class="form-group">
                    <label>Mật khẩu</label><br>
                    <input type="password" name="new-password" id="new-password" class="form-control">
                </div>
                <div class="form-group">
                    <label>Nhập lại mật khẩu</label><br>
                    <input type="password" name="confirm-password" id="confirm-password" class="form-control">
                </div>
                <div class="right">
                    <button type="button" class="btn btn-primary">Đăng ký</button>
                </div>
            </form>
            </div>
        </div>
    </div>
    <ul class="nav nav-pills mb-2" id="pills-tab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="tab-dangnhap" data-toggle="pill" href="#pills-dangnhap" role="tab" aria-controls="pills-dangnhap" aria-selected="true">Đăng nhập</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="tab-taotaikhoan" data-toggle="pill" href="#pills-taotaikhoan" role="tab" aria-controls="pills-taotaikhoan" aria-selected="false">Tạo tài khoản</a>
        </li>
    </ul>
</div>