<?php 
if (isset($_GET['idDT'])){
    $idDT = $_GET["idDT"];
    if($idDT==null)
    {
        header('Location:index.php?p=home');
    }
}
else
{
    header('Location:index.php?p=home');
}
?>

<?php
    $ChiTietCauHinh = ChiTietCauHinh($conn,$idDT);
    $row_ChiTietCauHinh = mysqli_fetch_array($ChiTietCauHinh); 
    if(mysqli_num_rows($ChiTietCauHinh)==0)
    {
        echo "<script type='text/javascript'>alert('Chưa có thông tin về điện thoại này!');
        window.location.href='index.php?p=danhsachdt'; </script>";
    }
?>

<div class="container-1">
    <?php
    $ChonTheoID = ChonTheoID($conn,$idDT);
    $row_ChonTheoID = mysqli_fetch_array($ChonTheoID);
    ?>
    <div>
        <p class="navigat">Điện thoại <?php echo $row_ChonTheoID['TEN_DIEN_THOAI'];?></p>
    </div>
    <div class="clr"></div>
    <div class="box chitiet-hinh">
        <img src="web_admin/<?php echo $row_ChonTheoID['URL_HINH_ANh'];?>" alt="phone image">
    </div>
    <div class="box chitiet-mua">
        <strong style="font-size: 25px;">Địa điểm mua</strong>
        <div class="chitiet-mua-item">
            <a href="<?php           
                    $LinkNCC = LinkNCC($conn,$idDT,1);
                    $row_LinkNCC = mysqli_fetch_array($LinkNCC);
                    echo $row_LinkNCC['LINK_SAN_PHAM'];?>
                " target="_blank">
                <img src="web_admin/<?php
                    $CuaHangBanLe = CuaHangBanLe($conn,1);
                    $row_CuaHangBanLe = mysqli_fetch_array($CuaHangBanLe);
                    echo $row_CuaHangBanLe['LOGO_CUA_HANG'];
                ?>">
            </a>
        </div>
        <div class="chitiet-mua-item">
            <a href="<?php           
                    $LinkNCC = LinkNCC($conn,$idDT,2);
                    $row_LinkNCC = mysqli_fetch_array($LinkNCC);
                    echo $row_LinkNCC['LINK_SAN_PHAM'];?>
                " target="_blank">
                <img src="web_admin/<?php
                    $CuaHangBanLe = CuaHangBanLe($conn,2);
                    $row_CuaHangBanLe = mysqli_fetch_array($CuaHangBanLe);
                    echo $row_CuaHangBanLe['LOGO_CUA_HANG'];
                ?>">
            </a>
        </div>
        <div class="chitiet-mua-item">
            <a href="<?php           
                    $LinkNCC = LinkNCC($conn,$idDT,3);
                    $row_LinkNCC = mysqli_fetch_array($LinkNCC);
                    echo $row_LinkNCC['LINK_SAN_PHAM'];
                    ?>" target="_blank">
                <img src="web_admin/<?php
                    $CuaHangBanLe = CuaHangBanLe($conn,3);
                    $row_CuaHangBanLe = mysqli_fetch_array($CuaHangBanLe);
                    echo $row_CuaHangBanLe['LOGO_CUA_HANG'];
                ?>">
            </a>
        </div>
        <div class="chitiet-mua-item">
        <a href="<?php           
                    $LinkNCC = LinkNCC($conn,$idDT,4);
                    $row_LinkNCC = mysqli_fetch_array($LinkNCC);
                    echo $row_LinkNCC['LINK_SAN_PHAM'];
                    ?>" target="_blank">
                <img src="web_admin/<?php
                    $CuaHangBanLe = CuaHangBanLe($conn,4);
                    $row_CuaHangBanLe = mysqli_fetch_array($CuaHangBanLe);
                    echo $row_CuaHangBanLe['LOGO_CUA_HANG'];
                ?>">
            </a>
        </div>
    </div>
    <!-- Cau hinh -->
    <div class="box chitiet-cauhinh">
        <table>
            <tr>
                <th colspan="2" class="center" style="font-size: 25px;">Thông số kỹ thuật</th>
            </tr>
            <tr>
                <td>Màn hình:</td>
                <td><?php echo $row_ChiTietCauHinh['KICH_THUOC_MAN_HINH'];?> ", <?php echo $row_ChiTietCauHinh['CONG_NGHE_MAN_HINH'];?></td>
            </tr>
            <tr>
                <td>Độ phân giải:</td>
                <td><?php echo $row_ChiTietCauHinh['DO_PHAN_GIAI_MAN_HINH'];?>  </td>
            </tr>
            <tr>
                <td>Camera sau:</td>
                <td><?php echo $row_ChiTietCauHinh['DO_PHAN_GIAI_CAMERA_SAU'];?> MP</td>
            </tr>
            <tr>
                <td>Camera trước:</td>
                <td><?php echo $row_ChiTietCauHinh['DO_PHAN_GIAI_CAMERA_TRUOC'];?> MP</td>
            </tr>
            <tr>
                <td>CPU:</td>
                <td><?php echo $row_ChiTietCauHinh['TOC_DO_CPU'];?></td>
            </tr>
            <tr>
                <td>RAM:</td>
                <td><?php echo $row_ChiTietCauHinh['RAM'];?> GB</td>
            </tr>
            <tr>
                <td>Bộ nhớ trong:</td>
                <td><?php echo $row_ChiTietCauHinh['ROM'];?> GB</td>
            </tr>
            <tr>
                <td>Thẻ SIM:</td>
                <td><?php echo $row_ChiTietCauHinh['SIM'];?></td>
            </tr>
            <tr>
                <td>Dung lượng pin:</td>
                <td><?php echo $row_ChiTietCauHinh['DUNG_LUONG_PIN'];?> mAh</td>
            </tr>
            <tr>
                <td>Chip đồ họa (GPU):</td>
                <td><?php echo $row_ChiTietCauHinh['CHIP_DO_HOA_GPU'];?></td>
            </tr>
            
            <tr>
                <td colspan="2" class="center" >
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-chitiet-cauhinh">
                        Xem thêm cấu hình chi tiết
                    </button>

                    <!-- Modal chi tiet cau hinh -->
                    <div class="modal fade" id="modal-chitiet-cauhinh" tabindex="-1" role="dialog" aria-labelledby="modal-chitiet-cauhinhTitle" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title">Thông số kỹ thuật chi tiết</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body">
                                <table>
                                    <th colspan="2" class="navigat left no-margin">Màn hình</th>                                    
                                    <tr>
                                        <td style="width: 200px;">Công nghệ màn hình</td>
                                        <td><?php echo $row_ChiTietCauHinh['CONG_NGHE_MAN_HINH'];?></td>
                                    </tr>
                                    <tr>
                                        <td>Độ phân giải màn hình</td>
                                        <td><?php echo $row_ChiTietCauHinh['DO_PHAN_GIAI_MAN_HINH'];?></td>
                                    </tr>
                                    <tr>
                                        <td>Màn hình rộng</td>
                                        <td><?php echo $row_ChiTietCauHinh['KICH_THUOC_MAN_HINH'];?>''</td>
                                    </tr>
                                    
                                    <th colspan="2" class="navigat left no-margin">Camera</th>
                                    <tr>
                                        <td>Camera trước</td>
                                        <<td><?php echo $row_ChiTietCauHinh['DO_PHAN_GIAI_CAMERA_TRUOC'];?>MP</td>
                                    </tr>
                                    <tr>
                                        <td>Camera sau</td>
                                        <td><?php echo $row_ChiTietCauHinh['DO_PHAN_GIAI_CAMERA_SAU'];?>MP</td>
                                   </tr>
                                    <tr>
                                        <td>Quay phim</td>
                                        <td><?php echo $row_ChiTietCauHinh['QUAY_PHIM'];?></td>
                                    </tr>
                                    <th colspan="2" class="navigat left no-margin">CPU</th>
                                    <tr>
                                        <td>Chipset (hãng SX CPU)</td>
                                        <td><?php echo $row_ChiTietCauHinh['CHIPSET'];?></td>
                                    </tr>
                                    <tr>
                                        <td>Tốc độ CPU</td>
                                        <td><?php echo $row_ChiTietCauHinh['TOC_DO_CPU'];?></td>
                                    </tr>
                                    <tr>
                                        <td>Chip đồ họa (GPU)</td>
                                        <td><?php echo $row_ChiTietCauHinh['CHIP_DO_HOA_GPU'];?></td>
                                   </tr>
                                   <th colspan="2" class="navigat left no-margin">Bộ nhớ & Lưu trữ</th>
                                    <tr>
                                        <td>RAM</td>
                                        <td><?php echo $row_ChiTietCauHinh['RAM'];?>GB</td>
                                    </tr>
                                    <tr>
                                        <td>Bộ nhớ trong</td>
                                        <td><?php echo $row_ChiTietCauHinh['ROM'];?>GB</td>
                                    </tr>
                                    <tr>
                                        <td>Thẻ nhớ ngoài</td>
                                        <td><?php echo $row_ChiTietCauHinh['THE_NHO_NGOAI'];?></td>
                                   </tr>        
                                   <th colspan="2" class="navigat left no-margin">Kết nối</th>
                                    <tr>
                                        <td>SIM</td>
                                        <td><?php echo $row_ChiTietCauHinh['SIM'];?></td>
                                    </tr>
                                    <tr>
                                        <td>Wifi</td>
                                        <td><?php echo $row_ChiTietCauHinh['WIFI'];?></td>
                                    </tr>
                                    <tr>
                                        <td>Bluetooth</td>
                                        <td><?php echo $row_ChiTietCauHinh['BLUETOOTH'];?></td>
                                   </tr>
                                   <tr>
                                        <td>Cổng kết nối/sạc</td>
                                        <td><?php echo $row_ChiTietCauHinh['CONG_KET_NOI_SAC'];?></td>
                                   </tr>
                                   <tr>
                                        <td>Jack tai nghe</td>
                                        <td><?php echo $row_ChiTietCauHinh['JACK_TAI_NGHE'];?></td>
                                   </tr>
                                   <th colspan="2" class="navigat left no-margin">Thiết kế & Trọng lượng</th>
                                    <tr>
                                        <td>Chất liệu</td>
                                        <td><?php echo $row_ChiTietCauHinh['CHAT_LIEU'];?></td>
                                    </tr>
                                    <tr>
                                        <td>Kích thước</td>
                                        <td><?php echo $row_ChiTietCauHinh['KICH_THUOC_DIEN_THOAI'];?></td>
                                    </tr>
                                    <tr>
                                        <td>Trọng lượng</td>
                                        <td><?php echo $row_ChiTietCauHinh['TRONG_LUONG_DIEN_THOAI'];?>g</td>
                                   </tr>
                                   <th colspan="2" class="navigat left no-margin">Thông tin pin & Sạc</th>
                                    <tr>
                                        <td>Dung lượng pin</td>
                                        <td><?php echo $row_ChiTietCauHinh['DUNG_LUONG_PIN'];?> mAh</td>
                                    </tr>
                                    <tr>
                                        <td>Loại pin</td>
                                        <td><?php echo $row_ChiTietCauHinh['LOAI_PIN'];?></td>
                                    </tr>
                                    <tr>
                                        <td>Công nghệ pin</td>
                                        <td><?php echo $row_ChiTietCauHinh['CONG_NGHE_PIN'];?></td>
                                   </tr>                                    
                                </table>
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                        </div>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <div class="clr"></div>
    <!-- bai review dien thoai -->
    <p class=" navigat">Đánh giá sản phẩm</p>
    <div class="chitiet-review">
    
    <?php   
        $BaiVietTheoIdDT = BaiVietTheoIdDT($conn,$idDT);
        $row_BaiVietTheoIdDT = mysqli_fetch_array($BaiVietTheoIdDT);

        if(mysqli_num_rows($BaiVietTheoIdDT)==1)
        {
            echo $row_BaiVietTheoIdDT['NOI_DUNG_BAI_VIET'];        
        }
        else{
            echo "Điện thoại này hiện tại chưa có bài đánh giá";
        }
    ?>
    </div>
    <div class="clr"></div>
    
    <!-- Phần bình luận nhỏ -->
    <p class=" navigat">Bình luận</p>
    <div class="chitiet-cmt">
        <textarea class="form-control" rows="3"></textarea>
        <div class="chitiet-cmt-emotion">
            <a href="#">Quy định đăng bình luận !</a>
            <button type="button" class="btn btn-primary">Gửi</button>
        </div>
        <div class="list-cmt">

            <?php
            $idBV = $row_BaiVietTheoIdDT['ID_BAI_VIET'];
            $BinhLuan2 = BinhLuan2($conn,$idBV);
            while($row_BinhLuan2 = mysqli_fetch_array($BinhLuan2)) {
            ?>
            <div class="cmt">
                <div class="cmt-ten"><?php echo $row_BinhLuan2['TEN_NGUOI_BINH_LUAN'];?></div>
                <div class="cmt-noidung"><?php echo $row_BinhLuan2['NOI_DUNG_BINH_LUAN'];?></div>
                <i onclick="function_like(this)" class="fas fa-thumbs-up"></i>
                <a href="#">Báo cáo bình luận</a>
            </div>
            <?php }?>
        </div>
        <div>
            <p><span id="total-cmt"><?php echo TongCmt($conn,$idBV);?> </span>lượt đánh giá: 
                <span id="total-tieu-cuc"><?php echo TongTieuCuc($conn,$idBV);?> </span>tiêu cực,
                <span id="total-tich-cuc"><?php echo TongTichCuc($conn,$idBV);?></span> tích cực
                <a href="?p=binhluan&idBV=<?php echo $idBV?>" type="button" class="btn btn-primary">Xem tất cả bình luận</a>
            </p>
        </div>
    </div>
    <div class="clr"></div>

</div>