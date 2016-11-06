<?php
/**
 * Created by PhpStorm.
 * User: Vishal Raman
 * Date: 06-Nov-16
 * Time: 1:38 PM
 */
require 'connect.php';
    function db_select_books_view_books()
    {


        //$con= mysqli_connect("localhost","root","vishraman","library");

        $query= "SELECT * FROM books ";
        $result= mysql_query($query);
        return $result;

    }
    function selected_book_by_user($book_id)
    {
        $query= "SELECT * FROM books WHERE book_id=$book_id";
        $result= mysql_query($query);
        return $result;
    }
      function insert_into_database_register($user_id,$book_id)
      {
          $query= "INSERT INTO register_book (user_id,book_id,register_status) VALUES  ('$user_id','$book_id','1')";
          $result= mysql_query($query);
      }
      function check_no_of_copies($book_id)
      {
          $query= "SELECT no_of_copies FROM books WHERE book_id=$book_id";
          $result= mysql_query($query);
          return $result;
      }
      function decrement_no_of_copies($book_id,$no_of_copies)
      {
          $no_of_copies=$no_of_copies-1;
          $query= "UPDATE books SET `no_of_copies`='$no_of_copies' WHERE book_id=$book_id";
          $result= mysql_query($query);

      }
        function check_no_of_book_issued_by_student($user_id)
        {
            $query= "SELECT registered_book FROM users WHERE user_id=$user_id";
            $result= mysql_query($query);
            return $result;

        }
        function increment_no_of_registered_book($user_id,$registered_book)
        {
            $registered_book=$registered_book+1;
            $query= "UPDATE users SET `registered_book`='$registered_book' WHERE user_id=$user_id";
            $result= mysql_query($query);

        }


?>