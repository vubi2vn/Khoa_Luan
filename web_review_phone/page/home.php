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
                    <img class="d-block w-100" src="images/iphone7.png" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                    <!-- caption o day -->
                    <!-- <h5></h5> -->
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/quangcaooppo.png" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/tiepsuc.png" alt="Third slide">
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

    <?php  
        $top1_dienthoai = Top1_Dienthoai($conn);
            if(mysqli_num_rows($top1_dienthoai) > 0)
                $row_top1_dt = mysqli_fetch_array($top1_dienthoai) ;            
        $top2_dienthoai = Top2_Dienthoai($conn);
            if(mysqli_num_rows($top2_dienthoai) > 0)
                $row_top2_dt = mysqli_fetch_array($top2_dienthoai) ;
        $top3_dienthoai = Top3_Dienthoai($conn);
            if(mysqli_num_rows($top3_dienthoai) > 0)
                $row_top3_dt = mysqli_fetch_array($top3_dienthoai) ;
        $top4_dienthoai = Top4_Dienthoai($conn);
            if(mysqli_num_rows($top4_dienthoai) > 0)
                $row_top4_dt = mysqli_fetch_array($top4_dienthoai) ;
    ?>
    

    <div class="box rank">
        <p class="list-group-item  ">
            <strong>BẢNG XẾP HẠNG</strong>
        </p>
        <a href="?p=chitiet&idDT=<?php echo $row_top1_dt['ID_DIEN_THOAI'];?>">
            <span class="rank-number">1</span>
            <span class="rank-img"><img src="lib/images/<?php echo $row_top1_dt['URL_HINH_ANh'];?>" alt="phone image"></span>
            <span class="rank-name"><?php echo $row_top1_dt['TEN_DIEN_THOAI']; ?></span>
            <span class="rank-badge"><i class="fa fa-trophy" aria-hidden="true"></i></span>
        </a>
        <a href="?p=chitiet&idDT=<?php echo $row_top2_dt['ID_DIEN_THOAI'];?>">
            <span class="rank-number">2</span>
            <span class="rank-img"><img src="lib/images/<?php echo $row_top2_dt['URL_HINH_ANh'];?>"
                    alt="phone image"></span>
            <span class="rank-name"><?php echo $row_top2_dt['TEN_DIEN_THOAI']; ?></span>
            <span class="rank-badge"><i class="fa fa-star" aria-hidden="true"></i></span>
        </a>
        <a href="?p=chitiet&idDT=<?php echo $row_top3_dt['ID_DIEN_THOAI'];?>">
            <span class="rank-number">3</span>
            <span class="rank-img"><img src="lib/images/<?php echo $row_top3_dt['URL_HINH_ANh'];?>"
                    alt="phone image"></span>
            <span class="rank-name"><?php echo $row_top3_dt['TEN_DIEN_THOAI']; ?></span>
            <span class="rank-badge"><i class="fa fa-star" aria-hidden="true"></i></span>
        </a>
        <a href="?p=chitiet&idDT=<?php echo $row_top4_dt['ID_DIEN_THOAI'];?>">
            <span class="rank-number">4</span>
            <span class="rank-img"><img src="lib/images/<?php echo $row_top4_dt['URL_HINH_ANh'];?>" alt="phone image"></span>
            <span class="rank-name"><?php echo $row_top4_dt['TEN_DIEN_THOAI']; ?></span>
            <span class="rank-badge"><i class="fa fa-shield-alt" aria-hidden="true"></i></span>
        </a>
    </div>

    <div class="navigat">
        Điện thoại nổi bật
    </div>
    <div class="owl-carousel owl-theme">
        <?php
            $noibat = NoiBat($conn);
            while($row_noibat = mysqli_fetch_array($noibat)) {
        ?>
        <a class="item" href="?p=chitiet&&idDT=<?php echo $row_noibat['ID_DIEN_THOAI'];?>">
            <img src="lib/images/<?php echo $row_noibat['URL_HINH_ANh'];?>" alt="phone image">
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
        <a class="phone-list-item" href="?p=chitiet&&idDT=<?php echo $row_noibat['ID_DIEN_THOAI'];?>">
            <img src="lib/images/<?php echo $row_noibat['URL_HINH_ANh'];?>" alt="phone image">
            <div class="desc">
                <h5><?php echo $row_noibat['TEN_DIEN_THOAI'];?></h5>
                <p><?php echo number_format($row_noibat['GIA_CA_THI_TRUONG']);?>đ</p>
            </div>
        </a>
        <?php
            }
        ?>   
        <div class="center clr">
            <a href="?p=danhsachdt" type="button" class="btn btn-primary">xem thêm</a>
        </div>
        
    </div>
</div>