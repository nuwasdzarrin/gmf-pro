<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AllData extends CI_Controller {
 function __construct(){
   parent::__construct();
   $this->simple_login->cek_login();
   $this->simple_login->cek_role();
   $this->load->model('M_AllData');
 }

     //Load All Table Page
 public function index() {
  $data['alldt'] = $this->M_AllData->arsip();
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
        $idd = $this->input->post('idd');
        $sta = array(
          'engineer' => $this->input->post('engineer'),
          'rev_no' => $this->input->post('rev_no'),
          'send_ga' => $this->input->post('send_ga'),
          'recei_ga' => $this->input->post('recei_ga'),
          'att' => $this->input->post('att'),
          'status' => $this->input->post('status'),
        );
        $this->M_AllData->upd($sta, $idd);
        redirect (site_url('alldata'));
      }

     //update link all data
      public function upLink() {
        $idd = $this->input->post('idd');

        $this->load->library('upload');
        $config['upload_path'] = './assets/pdf/'; //Folder untuk menyimpan hasil upload
        $config['allowed_types'] = 'pdf'; //type yang dapat diakses bisa anda sesuaikan
        $this->upload->initialize($config);
        if ($this->upload->do_upload('pdf')) {
           $file_name = str_replace(" ", "_", $_FILES["pdf"]["name"]);
           $link = array('att' => $file_name);
           $this->M_AllData->upd($link, $idd);
           redirect (site_url('alldata'));
       } else {
          echo '<script>alert("unsuccessful file upload. Back to All Data");</script>';
          redirect (site_url('alldata'),'refresh');
      }

    }

    function addItemNo() {
      $id = $this->input->post('id');
      $item_no = $this->input->post('item_no');
      $cek = $this->db->select('item_no')->from('dt_change')
      ->where('item_no',$item_no)->get()->row();
      if (!$cek->item_no) {
        $item = array(
          'item_no' => $item_no,
        );
        $this->M_AllData->addItemNo($item, $id);
        redirect (site_url('alldata'));
      } else {
        echo '<script>alert("Camp Item Number Are Available. Back to All Data");</script>';
        redirect (site_url('alldata'),'refresh');
      }

    }

    public function del() {     //update RVCD jadi Del or D
      $id = $this->input->post('id');

      $rvcd = array('rvcd' => 'D');
      $this->M_AllData->upd_rvcd($rvcd,$id);
      redirect (site_url('alldata'));
    }
  }