<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="image/logo.ico">
    <link rel="shortcut icon" type="image/x-icon" href="image/logo.ico">
    <title>Library: Home</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Owl Carousel Assets -->
    <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="owl-carousel/owl.theme.css">
</head>
<body>
<?php
    include_once "core/init.php";
    include_once "navbar.php";
?>

<div class="main-content">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div id="owl-demo" class="owl-carousel">
                <div class="item"><img src="image/library/library_1.jpg" alt="Library Image"></div>
                <div class="item"><img src="image/library/library_2.jpg" alt="Library Image"></div>
                <div class="item"><img src="image/library/library_3.jpg" alt="Library Image"></div>
            </div>
        </div>
    </div>
</div>

<?php
    include_once "footer.php";
?>

    <script src='js/jquery-3.1.1.min.js'></script>
    <script src='bootstrap/js/bootstrap.min.js'></script>
    <script src='owl-carousel/owl.carousel.min.js'></script>
    <script src="js/main.js"></script>
</body>
</html>
