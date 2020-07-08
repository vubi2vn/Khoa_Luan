<?php
$store_avai=select_store_havent_link($conn,$id_phone);
?>
<div class="modal fade" id="insert-link" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5>Thêm link</h5>
        </div>
        <div class="modal-body">
        <form method="post">
            <div class="form-group">
                <label "label-info">Cửa hàng</label>
                <select class="form-control" id="store_option" name="store_option">
                <?php
                    foreach($store_avai as $a)
                    {
                        echo '<option value="'.$a["ID_CUA_HANG"].'">'.$a["TEN_CUA_HANG"].'</option>';
                    }
                ?>
                </select>
            </div>
            <div class="form-group">
                <label class="label-info">Link sản phẩm:</label>
                <div class="text-box-info"><input class="form-control" type="text" name="txt_link" placeholder="vd:http://thegioiđiong.com"/></div>
            </div>
        
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
            <input type="submit" class="btn btn-primary" name="btn-insert-link" value="Thêm"/>
        </div>
        </div>
        </form>
    </div>
    </div>