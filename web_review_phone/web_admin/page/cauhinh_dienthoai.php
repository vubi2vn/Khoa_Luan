<?php
//Kiểm tra phân quyền
if($_SESSION["TEN_PHAN_QUYEN"]!="admin")
{
    header("Location:index.php");
}
?>
    <?php
    include "backend/phone.php";
    ?>
    <?php
    $id=null;
    $phone="";
    $cong_nghe_mh="";
    $do_phan_giai_mh="";
    $kich_thuoc_mh="";
    $camera_truoc="";
    $camera_sau="";
    $quay_phim="";
    $cpu="";
    $toc_do="";
    $gpu="";
    $ram="";
    $rom="";
    $the_nho="";
    $sim="";
    $wifi="";
    $bluetooth="";
    $cong_sac="";
    $tai_nghe="";
    $chat_lieu="";
    $kich_thuoc_dt="";
    $trong_luong="";
    $dung_luong_pin="";
    $loai_pin="";
    $cong_nghe_pin="";
    if(isset($_GET["id"]))
    {
        $id=$_GET["id"];
        $phone=select_phone_detail($conn,$id);
        if($phone==null)
        {
            header('Location:index.php?p=ds_dienthoai');
        }
        else
        {
            $cong_nghe_mh=$phone['CONG_NGHE_MAN_HINH'];
            $do_phan_giai_mh=$phone['DO_PHAN_GIAI_MAN_HINH'];
            $kich_thuoc_mh=$phone['KICH_THUOC_MAN_HINH'];
            $camera_truoc=$phone['DO_PHAN_GIAI_CAMERA_TRUOC'];
            $camera_sau=$phone['DO_PHAN_GIAI_CAMERA_SAU'];
            $quay_phim=$phone['QUAY_PHIM'];
            $cpu=$phone['CHIPSET'];
            $toc_do=$phone['TOC_DO_CPU'];
            $gpu=$phone['CHIP_DO_HOA_GPU'];
            $ram=$phone['RAM'];
            $rom=$phone['ROM'];
            $the_nho=$phone['THE_NHO_NGOAI'];
            $sim=$phone['SIM'];
            $wifi=$phone['WIFI'];
            $bluetooth=$phone['BLUETOOTH'];
            $cong_sac=$phone['CONG_KET_NOI_SAC'];
            $tai_nghe=$phone['JACK_TAI_NGHE'];
            $chat_lieu=$phone['CHAT_LIEU'];
            $kich_thuoc_dt=$phone['KICH_THUOC_DIEN_THOAI'];
            $trong_luong=$phone['TRONG_LUONG_DIEN_THOAI'];
            $dung_luong_pin=$phone['DUNG_LUONG_PIN'];
            $loai_pin=$phone['LOAI_PIN'];
            $cong_nghe_pin=$phone['CONG_NGHE_PIN'];
        }
    }
    else
    {
        header('Location:index.php?p=ds_dienthoai');
    }
    ?>
    <?php
    if(isset($_POST["btn_submit"]))
    {
        $info=array(
        "CONG_NGHE_MAN_HINH" => $_POST["txt_congnghe_manhinh"],
        "DO_PHAN_GIAI_MAN_HINH" => $_POST["txt_dophangiai_manhinh"],
        "KICH_THUOC_MAN_HINH" => $_POST["txt_kichthuoc_manhinh"],
        "DO_PHAN_GIAI_CAMERA_TRUOC" => $_POST["txt_camera_truoc"],
        "DO_PHAN_GIAI_CAMERA_SAU" => $_POST["txt_camera_sau"],
        "QUAY_PHIM" => $_POST["txt_quay_phim"],
        "CHIPSET" => $_POST["txt_cpu"],
        "TOC_DO_CPU" => $_POST["txt_tocdo_cpu"],
        "CHIP_DO_HOA_GPU" => $_POST["txt_gpu"],
        "RAM" => $_POST["txt_ram"],
        "ROM" => $_POST["txt_rom"],
        "THE_NHO_NGOAI" => $_POST["txt_thenho"],
        "SIM" => $_POST["txt_sim"],
        "WIFI" => $_POST["txt_wifi"],
        "BLUETOOTH" => $_POST["txt_bluetooth"],
        "CONG_KET_NOI_SAC" => $_POST["txt_congsac"],
        "JACK_TAI_NGHE" => $_POST["txt_tainghe"],
        "CHAT_LIEU" => $_POST["txt_chatlieu"],
        "KICH_THUOC_DIEN_THOAI" => $_POST["txt_kichthuoc_dienthoai"],
        "TRONG_LUONG_DIEN_THOAI" => $_POST["txt_trongluong"],
        "DUNG_LUONG_PIN" => $_POST["txt_dungluong"],
        "LOAI_PIN" => $_POST["txt_loaipin"],
        "CONG_NGHE_PIN" => $_POST["txt_congnghe_pin"]
        );
        if(update_phone_info($conn,$id,$info))
        {
            echo "<script type='text/javascript'>alert('Đã cập nhật cấu hình!');</script>";
            header('refresh:1');
        }
        else
        {
            echo "<script type='text/javascript'>alert('Lỗi trong quá trình cập nhật!');</script>";
            header('refresh:1');
        }
    }
    ?>
    <div class="news-infor">
    <form method="post">
    <div class="row" style="padding:5px">
        <div class="col-3">
        <h5> Cập nhật cấu hình điện thoại</h5>
        </div>
        <div class="col" style="text-align:right">
        <input type="submit" class="btn btn-success" name="btn_submit" value="Cập nhật">
        <a href="javascript:location.reload()" class="btn btn-danger" name="btn_refresh" style="width:90px">Đặt lại </a>
        </div>
    </div>


        <div class="part-of-news" >
            <div class="row">
                <div class="col-3">
                <label >Công nghệ màn hình</label>
                </div>
                <div class="col">
                    <input type="text" class="form-control" name="txt_congnghe_manhinh" placeholder="TFT LCD" maxlength="50" value="<?php echo $cong_nghe_mh?>">
                </div>
            </div>
        </div>
        <div class="part-of-news" >
            <div class="row">
                <div class="col-3">
                <label >Độ phân giải màn hình</label>
                </div>
                <div class="col">
                <input type="text" class="form-control" name="txt_dophangiai_manhinh" placeholder="Full HD+ (1080 x 2400 Pixels)" maxlength="50" value="<?php echo $do_phan_giai_mh?>">
                </div>
            </div>
        </div>
        <div class="part-of-news" style="border-bottom:1px solid #000;">
            <div class="row">
                <div class="col-3">
                <label >Màn hình rộng</label>
                </div>
                <div class="col">
                <input type="number" class="form-control" name="txt_kichthuoc_manhinh" placeholder="6.5" maxlength="5" value="<?php echo $kich_thuoc_mh?>" step="0.1">
                </div>
            </div>
        </div>
        <hr/>
        <div class="part-of-news" >
            <div class="row">
                <div class="col-3">
                <label >Camera trước</label>
                </div>
                <div class="col">
                    <input type="number" class="form-control" name="txt_camera_truoc" placeholder="16MP" maxlength="5" value="<?php echo $camera_truoc?>">
                </div>
            </div>
        </div>
        <div class="part-of-news" >
            <div class="row">
                <div class="col-3">
                <label >Camera sau</label>
                </div>
                <div class="col">
                <input type="number" class="form-control" name="txt_camera_sau" placeholder="48MP" maxlength="5" value="<?php echo $camera_sau ?>">
                </div>
            </div>
        </div>
        <div class="part-of-news" style="border-bottom:1px solid #000;">
            <div class="row">
                <div class="col-3">
                <label >Quay phim</label>
                </div>
                <div class="col">
                <input type="text" class="form-control" name="txt_quay_phim"  value="<?php echo $quay_phim?>" placeholder="Quay phim HD 720p@30fps, Quay phim FullHD 1080p@30fps, Quay phim 4K 2160p@30fps" maxlength="200">
                </div>
            </div>
        </div>
        <hr/>
        <div class="part-of-news" >
            <div class="row">
                <div class="col-3">
                <label >Chipset(CPU)</label>
                </div>
                <div class="col">
                    <input type="text" class="form-control" name="txt_cpu" placeholder="Snapdragon 665 8 nhân" maxlength="50" value="<?php echo $cpu?>">
                </div>
            </div>
        </div>
        <div class="part-of-news" >
            <div class="row">
                <div class="col-3">
                <label >Tốc độ CPU</label>
                </div>
                <div class="col">
                <input type="text" class="form-control" name="txt_tocdo_cpu" placeholder="4 nhân 2.0 GHz & 4 nhân 1.8 GHz" maxlength="100" value="<?php echo $toc_do?>">
                </div>
            </div>
        </div>
        <div class="part-of-news" style="border-bottom:1px solid #000;">
            <div class="row">
                <div class="col-3">
                <label >Chip đồ họa (GPU)</label>
                </div>
                <div class="col">
                <input type="text" class="form-control" name="txt_gpu" placeholder="Adreno 610" maxlength="100" value="<?php echo $gpu?>">
                </div>
            </div>
        </div>
        <hr/>
        <div class="part-of-news" >
            <div class="row">
                <div class="col-3">
                <label >RAM</label>
                </div>
                <div class="col">
                    <input type="number" class="form-control" name="txt_ram" placeholder="8GB" maxlength="11" value="<?php echo $ram?>">
                </div>
            </div>
        </div>
        <div class="part-of-news" >
            <div class="row">
                <div class="col-3">
                <label >Bộ nhớ trong</label>
                </div>
                <div class="col">
                <input type="number" class="form-control" name="txt_rom" placeholder="128GB" maxlength="11" value="<?php echo $rom?>">
                </div>
            </div>
        </div>
        <div class="part-of-news" style="border-bottom:1px solid #000;">
            <div class="row">
                <div class="col-3">
                <label >Bộ nhớ ngoài</label>
                </div>
                <div class="col">
                <input type="text" class="form-control" name="txt_thenho" placeholder="MicroSD, hỗ trợ tối đa 256 GB" maxlength="100" value="<?php echo $the_nho?>">
                </div>
            </div>
        </div>
        <hr/>
        <div class="part-of-news" >
            <div class="row">
                <div class="col-3">
                <label >SIM</label>
                </div>
                <div class="col">
                    <input type="text" class="form-control" name="txt_sim" placeholder="2 Nano SIM" maxlength="100" value="<?php echo $sim?>">
                </div>
            </div>
        </div>
        <div class="part-of-news" >
            <div class="row">
                <div class="col-3">
                <label >Wifi</label>
                </div>
                <div class="col">
                <input type="text" class="form-control" name="txt_wifi" placeholder="Wi-Fi 802.11 a/b/g/n/ac, Dual-band, Wi-Fi Direct," maxlength="50" value="<?php echo $wifi?>">
                </div>
            </div>
        </div>
        <div class="part-of-news" >
            <div class="row">
                <div class="col-3">
                <label >Bluetooth</label>
                </div>
                <div class="col">
                <input type="text" class="form-control" name="txt_bluetooth" placeholder="A2DP, LE, v5.0" maxlength="50" value="<?php echo $bluetooth?>">
                </div>
            </div>
        </div>
        <div class="part-of-news" >
            <div class="row">
                <div class="col-3">
                <label >Cổng sạc</label>
                </div>
                <div class="col">
                <input type="text" class="form-control" name="txt_congsac" placeholder="USB Type-C" maxlength="50" value="<?php echo $cong_sac?>">
                </div>
            </div>
        </div>
        <div class="part-of-news" style="border-bottom:1px solid #000;">
            <div class="row">
                <div class="col-3">
                <label >Jack tai nghe</label>
                </div>
                <div class="col">
                <input type="text" class="form-control" name="txt_tainghe" placeholder="3.5 mm" maxlength="50" value="<?php echo $tai_nghe?>">
                </div>
            </div>
        </div>
        <hr/>
        <div class="part-of-news" >
            <div class="row">
                <div class="col-3">
                <label >Chất liệu</label>
                </div>
                <div class="col">
                    <input type="text" class="form-control" name="txt_chatlieu" placeholder="Khung & Mặt lưng nhựa" maxlength="50" value="<?php echo $chat_lieu?>">
                </div>
            </div>
        </div>
        <div class="part-of-news" >
            <div class="row">
                <div class="col-3">
                <label >Kích thước</label>
                </div>
                <div class="col">
                <input type="text" class="form-control" name="txt_kichthuoc_dienthoai" placeholder="Dài 162 mm - Ngang 75.5 mm - Dày 8.9 mm" maxlength="50" value="<?php echo $kich_thuoc_dt?>">
                </div>
            </div>
        </div>
        <div class="part-of-news" style="border-bottom:1px solid #000;">
            <div class="row">
                <div class="col-3">
                <label >Trọng lượng</label>
                </div>
                <div class="col">
                <input type="number" class="form-control" name="txt_trongluong" placeholder="192g" maxlength="11" value="<?php echo $trong_luong?>">
                </div>
            </div>
        </div>
        <hr/>
        <div class="part-of-news" >
            <div class="row">
                <div class="col-3">
                <label >Dung lượng pin</label>
                </div>
                <div class="col">
                    <input type="number" class="form-control" name="txt_dungluong" placeholder="5000 mAh" maxlength="11" value="<?php echo $dung_luong_pin?>">
                </div>
            </div>
        </div>
        <div class="part-of-news" >
            <div class="row">
                <div class="col-3">
                <label >Loại pin</label>
                </div>
                <div class="col">
                <input type="text" class="form-control" name="txt_loaipin" placeholder="Li-on" maxlength="50" value="<?php echo $loai_pin?>">
                </div>
            </div>
        </div>
        <div class="part-of-news" style="border-bottom:1px solid #000;">
            <div class="row">
                <div class="col-3">
                <label >Công nghệ pin</label>
                </div>
                <div class="col">
                <input type="text" class="form-control" name="txt_congnghe_pin" placeholder="Tiết kiệm pin, Sạc pin nhanh" maxlength="200" value="<?php echo $cong_nghe_pin?>">
                </div>
            </div>
        </div>
        <hr/>
    </form>
</div>