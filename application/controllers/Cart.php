<?php

class Cart extends CI_Controller{


    function add(){
        // Set array for send data.
        $insert_data = array(
            'id' => $this->input->post('product_id'),
            'name' => $this->input->post('product_name'),
            'price' => $this->input->post('product_price'),
            'image' => $this->input->post('product_image'),
            'qty' => 1
        );
        // This function add items into cart.
        $this->cart->insert($insert_data);
        echo $fefe = count($this->cart->contents());
        // This will show insert data in cart.
    }


    function remove() {
        $rowid = $this->input->post('rowid');
        // Check rowid value.
        if ($rowid==="all"){
            // Destroy data which store in session.
            $this->cart->destroy();
        }else{
            // Destroy selected rowid in session.
            $data = array(
                'rowid' => $rowid,
                'qty' => 0
            );
            // Update cart data, after cancel.
            $this->cart->update($data);
        }
        echo $fefe = count($this->cart->contents());
        // This will show cancel data in cart.
    }




    function update_cart(){
        // Recieve post values,calcute them and update
        $rowid = $_POST['rowid'];
        $price = $_POST['price'];
        $amount = $price * $_POST['qty'];
        $qty = $_POST['qty'];

        $data = array(
            'rowid' => $rowid,
            'price' => $price,
            'amount' => $amount,
            'qty' => $qty
        );
        $this->cart->update($data);
        echo $data['amount'];
    }



public function view_product(){

            $this->load->view('templates/header');

            $pro_id = $this->uri->segment(3);
            $data['product'] = $this->cart_model->view_product($pro_id);
            $this->load->view('cart/single_product',$data);
            $this->load->view('templates/footer');

        }



    public function view_cart(){
        $this->load->view('templates/header');
        $this->load->view('cart/view_cart');
        $this->load->view('templates/footer');
    }

    public function opencart()
    {
        $data['cart']  = $this->cart->contents();
        $this->load->view('cart/view_cart1', $data);
    }

    function billing_view(){

        $customer = $this->session->userdata('username');
        $grand_total = 0;
        // Calculate grand total.
        if ($cart = $this->cart->contents()):
            foreach ($cart as $data):
                $grand_total = $grand_total + $data['subtotal'];
            endforeach;
        endif;

        $order = array(
            'order_date' => date('Y-m-d'),
            'order_price' => $grand_total,
            'user_username' => $customer
        );

        $id = $this->cart_model->save_order($order);


        foreach ($this->cart->contents() as $item) {
            $orderData = array(
                'order_id' => $id,
                'product_id' => $item['id'],
                'name' => $item['name'],
                'price' => $item['price'],
                'qty' => $item['qty'],
                'subtotal' => $item['subtotal']
            );

            $this->cart_model->save_order_details($orderData);
        }


//        $orderData = $this->input->post();
        $data['order_id'] = $id;
        print_r($data['order_id']);
        $this->load->view('templates/header');
        $this->load->view('cart/billing_view',$data);
        $this->load->view('templates/footer');
    }

    function billing_success(){

        $this->session->unset_userdata('cart_contents');
        $this->load->view('templates/header');
//        echo $fefe = count($this->cart->contents());

        if ($_REQUEST['demo'] == 'Y')
        {
            $order_number = 1;
        }
        else
        {
            $order_number = $_REQUEST['order_number'];
        }
        $order_id = $_REQUEST['order_id'];
        $hashSecretWord = 'YjJjZDBjYTUtMGVhZi00YTBkLTgzOWItNTE0ZDdlMjYwNzNk';
        $compare_string = $hashSecretWord . $_REQUEST['sid'] . $order_number . $_REQUEST['total'];
        $compare_hash1 = strtoupper(md5($compare_string));
        $compare_hash2 = $_REQUEST['key'];

        if ($compare_hash1 != $compare_hash2)
        {
            echo "Hash Mismatch";
            $this->load->view('cart/billing_fail');
        }
        else
        {
            echo "Hash Matched";
            echo $order_id;
            $this->load->view('cart/billing_success');
        }

        $this->load->view('templates/footer');

        $this->cart_model->complete_order($order_id);

    }

}