<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="../dashboard/assets/image/logo.ico">
    <link rel="shortcut icon" type="image/x-icon" href="../dashboard/assets/image/logo.ico">
    <title>Library: Books</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="../dashboard/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../dashboard/assets/css/font-awesome.min.css">
    <!-- Owl Carousel Assets -->
    <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="owl-carousel/owl.theme.css">
    <script src='../dashboard/assets/js/jquery-3.1.1.min.js'></script>

</head>
<body>
<?php
include_once "../init.php";
include_once "navbar.php";
?>

<div class="main-heading">
    <h2>Books</h2>
</div>

<div class="container">
    <form action="" method="get">
        <div class="search-bar text-center">
            <input class="search-box" type="text" placeholder="Search Book here"/>
            <button class="btn btn-info" value="Search" type="submit"><span class="fa fa-search"></span> Search</button>
        </div>
    </form>
    <br>
    <div class="col-lg-3">
        <div class="panel panel-default">
            <div class="panel-heading">Book Category</div>
            <div class="panel-body">
                <form>
                    <?php $result = view_cat();
                    while ($row = mysql_fetch_array($result)) { ?>
                    <div class="checkbox">
                        <label><input type="checkbox" value=""><?php echo $row['book_category_name'] ?></label>
                    </div>
                    <?php }?>
                    <button class="btn" type="submit" name="cat_search">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-9">
        <div class="panel panel-default">
            <div class="panel-heading">Search Results</div>
        </div>
        <div class="panel panel-default">
            <div class="panel-body">Book</div>
        </div>
    </div>


            <?php
            print_r($_SESSION['user_id']);

            $result = booksInTheDatabase(); //go to ../controller/booksStored.php
            while ($row = mysql_fetch_assoc($result)) {

                $book_id = $row['book_id'];
                $book_name = $row['book_name'];
                $book_author = $row['author'];
                $edition = $row['edition'];
                $no_of_copies = $row['no_of_copies'];
                ?>
                <h1><a href="singleBook.php?id=<?php echo $book_id; ?>"><?php echo $book_name; ?></a></h1>
                <p>Author <?php echo $book_author; ?></p>
                <p>Edition <?php echo $edition; ?></p>
                <p>no_of_copies <?php echo $no_of_copies; ?></p>


            <?php } ?>
</div>



<?php
include_once "footer.php";
?>

<script src='../dashboard/assets/js/bootstrap.min.js'></script>
<script src='owl-carousel/owl.carousel.min.js'></script>
<script src="js/main.js"></script>
</body>
</html>
