<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="dashboard/assets/image/logo.ico">
    <link rel="shortcut icon" type="image/x-icon" href="dashboard/assets/image/logo.ico">
    <title>Library: Books</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="dashboard/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="dashboard/assets/css/font-awesome.min.css">
    <!-- Owl Carousel Assets -->
    <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="owl-carousel/owl.theme.css">
    <script src='dashboard/assets/js/jquery-3.1.1.min.js'></script>

</head>
<body>
<?php
include_once "../init.php";
include_once "navbar.php";
include '../controller/booksStored.php';
?>

<script>


</script>


<div class="main-content">
    <div class="container">
        <div class="search-bar">
            <h3>Search Here!</h3>
            <input type="text" name="search" placeholder="Search..">
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
    </div>
</div>


<?php
include_once "footer.php";
?>

<script src='dashboard/assets/js/bootstrap.min.js'></script>
<script src='owl-carousel/owl.carousel.min.js'></script>
<script src="js/main.js"></script>
</body>
</html>
