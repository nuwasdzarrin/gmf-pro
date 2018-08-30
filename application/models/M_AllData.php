<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_AllData extends CI_Model {
	
	var $tbl = 'dt_change';

	public function AllData(){
		$data=$this->db->select('dt_change.id, item_no, ac_type, eff_date, rvcd, sta,
						 code_pla, engineer')
						->from($this->tbl)
						->join('cod_plane', 'cod_plane.name_pla = dt_change.ac_type')
						->get();
		return $data;
	}
}

