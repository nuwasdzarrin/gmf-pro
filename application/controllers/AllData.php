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
     	$this->template->load('v_static','V_AllData', $data);
     }

     //load edit all data page
     public function edAllData() {
        $id = $this->input->post('id');
        $change_no = $this->input->post('change_no');
        $data['all'] = $this->M_AllData->edt($id);
        $data['change_no'] = $change_no;
        $this->template->load('v_static','V_edAllData', $data);
     }

     //update all data
     public function upAllData() {
        $id_change = $this->input->post('id_change');
        $sta = array(
            'engineer' => $this->input->post('engineer'),
            'rev_no' => $this->input->post('rev_no'),
            'send_ga' => $this->input->post('send_ga'),
            'recei_ga' => $this->input->post('recei_ga'),
            'att' => $this->input->post('att'),
        );
        $this->M_AllData->upd($sta, $id_change);
        redirect (site_url('alldata'));
     }

     //load edit link all data page
     public function edLink() {
        $id = $this->uri->segment(4);
        $change_no = $this->uri->segment(3);
        $data['link'] = $id;
        $data['change_no'] = $change_no;
        $this->template->load('v_static','V_edLink', $data);
     }
     //upload link all data
     public function upLink() {
        $id_change = $this->input->post('id_change');
        $sta = array(
            'att' => $this->input->post('att'),
        );
        $this->M_AllData->upd($sta, $id_change);
        redirect (site_url('alldata'));
     }
 }