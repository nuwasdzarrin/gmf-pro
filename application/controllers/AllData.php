<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class AllData extends CI_Controller {
     function __construct(){
         parent::__construct();
         $this->simple_login->cek_login();
     }
 
     //Load All Table Page
     public function index() {
         $this->template->load('v_static','V_AllData');
     }
 }