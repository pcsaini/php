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
            <button class="btn-lg"  name="old_book" data-toggle="modal" data-target="#Modal1"> Increase number of book </button>

            <!-------------model class--------------------->
            <div id="Modal1"  role="dialog" class="modal fade col">
                <div class="modal-dialog modal-sm">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><p style="color:red;">&times</p></button>
                            <h4 class="modal-title">Add Book</h4>
                        </div>


                        <div class="modal-body ">

                            <form action="../../controller/add_category.php" method="post">
                                <label> ISBN:</label>
                                <input type="text" name="isbn"  value=" "/>
                                <label> Number of copies:</label>
                                <input type="nunber" name="copies"  value=" "/>
                                <input type="submit" name="set_old_book" value="Set" style="background-color: #004080; color: #FFFFFF"/>


                            </form>

                        </div>

                    </div>


                </div>

            </div>

            <!---------------end model class------------------------->

            <h4> Add New Book</h4>
            <form action="../../controller/add_category.php" method="post" class="form-horizontal" role="form">
                <div class="form-group">
                <label> Category Id:</label>
                <input type="text" class="form-control" name="cat_id" />
                </div>

                <div class="form-group">
                <label> Book Id:</label>
                <input type="text" class="form-control" name="book_id" />
                </div>

                <div class="form-group">
                <label> Book Name:</label>
                <input type="text" class="form-control" name="book_name" />
                </div>

                <div class="form-group">
                <label> ISBN Number:</label>
                <input type="text" class="form-control" name="isbn" />

                    </div>

                <div class="form-group">
                <label> Auther:</label>
                <input type="text" class="form-control" name="auther" />
                    </div>

                <div class="form-group">
                <label> Edition:</label>
                <input type="text"  class="form-control" name="edition" />
                    </div>

                <div class="form-group">
                <label> Number Of Copies:</label>
                <input type="text" class="form-control" name="copy" />
                </div>

                <div class="form-group">
                <input type="submit" name="set_new_book" value="Set"   style="background-color: #004080; color: #FFFFFF" />
                    </div>
            </form>

        </div>

    </div>
</div>



<script src="assets/js/jquery-3.1.1.min.js"></script>
<script src='assets/js/bootstrap.min.js'></script>
<script src="assets/js/app.js"></script>
</body>
</html>