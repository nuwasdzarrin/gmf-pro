<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_AllData extends CI_Model {
	
	var $tbl = 'dt_change';
	var $tabel = 'dt_control';

	public function AllData(){
		$data=$this->db->select('dt_change.id, item_no, ac_type, eff_date, rvcd, status,
						 code_pla, idd, engineer, rev_no, send_ga, recei_ga, att')
						->from($this->tbl)
						->join('cod_plane', 'cod_plane.name_pla = dt_change.ac_type')
						->join('dt_control', 'dt_control.token = dt_change.token')
						->get();
		return $data;
	}

	public function arsip(){
		$data=$this->db->select('dt_change.id, dt_change.token, item_no, ac_type, eff_date, rvcd,
						 status, code_pla, idd, engineer, rev_no, send_ga, recei_ga, att')
						->from($this->tbl)
						->join('cod_plane', 'cod_plane.name_pla = dt_change.ac_type')
						->join('dt_control', 'dt_control.token = dt_change.token')
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
		$where ="idd=$id";
		$data = $this->db->get_where($this->tabel, $where)->row();
		return $data;
	}

	function upd($data,$idd)	//update link all data khusus admin
	{
		$this->db->where('idd',$idd)->update($this->tabel, $data);
		return TRUE;
	}

	function addItemNo($data,$token)	//update No_Item all data khusus admin
	{
		$this->db->where('token',$token)->update($this->tbl, $data);
		return TRUE;
	}

	function upd_rvcd($rvcd,$id)	//Update Rvcd dengan Del or D
	{
		$this->db->where('id',$id)->update($this->tbl, $rvcd);
		return TRUE;
	}
}

