<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_InData extends CI_Model{
	var $tbl='dt_change';
	function input($data)	//input data baru
	{
		$this->db->insert($this->tbl, $data);
		return TRUE;
	}

	function update($data,$token)	//belum dipakai
	{
		$this->db->where('token',$token)->update($this->tbl, $data);
		return TRUE;
	}

	function update_form($data,$id)
	{
		$this->db->where('id',$id)->update($this->tbl, $data);
		return TRUE;
	}

	public function lo_edData($item_no){	//loading form edit data
		$data=$this->db->select('*')
						->from($this->tbl)
						->where('item_no',$item_no)
						->order_by('id','desc')
						->limit(1)
						->get()->row();
		return $data;
	}

	public function lo_edform($id){	//loading form edit data
		$data=$this->db->select('*,cod_plane.code_pla')
						->from($this->tbl)
						->where('dt_change.id',$id)
						->join('cod_plane', 'dt_change.ac_type=cod_plane.name_pla')
						->get()->row();
		return $data;
	}

	function loadplane(){
		return $this->db->get('cod_plane');
	}

	function latestnumb($ac_type) {
		return $this->db->select('numb')->from('dt_change')->where('ac_type=',$ac_type)
		->order_by('numb','desc')->limit(1)->get()->row();//numb terakhir
	}	
}