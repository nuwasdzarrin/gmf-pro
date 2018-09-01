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
      $result = $this->M_SgReport->statis($id); //akses Statis Data to header table
        $plane = $result->ac_type;
      $data['ac_cod'] = $this->M_SgReport->acCode($plane); //akses Function A/C Code
      $data['one'] = $result;
      $data['cha'] = $this->M_SgReport->mSgl($id,$item_no); //akses Function Single Data
      $this->load->view('V_SglRpt', $data);
    }

    public function InEd() {  //fungsi load report from edit and input
      $item_no = $this->uri->segment(3);
      $result = $this->M_SgReport->sInEd($item_no); //akses Statis Data to header table
        $plane = $result->ac_type;
      $data['ac_cod'] = $this->M_SgReport->acCode($plane); //akses Function A/C Code
      $data['one'] = $result;
      $data['cha'] = $this->M_SgReport->mInEd($item_no); //akses Function Single Data
      $this->load->view('V_SglRpt', $data);
    }

    public function laporan_pdf(){
      
      $id = $this->uri->segment(4);
      $item_no = $this->uri->segment(3);
      $result = $this->M_SgReport->statis($id); //akses Statis Data to header table
        $plane = $result->ac_type;
      $data['ac_cod'] = $this->M_SgReport->acCode($plane); //akses Function A/C Code
      $data['one'] = $result;
      $data['cha'] = $this->M_SgReport->mSgl($id,$item_no); //akses Function Single Data
      
      $this->load->view('V_Download', $data);
        
        // Get output html
        $html = $this->output->get_output();
        
        // Load pdf library
        $this->load->library('pdf');
        
        // Load HTML content
        $this->dompdf->loadHtml($html);
        
        // (Optional) Setup the paper size and orientation
        $this->dompdf->setPaper('A4', 'landscape');
        
        // Render the HTML as PDF
        $this->dompdf->render();
        
        // Output the generated PDF (1 = download and 0 = preview)
        $this->dompdf->stream("welcome.pdf", array("Attachment"=>0));

    }
}