<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SgReport extends CI_Controller {
 function __construct(){
   parent::__construct();
   $this->simple_login->cek_login();
   $this->load->model('M_SgReport');

 }

     //Load one or two data latest
   public function single() { //fungsi load report from all data
    $id = $this->input->post('id');
    $item_no = $this->input->post('item_no');
    
    if (!$item_no) {
      echo '<script>alert("Camp Item Number Not Available. Document cant be printed");</script>';
        redirect (site_url('alldata'.$item_no),'refresh');  //ke form revisi
    } else {
      $cond = "item_no=".$item_no. " AND id<=".$id; //kondisi where
      $jml = $this->db->get_where('dt_change', $cond)->num_rows();//jumlah maksimal data terecord
      $result = $this->M_SgReport->statis($id); //akses Statis Data to header table
      $plane = $result->ac_type;
      $data['ac_cod'] = $this->M_SgReport->acCode($plane); //akses Function A/C Code
      $data['one'] = $result;
      $data['jml'] = $jml;
      $data['cha'] = $this->M_SgReport->mSgl($jml,$item_no); //akses 2/1 Content
      $this->load->view('V_SglRpt', $data);
    }
  }

    public function InEd() {  //fungsi load report from edit and input
      $item_no = $this->uri->segment(3);
      $cond = "item_no=".$item_no; //kondisi where
      $jml = $this->db->get_where('dt_change', $cond)->num_rows();//jumlah maksimal data terecord
      $result = $this->M_SgReport->sInEd($item_no); //akses Statis Data to header table
      $plane = $result->ac_type;
      $data['ac_cod'] = $this->M_SgReport->acCode($plane); //akses Function A/C Code
      $data['one'] = $result;
      $data['jml'] = $jml;
      $data['cha'] = $this->M_SgReport->mInEd($jml,$item_no); //akses 2/1 content
      $this->load->view('V_SglRpt', $data);
    }

    
  }