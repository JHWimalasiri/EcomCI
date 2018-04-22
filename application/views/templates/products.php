<head>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/product_styles.css" media="all"/>
</head>

<div class="main_content">

    <div id="product_box2">

        <ul class="products">
        <?php foreach($products as $p): ?>
         <li>
<!--        <div id='single_product2'>-->
            <center>
                <br>
                <img src="<?php echo base_url(); ?>product_images/<?php echo $p['product_image']; ?>" width='100' height='100' alt="" />
                <h4><?php echo $p['product_name']; ?></h4>
                <br>
                <p>LKR <?php echo $p['product_price']; ?></p>
                <p>Quantity <?php echo $p['product_quantity']; ?></p>
                <br>

            <a href="<?php echo base_url('Cart/view_product/');?><?php echo $product_id = $p['product_id'] ?>">Details</a></center>
<!--                --><?php //echo form_open('cart/add_cart_item'); ?>
<!--                <fieldset>-->
<!--                    <label>Quantity</label>-->
<!--                    --><?php //echo form_input('quantity', '1', 'maxlength="2"'); ?>
<!--                    --><?php //echo form_hidden('product_id', $p['product_id']); ?>
<!--                    --><?php //echo form_submit('add', 'Add'); ?>
<!--                </fieldset>-->
<!--                --><?php //echo form_close(); ?>
<!--        </div>-->
         </li>
        <?php endforeach;?>

            </ul>

    </div>
</div>
