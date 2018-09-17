<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class InData extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->simple_login->cek_login();
		$this->load->model('M_InData');
		$this->load->model('M_AllData');
	}

     /*Load one or two data latest*/
	public function index() {
		$this->template->load('member/v_static','V_InData');
	}

	public function input() {
		/*function for make a token*/
		function random($leng)  
	    {  
	     $kar = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890abcdefghijklmnopqrstuvwxyz';  
	     $string = '';  
	     for($i = 0; $i < $leng; $i++) {  
	      $pos = rand(0, strlen($kar)-1);  
	      $string .= $kar{$pos};  
	     }  
	     return $string;  
	    }
		$token = random(10);
		$data = array(
			'token' => $token,
			'rvcd' => 'N',
			'task_code' => $this->input->post('task_code'),
			'cat' => $this->input->post('cat'),
			'eff_date' => $this->input->post('eff_date'),
			'qty' => $this->input->post('qty'),
			'ac_type' => $this->input->post('ac_type'),
			'threshold' => $this->input->post('threshold'),
			'repetitive' => $this->input->post('repetitive'),
			'resp' => $this->input->post('resp'),
			'part_no' => $this->input->post('part_no'),
			'comp' => $this->input->post('comp'),
			'task_desc' => $this->input->post('desc'),
			'ref_man' => $this->input->post('ref_man'),
			'zone' => $this->input->post('zone'),
			'sg_code' => $this->input->post('sg_code'),
			'sg_num' => $this->input->post('sg_num'),
			'ac_eff' => $this->input->post('ac_eff'),
			'reason' => $this->input->post('reason'),
			'support_doc' => $this->input->post('support_doc')
		);
		$dta = array(
			'token' => $token,
			'engineer' => $this->session->userdata('username'),
			'intime' => $time = date('Y-m-d H:i:s')
		);
		
		/*input to table dt_change*/
		$this->M_InData->input($data);
		/*input to table dt_control*/
		$this->M_AllData->inp($dta); 

		redirect (site_url('alldata'));
		
	}
}