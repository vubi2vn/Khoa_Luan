<div class="list-group">
    <div class="d-flex flex-row">
        <div class="p-2">
            <a href="index.php?p=user_info"><img src="<?php echo $avatar?>" alt="avatar" class="rounded-circle avatar"></a>
        </div>
        <div class="p-2 user-name">Xin chào: <?php echo $name ?></div>
    </div>
    <hr style="color:#F0E4AA; margin:0"/>
    <a href="index.php" class="list-group-item list-group-item-action" style="border:none"><i class="fas fa-home"></i> Trang chủ</a>
    <?php
    // Xét quyền truy cập admin và authour
    if($_SESSION["TEN_PHAN_QUYEN"]=="tacgia")
    {
        echo '<a href="#" class="list-group-item list-group-item-action toggle-menu" id="toggle-menu-bv" style="border:none"><i class="fas fa-newspaper"></i> 
        Quản lý bài viết <i class="fas fa-caret-down"></i></a>
        <div class="sub-menu" id="sub-menu-bv">
            <a href="index.php?p=ds_baiviet" class="list-group-item list-group-item-action" style="border:none"><i class="fas fa-clipboard-list"></i> Danh sách bài viết</a>
            <a href="index.php?p=capnhat_baiviet" class="list-group-item list-group-item-action" style="border:none"><i class="fas fa-plus"></i> Tạo mới bài viết</a>
        </div>';
    } 
    else
    {
        echo '<a href="#" class="list-group-item list-group-item-action toggle-menu" id="toggle-menu-ht" style="border:none"><i class="fas fa-tools"></i> 
        Quản trị hệ thống <i class="fas fa-caret-down"></i>';
        if($count_report>0)
            {
                echo '<span style="width:10px;height:10px;border-radius:50%; background-color:red; margin-left:10px;font-size:8px;padding:1px 4px">!<span>';
            }
        echo '</a>
        <div class="sub-menu" id="sub-menu-ht">
            <a href="index.php?p=ds_cuahang" class="list-group-item list-group-item-action" style="border:none"><i class="fas fa-store"></i> Danh mục cửa hàng</a>
            <a href="index.php?p=ds_hangsx" class="list-group-item list-group-item-action" style="border:none"><i class="fas fa-building"></i> Danh mục hãng sản xuất</a>
            <a href="index.php?p=ds_dienthoai" class="list-group-item list-group-item-action" style="border:none"><i class="fas fa-mobile"></i> Danh mục điện thoại</a>
            <a href="index.php?p=dm_baocao" class="list-group-item list-group-item-action" style="border:none"><i class="fas fa-flag"></i> Danh mục báo cáo bình luận</a>
            <a href="index.php?p=ds_binhluan" class="list-group-item list-group-item-action" style="border:none"><i class="fas fa-comments"></i>Quản lí bình luận'; 
            if($count_report>0)
            {
                echo '<span style="width:10px;height:10px;border-radius:50%; background-color:red; margin-left:10px;font-size:8px;padding:1px 4px">!<span>';
            }
            echo '</a>
            <a href="index.php?p=ds_nguoidung" class="list-group-item list-group-item-action" style="border:none"><i class="fas fa-user"></i> Quản lí người dùng</a>
    
            </div>';
    }
    ?>
    <a href="#" class="list-group-item list-group-item-action" style="border:none"><i class="fas fa-chart-bar"></i> Thống kê</a>
    <a href="#" class="list-group-item list-group-item-action" data-toggle="modal" data-target="#changePW" style="border:none"><i class="fas fa-key"></i> Đổi mật khẩu</a>
    <a href="#" class="list-group-item list-group-item-action" data-toggle="modal" data-target="#log_out" style="border:none"><i class="fas fa-sign-out-alt"></i> Đăng xuất</a>
</div>