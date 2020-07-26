
<div class="modal fade" id="quydinh_cmt" tabindex="-1" role="dialog" aria-labelledby="quydinh_cmt" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Quy định bình luận!</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <label class = "label-info">Không được vi phạm các lỗi sau: </label>
            <div class="text-box-info">
                <select class="form-control" >
                <?php
                    $bao_cao_binh_luan = bao_cao_binh_luan($conn);
                    while($row_bao_cao_binh_luan = mysqli_fetch_array($bao_cao_binh_luan))                 
                    {
                        echo $row_bao_cao_binh_luan["LOAI_BAO_CAO"];
                    }
                ?>
                </select>
            </div>
    
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
        </div>
        </div>
        
    </div>
    </div>