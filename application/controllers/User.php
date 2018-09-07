<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	function __construct(){
         parent::__construct();
         $this->simple_login->cek_login();
          $this->simple_login->cek_role();
         $this->load->model('M_account');
     }
	public function index()
	{
		$data['user'] = $this->M_account->alluser();
		$this->template->load('v_static','V_User',$data);
	}

	public function loAddUser()
	{
		$this->template->load('v_static','V_addUser');
	}

	function delet(){
		$cond = array('id_user' => $this->input->post('id'));
        $this->m_account->delete($cond);
        redirect (site_url('user'));
     }
}
