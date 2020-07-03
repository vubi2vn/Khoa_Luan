<?php 
    include "backend/connect.php";
    include "backend/user.php";
    session_start();
?>
<?php
if (isset($_GET["p"]))
    $p = $_GET["p"];
else
    $p = "";

//Lấy ảnh đại diện    
$avatar="image/avatar.jpg";
$name="";
$rs=get_user_info($conn,$_SESSION["ID_USER"]);
if($rs!=[null,null,null,null,null])
{
    $name=$rs[0];
    if($rs[4]!=null)
    {
        $avatar=$rs[4];
    }
    
}
?>

<?php
//Kiểm tra session đăng nhập

if(!isset($_SESSION["ID_USER"])||$_SESSION["QUYEN"]=="Người dùng")
{
    header("Location:login.php");
}
?>

<?php
//Đăng xuất
if(isset($_POST["btn_logout"]))
{
    unset($_SESSION["ID_USER"]);
    unset($_SESSION["USER_NAME"]);
    unset($_SESSION["QUYEN"]);
    header("Location:login.php");
}
?>
<html>
    <head>
        <title>Admin</title>
        <link rel="stylesheet" href="css/bootstrap-4.5.0-dist/css/bootstrap.min.css" />
        <link href="css/fontawesome-free-5.13.0-web/css/all.css" rel="stylesheet">
        <link type="text/css" href="css/style.css" rel="stylesheet"/>

        <script type="text/javascript" src="css/jquery-3.5.1.min.js"> </script>
        <script type="text/javascript" src="css/bootstrap-4.5.0-dist/js/bootstrap.min.js"> </script>
        
    </head>
    <body margin="0">
            <div class="row" style="margin:0px">
                <div class="col-2 menu">
                <?php include "block/menu.php";?>
                </div>
                <div class="col content">
                    <div class="page-header">
                        <?php include "block/header.php";?>
                    </div>
                    <div class="con">
                        <?php 
                        switch($p) {
                            case "user_info" : include "page/info_user.php"; break;
                            case "capnhat_baiviet" : include "page/capnhatbv.php"; break;
                            case "ds_cuahang" : include "page/ds_cuahang.php"; break;
                            case "ds_hangsx" : include "page/ds_hangsanxuat.php"; break;
                            case "ds_dienthoai" : include "page/ds_dienthoai.php"; break;
                            case "phone_link" : include "page/ds_link_dienthoai.php"; break;
                            case "dm_baocao" : include "page/dm_baocao.php"; break;
                            default : include "page/home.php";
                        }
                        ?>
                        <?php include "popup/changePW.php";?>
                        <?php include "popup/log_out.php";?>
                    </div>
                </div>
            </div>
    <script>
        $(document).ready(function(){
            $("#toggle-menu-bv").click(function(){
             $("#sub-menu-bv").toggleClass("hide");
            });
            $("#toggle-menu-ht").click(function(){
             $("#sub-menu-ht").toggleClass("hide");
            });
            $('#exampleModal').on('show.bs.modal', function (event) {
                
            });
            $('#log_out').on('show.bs.modal', function (event) {
                
            });
            $('#change_info_user').on('show.bs.modal', function (event) {
                
            });
            
        })
    </script>
        
    </body>
</html>