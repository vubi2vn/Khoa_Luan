<div class="container-1">
    <p class=" navigat">Bình luận</p>
    <div class="chitiet-cmt">
        <textarea class="form-control" rows="3"></textarea>
        <div class="chitiet-cmt-emotion">
            <a href="#">Quy định đăng bình luận !</a>
            <button type="button" class="btn btn-primary">Gửi</button>
        </div>
        <div class="list-cmt">
        <?php
            $BinhLuanList = BinhLuanList($conn);
            while($row_BinhLuanList = mysqli_fetch_array($BinhLuanList)) {
            ?>
            <div class="cmt">
                <div class="cmt-ten"><?php echo $row_BinhLuanList['TEN_NGUOI_BINH_LUAN'];?></div>
                <div class="cmt-noidung"><?php echo $row_BinhLuanList['NOI_DUNG_BINH_LUAN'];?></div>
                <i onclick="function_like(this)" class="fas fa-thumbs-up"></i>
                <a href="#">Báo cáo bình luận</a>
            </div>
            <?php }?>
        </div>
        <div>
            <p><span id="total-cmt"><?php echo TongCmt($conn)?> </span>lượt đánh giá: 
                <span id="total-tieu-cuc"><?php echo TongTieuCuc($conn);?> </span>tiêu cực,
                <span id="total-tich-cuc"><?php echo TongTichCuc($conn);?> </span>tích cực
            </p>
        </div>
    </div>
    <div class="clr"></div>
</div>