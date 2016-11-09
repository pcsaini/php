<?php
require '../database/connect.php';

function view_cat()
{
    $query = "select *  from book_category";
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

function view_book($cat_id){

    return mysql_query("SELECT * FROM books WHERE book_category_id=$cat_id");
}

function view_book_code($book_id){
    return mysql_query("SELECT * FROM book_code WHERE book_id=$book_id");
}

function delete_category($cat_id){
    mysql_query("DELETE FROM book_category WHERE book_category_id = $cat_id");
}

function delete_category_book($cat_id){
    mysql_query("DELETE FROM books WHERE book_category_id = $cat_id");
}

function delete_category_book_code($cat_id){
    return mysql_query("DELETE FROM book_code WHERE book_category_id = $cat_id");
}

function delete_book($book_code){
    return mysql_query("DELETE FROM book_code WHERE book_code = '$book_code'");
}

function delete_books($book_id){
    mysql_query("DELETE FROM books WHERE book_id = $book_id");
}

function view_users($batch,$stream){
    return mysql_query("SELECT * FROM users WHERE batch='$batch' AND stream='$stream'");
}
function db_select_books_view_books()
{
    $query = "SELECT * FROM books ";
    $result = mysql_query($query);
    return $result;

}

function selected_book_by_user($book_id)
{
    $query = "SELECT * FROM books WHERE book_id=$book_id";
    $result = mysql_query($query);
    return $result;
}

function insert_into_database_register($user_id, $book_id)
{
    $query = "INSERT INTO register_book (user_id,book_id,register_status) VALUES  ('$user_id','$book_id','1')";
    $result = mysql_query($query);
}

function check_no_of_copies($book_id)
{
    $query = "SELECT no_of_copies FROM books WHERE book_id=$book_id";
    return mysql_result(mysql_query($query),0);
}

function decrement_no_of_copies($book_id, $no_of_copies)
{
    $no_of_copies = $no_of_copies - 1;
    $query = "UPDATE books SET `no_of_copies`='$no_of_copies' WHERE book_id=$book_id";
    $result = mysql_query($query);

}

function check_no_of_book_issued_by_student($user_id)
{
    $query = "SELECT registered_book FROM users WHERE user_id=$user_id";
    $result = mysql_query($query);
    return $result;

}

function increment_no_of_registered_book($user_id, $registered_book)
{
    $registered_book = $registered_book + 1;
    $query = "UPDATE users SET `registered_book`='$registered_book' WHERE user_id=$user_id";
    $result = mysql_query($query);

}