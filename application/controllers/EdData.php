<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EdData extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->simple_login->cek_login();
		$this->load->model('M_InData');
	}

     //Load latest data from seaching
	public function index() {
		$item_no = $this->input->post('item_no');
		$data['edd'] = $this->M_InData->lo_edData($item_no);
		$this->template->load('v_static','V_EdData', $data);
		
	}
	//Load latest data from Cek
	public function fromCek() {
		$item_no = $this->uri->segment(3);
		$data['edd'] = $this->M_InData->lo_edData($item_no);
		$this->template->load('v_static','V_EdData', $data);
		
	}

	public function update() {
		$item_no = $this->input->post('item_no');
		$last_id = $this->db->select('id')->from('dt_change')
		->where('item_no',$item_no)->order_by('id','desc')
		->limit(1)->get()->row();
		
		$data = array(
			'item_no' => $item_no,
			'rvcd' => 'R',
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
		//input to table dt_change		
		$sta = array('sta' => 'OLD');
		$this->M_InData->update($sta,$last_id->id);
		$this->M_InData->input($data);

		//input to table dt_control
		$lt_id = $this->db->select('id')->from('dt_change')
		->where('item_no',$item_no)->order_by('id','desc')
		->limit(1)->get()->row();
		$dta = array('id_change' => $lt_id->id,'engineer' => $this->session->userdata('username'));
		$this->load->model('M_AllData');
		$this->M_AllData->inp($dta);

		redirect (site_url('SgReport/InEd/'.$item_no));
	}

	public function del() {		//update RVCD jadi Del or D
		$id = $this->input->post('id');
				
		$rvcd = array('rvcd' => 'D');
		$this->M_InData->upd_rvcd($rvcd,$id);
		redirect (site_url('alldata'));
	}
}