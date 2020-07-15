<div class="modal fade" id="update-report" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5>Cập nhật hãng sản xuất</h5>
        </div>
        <div class="modal-body">
        <form method="post">
            <div class="form-group">
                <label class="label-info">ID:</label>
                <div class="text-box-info"><input class="form-control" type="text" name="txt_idreport" readonly id="txt_id_report"/></div>
            </div>
            <div class="form-group">
                <label class="label-info">Loại báo cáo:</label>
                <div class="text-box-info"><input class="form-control" type="text" name="txt_nreport" id="txt_nreport" placeholder="vd: Sai lớp" minlength="8" maxlength="50" required/></div>
            </div>
            <div class="form-group">
                <label class="label-info">Mô tả:</label>
                <div class="text-box-info"><input class="form-control" name="txt_ndescribe" id="txt_ndescribe" type="text" placeholder="vd: Sai lớp tích cực hoặc tiêu cực" maxlength="1000"/></div>
            </div>
        
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
            <input type="submit" class="btn btn-primary" name="btn-update-report" value="cập nhật"/>
        </div>
        </div>
        </form>
    </div>
    </div>