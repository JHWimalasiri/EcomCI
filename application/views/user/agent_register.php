<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Gzone Technologies</title>

    <link rel="stylesheet" type="text/css" href="/assets/styles/style.css" media="all"/>
    <link href="/assets/css/font-awesome.css" rel="stylesheet">

</head>

<body>

<!-- content -->
<div class="main_content">
    <div class="reg">
        <div id="black">
            <h1 style="text-align :center; color: white;"><b>Become an Agent of Gzone Technologies & earn profit</b></h1>
            <br>

            <h4 style="text-align :center; color: white;">At GZone Technologies, <br>
                we aim to cultivate a culture of collection points among our customers. <br>
                You could be a part of this process through registering with with us as an agent.<br>
                You could also earn a commission from participating in the process! </h4>
        </div>

        <form class = "register-form" action = "agent/includes/agentval.php" method="POST">

            <div class="container">
                <h2 class="heading_reg">Agent Registration</h2>
                <div class="reg_form_grid">
                    <ul>
                        <li><label for="fname"> <b> First Name <span class="req">*</span></b> </label></li>
                        <li><input type="text" size="50" id="fname" name="fname"  required autocomplete="off"></li>
                        <br>
                        <li><label for="lname"> <b> Last Name <span class="req">*</span></b> </label></li>
                        <li><input type="text" size="50" id="lname" name="lname"  required autocomplete="off"></li>

                        <br>
                        <li><label for="email"> <b>E-mail</b><span class="req">*</span></label></li>
                        <li><input type="varchar" size="50" id="email" name="email"  required autocomplete="off"></li>
                        <br>
                        <li><label for="pnumber"> <b>Phone number</b><span class="req">*</span></label></li>
                        <li><input type="varchar" size="50" id="pnumber" name="pnumber" required autocomplete="off"></li>
                        <br>
                        <li><label for="bussname"> <b>Bussiness Name</b></label></li>
                        <li><input type="varchar" size="50" id="bussname" name="bussname"  autocomplete="off"></li>
                        <br>
                        <li><label for="nic"> <b>NIC No.</b></label><span class="req">*</span></li>
                        <li><input type="varchar" size="50" id="nic" name="nic" required autocomplete="off"></li>
                        <br>
                        <li><label for="lic"> <b>License No.</b></label></li>
                        <li><input type="varchar" size="50" id="lic" name="lic"></li>
                        <br>
                        <!-- <li><label for="pic"> <b>Insert Your Picture</b></label></li>
                        <li><input type="file" id="pic" name="pic" accept="image/*"></li>
                        <br> -->
                        <!-- <br> -->
                        <li><label for="uname"> <b> Username <span class="req">*</span></b> </label></li>
                        <li><input type="varchar" size="50" id="uname" name="uname"  required autocomplete="off"></li>
                        <li><label for="pwd"> <b>Password </b> <span class="req">*</span></label></li>
                        <li><input type="password" size="50" id="pwd" name="pwd"  required autocomplete="off"></li>
                        <br>
                        <li><label for="repwd"> <b> Re-enter Password </b> <span class="req">*</span></label></li>
                        <li><input type="password" size="50" id="repwd" name="repwd"  required autocomplete="off"></li>
                    </ul>
                    <br>

                    <!-- <form method="get" action="../../index.php"> -->

                    <input type="submit" name = "register" value="Request For Register">
                    <!-- <button>Register</button> -->
                    <!--
                                    </form> -->


                    <br>
                    Already have an account?  <a href="<?php echo base_url('User/login'); ?>"> Sign in </a>
                </div>
            </div>
    </div>
    </form>>
</div>

<!-- footer -->



</body>
</html>