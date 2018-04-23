<?php

class Cart extends CI_Controller{

    public function view_product(){

            $this->load->view('templates/header');

            $pro_id = $this->uri->segment(3);
            $data['product'] = $this->cart_model->view_product($pro_id);
            $this->load->view('cart/single_product',$data);
            $this->load->view('templates/footer');
        }
}