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
<?php
require '../../init.php';
?>
<div class="app-container">
    <div class="row content-container">
        <?php
        include_once "navbar.php";
        include_once "sidebar.php";
        //include_once "footer.php";
        ?>
        <div class="main-content">
            <?php
            $result= view_cat();
            echo '<h3 style="color: #003366">';
            echo 'All Category';
            echo '</h3>';
            while ($row = mysql_fetch_array($result)) {

                echo '<table style="border: 2px solid #004080" border="1">';
                echo '<tr>';

                    echo '<td>' .$row['book_category_name'] . '</td>';

                echo '</tr>';

                echo '</table>';
            }

            ?>


            <button class="btn-sm" style="background-color: #004080; color: #FFFFFF" id="mybtn" data-toggle="modal" data-target="#Modal1" >Add Category </button>
            <!----------MODEL----------->

            <div id="Modal1"  role="dialog" class="modal fade col">
                <div class="modal-dialog modal-sm">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><p style="color:red;">&times</p></button>
                            <h4 class="modal-title">Add category</h4>
                        </div>


                            <div class="modal-body ">

                                <form action="../../controller/add_category.php" method="post">
                                    <label> Category name:</label>
                                    <input type="text" name="category" id="category" value=" "/>
                                    <input type="submit" name="set_cat" value="Set" style="background-color: #004080; color: #FFFFFF"/>
                                  <!--  <button type="submit"  name="set_cat" class="btn-sm" style="background-color: #004080; color: #FFFFFF" data-dismiss="modal">set</button>-->

                                </form>

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