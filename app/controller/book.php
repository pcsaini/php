<?php
    require "../database/helper.php";
    require "../database/helper_admin.php";
    require "../database/helper_user.php";
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
if(isset($_POST['delete_cat'])) {
    $cat_id= $_GET['cat_id'];
    delete_category($cat_id);
    Header('Location: ../view/dashboard/book_cat.php?delete_success');
    exit();
}
if(isset($_POST['set_new_book']))
{
    $cat_name= $_POST['cat_name'];
    $book_name= $_POST['book_name'];
    $isbn= $_POST['isbn'];
    $author= $_POST['author'];
    $edition= $_POST['edition'];
    $no_copy= $_POST['copy'];
    $book_cat_id = book_cat_id($cat_name);
    if (book_exists($isbn)){
        Header('Location: ../view/dashboard/add_book.php?errors=Book Already Exists');
        exit();
    }
    else{
        $data = array("book_name"=>$book_name,"isbn_no"=>$isbn,"author"=>$author,"edition"=>$edition,"book_category_id"=>$book_cat_id);
        db_insert($data,"books");
        Header('Location: ../view/dashboard/add_book.php?success');
        exit();
    }
}
if(isset($_POST['add_book_code']))
{
    $cat_name= $_POST['cat_name'];
    $isbn= $_POST['isbn'];
    $book_code = $_POST['book_code'];
    $book_cat_id = book_cat_id($cat_name);
    $book_id = book_id($isbn,$book_cat_id);
    if ($book_id != null){
        if (book_code_exists($book_code)){
            Header('Location: ../view/dashboard/add_book.php?errors=Book Code already Exists');
            exit();
        }
        else{
            $data = array("book_id"=>$book_id,"book_code"=>$book_code);
            db_insert($data,"book_code");
            $no_of_copy= check_no_of_copies($book_id);
            increment_no_of_copies($book_id,$no_of_copy);
            Header('Location: ../view/dashboard/add_book.php?success');
            exit();
        }
    }
    else{
        Header('Location: ../view/dashboard/add_book.php?errors=Book Not Found');
        exit();
    }

    die();

}
if(isset($_POST['view_book_list']))
{
    $category_name = $_POST['cat_name'];
    $book_cat_id = book_cat_id($category_name);
    Header("Location: ../view/dashboard/view_book.php?cat_id=$book_cat_id");
    exit();
}

if(isset($_POST['delete_book']))
{
    $book_code = $_POST['book_code'];
    delete_book($book_code);
    Header('Location: ../view/dashboard/view_book.php?success');
    exit();
}



?>

