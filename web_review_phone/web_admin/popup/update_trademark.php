<div class="modal fade" id="update-trademark" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5>Cập nhật hãng sản xuất</h5>
        </div>
        <div class="modal-body">
        <form method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label class="label-info">ID:</label>
                <div class="text-box-info"><input class="form-control" type="text" name="txt_idtrademark" readonly id="txt_id_trademark"/></div>
            </div>
            <div class="form-group">
                <label class="label-info">Hãng sản xuất:</label>
                <div class="text-box-info"><input class="form-control" type="text" name="txt_ntrademark" id="txt_ntrademark" placeholder="vd: VSmart"/></div>
            </div>
            
            <div class="form-group">
                <label class="label-info">Quốc gia:</label>
                <div class="text-box-info"><input class="form-control" name="txt_ncountry" id="txt_ncountry" type="text" placeholder="vd: Việt Nam"/></div>
            </div>
            <div class="form-group">
                <label class="label-info">Logo:</label>
                <div class="text-box-info"><input type="file" class="form-control-file" name="user_navatar" accept="image/*"/></div>
            </div>
        
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
            <input type="submit" class="btn btn-primary" name="btn_submit" value="cập nhật"/>
        </div>
        </div>
        </form>
    </div>
    </div>