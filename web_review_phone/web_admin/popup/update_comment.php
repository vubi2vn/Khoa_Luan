<div class="modal fade" id="update-comment" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5>Cập nhật bình luận</h5>
        </div>
        <div class="modal-body">
        <form method="post">
            <div class="form-group">
                <label class="label-info">ID:</label>
                <div class="text-box-info"><input class="form-control" type="text" name="txt_idcomment" readonly id="txt_id_comment"/></div>
            </div>
            <div class="form-group">
                <label class="label-info">Phân lớp:</label>
                <div class="text-box-info">
                    <select class="form-control" name="select_class" id="select_class">
                    <option value="0">Tiêu cực</option>
                    <option value="1">Tích cực</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="label-info">Ẩn bình luận:</label>
                <div class="text-box-info">
                <input  name="radio_hide" id="radio_hide_false" type="radio" value="0"/> Không<br/>
                <input  name="radio_hide" id="radio_hide_true" type="radio" value="1" /> Có<br/>
                </div>
            </div>
        
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
            <input type="submit" class="btn btn-primary" name="btn-update-comment" value="cập nhật"/>
        </div>
        </div>
        </form>
    </div>
    </div>