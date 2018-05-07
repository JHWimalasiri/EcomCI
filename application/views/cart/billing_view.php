
<div class="main_content">
    <div class="reg">
    <form name="billing" method="post" action="<?php echo site_url('welcome/save_order') ?>" >
        <div align="center">
            <h1 align="center">Billing Info</h1>
            <table border="0" cellpadding="2px">
<!--                <tr><td>Order Total:</td><td><strong>INR --><?php //echo $grand_total; ?><!--</strong></td></tr>-->
                <tr><td>Your Name:</td><td><input type="text" name="name" required=""/></td></tr>
                <tr><td>Address:</td><td><input type="text" name="address" required="" /></td></tr>
                <tr><td>Email:</td><td><input type="text" name="email" required="" /></td></tr>
                <tr><td>Phone:</td><td><input type="text" name="phone"  required="" /></td></tr>
                <tr><td><a class ='fg-button teal' id='back' href="<?php echo site_url(); ?>">Back</a></td>
                    <td><input class ='fg-button teal' type="submit" value="Place Order" /></td>
                </tr>

            </table>
        </div>
    </form>

        <form name="billing" method="post" action="<?php echo site_url('welcome/save_order') ?>" >
        <div class="reg">
            <div class="container">
                <h2 class="heading_reg">Deliver Details</h2>
                <div class="reg_form_grid">
                    <ul>
                        <li><label for="name"> <b> Name <span class="req">*</span></b> </label></li>
                        <li><input type="text" size="50" name="username" id="username" required autocomplete="off"></li>
                        <br>
                        <li><label for="address"> <b>Address</b><span class="req">*</span></label></li>
                        <li><input type="varchar" size="50" name="address" id="address" required autocomplete="off"></li>
                        <br>
                        <li><label for="postal"> <b>Postal Code</b><span class="req">*</span></label></li>
                        <li><input type="varchar" size="50" name="postal" id="postal" required autocomplete="off"></li>
                        <br>
                        <li><label for="email"> <b>E-mail</b><span class="req">*</span></label></li>
                        <li><input type="varchar" size="50" name="email" id="email" required autocomplete="off"></li>
                        <br>
                        <li><label for="pnumber"> <b>Phone number</b><span class="req">*</span></label></li>
                        <li><input type="varchar" size="50" id="pnumber" name="pnumber" required autocomplete="off"></li>
                    </ul>
                    <br>
                    <a class ='fg-button teal' id='back' href="<?php echo site_url(); ?>">Back</a>
                    <input type="image" src="<?php echo base_url(); ?>assets/images/x-click-but01.gif" style="width: 200px; float: right" alt="Submit">
                </div>
            </div>
        </div>
        </form>

</div>
</div>