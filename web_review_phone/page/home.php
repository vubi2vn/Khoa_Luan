<div class="container-1">
    <div class="box my-carousel">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="lib/images/iphone7.png" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                    <!-- caption o day -->
                    <!-- <h5></h5> -->
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="lib/images/quangcaooppo.png" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="lib/images/tiepsuc.png" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>


    <div class="box rank">
        <p class="list-group-item  ">
            <strong>BẢNG XẾP HẠNG</strong>
        </p>
        <?php
            $icon_rank = 'fa-trophy';
            for($i = 1; $i<= 4; $i++)
            {
                $Top_Dienthoai = Top_Dienthoai($conn,$i-1);
                $row_top_dt = mysqli_fetch_array($Top_Dienthoai);
                if($i == 2) {$icon_rank = 'fa-star';}
                if($i == 4) {$icon_rank = 'fa-shield-alt';}
            echo
            '
            <a href="?p=chitiet&idDT='.$row_top_dt['ID_DIEN_THOAI'].'">
                <span class="rank-number">'.$i.'</span>
                <span class="rank-img"><img src="web_admin/'.$row_top_dt['URL_HINH_ANh'].'" alt="phone image"></span>
                <span class="rank-name">'.$row_top_dt['TEN_DIEN_THOAI'].'</span>
                <span class="rank-score">'.$row_top_dt['DIEM_DANH_GIA'].'</span>
                <span class="rank-badge"><i class="fa '.$icon_rank.'" aria-hidden="true"></i></span>
            </a>
            ';
            }
        ?>
        
    </div>

    <div class="navigat">
        Điện thoại nổi bật
    </div>
    <div class="owl-carousel owl-theme">
        <?php
            $noibat = NoiBat($conn);
            while($row_noibat = mysqli_fetch_array($noibat)) {
        ?>
        <a class="item" href="?p=chitiet&idDT=<?php echo $row_noibat['ID_DIEN_THOAI'];?>">
            <img src="web_admin/<?php echo $row_noibat['URL_HINH_ANh'];?>" alt="phone image">
            <div class="item-caption">
                <h5><?php echo $row_noibat['TEN_DIEN_THOAI'];?></h5>
                <p><?php echo number_format($row_noibat['GIA_CA_THI_TRUONG']);?>đ</p>
            </div>
        </a>  
        <?php
            }
        ?>    
    </div>
    
    <!-- phonelist -->
    <div class="navigat">
        Danh sách điện thoại
    </div>
    <div class="phone-list">
        <?php
            $noibat = NoiBat($conn);
            while($row_noibat = mysqli_fetch_array($noibat)) {
        ?>
        <a class="phone-list-item" href="?p=chitiet&idDT=<?php echo $row_noibat['ID_DIEN_THOAI'];?>">
            <img src="web_admin/<?php echo $row_noibat['URL_HINH_ANh'];?>" alt="phone image">
            <div class="desc">
                <h5><?php echo $row_noibat['TEN_DIEN_THOAI'];?></h5>
                <p><?php echo number_format($row_noibat['GIA_CA_THI_TRUONG']);?>đ</p>
            </div>
        </a>
        <?php
            }
        ?>   
        <div class="center clr" style="padding: 10px;">
            <a href="?p=danhsachdt" type="button" class="btn btn-primary">xem thêm</a>
        </div>
        
    </div>
</div>