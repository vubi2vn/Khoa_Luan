<?php
    include "./algorithm_py/change_to_vector.php";
?>

<?php
    //kiem tra idbv
    if (isset($_GET['idBV'])){
        $idBV = $_GET["idBV"];
        if($idBV==null)
        {
            header('Location:index.php?p=home');
        }
    }
    else
    {
        header('Location:index.php?p=home');
    }
    //new cmt
    if(isset($_POST["btnSend"]))
    {
        if(isset($_SESSION["ID_USER"])) 
        { 
            $ID_USER = $_SESSION["ID_USER"];
        }
        else 
        { 
            echo "<script type='text/javascript'>alert('Bạn cần đăng nhập trước khi bình luận!');
            </script>";
        }
        $user_information = mysqli_fetch_array(Get_user_infomation($conn,$ID_USER));
        $TEN = $user_information['ho_ten_user'];
        $noi_dung = $_POST["noi_dung"];

        //phân loại bình luận
        $PHAN_LOAI="";
        $vector=null;
        $string="";
        $string=trim(strtoupper($_POST["noi_dung"]));
        $vector=change_to_vector($string);
        $command = escapeshellcmd('Testing.py '.$vector[0].' '.$vector[1]); //Chuyển mã trong tập tin test.py thành các lệnh
        $output = shell_exec($command); // Lấy kết quả trả về biến $output
        $PHAN_LOAI=trim($output);
        
        Insert_cmt($conn,$idBV,$ID_USER,$TEN,$noi_dung,$PHAN_LOAI);
        Update_DiemDanhGia($conn,$idBV);
        echo "<script type='text/javascript'>alert('Bình luận thành công!');</script>";
        header('refresh:1');
    }
?>


<div class="container-1">
    
    <p class=" navigat"><a href='javascript: history.go(-1)'>Chi tiết sản phẩm</a> -> Bình luận</p>
    <div class="chitiet-cmt">
        <form class="form" method = "POST">
            <textarea name="noi_dung" class="form-control" rows="3" minlength="20" maxlength="500"></textarea>
            <div class="chitiet-cmt-emotion">
                <a href="#">Quy định đăng bình luận !</a>
                <button name="btnSend" type="submit" class="btn btn-primary" >Gửi</button>
            </div>
        </form>
        <!--  -->
        <ul class="nav nav-pills mb-2" id="pills-tab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="tab-tongcmt" data-toggle="pill" href="#pills-tongcmt" role="tab" aria-controls="pills-tongcmt" aria-selected="true"><?php echo tongcmt($conn,$idBV);?> lượt đánh giá</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="tab-cmtTieuCuc" data-toggle="pill" href="#pills-cmtTieuCuc" role="tab" aria-controls="pills-cmtTieuCuc" aria-selected="true"><?php echo TongTieuCuc($conn,$idBV);?> tiêu cực</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="tab-cmtTichCuc" data-toggle="pill" href="#pills-cmtTichCuc" role="tab" aria-controls="pills-cmtTichCuc" aria-selected="false"><?php echo TongTichCuc($conn,$idBV);?> tích cực</a>
        </li>
        </ul>
        <!--  -->
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-tongcmt" role="tabpanel" aria-labelledby="tab-tongcmt">
                <h3>Tất cả bình luận</h3>  
                <div class="list-cmt">
                <?php
                    $BinhLuanList = BinhLuanList($conn,$idBV);
                   
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
                    $cmtTieuCuc = cmtTieuCuc($conn,$idBV);
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
                    $cmtTichCuc = cmtTichCuc($conn,$idBV);
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
