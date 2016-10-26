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
<div class="jumbotron " style="padding-top:60px; background-color: #16456c; ">
<center><h2 style="color: white;">  Account </h2> </center>
    </div>
    
<div class="container  " style="padding-top: 20px; ">
    <h1 class="page-header ">Edit Profile</h1>
    <div class="row">
        <!-- left column -->
        <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="text-center">
                <img src="imges/02ga.jpg" class="avatar img-circle img-thumbnail" alt="avatar" accept=image/*>
                
                <input type="file" class="text-center center-block well well-sm " id="img_browse" style="background-color:#e6fffa">
            </div>
            
            
        </div>
        <!-- edit form column -->
        <div class="col-md-8 col-sm-6 col-xs-12 personal-info">
           
            <h3>Personal info</h3>
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
<?php
include_once "footer.php";
?>

<script src='dashboard/assets/js/jquery-3.1.1.min.js'></script>
<script src='dashboard/assets/js/bootstrap.min.js'></script>
<script src='owl-carousel/owl.carousel.min.js'></script>
<script src="js/main.js"></script>
</body>
</html>