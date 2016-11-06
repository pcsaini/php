<?php

require 'connect.php';

function view_cat ()
{
  $query = "select book_category_name  from book_category";

    $results =(mysql_query($query));

   return $results;

}


function set_category( $cat_name )
{


        $query = mysql_query("insert into book_category ( book_category_name) values ('$cat_name')");

}


function set_new_book( $cat_id ,$book_id,$book_name,$isbn,$auther,$edition,$copy )
{

echo "Book inserted";
    $query = mysql_query("insert into books  values ('$book_id','$book_name','$isbn','$auther','$edition','$copy','$cat_id')");

}


function set_old_book( $isbn,$copy )
{
    $query1 = "select no_of_copies from books WHERE isbn_no ='$isbn'";
    $result= mysql_result(mysql_query($query1),0,'no_of_copies');
    $result = $result + $copy;


    $query = mysql_query("update  books  set no_of_copies='$result' where isbn_no='$isbn'");

}
