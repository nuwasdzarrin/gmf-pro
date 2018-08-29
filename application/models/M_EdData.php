<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_EdData extends CI_Model {
	
	var $tbl = 'dt_change';

	public function lo_edData($item_no){
		$data=$this->db->select('*')
						->from($this->tbl)
						->where('item_no',$item_no)
						->order_by('id','desc')
						->limit(1)
						->get()->row();
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

