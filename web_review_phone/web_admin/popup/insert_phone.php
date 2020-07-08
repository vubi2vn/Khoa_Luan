<?php
$trademark=select_all_trademark($conn);
?>
<div class="modal fade" id="insert-phone" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5>Thêm điện thoại mới</h5>
        </div>
        <div class="modal-body">
        <form method="post" enctype="multipart/form-data">
            <div class="form-group" >
                <label class="label-info">Tên điện thoại:</label>
                <div class="text-box-info"><input class="form-control" type="text" name="txt_phone_name" id="txt_phone_name" placeholder="vd: Nokia A92"/></div>
            </div>
            <div class="form-group" style="height:44px">
                <label "label-info">Hãng sản xuất:</label>
                <div class="text-box-info">
                    <select class="form-control" id="ntrademark_option" name="ntrademark_option" >
                    <?php
                        foreach($trademark as $a)
                        {
                            echo '<option value="'.$a["ID_HANG_SAN_XUAT"].'">'.$a["TEN_HANG_SAN_XUAT"].'</option>';
                        }
                    ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="label-info">Giá thị trường:</label>
                <div class="text-box-info"><input class="form-control" name="txt_price" id="txt_price" type="number"/></div>
            </div>
            <div class="form-group">
                <label class="label-info">Hình ảnh:</label>
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