<?php
require "../init.php";
//require "../database/helper.php";

if (empty($_POST) === false) {
    if (md5($_POST['current_password']) === $user_data['password']) {
        if (trim($_POST['new_password']) !== trim($_POST['new_password_again'])) {
            header('Location: ../view/changepassword.php?errors=your possword don\'t match');
        } else if (strlen($_POST['new_password']) < 6) {
            header('Location: ../view/changepassword.php?errors=please enter min 6 char pass');
        } else {
            change_password($user_data['user_id'], $_POST['new_password']);
            header('Location: ../view/changepassword.php?success');
        }
    } else {
        header('Location: ../view/changepassword.php?errors=Enter Right Password');
    }
}
?>