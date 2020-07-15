<div class="modal fade" id="update-store" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5>Cập nhật cửa hàng</h5>
        </div>
        <div class="modal-body">
        <form method="post" enctype="multipart/form-data">
            <div class="form-group" >
                <label class="label-info">ID cửa hàng:</label>
                <div class="text-box-info"><input class="form-control" type="text" name="txt_store_id" id="txt_store_id" readonly/></div>
            </div>
            <div class="form-group" >
                <label class="label-info">Tên cửa hàng:</label>
                <div class="text-box-info"><input class="form-control" type="text" name="txt_nstore_name" id="txt_nstore_name" placeholder="vd: Điện máy xanh" minlength="8" maxlength="50" required/></div>
            </div>
            <div class="form-group">
                <label class="label-info">Link website:</label>
                <div class="text-box-info"><input class="form-control" name="txt_nlink" id="txt_nlink" type="text" placeholder="vd: http://dienmayxanh.com"/ maxlength="200"></div>
            </div>
            <div class="form-group">
                <label class="label-info">Logo:</label>
                <div class="text-box-info"><input type="file" class="form-control-file" name="user_navatar" accept="image/*"/></div>
            </div>
        
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
            <input type="submit" class="btn btn-primary" name="btn_submit" value="Cập nhật"/>
        </div>
        </div>
        </form>
    </div>
    </div>