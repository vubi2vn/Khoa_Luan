<?php
$trademarks=select_all_trademark($conn);
?>
<div class="modal fade" id="update-phone" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5>Cập nhật điện thoại</h5>
        </div>
        <div class="modal-body">
        <form method="post" enctype="multipart/form-data">
            <div class="form-group" >
                <label class="label-info">ID điện thoại:</label>
                <div class="text-box-info"><input class="form-control" type="text" name="txt_phone_id" id="txt_phone_id" readonly/></div>
            </div>
            <div class="form-group" >
                <label class="label-info">Tên điện thoại:</label>
                <div class="text-box-info"><input class="form-control" type="text" name="txt_nphone_name" id="txt_nphone_name" placeholder="vd: Nokia A92" minlength="8" maxlength="50" required/></div>
            </div>
            <div class="form-group" style="height:44px">
                <label "label-info">Hãng sản xuất:</label>
                <div class="text-box-info">
                    <select class="form-control" id="trademark_option" name="trademark_option" >
                    <?php
                        foreach($trademarks as $a)
                        {
                            echo '<option value="'.$a["ID_HANG_SAN_XUAT"].'">'.$a["TEN_HANG_SAN_XUAT"].'</option>';
                        }
                    ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="label-info">Giá thị trường:</label>
                <div class="text-box-info"><input class="form-control" name="txt_nprice" id="txt_nprice" type="number"/></div>
            </div>
            <div class="form-group">
                <label class="label-info">Hình ảnh:</label>
                <div class="text-box-info"><input type="file" class="form-control-file" name="user_navatar" accept="image/*"/></div>
            </div>
        
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
            <?php
            if($trademarks!=null)
            {
                echo '<input type="submit" class="btn btn-primary" name="btn_submit" value="Cập nhật"/>';
            }
            ?>
            
        </div>
        </div>
        </form>
    </div>
    </div>