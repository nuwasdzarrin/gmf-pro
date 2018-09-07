<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class AllData extends CI_Controller {
     function __construct(){
         parent::__construct();
         $this->simple_login->cek_login();
         $this->load->model('M_AllData');
     }
     
     //Load All Table Page
     public function index() {
     	$data['alldt'] = $this->M_AllData->AllData();
     	$this->template->load('member/v_static','member/V_AllData', $data);
     }
     
 }