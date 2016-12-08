<h3 class="center">Forget Password</h3>
<div class="row">
    <form action="<?php echo $GLOBALS['ep_dynamic_url']; ?>login/forgot" method="post" class="col s12">
        <div class="row">
            <div class="input-field col s12">
                <input id="email" name="email" type="text" class="validate" value="<?php if(isset($_POST['email'])) { echo $post['email']; } ?>" required>
                <label for="email">Enter your Email</label>
            </div>
            <div class="input-field col s12">
                <button class="btn waves-effect waves-light light-blue darken-4" type="submit" style="margin-top: 20px;">Submit</button>
            </div>
        </div>
    </form>
</div>
<a href='<?php echo $GLOBALS['ep_dynamic_url']; ?>'> Go Back </a>
