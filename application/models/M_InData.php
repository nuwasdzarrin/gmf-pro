<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_InData extends CI_Model{
	var $tbl='dt_change';
	function input($data)	//input data baru
	{
		$this->db->insert($this->tbl, $data);
		return TRUE;
	}

	function update($data,$last_id)	//revisi data dengan baris baru
	{
		$this->db->where('id',$last_id)->update($this->tbl, $data);
		return TRUE;
	}

	function upd_rvcd($rvcd,$id)	//Update Rvcd dengan Del or D
	{
		$this->db->where('id',$id)->update($this->tbl, $rvcd);
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

/*	function lo_edit($id)
	{
		$data=$this->db->select('id, item_no, ac_type, eff_date, rvcd, sta')
						->from($this->tbl)
						->where('id',$id)
						->get()->row();
		return $data;
	}*/
}