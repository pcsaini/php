<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="dashboard/assets/image/logo.ico">
    <link rel="shortcut icon" type="image/x-icon" href="dashboard/assets/image/logo.ico">
    <title>Library: Home</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="dashboard/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="dashboard/assets/css/font-awesome.min.css">
    <!-- Owl Carousel Assets -->
    <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="owl-carousel/owl.theme.css">
</head>
<body>
<?php
include_once "../init.php";
include_once "navbar.php";
?>
<div class="main-heading">
    <h2>Your Profile</h2>
</div>

<div class="container">
    <div class="row profile">
        <!-- left column -->
        <div class="col-md-3 col-sm-6 col-xs-12 profile-info">
            <div class="panel panel-primary">
                <div class="panel-heading text-center">Profile</div>
                <div class="panel-body">
                    <div class="profile-pic">
                        <img src="image/5.png" class="avatar img-circle img-thumbnail" alt="avatar" style="height: 150px;width: auto;" / >
                    </div>
                    <hr id="line">
                    <div class="information">
                        <h3 class="full-name">Prem Chand Saini</h3>
                        <h4 class="username">pcsaini</h4>
                        <p class="mail-id">premchandsaini779@gmail.com</p>
                        <a href="profile.php"><button class="btn">Edit Profile</button></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8 col-sm-6 col-xs-12 history-info">
            <div class="panel panel-primary">
                <div class="panel-heading">Issued Book</div>
                <div class="panel-body">
                    <table class="table table-bordered table-responsive">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Book Name</th>
                            <th>Issue Date</th>
                            <th>Return Date</th>
                            <th>Fine</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Book Name XYZ</td>
                            <td>24-10-2016</td>
                            <td>29-10-2016</td>
                            <td>-</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="panel panel-primary">
                <div class="panel-heading">Book History</div>
                <div class="panel-body">
                    <table class="table table-bordered table-responsive">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Book Name</th>
                            <th>Issue Date</th>
                            <th>Return Date</th>
                            <th>Fine</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Book Name XYZ</td>
                            <td>24-10-2016</td>
                            <td>29-10-2016</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Book Name XYZ</td>
                            <td>24-10-2016</td>
                            <td>29-10-2016</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Book Name XYZ</td>
                            <td>24-10-2016</td>
                            <td>29-10-2016</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>Book Name XYZ</td>
                            <td>24-10-2016</td>
                            <td>29-10-2016</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td>Book Name XYZ</td>
                            <td>24-10-2016</td>
                            <td>29-10-2016</td>
                            <td>-</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include_once "footer.php";
?>

<script src='dashboard/assets/js/jquery-3.1.1.min.js'></script>
<script src='dashboard/assets/js/bootstrap.min.js'></script>
<script src='owl-carousel/owl.carousel.min.js'></script>
<script src="js/main.js"></script>
</body>
</html>
