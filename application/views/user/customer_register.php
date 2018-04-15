<html>
<head>
<!--    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">-->
<!--    <title>Gzone Technologies</title>-->
<!---->
<!--    <link rel="stylesheet" type="text/css" href="/assets/styles/style.css" media="all"/>-->
<!--    <link href="/assets/css/font-awesome.css" rel="stylesheet">-->

</head>

<body>

<!-- content -->
<?php echo validation_errors(); ?>

<div class="main_content">
    <?php echo form_open('user/customer_register'); ?>
        <div class="reg">
            <div class="container">
                <h2 class="heading_reg">Customer Registration</h2>
                <div class="reg_form_grid">
                    <ul>
                        <li><label for="username"> <b> Username <span class="req">*</span></b> </label></li>
                        <li><input type="text" size="50" name="username" id="username" required autocomplete="off"></li>
                        <br>
                        <li><label for="email"> <b>E-mail</b><span class="req">*</span></label></li>
                        <li><input type="varchar" size="50" name="email" id="email" required autocomplete="off"></li>
                        <br>
                        <li><label for="pwd"> <b>Password </b> <span class="req">*</span></label></li>
                        <li><input type="password" size="50" name="pwd" id="pwd" required autocomplete="off"></li>
                        <br>
                        <li><label for="repwd"> <b> Re-enter Password </b> <span class="req">*</span></label></li>
                        <li><input type="password" size="50" name="repwd" id="repwd" required autocomplete="off"></li>
                    </ul>
                    <br>
                    <button type="submit" class="btn btn-primary btn-block">Register</button>
<!--                        <input type="submit" name="register" value="Register">-->
                    <br>
                    Already have an account?  <a href="login.php"> Sign in </a>
                </div>
            </div>
        </div>
    <?php echo form_close(); ?>
</div>



</body>
</html>