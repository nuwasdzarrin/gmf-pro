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
      $item_no = $this->uri->segment(3);
      $id = $this->uri->segment(4);
      $result = $this->M_SgReport->statis($id); //akses Statis Data to header table
        $plane = $result->ac_type;
      $data['ac_cod'] = $this->M_SgReport->acCode($plane); //akses Function A/C Code
      $data['one'] = $result;
      $data['cha'] = $this->M_SgReport->mSgl($id,$item_no); //akses Function Single Data
      $this->load->view('V_SglRpt', $data);
    }

    public function InEd() {  //fungsi load report from edit and input
      $item_no = $this->uri->segment(3);
      //$id = $this->uri->segment(4);
      $result = $this->M_SgReport->sInEd($item_no); //akses Statis Data to header table
        $plane = $result->ac_type;
      $data['ac_cod'] = $this->M_SgReport->acCode($plane); //akses Function A/C Code
      $data['one'] = $result;
      $data['cha'] = $this->M_SgReport->mInEd($item_no); //akses Function Single Data
      $this->load->view('V_SglRpt', $data);
    }
}