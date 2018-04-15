<html>

<?php echo validation_errors(); ?>

<body>
<?php echo form_open('user/login'); ?>
<div class="main_content">
    <div class="reg">
        <h3 class="heading_reg">Log in</h3>
        <div class="reg_form_grid" id="loginform">

                <ul>
                    <li> <label for="username"> Username  </label> </li>
                    <li> <input type="text" size="37" name="username" id="username"> </li>
                    <br>
                    <li><label for="password"> Password  </label> </li>
                    <li><input type="password" size="37" name="password" id="password"></li>
                </ul>
                <br>
                <button type="submit" class="btn btn-primary btn-block">Login</button>
                <br>
                New to Gzone ?<a href="#"> Click here to sign up </a>
        </div>
    </div>
</div>
<?php echo form_close(); ?>
</body>

</html>