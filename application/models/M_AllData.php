<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_AllData extends CI_Model {
	
	var $tbl = 'dt_change';

	public function AllData(){
		$data=$this->db->select('dt_change.id, item_no, ac_type, eff_date, rvcd, sta, code_pla')
						->from($this->tbl)
						->join('cod_plane', 'cod_plane.name_pla = dt_change.ac_type')
						->get();
		return $data;
	}
	
	/*function addpage($data){

       $this->db->insert($this->tabel, $data);
       return TRUE;
    }
    function addproduk($data){

       $this->db->insert($this->produk, $data);
       return TRUE;
    }
    public function GetRumah($id){
    	$refer=$this->db->select('*')
    					->from('rumahmakan')
    					->where('id',$id)
						->get();
		return $refer;

    }
    public function GetProduk($id){
    	
		$blog=$this->db->select('*')
						->from('produk')
						->where('id',$id)
						//->order_by('no','desc')
						->get();
		return $blog;
	}
	public function search($pencarian){
    	
		$blog=$this->db->select('*')
							->from('produk')
							->where('harga<=',$pencarian)
							->order_by('harga','asc')
							->get();
		return $blog;
	}*/
}

