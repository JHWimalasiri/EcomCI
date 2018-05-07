
<div class="main_content">

    <?php
    $grand_total = 0;
    // Calculate grand total.
    if ($cart = $this->cart->contents()):
        foreach ($cart as $data):
            $grand_total = $grand_total + $data['subtotal'];
        endforeach;
    endif;
    ?>

        <form name="billing" method="post" action="<?php echo site_url('welcome/save_order') ?>" >
        <div class="reg">
            <div class="container">
                <h2 class="heading_reg">Order Details</h2>
                <div class="reg_form_grid">
                    <ul>
                        <li><label for="total"> <b> Order Total: LKR <?php echo $grand_total; ?> </b> </label></li>
                        <br>
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