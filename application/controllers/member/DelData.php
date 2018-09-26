<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class DelData extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->simple_login->cek_login();
		$this->simple_login->cek_member();
		$this->load->model('M_InData');
	}

     /*Load latest data from seaching*/
	public function index() {
		$item_no = $this->input->post('item_no');
		$result = $this->M_InData->lo_edData($item_no);
		if ($result) {
			$data['edd'] = $result;
			$this->template->load('member/v_static','member/V_DelData', $data);
		}else{
			echo '<script>alert("Camp Item Number not Available. Back to all data");</script>';
            redirect (site_url('member/alldata'),'refresh');
		}
	}
	
	public function upDel() {
		$item_no = $this->input->post('item_no');

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
		$ac_type = $this->input->post('ac_type');
		$no = $this->M_InData->latestnumb($ac_type);
      	$numb = $no->numb;
      	if (!$numb) {$numb = 1;}
      	else {$numb+=1;}
		
		$data = array(
			'item_no' => $item_no,
			'token' => $token,
			'numb' => $numb,
			'rvcd' => 'D',
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
			'support_doc' => $this->input->post('support_doc'),
			'acc_by' => $this->input->post('acc_by'),
			'no_peg' => $this->session->userdata('id_employee')
		);
		$this->M_InData->input($data);

		/*input to table dt_control*/
		$dta = array(
			'token' => $token,
			'engineer' => $this->session->userdata('username'),
			'intime' => $time = date('Y-m-d H:i:s')
		);
		$this->load->model('M_AllData');
		$this->M_AllData->inp($dta);

		redirect (site_url('SgReport/InEd/'.$item_no));
	}
}