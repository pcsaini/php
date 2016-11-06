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
    <script src='dashboard/assets/js/jquery-3.1.1.min.js'></script>
    <script src="js/main.js"></script><script src="js/main.js"></script>
    
</head>

<body>
<?php
include_once "../init.php";
include_once "navbar.php";
?>
<div class="main-heading">
    <h2>Edit Profile</h2>
</div>
    
<div class="container">
    <div class="row profile">
        <!-- left column -->
        <div class="col-md-3 col-sm-6 col-xs-12 profile-info">
            <div class="panel panel-primary">
                <div class="panel-heading text-center">Profile</div>
                <div class="panel-body">
                    <form id="uploadimage" action="../controller/upload_image.php" method="post" enctype="multipart/form-data">
                        <div class="profile-pic">
                            <img id="previewing" src="image/5.png" class="avatar img-circle img-thumbnail" alt="avatar" style="height: 150px;width: auto;" / >
                        </div>
                        <hr id="line">
                        <div id="selectImage">
                            <label>Select Your Image</label><br/>
                            <input type="file" name="file" id="file" required />
                            <input type="submit" value="Upload" class="submit" />
                        </div>
                    </form>
                    <h4 id="loading">loading..</h4>
                    <div id="message"></div>
                </div>
            </div>
        </div>
        <div class="col-md-8 col-sm-6 col-xs-12 history-info">
            <div class="panel panel-primary">
                <div class="panel-heading">Personal Information</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form">
                        <div class="form-group">
                            <label class="col-lg-3 control-label">First name:</label>
                            <div class="col-lg-8">
                                <input class="form-control" value="Jane" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Last name:</label>
                            <div class="col-lg-8">
                                <input class="form-control" value="Bishop" type="text">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">Username:</label>
                            <div class="col-md-8">
                                <input class="form-control" value="janeuser" type="text" disabled>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Email:</label>
                            <div class="col-lg-8">
                                <input class="form-control" value="janesemail@gmail.com" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Contact Number:</label>
                            <div class="col-md-8">
                                <input  value="phone number" type="tel" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Address:</label>
                            <div class="col-md-8">
                                <textarea rows="4"  class="form-control" >  </textarea>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-md-3 control-label"></label>
                            <div class="col-md-8">
                                <button class="btn-lg" style="background-color:#16456c; color:white" >Save changes </button>
                                <span></span>
                                <button class="btn-lg" style="background-color:#16456c; color:white;" >Cancel </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include_once "footer.php";
?>
<script src='dashboard/assets/js/bootstrap.min.js'></script>
<script src='owl-carousel/owl.carousel.min.js'></script>
</body>
</html>