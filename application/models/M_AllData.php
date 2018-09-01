<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_AllData extends CI_Model {
	
	var $tbl = 'dt_change';
	var $tabel = 'dt_control';

	public function AllData(){
		$data=$this->db->select('dt_change.id, item_no, ac_type, eff_date, rvcd, sta,
						 code_pla, engineer, rev_no, send_ga, recei_ga, att')
						->from($this->tbl)
						->join('cod_plane', 'cod_plane.name_pla = dt_change.ac_type')
						->join('dt_control', 'dt_control.id_change = dt_change.id')
						->get();
		return $data;
	}

	function inp($data)	//input data baru from search n input
	{
		$this->db->insert($this->tabel, $data);
		return TRUE;
	}

	function edt($id)	//load edit_page all data khusus admin
	{
		$where ="id_change=$id";
		$data = $this->db->get_where($this->tabel, $where)->row();
		return $data;
	}

	function upd($data,$id_change)	//update all data khusus admin
	{
		$this->db->where('id_change',$id_change)->update($this->tabel, $data);
		return TRUE;
	}
}

