<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Login extends CI_Controller {
 
     public function index() {
 
         // Fungsi Login
        $this->simple_login->cek_logout();
         $valid = $this->form_validation;
         $username = $this->input->post('username');
         $password = $this->input->post('password');
         $valid->set_rules('username','Username','required');
         $valid->set_rules('password','Password','required');
 
         if($valid->run()) {
            
             $this->simple_login->login($username,$password, site_url('alldata'), site_url('login'));
         }
         // End fungsi login
         $this->load->view('account/v_logi');
     }
 
     public function logout(){
         $this->simple_login->logout();
     }        
 }