
    
    <div class="modal fade" id="change_info_user" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5>Cập nhật thông tin</h5>
        </div>
        <div class="modal-body">
        <form name="change-info-user" method="post">
            <div class="form-group">
                <label class="label-info">Họ và tên:</label>
                <div class="text-box-info"><input class="form-control" name="txt_user_name" type="text" placeholder="vd: Nguyễn Văn A" value="<?php echo $name ?>" name="user-name"/></div>
            </div>
            <div class="form-group">
                <label class="label-info">Ngày sinh:</label>
                <div class="text-box-info"><input class="form-control" name="txt_birthday" type="date" placeholder="vd: 09/07/1998" value="<?php echo $birth ?>"></div>
            </div>
            <div class="form-group">
                <label class="label-info">Giới tính:</label>
                <div class="text-box-info" style="padding-left:20px">
                    <input class="form-check-input" type="radio" name="gioitinh" value="1" <?php if($sex=="Nam") echo 'checked' ?>>
                    <label class="form-check-label" >Nam</label>  <br/>
                    <input class="form-check-input" type="radio" name="gioitinh" value="0"<?php if($sex=="Nữ") echo 'checked' ?>>
                    <label class="form-check-label" >Nữ</label>
                </div>
            </div>
            <div class="form-group">
                <label class="label-info">Số điện thoại:</label>
                <div class="text-box-info"><input class="form-control" name="txt_phone" type="number" placeholder="vd: Nguyễn Văn A" value="<?php echo $phone ?>"></div>
            </div>
            <div class="form-group">
                <label class="label-info">Email:</label>
                <div class="text-box-info"><input class="form-control" type="email" placeholder="vd: abc@gmail.com"></div>
            </div>
        
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
            <input type="submit" class="btn btn-primary" name="btn-submit-user" value="Cập nhật"/>
        </div>
        </div>
        </form>
    </div>
    </div>
