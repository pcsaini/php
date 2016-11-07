<?php
session_start();
error_reporting(0); //error is disable of mysqli
include '../init.php';
include '../controller/booksStored.php';

?>

<?php

if (isset($_GET['id'])) {
    $user_login_id = $_SESSION['user_id'];

    $book_id = $_GET['id'];
    $result = get_description_of_book($book_id);

    while ($row = mysql_fetch_assoc($result)) {

        $book_id = $row['book_id'];
        $book_name = $row['book_name'];
        $book_author = $row['author'];
        $edition = $row['edition'];
        $no_of_copies = $row['no_of_copies'];
        ?>
        <p>user id <?php echo $user_login_id; ?></p>
        <p>Book Id <?php echo $book_id; ?></p>
        <p>NameBook <?php echo $book_name; ?></p>
        <p>Author <?php echo $book_author; ?></p>
        <p>Edition <?php echo $edition; ?></p>
        <p>no_of_copies <?php echo $no_of_copies; ?></p>

        <form action="../controller/register_book.php" method="post">
            <input type="hidden" name="user_id" value="<?php echo $user_login_id; ?>">
            <input type="hidden" name="book_id" value="<?php echo $book_id; ?>">

            <input type="submit" name="register_book" value="Register Book"/>

        </form>


        <?php
    }

} else {
    protact_page();
}

?>

