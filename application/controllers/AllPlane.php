<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AllPlane extends CI_Controller {
	function __construct(){
         parent::__construct();
         $this->simple_login->cek_login();
          $this->simple_login->cek_admin();
         $this->load->model('M_plane');
     }
	public function index()
	{
		$data['plane'] = $this->M_plane->allplane();
		$this->template->load('v_static','v_allplane',$data);
	}

	public function insert()
	{
		$in = array(
			'code_pla' => $this->input->post('code'),
			'name_pla' => $this->input->post('tipe'),
		);
        $this->M_plane->insert($in);
        redirect (site_url('allplane'));
	}

	function delete(){
		$cond = array('id_pla' => $this->input->post('id'));
        $this->M_plane->delete($cond);
        redirect (site_url('allplane'));
     }

     function update(){
		$edt = array(
			'code_pla' => $this->input->post('code'),
			'name_pla' => $this->input->post('tipe'),
		);
        $this->M_plane->update($edt,$this->input->post('id'));
        redirect (site_url('allplane'));
     }
}
