<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="assets/image/logo.ico">
    <link rel="shortcut icon" type="image/x-icon" href=assets/image/logo.ico">
    <title>Dashboard - Home</title>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
</head>
<body>
<div class="app-container">
    <div class="row content-container">
        <?php
        include_once "navbar.php";
        include_once "sidebar.php";
        //include_once "footer.php";
        ?>
        <div class="main-content container">
            <div class="row profile">
                <!-- left column -->
                <div class="col-md-3 col-sm-6 col-xs-12 profile-info">
                    <div class="panel panel-default">
                        <div class="panel-heading text-center">Profile</div>
                        <div class="panel-body">
                            <div class="profile-pic">
                                <img src="profile_pic/<?php echo $user_data['profile_pic']; ?> ?>" class="avatar img-circle" alt="profile_pic" / >
                            </div>
                            <hr id="line">
                            <h4 class="username text-center"><?php echo $user_data['username']; ?></h4>
                            <div class="information">
                                <h3 class="full-name"><?php echo $user_data['first_name']?> <?php echo $user_data['last_name']?></h3>
                                <p class="mail-id"><?php echo $user_data['email']; ?></p>
                                <p class="mail-id">Batch: <?php echo $user_data['batch']; ?></p>
                                <p class="mail-id">Stream: <?php echo $user_data['stream']; ?></p>

                                <a href="profile.php">
                                    <button class="btn">Edit Profile</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-sm-6 col-xs-12 history-info">
                    <div class="panel panel-default">
                        <div class="panel-heading">Registered Books</div>
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
                    <div class="panel panel-default">
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
                    <div class="panel panel-default">
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

    </div>
</div>


<script src="assets/js/jquery-3.1.1.min.js"></script>
<script src='assets/js/bootstrap.min.js'></script>
<script src="assets/js/app.js"></script>
</body>
</html>