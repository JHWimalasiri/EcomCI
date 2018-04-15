<?php
class User_model extends CI_Model{

    public function customer_register($enc_password){

        // User data array
        $data = array(
            'username' => $this->input->post('username'),
            'password' => $enc_password,
            'user_role_id' => 2,


        );

        $insert1 = $this->db->insert('user', $data);

        $data = array(
            'user_username' => $this->input->post('username'),
            'customer_email' => $this->input->post('email')
        );

        // Insert user
        $insert2 = $this->db->insert('customer', $data);
        return $insert1;$insert2;


    }

    public function agent_register(){

    }

    public function login($username,$password){

        // Validate

        $condition = "username =" . "'" . $username . "' AND " . "password =" . "'" . $password . "'";
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where($condition);
        $this->db->limit(1);
        $res = $this->db->get();

//        $this->db->where('username', $username);
//        $this->db->where('password', $password);
//        $result = $this->db->get('user');
//        $res   = $result->result();
        if($res->num_rows() == 1){
            $this->session->set_userdata('username',$res->row(0)->username);

            return $res;
        } else {
            return false;
        }

    }

    // Check username exists
    public function check_username_exists($username){
        $query = $this->db->get_where('user', array('username' => $username));
        if(empty($query->row_array())){
            return true;
        } else {
            return false;
        }
    }
    // Check email exists
    public function check_email_exists($email){
        $query = $this->db->get_where('customer', array('customer_email' => $email));
        if(empty($query->row_array())){
            return true;
        } else {
            return false;
        }
    }
}