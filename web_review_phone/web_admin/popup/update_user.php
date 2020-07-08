<div class="modal fade" id="update-user" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5>Cập nhật tài khoản</h5>
        </div>
        <div class="modal-body">
        <form method="post">
            <div class="form-group">
                <label class="label-info">ID user:</label>
                <div class="text-box-info">
                <input class="form-control" type="text" name="txt_id_user" id="txt_id_user" placeholder="vd: admin" readonly/>
                <small id="user-name-error" ></small>
                </div>
            </div>
            <div class="form-group">
                <label class="label-info">Truy cập:</label>
                <div class="text-box-info"><select class="form-control"  name="user_access" id="user_access">
                <option value="1">Có</option>
                <option value="0">Không</option>
                </select></div>
            </div>
            <div class="form-group">
                <label class="label-info">Quyền:</label>
                <div class="text-box-info"><select class="form-control"  name="user_athour_option" id="user_athour_option">
                <option value="1">Admin</option>
                <option value="2">Người dùng</option>
                <option value="3">Tác giả</option>
                </select></div>
            </div>

        
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
            <input type="submit" class="btn btn-primary" name="btn-update-user" value="Cập nhật"/>
        </div>
        </div>
        </form>
    </div>
    </div>
