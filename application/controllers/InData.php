<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InData extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->simple_login->cek_login();
		$this->load->model('M_InData');
	}

     //Load one or two data latest
	public function index() {
		$this->template->load('v_static','V_InData');
	}

	public function input() {
		$item_no = $this->input->post('item_no');
		$data = array(
			'item_no' => $item_no,
			'task_code' => $this->input->post('task_code'),
			'cat' => $this->input->post('cat'),
			'eff_date' => $this->input->post('eff_date'),
			'qty' => $this->input->post('qty'),
			'ac_type' => $this->input->post('ac_type'),
			'intv' => $this->input->post('intv'),
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
		$this->M_InData->input($data);
		redirect (site_url('SgReport/InEd/'.$item_no));
	}

	public function lo_edit() {
		$this->template->load('v_static','V_EdData');
	}
}