<?php
//Đăng xuất
if(isset($_POST["btn_logout"]))
{
    unset($_SESSION["ID_USER"]);
    unset($_SESSION["ID_PHAN_QUYEN"]);
    unset($_SESSION["USER_NAME"]);
    unset($_SESSION["TEN_PHAN_QUYEN"]);
    header("Location:?p=dangnhap");
}
?>

<header>
    <div class="wrap-main">
        <a class="logo" href="?p=home"><img src="lib/images/logo.png" alt="logo"></a>
        <form id= "search-site">
            <input class="form-control" id="search-keyword"  type="text" aria-label="Tìm kiếm" placeholder="Tìm kiếm" >
            <button type="button" class="btn btn-light"><i class="fa fa-search " aria-hidden="true"></i></button>
        </form>       
        <div id="menu">
            <ul>
            <?php
                $HangSanXuatTop7 = HangSanXuatTop7($conn);
                while($row_HangSanXuatTop7 = mysqli_fetch_array($HangSanXuatTop7)) {
            ?>
            <li><a href="?p=danhsachdt&&Id_HangSX=<?php echo $row_HangSanXuatTop7['ID_HANG_SAN_XUAT'];?>"><?php echo $row_HangSanXuatTop7['TEN_HANG_SAN_XUAT'];?></a></li> 

            <?php } ?>         
            </ul>
        </div>

        <div class="dropdown">
        <a type="button" class="login center">
            <i class="fas fa-user-circle fa-2x"></i>
        </a>
            <div class="dropdown-content center" style="left:-50px;">             
              <?php
                if(!isset($_SESSION["ID_USER"])){
                    echo "<a href='?p=dangnhap'>Đăng nhập</a>";
                }else{
                    echo '
                        <a href="web_admin/index.php">Xem thông tin</a>
                        <a href="#" data-toggle="modal" data-target="#log_out"> Đăng xuất</a>
                        ';
                }
              ?>  
                      
        </div>
      

</header>
