<div class="container-dangnhap center">
    <img src="images/logo.png" alt="logo">
    <div class="tab-content" id="pills-tabContent">
        <!-- dang nhap -->
        <div class="tab-pane fade show active" id="pills-dangnhap" role="tabpanel" aria-labelledby="tab-dangnhap">
            <h3>Đăng nhập</h3>
            <p>Nhập thông tin</p>
            <div class="sign-in left">
                <form id="login-form" class="form">                       
                    <div class="form-group">
                        <label>Tên đăng nhập</label><br>
                        <input type="text" name="username" id="username" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Mật khẩu</label><br>
                        <input type="password" name="password" id="password" class="form-control">
                    </div>
                    <div class="right">
                        <button type="button" class="btn btn-primary">Xác nhận</button>
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
                    <button type="button" class="btn btn-primary">Xác nhận</button>
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