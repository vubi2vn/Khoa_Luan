<div class="modal fade" id="insert-user" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5>Thêm người dùng mới</h5>
        </div>
        <div class="modal-body">
        <form method="post">
            <div class="form-group">
                <label class="label-info">Tên đăng nhập:</label>
                <div class="text-box-info">
                <input class="form-control" type="text" name="txt_username" id="txt_username" placeholder="vd: admin" onblur="checkuser_name()"/>
                <small id="user-name-error" ></small>
                </div>
            </div>
            <div class="form-group">
                <label class="label-info">Mật khẩu:</label>
                <div class="text-box-info"><input class="form-control" name="txt_password"  id="txt_password" type="password" placeholder="vd: ******" onkeyup="checkpass_newuser()"/>
                <small id="pass-error" ></small>
                </div>
                
            </div>
            <div class="form-group">
                <label class="label-info">Xác nhận:</label>
                <div class="text-box-info"><input class="form-control" name="txt_repassword" id="txt_repassword" type="password" placeholder="vd: ******" onkeyup="checkrepass_newuser()"/>
                <small id="repass-error" ></small>
                </div>
                
            </div>
            <div class="form-group">
                <label class="label-info">Quyền:</label>
                <div class="text-box-info"><select class="form-control"  name="user_athour_option" id="user_athour_option">
                <option value="1">Admin</option>
                <option value="3">Tác giả</option>
                </select></div>
            </div>

        
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
            <input type="submit" class="btn btn-primary" name="btn-insert-user" value="Thêm"/>
        </div>
        </div>
        </form>
    </div>
    </div>
<script>
function checkuser_name(){
        var x,y;
        x = document.getElementById("txt_username").value;
        if(x.length==0)
        {
            y="Tên đăng nhập không được bỏ trống!";
            document.getElementById("user-name-error").style.color = 'red';
        }
        else
        {
            y=""
            document.getElementById("user-name-error").style.color = 'green';
        }
        document.getElementById("user-name-error").innerHTML = y;
    }
function checkpass_newuser(){
    var x,y;
    x = document.getElementById("txt_password").value;
    if(x.length<8||x.length>20)
    {
            y="Mật khẩu phải từ 8 đến 20 ký tự!";
            document.getElementById("pass-error").style.color = 'red';
        }
        else
        {
            y="Mật khẩu hợp lệ!"
            document.getElementById("pass-error").style.color = 'green';
        }
        document.getElementById("pass-error").innerHTML = y;
    }
    function checkrepass_newuser(){
        var x,y,z;
        x = document.getElementById("txt_password").value;
        z=document.getElementById("txt_repassword").value;
        if(x!=z)
        {
            y="Mật khẩu chưa trùng khớp!";
            document.getElementById("repass-error").style.color = 'red';
        }
        else
        {
            y="Mật khẩu đã trùng khớp!"
            document.getElementById("repass-error").style.color = 'green';
        }
        document.getElementById("repass-error").innerHTML = y;
    }
    
</script>