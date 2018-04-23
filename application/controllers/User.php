<?php

class User extends CI_Controller{

    public function customer_register(){

        $data['title'] = 'Sign Up';
        $this->form_validation->set_rules('username', 'username', 'required|callback_check_username_exists');
        $this->form_validation->set_rules('email', 'email', 'required|callback_check_email_exists');
        $this->form_validation->set_rules('pwd', 'Password', 'required');
        $this->form_validation->set_rules('repwd', 'Confirm Password', 'matches[pwd]');


        if ($this->form_validation->run() === FALSE) {
            //$privilages = get_privilage_array($this->session->userdata('privilage_level'));
            $this->load->view('templates/header');
            $this->load->view('user/customer_register', $data);
            $this->load->view('templates/footer');
        } else {
            // Encrypt password
            $enc_password = md5($this->input->post('pwd'));
            $this->user_model->customer_register($enc_password);
            // Set message
            $this->session->set_flashdata('user_registered', 'You are now registered, login again to confirm');
            redirect('user/login');
        }
    }



    public function agent_register(){

        $data['title'] = 'Sign Up';
        $this->form_validation->set_rules('fname', 'FName', 'required');
        $this->form_validation->set_rules('lname', 'LName', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|callback_check_email_exists');
        $this->form_validation->set_rules('pnumber', 'Mobile Number ', 'required|regex_match[/^[0-9]{10}$/]'); //{10} for 10 digits number
        $this->form_validation->set_rules('bussname', 'BussinessName', 'required');
        $this->form_validation->set_rules('nic', 'NIC', 'required');
        $this->form_validation->set_rules('lic', 'License', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required|callback_check_username_exists');
        $this->form_validation->set_rules('pwd', 'Password', 'required');
        $this->form_validation->set_rules('repwd', 'Confirm Password', 'matches[pwd]');



        if ($this->form_validation->run() === FALSE) {
            //$privilages = get_privilage_array($this->session->userdata('privilage_level'));
            $this->load->view('templates/header');
            $this->load->view('user/agent_register', $data);
            $this->load->view('templates/footer');
        } else {
            // Encrypt password
            $enc_password = md5($this->input->post('pwd'));
            $this->user_model->agent_register($enc_password);
            // Set message
            $this->session->set_flashdata('user_registered', 'You are now registered, login again to confirm');
            redirect('user/login');
        }
    }
    

    public function login(){

        $data['title'] = 'Login';
        $this->form_validation->set_rules('username','username','required');
        $this->form_validation->set_rules('password','password','required');
        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header');
            $this->load->view('user/login', $data);
            $this->load->view('templates/footer');

        }
        else {

            // Get username
            $username = $this->input->post('username');
            // Get and encrypt the password
            $password = md5($this->input->post('password'));
            // Login user
            $res = $this->user_model->login($username, $password);
            if ($res) {
                // Create session
                $user_data = array(
                    'username' => $username,
                    'logged_in' => true
                );
                $this->session->set_userdata($user_data);
                // Set message
                $this->session->set_flashdata('user_loggedin', 'You are now logged in');
                redirect('pages/index');
            } else {
                // Set message
                $this->session->set_flashdata('login_failed', 'Login is invalid');
                redirect('user/login');

            }
        }
    }

    // Log user out
    public function logout()
    {
        // Unset user data
        $this->session->unset_userdata('logged_in');
        $this->session->unset_userdata('username');

        // Set message
        $this->session->set_flashdata('user_loggedout', 'You are now logged out');
        redirect('pages/index');
    }

    // Check if username exists
    public function check_username_exists($username)
    {
        $this->form_validation->set_message('check_username_exists', 'That username is taken. Please choose a different one');
        if ($this->user_model->check_username_exists($username)) {
            return true;
        } else {
            return false;
        }
    }

    // Check if email exists
    public function check_email_exists($email)
    {
        $this->form_validation->set_message('check_email_exists', 'That email is taken. Please choose a different one');
        if ($this->user_model->check_email_exists($email)) {
            return true;
        } else {
            return false;
        }
    }


}