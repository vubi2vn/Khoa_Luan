<?php
if (isset($_GET["p"]))
    $p = $_GET["p"];
else
    $p = "";
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />


    <link rel="stylesheet" href="css/bootstrap-4.5.0-dist/css/bootstrap.min.css" />
    <link href="css/fontawesome-free-5.13.0-web/css/all.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/OwlCarousel2-2.3.4/dist/assets/owl.carousel.css" />
    <link rel="stylesheet" href="css/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css" />

    <script type="text/javascript" src="css/jquery-3.5.1.min.js"> </script>
    <script type="text/javascript" src="css/bootstrap-4.5.0-dist/js/bootstrap.min.js"> </script>
    <script src="css/OwlCarousel2-2.3.4/dist/owl.carousel.js"></script>
    <link href="css/style.css" rel="stylesheet" />
</head>

<body>
    <!-- Header -->
    <header>
    <?php include "blocks/header.php"; ?>
    </header>
    <div class="container-1">
        <?php 
        switch($p) {
            case "binhluan" : include "page/binhluan.php"; break;
            case "chitiet" : include "page/chitiet.php"; break;
            case "dangnhap" : include "page/dangnhap.php"; break;
            case "danhsachdt" : include "page/danhsachdt.php"; break;
            default : include "page/home.php";
        }
        ?>
    </div>
    <!-- Footer -->
    <footer>
    <?php include "blocks/footer.php"; ?>
    </footer>

    <!-- script -->
    <script type="text/javascript">
        $('.owl-carousel').owlCarousel({
            autoplay: true,
            autoplayTimeout: 2000,
            autoplayHoverPause: true,
            nav: true,
            loop: true,
            margin: 10,
            responsive: {
                1000: {
                    items: 5
                }
            }
        });
    </script>
</body>

</html>