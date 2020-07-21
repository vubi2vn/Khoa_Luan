<?php
    session_start();
    if(isset($_POST["btn_admin"]))
    {
        $_SESSION["ID_USER"]=1;
        $_SESSION["USER_NAME"]="admin";
        $_SESSION["QUYEN"]="Admin";
        header("Location:index.php");
    }
    if(isset($_POST["btn_authour"]))
    {
        $_SESSION["ID_USER"]=2;
        $_SESSION["USER_NAME"]="Tác giả";
        $_SESSION["QUYEN"]="Tác giả";
        header("Location:index.php");
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
        <form class="form-group" method="post">
            <input type="submit" class="btn btn-success" name="btn_admin" value="admin"/>
            <input type="submit" class="btn btn-success" name="btn_authour" value="tác giả"/>
        </form>
    </body>
</html>