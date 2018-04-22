<head>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/product_styles.css" media="all"/>
</head>

<div class="main_content">

    <div id="single_product8">
        <ul class="products">
            <center>

            <?php foreach($product as $p): ?>


                        <h4><b><?php echo $p['product_name']; ?></b></h4>
                        <center><img src="<?php echo base_url(); ?>product_images/<?php echo $p['product_image']; ?>" width='300' height='300' alt="" /></center>

                        <br>
                        <p><b>LKR <?php echo $p['product_price']; ?></b></p>
                        <p>Available Quantity <?php echo $p['product_quantity']; ?></p>
                        <br>
                        <p><?php echo $p['product_description']; ?></p>
                        <br>
                                    <?php echo form_open('cart/add_cart_item'); ?>
                                    <fieldset>
                                        <label>Quantity</label>
                                        <?php echo form_input('quantity', '1', 'maxlength="2"'); ?>
                                        <?php echo form_hidden('product_id', $p['product_id']); ?>
                                        <?php echo form_submit('add', 'Add to Cart'); ?>
                                    </fieldset>
                                    <?php echo form_close(); ?>
                        <a href="<?php echo base_url('Pages/index/');?>">Back</a>

               </center>

            <?php endforeach;?>

        </ul>
    </div>
    </div>
