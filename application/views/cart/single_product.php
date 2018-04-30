<head>
<!--    <link rel="stylesheet" type="text/css" href="--><?php //echo base_url(); ?><!--/assets/css/product_styles.css" media="all"/>-->
<!--    <script type="text/javascript" src="--><?php //echo base_url(); ?><!--assets/js/jquery-3.1.0.min.js"></script>-->
<!--    <script type="text/javascript" src="--><?php //echo base_url(); ?><!--assets/js/core.js"></script>-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
</head>




<div class="main_content">

    <!-- Flash message pop up -->
    <div class="modal" id="sucess_alert_pop" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content conts">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h5 class="modal-title green_flash green" id="myModalLabel"><span class="glyphicon glyphicon-ok"></span> <strong>Success Message</strong></h5>
                </div>
                <div class="modal-body">
                    <p class="green_flash">Item has been add to your cart.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Flash message pop up -->

    <div id="single_product8">
        <ul class="products">
            <center>


            <?php
            if(isset($product) && is_array($product) && count($product)){
                $i=1;
                foreach ($product as $key => $data) {
                    ?>

                            <h4 class="name<?php echo $data['product_id'] ?>"
                               rel="<?php echo $data['product_id'] ?>"><?php echo $data['product_name'] ?></h4>
                            <div class="price-label price<?php echo $data['product_id'] ?>"
                                 rel="<?php echo $data['product_price'] ?>">INR <?php echo $data['product_price'] ?></div>
                            <center><img class="image<?php echo $data['product_id'] ?>" rel="<?php echo $data['product_image'] ?>"
                                 src="<?php echo base_url(); ?>/product_images/<?php echo $data['product_image'] ?>" width='300' height='300'
                                 alt="<?php echo $data['product_id'] ?>"></center>
                            <span class="tile-overlay"></span>
                    <br>
                            <p>Available Quantity <?php echo $data['product_quantity']; ?></p>
                            <br>
                            <p><?php echo $data['product_description']; ?></p>
                            <br>
                                <button type="button" class="btn btn-primary"
                                        onclick="javascript:addtocart(<?php echo $data['product_id'] ?>)">Add to Cart</button>



                    <?php
                    $i++;
                } }
            ?><br>
                <a href="<?php echo base_url('Pages/index/');?>">Back</a>
            </center>

        </ul>


    </div>
</div>



<script type="text/javascript">
    function addtocart(p_id)
    {
        var price = $('.price'+p_id).attr('rel');
        var image = $('.image'+p_id).attr('rel');
        var name  = $('.name'+p_id).text();
        var id    = $('.name'+p_id).attr('rel');
        $.ajax({

            type: "POST",
            url: "<?php echo base_url('cart/add');?>",
            data: "product_id="+id+"&product_image="+image+"&product_name="+name+"&product_price="+price,
//            success: function (response) {
//                $(".cartcount").text(response);
//            }
            success: function (response) {
                $(".cartcount").text(response);
                $('#sucess_alert_pop').modal({ keyboard : true,show: true,backdrop :'static'});
                setTimeout(function(){ $("#sucess_alert_pop").modal('toggle'); }, 2500);
            }
        });
    }





</script>




