<div class="modal fade" id="report_cmt" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5>Báo cáo bình luận</h5>
        </div>
        <div class="modal-body">
        <form name="report_cmt" method="post">

        <div class="form-group" >
            <label class = "label-info">Nội dung bình luận:</label>
            <div class="text-box-info">
                <textarea name ="noidung_binhluan" id ="noidung_binhluan" class="form-control" readonly></textarea>
                <input type="text" name ="id_noidung" id ="id_noidung" class="form-control" readonly hidden/>
            </div>
        </div>
        

        <div class="form-group" >
            <label class = "label-info">Loại báo cáo:</label>
            <div class="text-box-info">
                <select class="form-control" id="ID_BAO_CAO" name="ID_BAO_CAO" >
                <?php
                    $bao_cao_binh_luan = bao_cao_binh_luan($conn);
                    while($row_bao_cao_binh_luan = mysqli_fetch_array($bao_cao_binh_luan))                 
                    {
                        echo '<option value="'.$row_bao_cao_binh_luan["ID_BAO_CAO"].'">'.$row_bao_cao_binh_luan["LOAI_BAO_CAO"].'</option>';
                    }
                ?>
                </select>
            </div>
            
        </div>
        
        <div class="form-group" >
            <label class = "label-info">Nội dung:</label>
            <div class="text-box-info">
                <textarea name ="noidung_baocao" rows="7" class="form-control"></textarea>
            </div>
        </div>
        
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
            <input type="submit" class="btn btn-primary" value="Báo cáo" name="btn_update_baocao"/>
        </div>
        </div>
        </form>
    </div>
    </div>