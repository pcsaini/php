<?php
 require '../init.php';
?>

<?php
if(empty(isset($_POST['set_cat'])) == false) {
    $category_name= $_POST['category'];

    if (category_exists($category_name)){
        Header('Location: ../view/dashboard/book_cat.php?errors=Already Exists, Try Other?');
        exit();
    }else{
        set_category($category_name);
        Header('Location: ../view/dashboard/book_cat.php?success');
        exit();
    }
}

if(isset($_POST['set_new_book']))
{
    $cat_name= $_POST['cat_name'];
    $book_name= $_POST['book_name'];
    $isbn= $_POST['isbn'];
    $auther= $_POST['auther'];
    $edition= $_POST['edition'];
    $no_copy= $_POST['copy'];
    print_r($cat_name);
    die();


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
