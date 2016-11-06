<?php
require '../database/helper_user.php';
/**
 * Created by PhpStorm.
 * User: Vishal Raman
 * Date: 06-Nov-16
 * Time: 3:29 PM
 */
    function booksInTheDatabase()
    {
        $result=db_select_books_view_books(books);
        return $result;

    }
    function get_description_of_book($book_id)
    {
        $result=selected_book_by_user($book_id);
        return $result;
    }


?>