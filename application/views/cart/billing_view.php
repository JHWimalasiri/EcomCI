
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

<!--        <form name="billing" method="post" action="--><?php //echo site_url('welcome/save_order') ?><!--" >-->
            <form action='https://www.2checkout.com/checkout/purchase' method='post'>
        <div class="reg">
            <div class="container">
                <h2 class="heading_reg">Order Details</h2>
                <div class="reg_form_grid">
                    <ul>
                        <li>
                            <input type='hidden' name='sid' value='203706179' />
                            <input type='hidden' name='mode' value='2CO' />
                            <input type='hidden' name='li_0_type' value='product' />
                            <input type='hidden' name='li_0_name' value='invoice123' />
                            <input type='hidden' name='li_0_price' value='<?php echo $grand_total; ?>' />
                            <input type='hidden' name='demo' value='Y' />
                            <input type='hidden' name='country' value='Sri Lanka' />
                        </li>
                        <br>
                        <li><label for="name"> <b> Name <span class="req">*</span></b> </label></li>
                        <li><input type="text" size="50" name="card_holder_name"  required autocomplete="off"></li>
                        <br>
                        <li><label for="address"> <b>Address line 1</b><span class="req">*</span></label></li>
                        <li><input type="varchar" size="50" name="street_address"  required autocomplete="off"></li>
                        <br>
                        <li><label for="address"> <b>Address line 2</b><span class="req">*</span></label></li>
                        <li><input type="varchar" size="50" name="street_address2"  required autocomplete="off"></li>
                        <br>
                        <li><label for="city"> <b>City</b><span class="req">*</span></label></li>
                        <li><input type="varchar" size="50" name="city"  required autocomplete="off"></li>
                        <br>
                        <li><label for="state"> <b>State/Province/Region</b><span class="req">*</span></label></li>
                        <li><input type="varchar" size="50" name="state"  required autocomplete="off"></li>
                        <br>
                        <li><label for="zip"> <b>Postal Code</b><span class="req">*</span></label></li>
                        <li><input type="varchar" size="50" name="zip"  required autocomplete="off"></li>
                        <br>
                        <li><label for="email"> <b>E-mail</b><span class="req">*</span></label></li>
                        <li><input type="varchar" size="50" name="email"  required autocomplete="off"></li>
                        <br>
                        <li><label for="phone"> <b>Phone number</b><span class="req">*</span></label></li>
                        <li><input type="varchar" size="50"  name="phone" required autocomplete="off"></li>
                        <input name='submit' type='submit' value='Pay LKR <?php echo $grand_total; ?>' />
                    </ul>
                    <br>
                    <center><a class ='fg-button teal' id='back' href="<?php echo site_url(); ?>">Back</a></center>
                </div>
            </div>
        </div>
        </form>


    <script src="https://www.2checkout.com/static/checkout/javascript/direct.min.js"></script>

</div>
</div>