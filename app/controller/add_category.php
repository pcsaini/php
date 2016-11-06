<?php
 require '../init.php';
?>

<?php
if(isset($_POST['set_cat'])) {

    $categ_name = $_POST['category'];
    set_category($categ_name);
    Header('Location: ../view/dashboard/book_cat.php');
}


if(isset($_POST['set_new_book']))
{


    $categ_id= $_POST['cat_id'];
    $book_id= $_POST['book_id'];
    $book_name= $_POST['book_name'];
    $isbn= $_POST['isbn'];
    $auther= $_POST['auther'];
    $edition= $_POST['edition'];
    $no_copy= $_POST['copy'];

    set_new_book( $categ_id ,$book_id,$book_name,$isbn,$auther,$edition,$no_copy );
    Header('Location: ../view/dashboard/add_book.php');

}


if(isset($_POST['set_old_book']))
{



    $isbn= $_POST['isbn'];

    $no_copy= $_POST['copies'];

    set_old_book( $isbn,$no_copy );
    Header('Location: ../view/dashboard/add_book.php');

}



?>
