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
                <label class="label-info">Hiện bình luận:</label>
                <div class="text-box-info">
                <input  name="radio_hide" id="radio_hide_false" type="radio" value="0"/> Không<br/>
                <input  name="radio_hide" id="radio_hide_true" type="radio" value="1" /> Có<br/>
                </div>
            </div>
            <div class="form-group">
                <input type="text" hidden name="old_class" id="old_class">
            </div>
            <div class="form-group">
                <input type="text" hidden name="user_report" id="user_report">
            </div>
            <div class="form-group">
                <input type="text" hidden name="user_comment" id="user_comment">
            </div>
            <div class="form-group">
                <input type="text" hidden name="phone_name" id="phone_name">
            </div>
            <div class="form-group">
                <input type="text" hidden name="report_date" id="report_date">
            </div>
            <div class="form-group">
                <input type="text" hidden name="comment_date" id="comment_date">
            </div>
            <div class="form-group">
                <input type="text" hidden name="content" id="content">
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