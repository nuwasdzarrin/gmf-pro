<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_InData extends CI_Model{
	var $tbl='dt_change';
	function input($data)
	{
		$this->db->insert($this->tbl, $data);
		return TRUE;
	}

	function lo_edit($id)
	{
		$data=$this->db->select('id, item_no, ac_type, eff_date, rvcd, sta')
						->from($this->tbl)
						->where('id',$id)
						->get()->row();
		return $data;
	}
}