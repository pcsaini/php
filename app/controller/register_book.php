<?php
include '../init.php';
include '../database/helper_user.php';
/**
 * Created by PhpStorm.
 * User: Vishal Raman
 * Date: 06-Nov-16
 * Time: 6:53 PM
 */
    if(isset($_POST['register_book']))
    {
        $user_id=$_POST['user_id'];
        $book_id= $_POST['book_id'];
        $result1= check_no_of_copies($book_id);
        while ($row = mysql_fetch_assoc($result1))
        {
            $no_of_copies = $row['no_of_copies'];
        }

        $result2=check_no_of_book_issued_by_student($user_id);
        while ($row = mysql_fetch_assoc($result2))
        {
            $registered_book = $row['registered_book'];
        }

        if($no_of_copies>0&& $registered_book<2)
        {
                decrement_no_of_copies($book_id,$no_of_copies);

                increment_no_of_registered_book($user_id,$registered_book);
                 insert_into_database_register($user_id,$book_id);
            echo "<script type='text/javascript'>
                    alert('Sucessfull registered for book');
                    window.location='../view/books.php';
                </script>";
            // Header('Location: ../view/books.php');
        }
        else
        {
            echo "<script type='text/javascript'>
                    alert('No. of _books is not available or you have excceded the no. for registered books');
                    window.location='../view/books.php';
                </script>";
        }

    }
    else
    {
        protact_page();
    }


?>