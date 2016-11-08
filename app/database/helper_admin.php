<?php

require 'connect.php';
//require 'helper_user.php';

function view_cat()
{
    $query = "select book_category_name  from book_category";
    $results = (mysql_query($query));
    return $results;
}
function category_exists($cat_name){
    $cat_name = trim($cat_name);
    return (mysql_result(mysql_query("SELECT COUNT('book_category_id') FROM book_category WHERE  book_category_name= '$cat_name'"), 0) == 1) ? true : false;
}
function book_code_exists($book_code){
    $book_code = trim($book_code);
    return (mysql_result(mysql_query("SELECT COUNT('book_code') FROM book_code WHERE  book_code= '$book_code'"), 0) == 1) ? true : false;
}
function set_category($cat_name)
{
    $query = mysql_query("insert into book_category ( book_category_name) values ('$cat_name')");
}
function book_cat_id($cat_name){
    return mysql_result(mysql_query("SELECT book_category_id FROM book_category WHERE  book_category_name= '$cat_name'"),0);
}
function book_exists($isbn){
    $isbn = trim($isbn);
    return (mysql_result(mysql_query("SELECT COUNT('book_id') FROM books WHERE  isbn_no= '$isbn'"), 0) == 1) ? true : false;

}
function book_id($isbn,$book_cat_id){
    $isbn = trim($isbn);
    $book_cat_id = trim($book_cat_id);
    return (mysql_result(mysql_query("SELECT book_id FROM books WHERE  isbn_no= '$isbn' AND book_category_id= '$book_cat_id'"), 0));
}
function set_old_book($isbn, $copy)
{
    $query1 = "select no_of_copies from books WHERE isbn_no ='$isbn'";
    $result = mysql_result(mysql_query($query1), 0, 'no_of_copies');
    $result = $result + $copy;
    $query = mysql_query("update  books  set no_of_copies='$result' where isbn_no='$isbn'");
}
function increment_no_of_copies($book_id,$no_of_copies)
{
    $no_of_copies++;
    mysql_query("UPDATE books SET `no_of_copies`='$no_of_copies' WHERE book_id=$book_id");
    return $no_of_copies;
}
