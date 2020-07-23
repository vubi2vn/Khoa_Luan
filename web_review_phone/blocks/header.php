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

$avatar = null;
if(isset($_SESSION["ID_USER"])){
    $Get_user_infomation = Get_user_infomation($conn,$_SESSION["ID_USER"]);
    $row_Get_user_infomation = mysqli_fetch_array($Get_user_infomation);
    $avatar = $row_Get_user_infomation['hinh_dai_dien'];
}

?>

<?php
$key = "";
if(isset($_GET['key']))
{
    $key = $_GET['key'];
}

if(isset($_POST["btnSearch"]))
{
    $key = $_POST['key'];
    header("Location:?p=timkiem&key=$key");
}
?>

<header>
    <div class="wrap-main">
        <a class="logo" href="?p=home"><img src="lib/images/logo.png" alt="logo"></a>
        <form id= "search-site"  method = "POST">
            <input class="form-control" name="key" id="search-keyword"  type="text" aria-label="Tìm kiếm" placeholder="Tìm kiếm" value = "<?php echo $key?>">
            <button type="submit" class="btn btn-light" name="btnSearch"><i class="fa fa-search " aria-hidden="true"></i></button>
        </form>       
        <div id="menu">
            <ul>
            <?php
                $HangSanXuatTop7 = HangSanXuatTop7($conn);
                while($row_HangSanXuatTop7 = mysqli_fetch_array($HangSanXuatTop7)) {
            ?>
            <li><a href="?p=danhsachdt&Id_HangSX=<?php echo $row_HangSanXuatTop7['ID_HANG_SAN_XUAT'];?>"><?php echo $row_HangSanXuatTop7['TEN_HANG_SAN_XUAT'];?></a></li> 

            <?php } ?>         
            </ul>
        </div>

        <div class="dropdown">
        <a type="button" class="login center">
            <?php 
                if(!$avatar){
                    echo '<i class="fas fa-user-circle fa-2x"></i>';
                }else{                   
                    echo '<img src="web_admin/'.$avatar.'" class="fas"></img>';
                };
            ?>
        </a>
            <div class="dropdown-content center" style="left:-50px;">             
              <?php
                if(!isset($_SESSION["ID_USER"])){
                    echo "<a href='?p=dangnhap'>Đăng nhập</a>";
                }else{
                    echo '<i>Tên đăng nhập: '.$_SESSION["USER_NAME"].'</i>';
                    if($_SESSION["TEN_PHAN_QUYEN"]=="khachhang"){
                        echo '
                                <a href="web_admin/index.php">Thông tin cá nhân</a>               
                            ';
                    }else{ 
                        echo '                  
                            <a href="web_admin/index.php">Xem thông tin</a>
                        ';
                    }
                    echo '                  
                        <a href="#" data-toggle="modal" data-target="#log_out"> Đăng xuất</a>
                    ';
                }
              ?>  
                      
        </div>
      

</header>
