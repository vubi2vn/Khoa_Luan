<?php
    if(isset($_POST["btnSend"]))
    {
        
    }
?>

<div class="container-1">
    <p class=" navigat">Bình luận</p>
    <div class="chitiet-cmt">
        <form class="form" method = "POST">
            <textarea class="form-control" rows="3"></textarea>
            <div class="chitiet-cmt-emotion">
                <a href="#">Quy định đăng bình luận !</a>
                <button name="btnSend" type="submit" class="btn btn-primary">Gửi</button>
            </div>
        </form>
        <!--  -->
        <ul class="nav nav-pills mb-2" id="pills-tab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="tab-tongcmt" data-toggle="pill" href="#pills-tongcmt" role="tab" aria-controls="pills-tongcmt" aria-selected="true"><?php echo tongcmt($conn);?>lượt đánh giá</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="tab-cmtTieuCuc" data-toggle="pill" href="#pills-cmtTieuCuc" role="tab" aria-controls="pills-cmtTieuCuc" aria-selected="true"><?php echo TongTieuCuc($conn);?> tiêu cực</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="tab-cmtTichCuc" data-toggle="pill" href="#pills-cmtTichCuc" role="tab" aria-controls="pills-cmtTichCuc" aria-selected="false"><?php echo TongTichCuc($conn);?> tích cực</a>
        </li>
        </ul>
        <!--  -->
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-tongcmt" role="tabpanel" aria-labelledby="tab-tongcmt">
                <h3>Tất cả bình luận</h3>  
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
        </div>
        <!-- tieucuc -->
        <div class="tab-pane fade" id="pills-cmtTieuCuc" role="tabpanel" aria-labelledby="tab-cmtTieuCuc">
            <div class="list-cmt">
                <?php
                    $cmtTieuCuc = cmtTieuCuc($conn);
                    while($row_cmtTieuCuc = mysqli_fetch_array($cmtTieuCuc)) {
                    ?>
                    <div class="cmt">
                        <div class="cmt-ten"><?php echo $row_cmtTieuCuc['TEN_NGUOI_BINH_LUAN'];?></div>
                        <div class="cmt-noidung"><?php echo $row_cmtTieuCuc['NOI_DUNG_BINH_LUAN'];?></div>
                        <i onclick="function_like(this)" class="fas fa-thumbs-up"></i>
                        <a href="#">Báo cáo bình luận</a>
                    </div>
                <?php }?>
            </div>
        </div>
        <!-- tichcuc -->
        <div class="tab-pane fade" id="pills-cmtTichCuc" role="tabpanel" aria-labelledby="tab-cmtTichCuc">
            <div class="list-cmt">
                <?php
                    $cmtTichCuc = cmtTichCuc($conn);
                    while($row_cmtTichCuc = mysqli_fetch_array($cmtTichCuc)) {
                    ?>
                    <div class="cmt">
                        <div class="cmt-ten"><?php echo $row_cmtTichCuc['TEN_NGUOI_BINH_LUAN'];?></div>
                        <div class="cmt-noidung"><?php echo $row_cmtTichCuc['NOI_DUNG_BINH_LUAN'];?></div>
                        <i onclick="function_like(this)" class="fas fa-thumbs-up"></i>
                        <a href="#">Báo cáo bình luận</a>
                    </div>
                <?php }?>
            </div>
        </div>
        <!--  -->
    </div>
    <div class="clr"></div>
</div>
