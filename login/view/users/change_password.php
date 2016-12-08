<div class="row ">
    <h3 class="center">Change Password</h3>
    <?php
    if(!empty($errors)) {
        foreach($errors as $message) {
            echo "<span class='error'>".$message[0]."</span><br/>";
        }
    }
    if (!empty($result)) {
        if($result == 1) {
            echo "<span class='success'> Successfully Change Password! </span> <a href='".$GLOBALS['dynamic_url']."home'> Go Back </a>";
        }
    }
    ?>
    <form action="<?php echo $GLOBALS['dynamic_url']; ?>login/changePassword" method="post" class="col s12">
        <div class="row">
            <div class="input-field col s12">
                <input  id="username" name="password_confirm" type="password" class="validate" value="" required>
                <label for="username">Confirm Password</label>
            </div>
            <div class="input-field col s12">
                <input  id="username" name="password" type="password" class="validate" value="" required>
                <label for="username">Password</label>
            </div>
            <div class="input-field col s12">
                <input  id="username" name="password_verify" type="password" class="validate" value="" required>
                <label for="username">Password Again</label>
            </div>
            <div class="input-field col s12">
                <button class="btn waves-effect waves-light light-blue darken-4" type="submit" style="margin-top: 20px;">Submit</button>
            </div>
        </div>
    </form>
</div>