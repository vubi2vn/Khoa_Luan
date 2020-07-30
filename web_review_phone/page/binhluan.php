<?php
    include "./algorithm_py/change_to_vector.php";
    $ID_USER = null;
    if(isset($_SESSION["ID_USER"])) 
    { 
        $ID_USER = $_SESSION["ID_USER"];
    }
?>
<!-- them bao cao -->
<?php
    if(isset($_POST['btnLike']))
    {   
        if($ID_USER == null) 
        { 
            echo "<script type='text/javascript'>alert('Bạn cần đăng nhập trước khi tương tác!');
            window.location.href='index.php?p=dangnhap';</script>";
            exit;
        }
        $ID_BINH_LUAN = $_POST['id_binh_luan'];
        like_cmt($conn,$ID_BINH_LUAN,$ID_USER);
        header('refresh:1');
    }
    if(isset($_POST['btn_update_baocao']))
    {
        if($ID_USER == null) 
        { 
            echo "<script type='text/javascript'>alert('Bạn cần đăng nhập trước khi tương tác!');
            window.location.href='index.php?p=dangnhap';</script>";
            exit;
        }
        $ID_BINH_LUAN = $_POST['id_noidung'];
        $ID_BAO_CAO = $_POST['ID_BAO_CAO'];
        $NOI_DUNG_BAO_CAO = $_POST['noidung_baocao'];
        insert_baocao($conn,$ID_BINH_LUAN,$ID_USER,$ID_BAO_CAO,$NOI_DUNG_BAO_CAO);
        echo "<script type='text/javascript'>alert('Báo cáo thành công!');</script>";
        header('refresh:1');
    }
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
        if($ID_USER == null) 
        { 
            echo "<script type='text/javascript'>alert('Bạn cần đăng nhập trước khi bình luận!');
            window.location.href='index.php?p=dangnhap';</script>";
            exit;
        }
       
        $user_information = mysqli_fetch_array(Get_user_infomation($conn,$ID_USER));
        $TEN = $user_information['ho_ten_user'];
        $noi_dung = $_POST["noi_dung"];

        //phân loại bình luận
        $PHAN_LOAI="";
        $vector=null;
        $string="";
        $string=trim(mb_strtolower($_POST["noi_dung"],'UTF-8'));
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
            <textarea name="noi_dung" class="form-control" rows="3" maxlength="500"></textarea>
            <div class="chitiet-cmt-emotion">
                <a href="#" data-toggle="modal" data-target="#quydinh_cmt">Quy định đăng bình luận !</a>
                
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
        <!-- toàn bộ cmt  -->
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-tongcmt" role="tabpanel" aria-labelledby="tab-tongcmt">
                 
                <div class="list-cmt">
                <?php
                    if(mysqli_num_rows(MyBinhLuan($conn,$idBV,$ID_USER))>0){
                        
                        echo '<h5>Bình luận của bạn</h5><div class="My-cmt">'; 
                        $MyBinhLuan = MyBinhLuan($conn,$idBV,$ID_USER);                 
                        while($row_MyBinhLuan = mysqli_fetch_array($MyBinhLuan)){
                            echo '<div class="cmt">  
                            <div class="cmt-noidung">'.$row_MyBinhLuan['NOI_DUNG_BINH_LUAN'].'</div>   
                            <i class="fas fa-thumbs-up"></i> '
                            .$row_MyBinhLuan['LUOT_LIKE'].'</div>'                      
                            ;
                        }
                        echo '</div>';
                    }
                    $BinhLuanList = BinhLuanList($conn,$idBV,$ID_USER);                 
                    while($row_BinhLuanList = mysqli_fetch_array($BinhLuanList)) {
                    ?>
                    <form method = "POST">
                    <div class="cmt">

                        <div class="cmt-ten"><?php echo $row_BinhLuanList['TEN_NGUOI_BINH_LUAN'];?></div>
                        <div class="cmt-noidung"><?php echo $row_BinhLuanList['NOI_DUNG_BINH_LUAN'];?></div>
                        
                        <input name ="id_binh_luan" value = "<?php echo $row_BinhLuanList['ID_BINH_LUAN'] ?>" hidden></input>
                        <button name="btnLike" type="submit" class="fas fa-thumbs-up" <?php check_like($conn,$row_BinhLuanList['ID_BINH_LUAN'],$ID_USER);?> ></button>

                        <?php echo $row_BinhLuanList['LUOT_LIKE'];?>

                        <a href="#" data-toggle="modal" data-target="#report_cmt" data-noidung="<?php echo $row_BinhLuanList['NOI_DUNG_BINH_LUAN'];?>"
                        data-id="<?php echo $row_BinhLuanList['ID_BINH_LUAN'];?>"> Báo cáo bình luận</a>
                    </div>
                    </form>
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
                        <button class="fas fa-thumbs-up" <?php check_like($conn,$row_cmtTieuCuc['ID_BINH_LUAN'],$ID_USER);?>></button>
                        <?php echo $row_cmtTieuCuc['LUOT_LIKE'];?>
                        <a href="#" data-toggle="modal" data-target="#report_cmt" data-noidung="<?php echo $row_cmtTieuCuc['NOI_DUNG_BINH_LUAN'];?>"
                        data-id="<?php echo $row_cmtTieuCuc['ID_BINH_LUAN'];?>"> Báo cáo bình luận</a>
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
                        <button class="fas fa-thumbs-up" <?php check_like($conn,$row_cmtTichCuc['ID_BINH_LUAN'],$ID_USER);?>></button>
                        <?php echo $row_cmtTichCuc['LUOT_LIKE'];?>
                        <a href="#" data-toggle="modal" data-target="#report_cmt" data-noidung="<?php echo $row_cmtTichCuc['NOI_DUNG_BINH_LUAN'];?>"
                        data-id="<?php echo $row_cmtTichCuc['ID_BINH_LUAN'];?>"> Báo cáo bình luận</a>
                    </div>
                <?php }?>
            </div>
        </div>
        <!--  -->
    </div>
    <div class="clr"></div>
</div>
<?php
include "./web_admin/popup/report_cmt.php"
?>
<script>
$('#report_cmt').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)
    var noidung = button.data('noidung')
    var id = button.data('id')
    var modal = $(this)
    document.getElementById("noidung_binhluan").value = String(noidung)
    document.getElementById("id_noidung").value = String(id)
    });
</script>
