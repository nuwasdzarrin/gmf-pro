<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_SgReport extends CI_Model {
	
	var $tbl = 'dt_change'; //dt_change table
	var $pl_cod = 'cod_plane'; //cod_plane table
	public function mSgl($id,$item){	//model akses report from all_view
		$cond = "item_no=$item AND id<=$id"; //kondisi where
		$jml = $this->db->get_where($this->tbl, $cond)->num_rows();//jumlah maksimal data terecord
		if ($jml==1) {	//jika data hanya 1
			$sgdata = $this->db->select('*')
							->from($this->tbl)	
							->where('item_no',$item)
							->limit(1)
							->get();
		}elseif ($jml>1) {
			$sgdata = $this->db->select('*')
							->from($this->tbl)	//jika data >1
							->where('item_no',$item)
							->offset($jml-2)
							->limit(2)
							->get();
		}
		return $sgdata;
	}

	public function statis($id){	//fungsi header tabel report from all_view
		$one = $this->db->select('id,item_no,ac_type,reason,support_doc')
							->from($this->tbl)	
							->where('id',$id)	//jika data hanya 1
							->get()->row();
		return $one;
	}

	public function mInEd($item){	//model akses report from input and edit
		$cond = "item_no=$item"; //kondisi where
		$jml = $this->db->get_where($this->tbl, $cond)->num_rows();//jumlah maksimal data terecord
		if ($jml==1) {	//jika data hanya 1
			$sgdata = $this->db->select('*')
							->from($this->tbl)	
							->where('item_no',$item)
							->limit(1)	
							->get();
		}elseif ($jml>1) {
			$sgdata = $this->db->select('*')
							->from($this->tbl)	//jika data >1
							->where('item_no',$item)
							->offset($jml-2)
							->limit(2)
							->get();
		}
		return $sgdata;
	}

	public function sInEd($item_no){	//fungsi header tabel report from input&edit
		$one = $this->db->select('id,item_no,ac_type,reason,support_doc')
							->from($this->tbl)	
							->where('item_no',$item_no)
							->order_by ('id','desc')
							->limit (1) //jika data hanya 1
							->get()
							->row();
		return $one;
	}

	public function acCode($pla){	//fungsi header untuk load AC code dari AC type
		$cdpla = $this->db->select('code_pla')
							->from($this->pl_cod)
							->where('name_pla',$pla)
							->get()
							->row();
		return $cdpla;
	}
}
