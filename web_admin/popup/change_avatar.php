
<div class="modal fade" id="change_avatar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5>Đổi hình đại diện</h5>
        </div>
        <div class="modal-body">
        <form name="change_avatar" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="user_avatar">Hãy chọn hình đại diện. Lưu ý: Kích thước tệp không quá 10MB.</label>
                <input type="file" class="form-control-file" name="user_avatar" id="user_avatar" accept="image/*">
            </div>
        
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
            <input type="submit" class="btn btn-primary" value="Cập nhật" name="btn_submit_avatar"/>
        </div>
        </div>
        </form>
    </div>
    </div>