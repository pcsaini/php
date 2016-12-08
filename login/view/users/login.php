<div class="row">
    <h3 style="text-align: center">Login</h3>
    <?php
    if(!empty($errors)) {
        foreach($errors as $message) {
            echo "<span class='error'>".$message[0]."</span><br/>";
        }
    }
    ?>
    <form class="col s12" action="<?php echo $GLOBALS['dynamic_url']; ?>login" method="post">
        <div class="row">
            <div class="input-field col s12">
                <input id="username" type="text" name="username" value="<?php if(isset($_POST['username'])) { echo $post['username']; } ?>" required>
                <label for="username">Username</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input id="password" type="password" name="password" required>
                <label for="password">Password</label>
            </div>
        </div>
        <button class="btn waves-effect waves-light" type="submit" name="login">Submit</button>
    </form>
    <div class="col s12" style="padding-top: 30px;">
        <div class="col m6">New User? <a href="<?php echo $GLOBALS['dynamic_url']; ?>register">Register</a></div>
        <div class="col m6 right-align"><a href="<?php echo $GLOBALS['dynamic_url']; ?>login/forget">Forget Password</a></div>
    </div>
</div>