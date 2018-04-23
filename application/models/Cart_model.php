<?php

class Cart_model extends CI_Model {

    // Function to retrieve an array with all product information
    function view_product($pro_id){

        $condition = "product_id =" . "'" . $pro_id . "'";
        $this->db->select('*');
        $this->db->from('product');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();
        return $query->result_array(); // Return the results in a array.
    }

}