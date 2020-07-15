<div class="modal fade" id="insert-trademark" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5>Thêm hãng sản xuất</h5>
        </div>
        <div class="modal-body">
        <form method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label class="label-info">Hãng sản xuất:</label>
                <div class="text-box-info"><input class="form-control" type="text" name="txt_trademark" placeholder="vd: VSmart" minlength="8" maxlength="50" required/></div>
            </div>
            <div class="form-group">
                <label class="label-info">Quốc gia:</label>
                <div class="text-box-info"><input class="form-control" name="txt_country" type="text" placeholder="vd: Việt Nam" maxlength="50"/></div>
            </div>
            <div class="form-group">
                <label class="label-info">Logo:</label>
                <div class="text-box-info"><input type="file" class="form-control-file" name="user_avatar" accept="image/*"/></div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
            <input type="submit" class="btn btn-primary" name="btn_submit_avatar" value="Thêm"/>
        </div>
        </div>
        </form>
    </div>
    </div>