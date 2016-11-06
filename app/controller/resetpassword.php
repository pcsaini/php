<?php
require "../init.php";
if (empty($_POST)===false) {
    if (trim($_POST['new_password']) !== trim($_POST['new_password_again'])){
        header('Location: ../view/resetpassword.php?errors=your possword don\'t match');
    }
    else if (strlen($_POST['new_password']) < 6){
        header('Location: ../view/resetpassword.php?errors=please enter min 6 char pass');
    }
    else{
        if (isset($_GET['email'],$_GET['generate_password'])===true){
            $email      = trim($_GET['email']);
            $generate_password = trim($_GET['generate_password']);

            $user_id = user_id_from_email($email);
            $user_data = user_data($user_id,'username');
            change_password($user_id,$generate_password);
            $login = login($user_data['username'], $generate_password);
            if ($login == true){
                if (empty($_POST) === false){
                    change_password($user_id,$_POST['new_password']);
                    header('Location: ../view/resetpassword.php?success');
                }
                else{
                    echo output_errors($errors);
                }
                ?>
            <?php }


        }
        else{
            header('Location: index.php');
            exit();
        }
        header('Location: ../view/resetpassword.php?success');
    }
}
